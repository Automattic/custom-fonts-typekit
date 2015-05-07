<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, Times, serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input[type="email"],
		input[type="password"],
		input[type="search"],
		input[type="text"],
		input[type="url"],
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'cite',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Abril Fatface", Georgia, Times, serif' ),
			array( 'property' => 'font-size', 'value' => '30px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.menu-toggle:before',
		array(
			array( 'property' => 'font-family', 'value' => 'Genericons' ),
			array( 'property' => 'font-size', 'value' => '32px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-area',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),

		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.entry-format a:before,
		.format-link .entry-title a:after,
		.social-links ul a:before',
		array(
			array( 'property' => 'font-family', 'value' => 'Genericons' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-variant', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.format-link .entry-title a:after',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-footer',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-footer a,
		.site-footer a:visited',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-metadata,
		.comment-reply-link,
		.comment-reply-link:visited,
		.comment-metadata,
		.comment-metadata a,
		.comment-metadata a:visited',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#respond h3,
		.comments-title',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption .size-full + .wp-caption-text,
		.wp-caption .size-large + .wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-content,
		.entry-content,
		.entry-summary,
		.comment-body,
		.comment-author,
		.comment-author a,
		.comment-author a:visited',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-author,
		.comment-author a,
		.comment-author a:visited',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '77px' ),
		),
		array(
			'screen and (min-width: 35em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '21px' ),
		),
		array(
			'screen and (min-width: 35em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.main-navigation li.menu-item-has-children > a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'Genericons' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'screen and (min-width: 35em)',
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content,
		.entry-summary',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'screen and (min-width: 35em)',
		)
	);

	return $category_rules;
} );
