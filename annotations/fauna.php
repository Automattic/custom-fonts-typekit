<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'h1',
		array(
			array( 'property' => 'font', 'value' => 'bold 240%/100% "Trebuchet MS", Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font', 'value' => '70%/190% Verdana, Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'cite,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font', 'value' => '100% Verdana, Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font', 'value' => 'normal 140% helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3,
		h4',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry h3',
		array(
			array( 'property' => 'font', 'value' => 'normal 135% helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.box h4',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.noteworthy',
		array(
			array( 'property' => 'font', 'value' => 'normal 140% Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'abbr,
		acronym',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '85%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'cite',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		pre',
		array(
			array( 'property' => 'font-family', 'value' => '\'Courier New\', Courier, mono, Fixed' ),
			array( 'property' => 'font-size', 'value' => '105%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'blockquote[cite]:after',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'legend',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#respond input[type="text"],
		#respond textarea,
		.searchbox',
		array(
			array( 'property' => 'font', 'value' => '100% Verdana, Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#respond textarea',
		array(
			array( 'property' => 'font', 'value' => '100% Verdana, Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pushbutton,
		.pushbutton-wide',
		array(
			array( 'property' => 'font', 'value' => '100% Verdana, Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-date p',
		array(
			array( 'property' => 'font', 'value' => 'normal 140% Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.sidenotes h2',
		array(
			array( 'property' => 'font', 'value' => 'normal 100% Verdana, Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.sidenotes h3',
		array(
			array( 'property' => 'font', 'value' => 'normal 100% Verdana, Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-header em',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-header small,
		.form-allowed-tags,
		.notice',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#respond h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.6em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .comment-form-comment label',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
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
		'#wp-calendar a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ul#recent-activity li',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'ul#recent-activity small',
		array(
			array( 'property' => 'font-size', 'value' => '85%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.caps',
		array(
			array( 'property' => 'font-family', 'value' => '"Lucida Sans Unicode", Arial, Verdana, Helvetica, sans-serif' ),
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
