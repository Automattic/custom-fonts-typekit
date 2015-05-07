<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		pre,
		tt,
		var',
		array(
			array( 'property' => 'font-family', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'caption,
		td,
		th',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'b,
		strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'cite,
		dfn,
		em,
		i',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
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

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
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
		html input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.screen-reader-text:active,
		.screen-reader-text:focus,
		.screen-reader-text:hover',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '200' ),
			array( 'property' => 'font-size', 'value' => '36px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '200' ),
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '200' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		pre',
		array(
			array( 'property' => 'font-size', 'value' => '86.66667%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'table th',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input[type],
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'label[for^=pwbox]',
		array(
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation-main',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.menu-toggle:before',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget .widget-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget table caption',
		array(
			array( 'property' => 'font-weight', 'value' => '600' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-header .page-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '36px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-header .taxonomy-description',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta .meta',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.navigation .dashicons',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation a',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-link .entry-content a:first-of-type',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote .quote-caption',
		array(
			array( 'property' => 'font-weight', 'value' => '600' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.dashicons-admin-comments,
		.dashicons-plus-big,
		.dashicons-xit',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.format-icon',
		array(
			array( 'property' => 'font-size', 'value' => '64px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'h1 .dashicons-admin-comments,
		h1 .dashicons-plus-big,
		h2 .dashicons-admin-comments,
		h2 .dashicons-plus-big,
		h3 .dashicons-admin-comments,
		h3 .dashicons-plus-big',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry #respond ::-webkit-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry #respond :-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry #respond ::-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry #respond :-ms-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-image #respond ::-webkit-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-image #respond :-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-image #respond ::-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-image #respond :-ms-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-gallery #respond ::-webkit-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-gallery #respond :-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-gallery #respond ::-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-gallery #respond :-ms-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-link #respond ::-webkit-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-link #respond :-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-link #respond ::-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-link #respond :-ms-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-status #respond ::-webkit-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-status #respond :-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-status #respond ::-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-status #respond :-ms-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-video #respond ::-webkit-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-video #respond :-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-video #respond ::-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-video #respond :-ms-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-audio #respond ::-webkit-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-audio #respond :-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-audio #respond ::-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-audio #respond :-ms-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-chat #respond ::-webkit-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-chat #respond :-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-chat #respond ::-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-chat #respond :-ms-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote #respond ::-webkit-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote #respond :-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote #respond ::-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote #respond :-ms-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-aside #respond ::-webkit-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-aside #respond :-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-aside #respond ::-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-aside #respond :-ms-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry.error404 #respond ::-webkit-input-placeholder,
		.hentry.no-results #respond ::-webkit-input-placeholder,
		.hentry.type-page #respond ::-webkit-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry.error404 #respond :-moz-placeholder,
		.hentry.no-results #respond :-moz-placeholder,
		.hentry.type-page #respond :-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry.error404 #respond ::-moz-placeholder,
		.hentry.no-results #respond ::-moz-placeholder,
		.hentry.type-page #respond ::-moz-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry.error404 #respond :-ms-input-placeholder,
		.hentry.no-results #respond :-ms-input-placeholder,
		.hentry.type-page #respond :-ms-input-placeholder',
		array(
			array( 'property' => 'font', 'value' => 'italic 12px "Source Sans Pro", sans-serif' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.hentry.error404 .format-icon,
		.hentry.no-results .format-icon,
		.hentry.type-page .format-icon',
		array(
			array( 'property' => 'font-size', 'value' => '120px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-links',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-links .icon',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-links .add .icon',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'li.pingback p',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'article.comment',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'article.comment footer',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#reply-title',
		array(
			array( 'property' => 'font-weight', 'value' => '600' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#reply-title .icon',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .logged-in-as,
		#respond .must-log-in,
		#respond label',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond input,
		#respond textarea',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond button,
		#respond input[type="reset"],
		#respond input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-header nav',
		array(
			array( 'property' => 'font-size', 'value' => '.9em' ),
		),
		array(
			'screen and (max-width: 500px)',
		)
	);

	return $category_rules;
} );
