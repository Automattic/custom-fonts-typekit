<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-size', 'value' => '62.5%' ),
			array( 'property' => 'font-family', 'value' => '"Lucida Grande", Verdana, Arial, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3',
		array(
			array( 'property' => 'font-family', 'value' => '"Trebuchet MS", "Lucida Grande", Verdana, Arial, Sans-Serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '1.7em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-family', 'value' => '"Trebuchet MS", "Lucida Grande", Verdana, Arial, Sans-Serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '0.6666em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-family', 'value' => '"Trebuchet MS", "Lucida Grande", Verdana, Arial, Sans-Serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '0.5535em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Trebuchet MS", "Lucida Grande", Verdana, Arial, Sans-Serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '0.4464em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#sidebar h2,
		th',
		array(
			array( 'property' => 'font-family', 'value' => '"Lucida Grande", Verdana, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code',
		array(
			array( 'property' => 'font', 'value' => '1.1em "Courier New", Courier, Fixed' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#searchform input',
		array(
			array( 'property' => 'font', 'value' => '1em "Lucida Grande", Verdana, Arial, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond label',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .required',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .subscribe-label',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .comment-notes',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
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
