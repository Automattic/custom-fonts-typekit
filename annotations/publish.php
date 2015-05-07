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
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-family', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-family', 'value' => 'inherit' ),
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
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-family', 'value' => 'sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-family', 'value' => 'sans-serif' ),
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
			array( 'property' => 'font-family', 'value' => 'Georgia, "Bitstream Charter", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'blockquote cite',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre',
		array(
			array( 'property' => 'font', 'value' => '12px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font', 'value' => '14px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
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

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-family', 'value' => 'Helvetica Neue, Helvetica, Arial, sans-serif' ),
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
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.single .format-aside h1.entry-title,
		.single .format-chat h1.entry-title,
		.single .format-gallery h1.entry-title,
		.single .format-image h1.entry-title,
		.single .format-link h1.entry-title,
		.single .format-quote h1.entry-title,
		.single .format-status h1.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-family', 'value' => 'Helvetica Neue, Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.format-aside .entry-format,
		.format-chat .entry-format,
		.format-gallery .entry-format,
		.format-image .entry-format,
		.format-link .entry-format,
		.format-quote .entry-format,
		.format-status .entry-format',
		array(
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#comments',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-meta,
		.comment-meta a',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-author',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-author cite',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.pingback > p:before',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font', 'value' => '15px "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-family', 'value' => 'Helvetica Neue, Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'heading',
		'.widget-area .widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
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
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-family', 'value' => 'Helvetica Neue, Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.entry-meta,
		.entry-meta a',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.site-footer,
		.site-footer a',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'table td',
		array(
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.main-small-navigation .menu-toggle',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'only screen and (max-width : 900px)',
		)
	);

	return $category_rules;
} );
