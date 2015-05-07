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
		h6,
		th',
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

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'caption,
		td',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'th',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button',
		array(
			array( 'property' => 'font-family', 'value' => '"Port Lligat Sans", Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Port Lligat Sans", Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'select',
		array(
			array( 'property' => 'font-family', 'value' => '"Port Lligat Sans", Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-family', 'value' => 'Pacifico, script' ),
			array( 'property' => 'font-size', 'value' => '36.651px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '25.88px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '22.652px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-family', 'value' => '"Port Lligat Sans", Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '22.652px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-family', 'value' => '"Port Lligat Sans", Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Port Lligat Sans", Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
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
		'blockquote:before',
		array(
			array( 'property' => 'font-size', 'value' => '109px' ),
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
			array( 'property' => 'font', 'value' => '15px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
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
			array( 'property' => 'font-family', 'value' => 'Oswald, Helvetica, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
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

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.main-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.main-navigation ul li',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1.menu-toggle',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '28px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-links span.active-link',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-links a span.active-link',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1.page-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.author-archives-name',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.status-entry-meta',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.form-allowed-tags,
		.form-allowed-tags code',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentform .required',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#commentform .comment-form-author,
		#commentform .comment-form-comment,
		#commentform .comment-form-email,
		#commentform .comment-form-url',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Helvetica, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-author cite.fn,
		.comment-author cite.fn a',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Helvetica, sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar caption',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.site-title,
		.site-title a',
		array(
			array( 'property' => 'font-family', 'value' => 'Pacifico, script' ),
			array( 'property' => 'font-size', 'value' => '59.301px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Port Lligat Sans", Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '19px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title,
		.entry-title a',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '26px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-meta',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.image-attachment .entry-meta',
		array(
			array( 'property' => 'font-family', 'value' => '"Port Lligat Sans", Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#image-navigation .next-image a,
		#image-navigation .next-image-thumb img,
		#image-navigation .previous-image a,
		#image-navigation .previous-image-thumb img',
		array(
			array( 'property' => 'font-size', 'value' => '40px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments-link a,
		.edit-link a',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#colophon',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#worm-bubble',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#image-navigation .next-image a,
		#image-navigation .next-image-thumb img,
		#image-navigation .previous-image a,
		#image-navigation .previous-image-thumb img',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		),
		array(
			'only screen and (-moz-min-device-pixel-ratio: 1.5)',
			'only screen and (-o-min-device-pixel-ratio: 3/2)',
			'only screen and (-webkit-min-device-pixel-ratio: 1.5)',
			'only screen and (min-device-pixel-ratio: 1.5)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#image-navigation .next-image a,
		#image-navigation .previous-image a',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'only screen and (-moz-min-device-pixel-ratio: 1.5)',
			'only screen and (-o-min-device-pixel-ratio: 3/2)',
			'only screen and (-webkit-min-device-pixel-ratio: 1.5)',
			'only screen and (min-device-pixel-ratio: 1.5)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.site-title,
		.site-title a',
		array(
			array( 'property' => 'font-size', 'value' => '55px' ),
		),
		array(
			'only screen and (-moz-min-device-pixel-ratio: 1.5)',
			'only screen and (-o-min-device-pixel-ratio: 3/2)',
			'only screen and (-webkit-min-device-pixel-ratio: 1.5)',
			'only screen and (min-device-pixel-ratio: 1.5)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'only screen and (-moz-min-device-pixel-ratio: 1.5)',
			'only screen and (-o-min-device-pixel-ratio: 3/2)',
			'only screen and (-webkit-min-device-pixel-ratio: 1.5)',
			'only screen and (min-device-pixel-ratio: 1.5)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#image-navigation .next-image a,
		#image-navigation .previous-image a',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'only screen and (-moz-min-device-pixel-ratio: 1.5)',
			'only screen and (-o-min-device-pixel-ratio: 3/2)',
			'only screen and (-webkit-min-device-pixel-ratio: 1.5)',
			'only screen and (min-device-pixel-ratio: 1.5)',
		)
	);

	return $category_rules;
} );
