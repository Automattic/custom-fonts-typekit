<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial' ),
			array( 'property' => 'font-size', 'value' => '8pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#insideWrapper:after',
		array(
			array( 'property' => 'font-size', 'value' => '1px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#sidebar',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial' ),
			array( 'property' => 'font-size', 'value' => '7.5pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer',
		array(
			array( 'property' => 'font-size', 'value' => '7pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#reply-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Black"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond label',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .subscribe-label',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .comment-notes',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.cite',
		array(
			array( 'property' => 'font-size', 'value' => '7pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code',
		array(
			array( 'property' => 'font-family', 'value' => 'Courier New, Verdana' ),
			array( 'property' => 'font-size', 'value' => '8pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'input',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '8pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#sidebar h2,
		.title',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Black"' ),
			array( 'property' => 'font-size', 'value' => '7.5pt' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#blogTitle',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Black"' ),
			array( 'property' => 'font-size', 'value' => '8pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.commentPos',
		array(
			array( 'property' => 'font-family', 'value' => '\'Arial Black\'' ),
			array( 'property' => 'font-size', 'value' => '7pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'a.commentPos',
		array(
			array( 'property' => 'font-family', 'value' => '\'Arial Black\'' ),
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
