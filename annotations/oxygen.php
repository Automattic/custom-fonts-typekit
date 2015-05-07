<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		pre,
		samp,
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
		'body',
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

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'blockquote cite,
		blockquote em',
		array(
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
			array( 'property' => 'font', 'value' => '0.75em/1.75em "Helvetica Neue", Helvetica, Arial, sans-serif' ),
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
			array( 'property' => 'font-family', 'value' => '"Abel", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '3.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '2.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.666666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.333333333333333em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '1.166666666666667em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'dl dt',
		array(
			array( 'property' => 'font-family', 'value' => '"Abel", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1.333333333333333em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'b,
		strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'cite,
		dfn,
		em,
		i',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'cite cite,
		em em',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'blockquote,
		blockquote blockquote blockquote',
		array(
			array( 'property' => 'font-family', 'value' => '"Abel", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'address',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, monospace, Courier, "Courier New"' ),
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		pre,
		samp,
		tt,
		var',
		array(
			array( 'property' => 'font-family', 'value' => 'monospace, monospace' ),
			array( 'property' => 'font-size', 'value' => '1.0em' ),
			array( 'property' => 'font-family', 'value' => '"courier new", monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre code',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, monospace, Courier, "Courier New"' ),
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'acronym',
		array(
			array( 'property' => 'font-size', 'value' => '0.85em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'ins',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'mark',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'sub,
		sup',
		array(
			array( 'property' => 'font-size', 'value' => '0.8333333333333333em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'big',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
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

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.input-text,
		input[type="email"],
		input[type="password"],
		input[type="text"],
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '0.8125em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'table caption',
		array(
			array( 'property' => 'font-size', 'value' => '0.8125em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'table th',
		array(
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.site-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Abel", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '3.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.main-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.main-navigation a',
		array(
			array( 'property' => 'font-family', 'value' => '"Abel", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1.333333333333333em' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.main-navigation li li a',
		array(
			array( 'property' => 'font-size', 'value' => '1.166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.menu-secondary',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.menu-secondary li a',
		array(
			array( 'property' => 'font-size', 'value' => '0.8333333333333333em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.menu-secondary li li a',
		array(
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.menu-toggle',
		array(
			array( 'property' => 'font-size', 'value' => '2.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.333333333333333em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.single .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '2.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.not-found .entry-title,
		.page-title,
		body.page .type-page .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '2.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.cat-links',
		array(
			array( 'property' => 'font-size', 'value' => '0.8333333333333333em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'a.read-more,
		a.read-more:visited',
		array(
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links',
		array(
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-summary .page-links',
		array(
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption .wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.section-title h1',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hfeed-more .entry-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hfeed-more .cat-links',
		array(
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.featured-post .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '2.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.featured-post .entry-title a',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.featured-post .entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.slider-nav',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#image-navigation,
		.single #content .site-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#comments #reply-title,
		.comments-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.666666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta',
		array(
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta .comment-author cite',
		array(
			array( 'property' => 'font-size', 'value' => '1.153846153846154em' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta a,
		.comment-meta a:visited',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widgettitle',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_calendar #wp-calendar caption',
		array(
			array( 'property' => 'font-family', 'value' => '"Abel", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#colophon',
		array(
			array( 'property' => 'font-size', 'value' => '0.9166666666666667em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.menu-tertiary',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.menu-tertiary li a',
		array(
			array( 'property' => 'font-size', 'value' => '0.8333333333333333em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	return $category_rules;
} );