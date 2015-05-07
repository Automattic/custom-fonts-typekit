<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'a,
		abbr,
		acronym,
		address,
		applet,
		b,
		big,
		blockquote,
		body,
		caption,
		center,
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
		i,
		iframe,
		img,
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
		table,
		tbody,
		td,
		tfoot,
		th,
		thead,
		tr,
		tt,
		u,
		ul,
		var',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-size', 'value' => '75%' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Arial, Helvetica, sans-serif' ),
		)
	);

	/* Explicit selectors with font-family rule added */
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3,
		h4,
		h5',
		array(
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'p',
		array(
			array( 'property' => 'font-size', 'value' => '1.167em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '0.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption p.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.pagetitle',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#searchform',
		array(
			array( 'property' => 'font-size', 'value' => '1.167em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.menu-main',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.menu-main ul ul a',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	/* Explicit font-family rule added */
	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.blog-name',
		array(
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '5em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.description',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2.5em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.timestamp',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-bubble',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '2.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.167em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-content ol,
		.post-content ul',
		array(
			array( 'property' => 'font-size', 'value' => '1.167em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-content ol li ol,
		.post-content ol li ul,
		.post-content ul li ol,
		.post-content ul li ul',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '1.167em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dd',
		array(
			array( 'property' => 'font-size', 'value' => '1.167em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '0.833em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3#comments',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ol.commentlist li.comment div.vcard cite.fn',
		array(
			array( 'property' => 'font-size', 'value' => '1.167em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ol.commentlist li.pingback div.vcard cite.fn',
		array(
			array( 'property' => 'font-size', 'value' => '1.167em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#respond h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#respond .comment-form-comment textarea',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.form-field span textarea#comment',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer-widgets .widget-area',
		array(
			array( 'property' => 'font-size', 'value' => '1.167em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#footer-widgets li .widgettitle',
		array(
			array( 'property' => 'font-size', 'value' => '1.714em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer',
		array(
			array( 'property' => 'font-size', 'value' => '0.916em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer a:link,
		#footer a:visited',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	return $category_rules;
} );
