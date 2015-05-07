<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

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

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'@font-face',
		array(
			array( 'property' => 'font-family', 'value' => 'Genericons' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'.genericon:after,
		.genericon:before',
		array(
			array( 'property' => 'font', 'value' => 'normal 16px/1 Genericons' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'georgia, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-family', 'value' => 'raleway, arial' ),
			array( 'property' => 'font-size', 'value' => '29px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-family', 'value' => 'arvo, georgia' ),
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-family', 'value' => 'arvo, georgia' ),
			array( 'property' => 'font-size', 'value' => '1.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-family', 'value' => 'arvo, georgia' ),
			array( 'property' => 'font-size', 'value' => '1.54em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-family', 'value' => 'arvo, georgia' ),
			array( 'property' => 'font-size', 'value' => '1.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font', 'value' => '15px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-family', 'value' => 'arvo, georgia' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation, .main-small-navigation .menu, .site-navigation h1.menu-toggle',
		array(
			array( 'property' => 'font-family', 'value' => 'arvo, georgia' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#featured-content h2',
		array(
			array( 'property' => 'font-family', 'value' => 'arvo, georgia' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '28px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-family', 'value' => 'raleway, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '29px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#main .format-video .single-thumbnail a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '60px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#main .format-standard .single-thumbnail a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '60px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#main .format-image .single-thumbnail a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '60px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#main .format-gallery .single-thumbnail a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '60px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#main .format-quote .single-thumbnail a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '60px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-content .site-navigation',
		array(
			array( 'property' => 'font-family', 'value' => 'raleway, georgia, serif' ),
			array( 'property' => 'font-style', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.sd-title',
		array(
			array( 'property' => 'font-family', 'value' => 'georgia' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#reply-title,
		.comments-title',
		array(
			array( 'property' => 'font-family', 'value' => 'arvo, georgia' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'.comment-author',
		array(
			array( 'property' => 'font-family', 'value' => 'raleway' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title,
		.widget-title a',
		array(
			array( 'property' => 'font-family', 'value' => 'raleway, georgia, serif' ),
			array( 'property' => 'font-style', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.main-navigation',
		array(
			array( 'property' => 'font-family', 'value' => 'arvo, georgia' ),
		),
		array(
			'screen and (max-width: 1000px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-family', 'value' => 'raleway, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '29px' ),
		),
		array(
			'screen and (max-width: 1000px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#main .format-video .single-thumbnail a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '60px' ),
		),
		array(
			'screen and (max-width: 1000px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#main .format-standard .single-thumbnail a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '60px' ),
		),
		array(
			'screen and (max-width: 1000px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#main .format-image .single-thumbnail a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '60px' ),
		),
		array(
			'screen and (max-width: 1000px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'#main .format-gallery .single-thumbnail a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '60px' ),
		),
		array(
			'screen and (max-width: 1000px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'#main .format-quote .single-thumbnail a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '60px' ),
		),
		array(
			'screen and (max-width: 1000px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'.site-navigation h1.menu-toggle',
		array(
			array( 'property' => 'font-family', 'value' => 'raleway, arial' ),
		),
		array(
			'screen and (max-width: 1000px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'.site-navigation h1.menu-toggle:before',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons, arial' ),
		),
		array(
			'screen and (max-width: 1000px)',
		)
	);

	return $category_rules;
} );
