<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-size', 'value' => '62.5%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		pre',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
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
			array( 'property' => 'font-family', 'value' => '"Lucida Grande", Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'address',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	/* Explicit font-family rule added */
	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#site-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Lucida Grande", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1.615em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-link',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-link a:link,
		.page-link a:visited',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#entry-author-info',
		array(
			array( 'property' => 'font-size', 'value' => '0.9231em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#entry-author-info h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.154em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wrapper',
		array(
			array( 'property' => 'font-family', 'value' => '"Lucida Grande", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1.3em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2.1em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#header .description',
		array(
			array( 'property' => 'font-size', 'value' => '0.85em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#commentform h3,
		#comments h3,
		.entry-title,
		.error,
		h1.page-title',
		array(
			array( 'property' => 'font', 'value' => 'normal 1.5384em/1.5em Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2',
		array(
			array( 'property' => 'font', 'value' => 'normal 1.4em/1.2em Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3',
		array(
			array( 'property' => 'font', 'value' => 'normal 1.3em/1.2em Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4',
		array(
			array( 'property' => 'font', 'value' => 'normal 1.2em/1.2em Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5',
		array(
			array( 'property' => 'font', 'value' => 'normal 1.1em/1.2em Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content blockquote cite',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta,
		.entry-meta,
		.entry-utility',
		array(
			array( 'property' => 'font-size', 'value' => '0.9231em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment cite',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'input,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-family', 'value' => 'Helvetica,Arial,sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'label',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	return $category_rules;
} );
