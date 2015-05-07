<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-size', 'value' => '62.5%' ),
			array( 'property' => 'font-family', 'value' => '"Lucida Grande", Verdana, Arial, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widecolumn .entry p',
		array(
			array( 'property' => 'font-size', 'value' => '1.05em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'small',
		array(
			array( 'property' => 'font-family', 'value' => '"Trebuchet MS", "Lucida Grande", Verdana, Arial, Sans-Serif' ),
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3',
		array(
			array( 'property' => 'font-family', 'value' => '"Trebuchet MS", "Lucida Grande", Verdana, Arial, Sans-Serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '4em' ),
			array( 'property' => 'font-family', 'value' => '"Trebuchet MS", "Lucida Grande", Verdana, Arial, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#headerimg .description',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.6em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2.pagetitle',
		array(
			array( 'property' => 'font-size', 'value' => '1.6em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#sidebar h2',
		array(
			array( 'property' => 'font-family', 'value' => '"Lucida Grande", Verdana, Sans-Serif' ),
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.3em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentform input,
		#commentform textarea,
		.commentlist li',
		array(
			array( 'property' => 'font', 'value' => '0.9em "Lucida Grande", Verdana, Arial, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.commentlist li ul li',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.commentlist li',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.commentlist cite,
		.commentlist cite a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.commentlist p',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentform p',
		array(
			array( 'property' => 'font-family', 'value' => '"Lucida Grande", Verdana, Arial, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.commentmetadata',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
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
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .comment-notes',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond #cancel-comment-reply-link',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#sidebar',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-family', 'value' => '"Lucida Grande", Verdana, Arial, Sans-Serif' ),
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

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar #next a,
		#wp-calendar #prev a',
		array(
			array( 'property' => 'font-size', 'value' => '9pt' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar caption',
		array(
			array( 'property' => 'font', 'value' => 'bold 1.3em "Lucida Grande", Verdana, Arial, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#wp-calendar th',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
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
