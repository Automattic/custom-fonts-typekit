<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'@font-face',
		array(
			array( 'property' => 'font-family', 'value' => '\'ChunkFiveWeb\'' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'@font-face',
		array(
			array( 'property' => 'font-family', 'value' => '\'Genericons\'' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'a,
		abbr,
		acronym,
		address,
		applet,
		big,
		blockquote,
		body,
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
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
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
		'body, body.custom-font-enabled, .site-footer, #infinite-footer .blog-info',
		array(
			array( 'property' => 'font-family', 'value' => 'arial, georgia' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'table caption',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'.format-aside,
		blockquote',
		array(
			array( 'property' => 'font', 'value' => 'italic normal 18px/30px Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'blockquote blockquote',
		array(
			array( 'property' => 'font', 'value' => 'italic normal 15px/24px Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'blockquote:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'Genericons\'' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
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
			array( 'property' => 'font-family', 'value' => 'ChunkFiveWeb, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '200' ),
		)
	);
	
TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '38px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);
			
	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.site-title, .entry-title, .entry-title a ',
		array(
			array( 'property' => 'font', 'value' => '48px/54px ChunkFiveWeb, Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'pre',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-size', 'value' => '1.5rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'code',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font', 'value' => '15px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'input',
		'button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'input-type',
		'input.input-text,
		input[type="date"],
		input[type="datetime"],
		input[type="datetime-local"],
		input[type="email"],
		input[type="month"],
		input[type="number"],
		input[type="password"],
		input[type="search"],
		input[type="tel"],
		input[type="text"],
		input[type="time"],
		input[type="url"],
		input[type="week"],
		select,
		textarea',
		array(
			array( 'property' => 'font', 'value' => '12px/12px arial, Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'button',
		'#comment-submit,
		.more-link,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font', 'value' => 'bold 12px/12px arial, Georgia, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'bubble',
		'::-webkit-validation-bubble-message',
		array(
			array( 'property' => 'font', 'value' => '12px/21px Helvetica, Arial, FreeSans, sans-serif' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'description',
		'.site-description',
		array(
			array( 'property' => 'font', 'value' => '12px/18px ChunkFiveWeb, Georgia, serif' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'meta-genericon',
		'.byline .post-edit-link:before,
		.entry-meta .post-edit-link:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'date-genericon',
		'.entry-date:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'author-genericon',
		'.byline .author:before,
		.entry-meta .author:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'comment-genericon',
		'.byline .comments-link:before,
		.entry-meta .comments-link:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'permaline-genericon',
		'.byline .permalink:before,
		.byline .shortlink:before,
		.entry-meta .permalink:before,
		.entry-meta .shortlink:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'category-genericon',
		'.byline .category:before,
		.entry-meta .category:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'author',
		'.entry-author-meta .author-name',
		array(
			array( 'property' => 'font', 'value' => 'normal bold 10px/10px Helvetica, Arial, sans-serif' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'caption',
		'.gallery-caption,
		.wp-caption-text',
		array(
			array( 'property' => 'font', 'value' => '14px arial, Georgia, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'infinite-handle',
		'#infinite-handle',
		array(
			array( 'property' => 'font-family', 'value' => '\'chunkfiveweb\', arial' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'navigation-before',
		'[class*="navigation"] .previous:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'navigation-after',
		'[class*="navigation"] .next:after',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'comment-author-genericon',
		'.comment-author cite:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'time-genericon',
		'.comment-meta time:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'reply-genericon',
		'.comment-reply-link:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'login-genericon',
		'form#commentform p.log-in-out,
		form#commentform p.logged-in-as',
		array(
			array( 'property' => 'font', 'value' => 'bold 10px/7px Helvetica, Arial, sans-serif' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'cancel-link',
		'#respond #cancel-comment-reply-link',
		array(
			array( 'property' => 'font', 'value' => 'normal normal 12px/22px Verdana, Georgia, serif' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'cancel-genericon',
		'#respond #cancel-comment-reply-link:after',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'formlogin-logout',
		'form#commentform p.log-in-out',
		array(
			array( 'property' => 'font', 'value' => 'bold 10px/7px Helvetica, Arial, sans-serif' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'grofile',
		'.grofile-links a:before,
		.widget_archive a:before,
		.widget_categories a:before,
		.widget_meta a:before,
		.widget_nav_menu a:before,
		.widget_pages a:before,
		.widget_recent_entries a:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'rss-genericon',
		'.rss-date:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'cite-genericon',
		'.widget_rss cite:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'blog-info',
		'#infinite-footer .blog-info',
		array(
			array( 'property' => 'font-family', 'value' => 'arial' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-footer',
		'.site-footer',
		array(
			array( 'property' => 'font-family', 'value' => 'ChunkFiveWeb, Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'menu-genericon',
		'.menu-toggle:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'genericons\'' ),
		),
		array(
			'(-webkit-min-device-pixel-ratio: 0)',
		)
	);

	return $category_rules;
} );
