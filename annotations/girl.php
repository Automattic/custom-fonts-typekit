<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '9pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.blogname',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '24pt' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.sideheading',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '10pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.heading',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '12pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.sideheading',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.footer',
		array(
			array( 'property' => 'font-size', 'value' => '8pt' ),
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
			array( 'property' => 'font-size', 'value' => '11px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .subscribe-label',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'input',
		array(
			array( 'property' => 'font-size', 'value' => '9pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'textarea',
		array(
			array( 'property' => 'font-size', 'value' => '9pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.right ul li h2.widgettitle',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '10pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation a',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
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
