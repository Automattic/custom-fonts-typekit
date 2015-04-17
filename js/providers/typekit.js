( function( api ) {
	if ( ! api ) {
		return;
	}

	var loggedIn,
		loadedFontIds = [];

	// This will be called first in the context of the Customizer sidebar and
	// second in the context of the preview window iframe.
	function addFontToPage( font ) {
		enableTypekitPreview();
		if ( ~ loadedFontIds.indexOf( font.id ) ) {
			return;
		}
		loadedFontIds.push( font.id );
		// TODO: add font using TypekitPreview
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
