(function($, wp){
	var api = wp.customize;

	api.bind( 'saved', function(){
		if ( api( 'typekit_advanced_mode' ).get() ) {
			return;
		}

		// ok, they disabled. Let's redirect!
		var location = window.location.href.split('?')[0];
		window.location = location + '?autofocus[section]=jetpack_fonts';
	});
})(jQuery, this.wp);