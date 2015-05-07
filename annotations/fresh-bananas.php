<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-size', 'value' => '76%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#header a',
		array(
			array( 'property' => 'font-size', 'value' => '3.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre code',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .required',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#text #sidebar h1',
		array(
			array( 'property' => 'font-family', 'value' => 'Serif' ),
			array( 'property' => 'font-size', 'value' => '1px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#text #sidebar h2',
		array(
			array( 'property' => 'font-family', 'value' => 'Serif' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#header',
		array(
			array( 'property' => 'font-family', 'value' => '"Stone Sans ITC TT", "Arial Rounded MT BOLD", Verdana, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#text h1',
		array(
			array( 'property' => 'font-family', 'value' => 'Serif' ),
			array( 'property' => 'font-size', 'value' => '2.4em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#text h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.8em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#text h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.4em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#text #main ol,
		#text #main ul,
		#text p',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#text #sidebar ul',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption p.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	return $category_rules;
} );
