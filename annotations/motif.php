<?php
add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif", Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '1.6153rem' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif", Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '1.3846rem' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif", Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '1.2307rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif", Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '1.1538rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1.1538rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Sans", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Sans", Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'caption,
		td',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dt,
		b,
		strong,
		th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'cite,
		dfn,
		em,
		i,
		blockquote',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'sub,
		sup',
		array(
			array( 'property' => 'font-size', 'value' => '75%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '75%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'big',
		array(
			array( 'property' => 'font-size', 'value' => '125%' ),
		)
	);


	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		html input[type="button"],
		input[type="reset"],
		input[type="submit"],
		input[type="email"],
		input[type="password"],
		input[type="search"],
		input[type="text"],
		input[type="url"]',
		array(
			array( 'property' => 'font-size', 'value' => '1rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation a,
		.subordinate-navigation a',
		array(
			array( 'property' => 'font-size', 'value' => '0.9230rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '2.6153rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.615rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '0.8461rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-dd,
		.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '0.9230rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments-title,
		.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.6153rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-author .fn',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-metadata,
		.comment-reply-link,
		.comment-navigation a',
		array(
			array( 'property' => 'font-size', 'value' => '1rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-reply-title,
		#respond h3.comment-reply-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif", Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '1.3846rem' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.form-allowed-tags',
		array(
			array( 'property' => 'font-size', 'value' => '0.8461rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.footer-widget-area',
		array(
			array( 'property' => 'font-size', 'value' => '1.0769rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-info',
		array(
			array( 'property' => 'font-size', 'value' => '0.7692rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.testimonials .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.2307rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.testimonials .entry-content',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html',
		array(
			array( 'property' => 'font-size', 'value' => '93.75%' ),
		),
		array(
			'screen and (min-width: 1200px)',
		)
	);

	return $category_rules;
} );
