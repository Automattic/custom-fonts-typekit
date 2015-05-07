<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'a,
		abbr,
		acronym,
		address,
		applet,
		big,
		blockquote,
		caption,
		cite,
		code,
		dd,
		del,
		dfn,
		div,
		dl,
		dt,
		em,
		fieldset,
		font,
		form,
		html,
		iframe,
		ins,
		kbd,
		label,
		legend,
		li,
		object,
		ol,
		p,
		pre,
		q,
		s,
		samp,
		small,
		span,
		strike,
		strong,
		sub,
		sup,
		table,
		tbody,
		td,
		tfoot,
		th,
		thead,
		tr,
		tt,
		ul,
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

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'html',
		array(
			array( 'property' => 'font-size', 'value' => '62.5%' ),
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

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'@font-face',
		array(
			array( 'property' => 'font-family', 'value' => 'Genericons' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.genericon:after,
		.genericon:before',
		array(
			array( 'property' => 'font', 'value' => 'normal 16px/1 Genericons' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, Times, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '23px' ),
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
			array( 'property' => 'font-family', 'value' => 'Playfair Display, serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '34px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '23px' ),
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
		'cite,
		dfn,
		em,
		i',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'blockquote',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'blockquote em,
		blockquote i',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote p',
		array(
			array( 'property' => 'font-family', 'value' => 'Playfair Display, serif' ),
			array( 'property' => 'font-size', 'value' => '38px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite',
		array(
			array( 'property' => 'font', 'value' => '18px/1.8888888888 Lato, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
			array( 'property' => 'font-size', 'value' => '19px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font', 'value' => '19px/1.7894736842 Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
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
			array( 'property' => 'font', 'value' => '700 12px/1 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input[type="email"],
		input[type="password"],
		input[type="search"],
		input[type="text"],
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
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

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#search-wrapper input[type="search"]',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.social-links-trigger a:before',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.site-title',
		array(
			array( 'property' => 'font', 'value' => '700 23px/1.4782608695 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-description',
		array(
			array( 'property' => 'font', 'value' => 'italic 400 14px/2.4285714285 Playfair Display, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation-main',
		array(
			array( 'property' => 'font', 'value' => '700 13px/1.3076923076 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation-main li:after',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.menu-toggle',
		array(
			array( 'property' => 'font', 'value' => '700 18px/1 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-small-navigation',
		array(
			array( 'property' => 'font', 'value' => '700 13px/1.3076923076 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font', 'value' => 'italic 700 68px/1 Playfair Display, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.categories-links',
		array(
			array( 'property' => 'font', 'value' => '700 14px/1.2142857142 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta',
		array(
			array( 'property' => 'font', 'value' => '400 13px/1.3076923076 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font', 'value' => 'italic 700 34px/1 Playfair Display, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links',
		array(
			array( 'property' => 'font', 'value' => '700 15px/2.2666666666 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-body th,
		.entry-content th,
		.entry-summary th',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.entry-format-badge:before',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.format-aside .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '23px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.format-quote .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '23px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-video .categories-links',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-video .entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.format-video .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.format-video .entry-format-badge:before',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-content [class*="navigation"]',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'[class*="navigation"] span',
		array(
			array( 'property' => 'font-family', 'value' => 'arial' ),
			array( 'property' => 'font-size', 'value' => '34px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments-title',
		array(
			array( 'property' => 'font', 'value' => 'italic 700 34px/1 Playfair Display, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-notes,
		.logged-in-as,
		.no-comments',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-notes,
		.logged-in-as',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-author cite',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.bypostauthor > article .comment-author > cite:after',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-author .says',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-content blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '23px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta',
		array(
			array( 'property' => 'font', 'value' => '400 13px/1.3076923076 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments-area #respond h3',
		array(
			array( 'property' => 'font', 'value' => 'italic 700 34px/1 Playfair Display, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#cancel-comment-reply-link',
		array(
			array( 'property' => 'font', 'value' => '700 15px/2.2666666666 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentform label',
		array(
			array( 'property' => 'font', 'value' => '700 17px/2 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentform input[type=submit]',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-info',
		array(
			array( 'property' => 'font-family', 'value' => 'Playfair Display, serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-area .widget',
		array(
			array( 'property' => 'font', 'value' => '300 13px/1.3076923076 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font', 'value' => '400 14px/1.2142857142 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_blog_subscription input[type="text"]',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-area .widget-grofile h4',
		array(
			array( 'property' => 'font', 'value' => '400 14px/1.2142857142 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-status',
		array(
			array( 'property' => 'font', 'value' => 'italic 13px/1.3076923076 Georgia, Times, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'article.error404 .widget',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'article.error404 .widget-title,
		article.error404 .widgettitle',
		array(
			array( 'property' => 'font', 'value' => '700 17px/2 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'article.error404 .widget ul',
		array(
			array( 'property' => 'font', 'value' => '400 17px/2 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'article.error404 .widget_archive p',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span',
		array(
			array( 'property' => 'font', 'value' => '700 12px/1 Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-footer .blog-credits,
		#infinite-footer .blog-info',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#main div.sharedaddy h3.sd-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	return $category_rules;
} );