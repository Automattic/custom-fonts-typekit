( function( api ) {
	if ( ! api ) {
		return;
	}

	var loggedIn,
		loadedFontIds = [];

	// This will be called first in the context of the Customizer sidebar and
	// second in the context of the preview window iframe.
	function addFontToPage( font, text ) {
		// No need to do anything if this is the sidebar, because we will be using
		// images. We can assume that if specific characters are passed in, we are
		// in the sidebar.
		if ( text ) {
			return;
		}
		enableTypekitPreview();
		if ( ! loggedIn ) {
			return;
		}
		if ( ~ loadedFontIds.indexOf( font.id ) ) {
			return;
		}
		loadedFontIds.push( font.id );
		// TODO: we may need to do something different here for custom domains?
		// TODO: remove all these debug statements
		console.log( 'loading typekit font', font );
		window.TypekitPreview.load([{
			'id': font.id,
			'variations': font.fvds,
			'css_name': font.cssName,
			'subset': 'all'
		}], {
			loading: function() {
				console.log('typekit font loading...');
			},
			active: function() {
				console.log('typekit font', font.id, 'is active');
			},
			inactive: function() {
				console.log('failed to load typekit font', font.id);
			}
		});
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

		imageDir: window._JetpackFontsTypekitOptions.imageDir,
		slotHeight: 128,

		calculateClosestFvd: function( availableFvds, currentFvd) {
			var shownFvd = currentFvd;
			var variant = shownFvd.match(/[in]/)[0];
			var weight = parseInt( shownFvd.match(/\d/)[0], 1 );
			var valence = -1;

			// iterate 16 times, this is the highest # of iterations necessary to cover 1...9
			for ( var x=1; x<18; x++ ) {
				if ( availableFvds.indexOf( shownFvd ) > -1 ) {
					return shownFvd;
				}
				weight = weight + ( valence * x );
				shownFvd = variant + weight.toString();
				valence = valence * -1;
			}

			// Reassign font-variant and recalculate
			if ( variant === 'i' ) {
				variant = 'n';
			} else {
				variant = 'i';
			}

			weight = parseInt( currentFvd.match(/\d/)[0], 1 );
			for ( var y=0; y<18; y++ ) {
				if ( availableFvds.indexOf( shownFvd ) > -1 ) {
					return shownFvd;
				}
				weight = weight + ( valence * x );
				shownFvd = variant + weight.toString();
				valence = valence * -1;
			}

			return false;
		},

		calculateBackgroundPosition: function( slotPosition, isActive ) {
			var position = 8;
			if ( slotPosition > -1 ) {
				position = position - ( this.slotHeight * slotPosition );
			}
			if ( isActive ) {
				position = position - this.slotHeight / 2;
			}
			return position;
		},

		calculateBackgroundHeight: function( slots ) {
			return slots * this.slotHeight - 32;
		},

		render: function() {
			var url = this.imageDir + '/2x' + '/font_' + this.model.get( 'id' ) + '.png';
			this.$el.css( 'backgroundImage', 'url(' + url + ')' );
			var closestFvd;
			if ( this.model.get( 'currentFvd' ) ) {
				closestFvd = this.calculateClosestFvd( this.model.get( 'fvds' ), this.model.get( 'currentFvd' ) );
			} else if ( this.currentFont && this.currentFont.get( 'currentFvd' ) ) {
				closestFvd = this.calculateClosestFvd( this.model.get( 'fvds' ), this.currentFont.get( 'currentFvd' ) );
			}
			this.$el.attr( 'data-fvd', closestFvd || 'n4' );

			var position = this.calculateBackgroundPosition(
				this.model.get( 'fvds' ).indexOf( closestFvd ),
				this.currentFont && this.currentFont.get( 'id' ) === this.model.get( 'id' )
			);
			this.$el.css( 'background-position', '0px ' + position.toString() + 'px' );

			var height = this.calculateBackgroundHeight( this.model.get( 'fvds').length );
			this.$el.css( 'background-size', 'auto ' + height.toString() + 'px' );

			addFontToPage( this.model.toJSON(), this.model.get( 'id' ) );
			return this;
		}
	});

	TypekitProviderView.addFontToPage = addFontToPage;

	api.JetpackFonts.providerViews.typekit = TypekitProviderView;

	return TypekitProviderView;
})( window.wp ? window.wp.customize : null );
