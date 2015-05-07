<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html',
		array(
			array( 'property' => 'font-family', 'value' => 'sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Noticia Text", serif' ),
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		h1.site-title a,
		.feature-header h1.entry-title,
		h2.site-description ',
		array(
			array( 'property' => 'font-family', 'value' => '"Noticia Text", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '3.375em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '2.634em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '2.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.756em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '1.115em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.feature-header h1.entry-title,
		h1.site-title a',
		array(
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '1.756em' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2.comments-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3.comment-reply-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '1.15em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'big',
		array(
			array( 'property' => 'font-size', 'value' => '125%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.action-text',
		array(
			array( 'property' => 'font-size', 'value' => '1.115em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'a.button',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content,
		.entry-summary,
		.page-content',
		array(
			array( 'property' => 'font-size', 'value' => '1.171em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'li.pingback',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '95%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.115em' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_goodreads h2',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		),
		array(
			'only screen and (min-width: 40.063em)',
		)
	);

	return $category_rules;
} );
