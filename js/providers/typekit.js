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
			'css_name': font.name,
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
		if ( ! window.TypekitPreview || ! window._JetpackFontsTypekitAuth ) {
			return;
		}
		var data = window._JetpackFontsTypekitAuth;
		window.TypekitPreview.setup( data );
		loggedIn = true;
	}

	var TypekitProviderView = api.JetpackFonts.ProviderView.extend({
		render: function() {
			// Even though this will be done with images, leave html here as a fallback
			this.$el.html( this.model.get( 'name' ) );

			// TODO: add image for font

			this.$el.css( 'font-family', '"' + this.model.get( 'name' ) + '"' );

			if ( this.currentFont && this.currentFont.get( 'name' ) === this.model.get( 'name' ) ) {
				this.$el.addClass( 'active' );
			} else {
				this.$el.removeClass( 'active' );
			}

			addFontToPage( this.model.toJSON(), this.model.get( 'id' ) );
			return this;
		}
	});

	TypekitProviderView.addFontToPage = addFontToPage;

	api.JetpackFonts.providerViews.typekit = TypekitProviderView;

	return TypekitProviderView;
})( window.wp ? window.wp.customize : null );
