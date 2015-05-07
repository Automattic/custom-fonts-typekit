<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
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
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '52.358px' ),
			array( 'property' => 'font-size', 'value' => '5.2358rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '41.887px' ),
			array( 'property' => 'font-size', 'value' => '4.1887rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '32.36px' ),
			array( 'property' => 'font-size', 'value' => '3.236rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '25.888px' ),
			array( 'property' => 'font-size', 'value' => '2.5888rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-branding h1',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2.site-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1.widget-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '25.888px' ),
			array( 'property' => 'font-size', 'value' => '2.5888rem' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1.entry-title a',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1.page-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '32.36px' ),
			array( 'property' => 'font-size', 'value' => '3.236rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-main .comment-navigation a,
		.site-main .paging-navigation a,
		.site-main .post-navigation a',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.screen-reader-text:active,
		.screen-reader-text:focus,
		.screen-reader-text:hover',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget h1',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-size', 'value' => '1.8rem' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget li',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.tagcloud a,
		.tags-links a,
		.wp_widget_tag_cloud a',
		array(
			array( 'property' => 'font-size', 'value' => '14px !important' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-content .widget-area',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.bypostauthor',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'p.no-comments',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'li.pingback',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'p.form-allowed-tags,
		p.form-allowed-tags code',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
		),
		array(
			'screen and (max-width: 600px)',
		)
	);

	return $category_rules;
} );
