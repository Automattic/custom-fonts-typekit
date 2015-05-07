<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		td,
		th',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page_title',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '24px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page_title a:link,
		.page_title a:visited',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-date',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-date a:active,
		.post-date a:hover,
		.post-date a:link,
		.post-date a:visited',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3.widgettitle,
		h3.widgettitle a:link',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#sidebar .menu li ul.menu li a,
		#sidebar .menu li.menu-item a,
		#sidebar .menu li.page_item a',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.tagline',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.title,
		.title a:link,
		.title a:visited',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '55px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3.footer-widgettitle,
		h3.footer-widgettitle a:link,
		h3.footer-widgettitle a:visited',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	return $category_rules;
} );
