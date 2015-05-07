<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'@font-face',
		array(
			array( 'property' => 'font-family', 'value' => 'Genericons' ),
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
		'body, body.custom-font-enabled',
		array(
			array( 'property' => 'font-family', 'value' => 'Tahoma, Geneva, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font', 'value' => '99% sans-serif' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,h2,h3,h4,h5,h6',
		array(
			array( 'property' => 'font-family', 'value' => 'Helvetica Neue, Helvetica, Arial, sans-serif' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-family', 'value' => 'oswald, helvetica, arial' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-family', 'value' => 'oswald, helvetica, arial' ),
			array( 'property' => 'font-size', 'value' => '1.85em' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '0.846em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '0.7em' ),
		)
	);
		
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		pre,
		samp',
		array(
			array( 'property' => 'font-family', 'value' => 'monospace, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#site-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Tahoma, Geneva, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '44px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#site-description',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Tahoma, Geneva, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1.1em' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Tahoma, Geneva, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#sidebar .widget-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Tahoma, Geneva, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-header',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Tahoma, Geneva, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation-main a',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Tahoma, Geneva, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.menu-toggle',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Tahoma, Geneva, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (max-width: 880px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.menu-toggle:before',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons' ),
		),
		array(
			'screen and (max-width: 880px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-small-navigation a',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Tahoma, Geneva, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (max-width: 880px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.date-meta',
		array(
			array( 'property' => 'font', 'value' => '22px Oswald, Tahoma, Geneva, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.author-meta',
		array(
			array( 'property' => 'font', 'value' => '12px Oswald, Tahoma, Geneva, sans-serif' ),
		)
	);
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.posted-meta',
		array(
			array( 'property' => 'font', 'value' => '12px Oswald, Tahoma, Geneva, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comment-nav-above,
		#comment-nav-below,
		#image-navigation,
		#nav-above,
		#nav-below',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Tahoma, Geneva, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		),
		array(
			'screen and (max-width: 880px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Tahoma, Geneva, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		),
		array(
			'screen and (max-width: 880px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.commentlist .comment-reply-link:before',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons' ),
		),
		array(
			'screen and (max-width: 880px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#reply-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Tahoma, Geneva, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		),
		array(
			'screen and (max-width: 880px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond label',
		array(
			array( 'property' => 'font-family', 'value' => 'Oswald, Tahoma, Geneva, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		),
		array(
			'screen and (max-width: 880px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#meta.widget aside a:before,
		#sidebar .widget li:before',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons' ),
			array( 'property' => 'font-size', 'value' => '10px' ),
		),
		array(
			'screen and (max-width: 880px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.rss-date,
		.widget_rss cite',
		array(
			array( 'property' => 'font-family', 'value' => 'georgia, arial' ),
		),
		array(
			'screen and (max-width: 880px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-family', 'value' => 'georgia, arial' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		),
		array(
			'screen and (max-width: 880px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'blockquote:before',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons, serif' ),
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'q',
		array(
			array( 'property' => 'font-family', 'value' => 'georgia, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'q:before',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons, serif' ),
		)
	);
	
	return $category_rules;
} );
