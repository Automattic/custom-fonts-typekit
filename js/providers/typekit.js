/* globals jQuery, TypekitPreview, _ */
( function( api ) {
	if ( ! api ) {
		return;
	}

	var $ = jQuery,
		loggedIn = false,
		loadedFontIds = [],
		opts = window._JetpackFontsTypekitOptions,
		$html = $( 'html' ),
		timeout,
		loadingClass = 'wf-loading',
		activeClass = 'wf-active',
		toLoadQueue = [],
		loadQueuedFontsThrottled;

	// This will be called in the context of the preview window iframe.
	function addFontToPreview( font ) {
		if ( ~ loadedFontIds.indexOf( font.id ) ) {
			return;
		}

		font = formatFont( font );
		loadFont( font );
	}



	// This is called in the admin to render the menu item
	function addFontToControls( font ) {
		if ( ~ loadedFontIds.indexOf( font.id ) ) {
			return;
		}
		var primer = getPrimer( font.displayName );
		font = formatFont( font );
		// technically they're not loaded yet but this prevents dupes
		loadedFontIds.push( font.id );
		// loads [A-z] or [A-z0-9] if needed, no OpenType features
		font.primer = primer;
		// we only want the closest weight to n4
		font.variations = [ pickFvd( font.variations ) ];
		// queue it and call it
		toLoadQueue.push( font );
		// once we hit this many fonts, we have to empty the queue
		if ( toLoadQueue.length >= 20 ) {
			loadFontsFromQueue();
		} else {
			loadQueuedFontsThrottled();
		}

	}

	function getPrimer( name ) {
		if ( /[0-9]/.test( name ) ) {
			return 'd6e278f920ed85d9792cfa31ee5cd5293abe11cd4dbd3c56f22b3a7112a92e0e';
		}
		return '9f562d6ca39adae019ef00367c3f3deae3c8627f22e3b025ba425fbc2aac6431';
	}

	function loadFontsFromQueue() {
		var queue;
		// first let's see if we have a queue
		if ( ! toLoadQueue.length ) {
			return;
		}
		// take control
		queue = toLoadQueue;
		toLoadQueue = [];

		// Load 'em
		TypekitPreview.load( queue, { classes: false, events: false } );
	}

	loadQueuedFontsThrottled = _.throttle( loadFontsFromQueue, 500 );

	function pickFvd( variations ) {
		// algorithm here: https://developer.mozilla.org/en/docs/Web/CSS/font-weight#Fallback
		// first try n4
		var i = 4;
		if ( _.contains( variations, 'n' + i ) ) {
			return 'n' + i;
		}
		// next we try n5
		i = 5;
		if ( _.contains( variations, 'n' + i ) ) {
			return 'n' + i;
		}
		// now we go lighter, to 3-1
		for ( i = 3; i >= 1; i-- ) {
			if ( _.contains( variations, 'n' + i ) ) {
				return 'n' + i;
			}
		}
		// now darker, 6-9
		for ( i = 6; i <= 9; i++ ) {
			if ( _.contains( variations, 'n' + i ) ) {
				return 'n' + i;
			}
		}
		// I guess just return n4 anyway
		return 'n4';
	}

	// get ready for previewing
	enableTypekitPreview();

	function addFontStylesheet( data ) {
		// remove loading class, add loaded class
		$html.removeClass( loadingClass ).addClass( activeClass );
		// add styles
		if ( data.styleURL ) {
			$( '<link />', { rel: 'stylesheet', href: data.styleURL } ).appendTo( 'head' );
		}
		if ( data.styleCss ) {
			$( '<style type="text/css">' + data.styleCss + '</style>' ).appendTo( 'head' );
		}
		// mark styles as loaded
		$.each( data.fonts, function( i,font ) {
			loadedFontIds.push( font.id );
		} );
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
		addLogo: function() {
			if ( this.$el.find( '.jetpack-fonts__typekit-option-logo' ).length > 0 ) {
				return;
			}
			this.$el.append( '<div class="jetpack-fonts__typekit-option-logo" />' );
		},

		render: function() {
			addFontToControls( this.model.toJSON() );
			this.$el.text( this.getName() ).addClass( 'jetpack-fonts__typekit-option' );
			this.addLogo();
			this.$el.css( 'font-family', '"' + this.model.get( 'cssName' ) + '"' );
			if ( this.currentFont && this.currentFont.get( 'id' ) === this.model.get( 'id' ) ) {
				this.$el.addClass( 'active' );
			} else {
				this.$el.removeClass( 'active' );
			}
			return this;
		},

		// to match up with previous images. "Web Pro" is ugly.
		getName: function() {
			return this.model.get( 'displayName' ).replace( /Web Pro$/, '' );
		}
	});

	TypekitProviderView.addFontToPreview = addFontToPreview;

	api.JetpackFonts.providerViews.typekit = TypekitProviderView;

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
