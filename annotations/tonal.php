<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Oxygen", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Oxygen", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-size', 'value' => '1.8rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '73px' ),
			array( 'property' => 'font-size', 'value' => '7.3rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '52px' ),
			array( 'property' => 'font-size', 'value' => '5.2rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '47px' ),
			array( 'property' => 'font-size', 'value' => '4.7rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
			array( 'property' => 'font-size', 'value' => '3.2rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '29px' ),
			array( 'property' => 'font-size', 'value' => '2.9rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1.widget-title,
		h5',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-size', 'value' => '1.8rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond,
		#respond.comment-respond',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-size', 'value' => '1.2rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#colophon',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-areas',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
		)
	);

	return $category_rules;
} );
