<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'a, abbr, acronym, address, applet, big, blockquote, caption,
		cite, code, dd, del, dfn, div, dl, dt, em, fieldset, font,
		form, h1, h2, h3, h4, h5, h6, html, iframe, ins, kbd,
		label, legend, li, object, ol, p, pre, q, s, samp,
		small, span, strike, strong, sub, sup, table,
		tbody, td, tfoot, th, thead, tr, tt, ul, var',
		array(
			array( 'property' => 'font-family', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Gilda Display", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font', 'value' => '12px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.site-title, .site-title a',
		array(
			array( 'property' => 'font-family', 'value' => '"Gilda Display", serif' ),
			array( 'property' => 'font-size', 'value' => '24px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.featured h2:after',
		array(
			array( 'property' => 'font-family', 'value' => '"Genericons"' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.navigation-main a',
		array(
			array( 'property' => 'font-family', 'value' => '"Gilda Display", serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#site-navigation h1.menu-toggle:before',
		array(
			array( 'property' => 'font-family', 'value' => '"Genericons"' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.hotels-listing.hotels_testimonial .entry-content:before',
		array(
			array( 'property' => 'font-family', 'value' => '"Genericons"' ),
			array( 'property' => 'font-size', 'value' => '30px' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.hotels-listing.hotels_testimonial .entry-content:after',
		array(
			array( 'property' => 'font-family', 'value' => '"Genericons"' ),
			array( 'property' => 'font-size', 'value' => '30px' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#masthead .widget_reservations .widget-title:after,
		#masthead .widget_reservations .widgettitle:after',
		array(
			array( 'property' => 'font-family', 'value' => '"Genericons"' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.widget_reservations .contact-form input[type="date"]:after',
		array(
			array( 'property' => 'font-family', 'value' => '"Genericons"' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.social-links a:before',
		array(
			array( 'property' => 'font-family', 'value' => '"Genericons"' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	return $category_rules;
} );
