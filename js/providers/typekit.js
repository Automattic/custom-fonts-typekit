/* globals jQuery, TypekitPreview */
( function( api ) {
	if ( ! api ) {
		return;
	}

	var $ = jQuery,
		loggedIn = false,
		loadedFontIds = [],
		opts = window._JetpackFontsTypekitOptions,
		isWebkit = /webkit/.test( window.navigator.userAgent.toLowerCase() ),
		iframeHelper,
		isShimLoaded = false,
		toLoadInShim = [],
		$html = $( 'html' ),
		timeout,
		loadingClass = 'wf-loading',
		activeClass = 'wf-active',
		dataType = 'TypekitPreviewShim';

	// This will be called in the context of the preview window iframe.
	function addFontToPreview( font ) {
		if ( ~ loadedFontIds.indexOf( font.id ) ) {
			return;
		}

		font = formatFont( font );

		if ( isWebkit ) {
			loadViaShim( font );
		} else {
			loadFont( font );
		}
	}

	// get ready for previewing, either with `TypekitPreview` or the Webkit Shim
	if ( ! opts.isAdmin ) {
		if ( isWebkit ) {
			setupWebKit();
		} else {
			enableTypekitPreview();
		}
	}

	function setupWebKit() {
		var url = opts.webKitShim + '?' + $.param( opts.authentication );
		iframeHelper = $( '<iframe id="webkit-iframe-shim" src="' + url + '" />' )
			.css( {width: 0, height: 0} ).appendTo( 'body' ).get( 0 );

		$( iframeHelper ).load( function(){
			isShimLoaded = true;
			// clear the loading queue, if any
			if ( toLoadInShim.length ) {
				loadViaShim( toLoadInShim );
				toLoadInShim = [];
			}
		});

		$( window ).on( 'message', function( ev ) {
			ev = ev.originalEvent;
			if ( ! /wordpress\.com$/.test( ev.origin ) || ev.data[0] !== '{' ) {
				return;
			}
			var data = JSON.parse( ev.data );
			if ( data.type !== dataType ) {
				return;
			}

			clearTimeout( timeout );

			if ( data.status === 'active' ) {
				addFontStylesheet( data );
			}
		});
	}

	function addFontStylesheet( data ) {
		// remove loading class, add loaded class
		$html.removeClass( loadingClass ).addClass( activeClass );
		$( '<link />', { rel: 'stylesheet', href: data.styleURL } ).appendTo( 'head' );
		$.each( data.fonts, function( i,font ){
			loadedFontIds.push( font.id );
		});
	}

	/**
	 * Accepts a single `font` or an array of `font`s
	 */
	function loadViaShim( font ) {
		// queue fonts if the shim hasn't loaded yet
		if ( ! isShimLoaded ) {
			toLoadInShim.push( font );
			return;
		}

		// fake the font event
		$html.addClass( loadingClass );
		// set a timeout of 5 secs to ensure we don't leave the wf-loading class forever if something goes squirrely
		clearTimeout( timeout );
		timeout = setTimeout( function() {
			$html.removeClass( loadingClass );
		}, 5000 );

		// Support multiple fonts. We pass in the whole toLoadInShim array when clearing it
		// Otherwise we get a race condition on the first font if there are multiple.
		if ( ! $.isArray( font ) ) {
			font = [ font ];
		}
		iframeHelper.contentWindow.postMessage( JSON.stringify( { type: dataType, fonts: font } ), '*' );
	}

	function loadFont( font ) {
		TypekitPreview.load( [ font ], {
			active: function() {
				loadedFontIds.push( font.id );
			}
		});
	}

	function formatFont( font ) {
		return {
			'id': font.id,
			'variations': font.fvds,
			'css_name': font.cssName,
			'subset': 'all'
		};
	}

	function enableTypekitPreview() {
		if ( loggedIn ) {
			return;
		}
		if ( ! window.TypekitPreview || ! window._JetpackFontsTypekitOptions ) {
			return;
		}
		var data = window._JetpackFontsTypekitOptions;
		window.TypekitPreview.setup( data.authentication );
		loggedIn = true;
	}

	var TypekitProviderView = api.JetpackFonts.ProviderView.extend({

		imageDir: opts.imageDir,
		slotHeight: 128,
		preloaded: false,

		mouseenter: function() {
			this.setImageFile( true );
		},

		mouseleave: function () {
			this.setImageFile();
		},

		calculateBackgroundPosition: function( isActive ) {
			var position = 8;
			if ( isActive ) {
				position = position - this.slotHeight / 2;
			}
			return position;
		},

		calculateBackgroundHeight: function( fvds, oldFvds ) {
			var slots = oldFvds || fvds;
			return slots * this.slotHeight - 32;
		},

		findImageFile: function( hover ) {
			var prefix = hover ? 'light' : 'dark';
			var id = this.model.get( 'id' );
			var hiRes = ( window.devicePixelRatio && window.devicePixelRatio >= 1.25 ) ? '2x': '1x';
			var dir = prefix + '-' + hiRes;
			return this.imageDir + dir + '/font_' + id + '.png';
		},

		setImageFile: function( hover ) {
			this.$el.css( 'backgroundImage', 'url(' + this.findImageFile( hover ) + ')' );
		},

		maybePreloadImage: function() {
			if ( this.preloaded ) {
				return;
			}
			var image = new Image();
			image.src = this.findImageFile();
			this.preloaded = true;
		},

		addLogo: function() {
			if ( this.$el.find( '.jetpack-fonts__typekit-option-logo' ).length > 0 ) {
				return;
			}
			this.$el.append( '<div class="jetpack-fonts__typekit-option-logo" />' );
		},

		render: function() {
			this.$el.addClass( 'jetpack-fonts__typekit-option' );
			this.addLogo();
			this.maybePreloadImage();
			this.setImageFile();

			var position = this.calculateBackgroundPosition(
				this.currentFont && this.currentFont.get( 'id' ) === this.model.get( 'id' )
			);
			this.$el.css( 'background-position', '0px ' + position.toString() + 'px' );

			var height = this.calculateBackgroundHeight( this.model.get( 'fvds' ).length, this.model.get( 'oldFvdCount' ) );
			this.$el.css( 'background-size', 'auto ' + height.toString() + 'px' );

			return this;
		}
	});

	TypekitProviderView.addFontToPreview = addFontToPreview;

	api.JetpackFonts.providerViews.typekit = TypekitProviderView;

	if ( opts.isAdmin ) {
		api.bind( 'ready', addTypekitBadge );
	}

	function addTypekitBadge() {
		var control = api.control('jetpack_fonts'),
			badge;
		if ( ! control ) {
			return;
		}
		badge = $( '<a />', {
			href: opts.badge.url,
			text: opts.badge.text,
			'class': 'jetpack-fonts__typekit-credit'
		} );
		control.container.append( badge );
	}

	function hasVerticalScrollbar( $el ) {
		return $el.length && $el[0].scrollWidth !== $el.innerWidth();
	}

	function handleVerticalScrollbars() {
		var $me = $( this ),
			$section, $select;

		// bail early if we closed
		if ( ! $me.hasClass( 'jetpack-fonts__current-font--open') ) {
			return;
		}

		$section = $me.closest( '.accordion-section-content' );
		$select =  $me.next();
		if ( hasVerticalScrollbar( $section ) && hasVerticalScrollbar( $select ) ) {
			$select.addClass( 'jetpack_fonts__constrained-space' );
		} else {
			$select.removeClass( 'jetpack_fonts__constrained-space' );
		}
	}

	opts.isAdmin && $(document).ready( function(){
		$( '.jetpack-fonts__current-font' ).on( 'click', handleVerticalScrollbars );
	});

	return TypekitProviderView;
})( window.wp ? window.wp.customize : null );
