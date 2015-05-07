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

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1, h2, h3, h4, h5, h6',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, sans-serif' ),
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
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.clearfix:after',
		array(
			array( 'property' => 'font-size', 'value' => '0' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.more,
		.more:visited',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.site-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '30px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.featured .hentry',
		array(
			array( 'property' => 'font-size', 'value' => '.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.featured .entry-title a',
		array(
			array( 'property' => 'font-size', 'value' => '1.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.flex-direction-nav li a',
		array(
			array( 'property' => 'font-size', 'value' => '.75em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#home-tagline .more',
		array(
			array( 'property' => 'font-size', 'value' => '.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.home-promo',
		array(
			array( 'property' => 'font-size', 'value' => '.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.home-promo h2',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.home-promo h2 a',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content',
		array(
			array( 'property' => 'font-size', 'value' => '.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#secondary',
		array(
			array( 'property' => 'font-size', 'value' => '.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#colophon',
		array(
			array( 'property' => 'font-size', 'value' => '.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.main-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#content h1',
		array(
			array( 'property' => 'font-size', 'value' => '2.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#content h2',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#content h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#content h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#content h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.wp-caption',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.site-content .site-navigation a,
		.site-content .site-navigation a:visited',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-author',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-author cite',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '21px' ),
			array( 'property' => 'font-weight', 'value' => '500' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#searchsubmit',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	return $category_rules;
} );
