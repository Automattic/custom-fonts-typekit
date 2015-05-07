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
		'body',
		array(
			array( 'property' => 'font-family', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
		)
	);


	TypekitTheme::add_font_category_rule( $category_rules, 'body',
		'html',
		array(
			array( 'property' => 'font-size', 'value' => 'x-large' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'caption,
		td,
		th',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font', 'value' => '400 0.83333333rem/1.5 "Lato","proxima-nova","Helvetica Neue Light","Helvetica Neue","Helvetica","Arial",sans-serif' ),
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
			array( 'property' => 'font', 'value' => '700 2.2rem/1.5 "Aleo","Skolar","ff-tisa-web-pro","Georgia",serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2.75rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.5rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '1rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '0.875rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '0.75rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '0.6666666666666667rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
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
		'address,
		cite,
		dfn,
		em,
		i',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'blockquote',
		array(
			array( 'property' => 'font-family', 'value' => '"Aleo","Skolar","ff-tisa-web-pro","Georgia",serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body',
		'blockquote cite',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", "proxima-nova", "Helvetica Neue Light", "Helvetica Neue", "Helvetica", "Arial", sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '0.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
			array( 'property' => 'font-size', 'value' => '0.6875rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font', 'value' => '15px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'sub,
		sup',
		array(
			array( 'property' => 'font-size', 'value' => '75%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '75%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'big',
		array(
			array( 'property' => 'font-size', 'value' => '125%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body',
		'button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body',
		'button,
		html input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-size', 'value' => '0.7rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body',
		'input[type="search"]',
		array(
			array( 'property' => 'font-size', 'value' => '0.55rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body',
		'input[type="email"],
		input[type="password"],
		input[type="search"],
		input[type="text"]',
		array(
			array( 'property' => 'font-size', 'value' => '0.7rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'a',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
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

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.navigation-main li',
		array(
			array( 'property' => 'font-size', 'value' => '0.6875rem' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.menu-toggle:before,
		.navigation-main .widget-handle:before',
		array(
			array( 'property' => 'font-size', 'value' => '1.2rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.entry-title,
		.entry-title a',
		array(
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.entry-preview .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.5rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-summary',
		array(
			array( 'property' => 'font-family', 'value' => '"Aleo","Skolar","ff-tisa-web-pro","Georgia",serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body',
		'.entry-summary p:first-of-type:before',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato","proxima-nova","Helvetica Neue Light","Helvetica Neue","Helvetica","Arial",sans-serif' ),
			array( 'property' => 'font-size', 'value' => '0.6em' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.site-header .entry-meta a',
		array(
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.hentry .entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '0.55rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#infinite-handle span,
		.more-link',
		array(
			array( 'property' => 'font-size', 'value' => '.825em' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.more-link .meta-nav',
		array(
			array( 'property' => 'font-size', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '0.7rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.archive .page-title,
		.search .page-title',
		array(
			array( 'property' => 'font-size', 'value' => '1rem' ),
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.taxonomy-description',
		array(
			array( 'property' => 'font-size', 'value' => '0.625rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.post-navigation .meta-nav',
		array(
			array( 'property' => 'font-size', 'value' => '2rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-list .pingback,
		.comment-list .trackback',
		array(
			array( 'property' => 'font-size', 'value' => '0.6875rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-author .fn',
		array(
			array( 'property' => 'font-family', 'value' => '"Aleo"' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
			array( 'property' => 'font-size', 'value' => '0.91666667rem' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#cancel-comment-reply-link,
		.comment-metadata,
		.comment-metadata a,
		.comment-reply-link',
		array(
			array( 'property' => 'font-size', 'value' => '0.55rem' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body',
		'.comment-reply-title small',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato","proxima-nova","Helvetica Neue Light","Helvetica Neue","Helvetica","Arial",sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'[class*="comment-form-"] label',
		array(
			array( 'property' => 'font-size', 'value' => '0.6875rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body',
		'.comment-notes,
		.comments-area input[type="email"],
		.comments-area input[type="text"],
		.comments-area input[type="url"],
		.comments-area textarea,
		.form-allowed-tags,
		.no-comments',
		array(
			array( 'property' => 'font-size', 'value' => '0.6875rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '0.6875rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '1rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.site-info',
		array(
			array( 'property' => 'font-size', 'value' => '0.55rem' ),
		)
	);

	return $category_rules;
} );
