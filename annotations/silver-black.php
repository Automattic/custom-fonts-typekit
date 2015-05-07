<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	/* Explicit selectors with font-family rule added */
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => '' ),
		)
	);

	/* Explicit selectors with font-family rule added */
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3,
		h4,
		h5',
		array(
			array( 'property' => 'font-family', 'value' => '' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'abbr,
		acronym,
		span.caps',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font', 'value' => 'italic 11px Verdana, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'cite',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font', 'value' => 'bold 80% Verdana, sans-serif, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font', 'value' => 'Verdana, sans-serif, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'input',
		array(
			array( 'property' => 'font', 'value' => 'normal normal 12px "Courier New", Arial, monospace !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ol#comments li p',
		array(
			array( 'property' => 'font', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.feedback,
		li,
		p',
		array(
			array( 'property' => 'font', 'value' => '11px "Lucida Sans Unicode", "Trebuchet MS", Verdana, monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.meta,
		.meta a',
		array(
			array( 'property' => 'font', 'value' => 'normal 10px "Verdana", "Courier New", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.storytitle',
		array(
			array( 'property' => 'font', 'value' => 'bold 22px "Trebuchet MS", Verdana, "Courier New", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'h1#header a',
		array(
			array( 'property' => 'font-family', 'value' => '"Trebuchet MS", sans-serif, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#menu ul',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#menu ul li',
		array(
			array( 'property' => 'font', 'value' => '12px "Trebuchet MS", sans-serif, "Times New Roman", serif !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#menu ul ul',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#menu ul ul li,
		#menu ul ul ul li',
		array(
			array( 'property' => 'font', 'value' => 'normal normal 70%/115% \'Lucida Sans Unicode\', Verdana, sans-serif !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#menu h2',
		array(
			array( 'property' => 'font', 'value' => '12px "Trebuchet MS", sans-serif, "Times New Roman", serif !important' ),
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
