<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote,
		body',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'abbr,
		address,
		article,
		aside,
		audio,
		b,
		canvas,
		caption,
		cite,
		code,
		dd,
		del,
		details,
		dfn,
		div,
		dl,
		dt,
		em,
		fieldset,
		figcaption,
		figure,
		footer,
		form,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		header,
		hgroup,
		html,
		i,
		iframe,
		img,
		ins,
		kbd,
		label,
		legend,
		li,
		mark,
		menu,
		nav,
		object,
		ol,
		p,
		pre,
		q,
		samp,
		section,
		small,
		span,
		strong,
		sub,
		summary,
		sup,
		table,
		tbody,
		td,
		tfoot,
		th,
		thead,
		time,
		tr,
		ul,
		var,
		video',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font', 'value' => '1em/1.4em Geneva, Verdana, sans-serif' ),
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
			array( 'property' => 'font-family', 'value' => 'Marvel, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '3.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '2.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '2.4em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.6em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-family', 'value' => 'Marvel, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1.4em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#site-title h1 a',
		array(
			array( 'property' => 'font', 'value' => '85px Bevan, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#site-description',
		array(
			array( 'property' => 'font', 'value' => '26px Geneva, Verdana, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#top-menu',
		array(
			array( 'property' => 'font', 'value' => '1.6em/1em Marvel, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#primary-content h1.post-title a,
		#primary-content h2.post-title a',
		array(
			array( 'property' => 'font-size', 'value' => '0.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.the-date',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'p.post-meta small',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'div.post,
		div.post-wrap',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption,
		.wp-caption,
		.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.postnavigation a',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-link a',
		array(
			array( 'property' => 'font-size', 'value' => '0.85em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'div.post-wrap a.more-link,
		div.post-wrap a.read_more',
		array(
			array( 'property' => 'font-size', 'value' => '0.85em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#secondary-content h3',
		array(
			array( 'property' => 'font', 'value' => '2em/1.4em Marvel, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#secondary-content li',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer',
		array(
			array( 'property' => 'font-size', 'value' => '80%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#primary-content .error-page h2 span',
		array(
			array( 'property' => 'font-size', 'value' => '2.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.error-page a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#s',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-notes',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentlist p',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentlist cite,
		.comment-meta',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentform input#submit,
		a#cancel-comment-reply-link',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'a#cancel-comment-reply-link',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments-off',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#site-title h1 a',
		array(
			array( 'property' => 'font-size', 'value' => '50px' ),
		),
		array(
			'( max-width: 800px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#site-description',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'( max-width: 800px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#top-menu',
		array(
			array( 'property' => 'font-size', 'value' => '1.4em' ),
		),
		array(
			'( max-width: 800px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2#comments',
		array(
			array( 'property' => 'font-size', 'value' => '1.6em' ),
		),
		array(
			'( max-width: 800px )',
		)
	);

	return $category_rules;
} );
