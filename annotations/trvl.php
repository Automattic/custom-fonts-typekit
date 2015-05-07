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

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
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

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
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
		'button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '\'Lucida Grande\', Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => 'Lucida Grande, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '3rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '2.8rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '2.6rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '2.4rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '2.2rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '2rem' ),
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
		'address',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre',
		array(
			array( 'property' => 'font', 'value' => '1.5rem/1.6 "Courier 10 Pitch", Courier, monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font', 'value' => '1.5rem Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
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

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'button,
		html input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '1.2rem' ),
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
			array( 'property' => 'font-family', 'value' => 'LeagueGothicRegular, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.screen-reader-text:active,
		.screen-reader-text:focus,
		.screen-reader-text:hover',
		array(
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.site-description',
		array(
			array( 'property' => 'font', 'value' => '1.4rem/1 LeagueGothicRegular, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '16rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'.page-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.8rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'heading',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '3.8rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-meta,
		.entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '1.3rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.format-image .entry-title,
		.format-video .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '3rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote blockquote',
		array(
			array( 'property' => 'font', 'value' => '6.8rem/0.95 LeagueGothicRegular, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote blockquote cite',
		array(
			array( 'property' => 'font', 'value' => '1.4rem/95% \'LeagueGothicRegular\',Arial,sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.single [class*="nav-"] a',
		array(
			array( 'property' => 'font', 'value' => '2.6rem/1 LeagueGothicRegular, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.meta-nav',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-notes,
		.form-allowed-tags,
		.form-allowed-tags code,
		.pingback .comment-body,
		.site-info,
		.trackback .comment-body',
		array(
			array( 'property' => 'font-size', 'value' => '1.3rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-body .reply a,
		.pingback a,
		.site-info a',
		array(
			array( 'property' => 'font-size', 'value' => '1.3rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.navigation-comment [class*="nav-"] a',
		array(
			array( 'property' => 'font-size', 'value' => '2rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#reply-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.8rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation-main a',
		array(
			array( 'property' => 'font', 'value' => '2.2rem/1 LeagueGothicRegular, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '1.3rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.widget-title,
		.widget-title a',
		array(
			array( 'property' => 'font-size', 'value' => '1.8rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.widget_calendar caption',
		array(
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '10rem' ),
		),
		array(
			'screen and (max-width: 1005px)',
		)
	);

	return $category_rules;
} );
