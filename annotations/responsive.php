<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'a, abbr, acronym, address, applet, article, aside, audio,
		b, big, blockquote, canvas, caption, center, cite, code,
		dd, del, details, dfn, div, dl, dt, em, embed,
		fieldset, figcaption, figure, footer, form,
		h1, h2, h3, h4, h5, h6, header, hgroup, html,
		i, iframe, img, ins, kbd, label, legend, li,
		mark, menu, nav, object, ol, output, p, pre, q, ruby,
		s, samp, section, small, span, strike, strong, sub, summary, sup,
		table, tbody, td, tfoot, th, thead, time, tr, tt,
		u, ul, var, video',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font', 'value' => 'inherit' ),
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

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
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
		'code,
		kbd,
		pre,
		samp,
		tt,
		var',
		array(
			array( 'property' => 'font-family', 'value' => 'monospace, serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'b,
		strong',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'small,
		sub,
		sup',
		array(
			array( 'property' => 'font-size', 'value' => '85%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'abbr,
		acronym',
		array(
			array( 'property' => 'font-size', 'value' => '85%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'a',
		array(
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'label',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#featured .read-more a,
		a.button, button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#featured .read-more a,
		.call-to-action a.button',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1, h2, h3, h4, h5, h6,
		.widget-title, .widget-title-home h3',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'blockquote p',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'h1,
		h1 a,
		h2,
		h2 a,
		h3,
		h3 a,
		h4,
		h4 a,
		h5,
		h5 a,
		h6,
		h6 a',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2.625em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '2.250em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.875em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.500em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.125em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '1.000em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.site-name',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '2.063em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.site-name a',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '0.875em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#content-sitemap a',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#author-meta .about-author',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#featured h1.featured-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '60px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#featured p',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-weight', 'value' => '200' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comments-link',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.post-data',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.post-meta',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.post-edit',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.read-more',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.ellipsis',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.form-allowed-tags',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#widgets cite',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#widgets .author',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.widget-title,
		.widget-title-home h3',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.top-widget .widget-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.top-menu li a',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.menu a',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.menu li li a',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.menu-toggle',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.main-small-navigation li a',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.main-small-navigation .menu .sub-menu a',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.sub-header-menu a',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.sub-header-menu li li a',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.navigation',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.navigation .bracket',
		array(
			array( 'property' => 'font-size', 'value' => '36px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.pagination',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.breadcrumb-list',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.commentlist li cite',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-body .comment-meta a',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.pingback cite,
		.trackback cite',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.nocomments',
		array(
			array( 'property' => 'font-size', 'value' => '.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.wp-caption p.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.gallery .gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#footer',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#footer a',
		array(
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.footer-menu li,
		.top-menu',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		),
		array(
			'screen and (max-width: 980px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.featured-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '40px' ),
		),
		array(
			'screen and (max-width: 980px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.featured-subtitle',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array(
			'screen and (max-width: 980px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#featured p',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array(
			'screen and (max-width: 980px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.featured-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '35px' ),
		),
		array(
			'screen and (max-width: 980px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.featured-subtitle',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (max-width: 980px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.call-to-action a.button',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (max-width: 980px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#featured p',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		),
		array(
			'screen and (max-width: 980px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.featured-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and (max-width: 980px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.featured-subtitle',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		),
		array(
			'screen and (max-width: 980px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.call-to-action a.button',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array(
			'screen and (max-width: 980px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.widget-title,
		.widget-title-home h3',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (max-width: 980px)',
		)
	);

	return $category_rules;
} );
