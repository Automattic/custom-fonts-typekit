<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => '' ),
			array( 'property' => 'font-size', 'value' => '1.0em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#blog-title',
		array(
			array( 'property' => 'font-family', 'value' => '' ),
			array( 'property' => 'font-size', 'value' => '2.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#access ul ul ul a',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'p.wp-caption-text',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-family', 'value' => '' ),
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.sidebar h3',
		array(
			array( 'property' => 'font-family', 'value' => '' ),
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1',
		array(
			array( 'property' => 'font-family', 'value' => '' ),
			array( 'property' => 'font-size', 'value' => '1.7em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2',
		array(
			array( 'property' => 'font-family', 'value' => '' ),
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3,
		#comments h3',
		array(
			array( 'property' => 'font-family', 'value' => '' ),
			array( 'property' => 'font-size', 'value' => '1.17em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4,
		th',
		array(
			array( 'property' => 'font-family', 'value' => '' ),
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5',
		array(
			array( 'property' => 'font-family', 'value' => '' ),
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h6',
		array(
			array( 'property' => 'font-family', 'value' => '' ),
			array( 'property' => 'font-size', 'value' => '0.7em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code',
		array(
			array( 'property' => 'font', 'value' => '1.1em "Courier New", Courier, Fixed' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'abbr,
		acronym,
		span.caps',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'input,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	return $category_rules;
} );
