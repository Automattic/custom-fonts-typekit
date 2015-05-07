<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'a,
		abbr,
		acronym,
		address,
		applet,
		article,
		aside,
		audio,
		b,
		big,
		blockquote,
		canvas,
		caption,
		center,
		cite,
		code,
		dd,
		del,
		details,
		dfn,
		dialog,
		div,
		dl,
		dt,
		em,
		embed,
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
		output,
		p,
		pre,
		q,
		ruby,
		s,
		samp,
		section,
		small,
		span,
		strike,
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
		tt,
		u,
		ul,
		var,
		video',
		array(
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-family', 'value' => 'inherit' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-family', 'value' => 'inherit' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => '"Hoefler Text", "Baskerville old face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '17px' )
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
			array( 'property' => 'font-family', 'value' => '"Hoefler Text", "Baskerville old face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => 'normal' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '45px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '34px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '23px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '17px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '15px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'b,
		dfn,
		strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'cite,
		dfn,
		em,
		i',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'ins',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'address',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-style', 'value' => 'italic' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'dt',
		array(
			array( 'property' => 'font-family', 'value' => '"Hoefler Text", "Baskerville old face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		pre,
		tt',
		array(
			array( 'property' => 'font-family', 'value' => '"Lucida Console", Monaco, monospace' ),
			array( 'property' => 'font-size', 'value' => '16px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'big',
		array(
			array( 'property' => 'font-size', 'value' => '20px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '14px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'th',
		array(
			array( 'property' => 'font-family', 'value' => '"Hoefler Text", "Baskerville old face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'tfoot',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#site-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Hoefler Text", "Baskerville old face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '25px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#site-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Hoefler Text", "Baskerville old face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '14px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#access,
		div.menu',
		array(
			array( 'property' => 'font-size', 'value' => '13px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#access a,
		div.menu a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#nav-above div',
		array(
			array( 'property' => 'font-size', 'value' => '70px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#nav-below h3',
		array(
			array( 'property' => 'font-size', 'value' => '25px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#attachment-caption',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '50px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '14px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-date',
		array(
			array( 'property' => 'font-family', 'value' => '"Hoefler Text", "Baskerville old face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '50px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#s',
		array(
			array( 'property' => 'font-family', 'value' => '"Hoefler Text", "Baskerville old face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-style', 'value' => 'italic' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.featured-date',
		array(
			array( 'property' => 'font-size', 'value' => '43px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.featured-excerpt,
		.featured-title',
		array(
			array( 'property' => 'font-size', 'value' => '14px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.featured-title',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.archive-title',
		array(
			array( 'property' => 'font-size', 'value' => '25px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.archive-title em',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '12px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption,
		.wp-caption-text',
		array(
			array( 'property' => 'font-family', 'value' => '"Times New Roman", Times, serif' ),
			array( 'property' => 'font-size', 'value' => '14px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#sidebar',
		array(
			array( 'property' => 'font-size', 'value' => '14px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments',
		array(
			array( 'property' => 'font-size', 'value' => '14px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments input,
		#comments textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Hoefler Text", "Baskerville old face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '17px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#comments code',
		array(
			array( 'property' => 'font-size', 'value' => '12px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#comments-title,
		#reply-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Hoefler Text", "Baskerville old face", Garamond, "Times New Roman", serif' ),
			array( 'property' => 'font-size', 'value' => '25px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.commentlist',
		array(
			array( 'property' => 'font-size', 'value' => '15px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-awaiting-moderation',
		array(
			array( 'property' => 'font-size', 'value' => '18px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.nocomments',
		array(
			array( 'property' => 'font-size', 'value' => '17px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer',
		array(
			array( 'property' => 'font-size', 'value' => '14px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#ie7 #comments input,
		#ie7 #comments textarea,
		#ie7 #comments-title,
		#ie7 #reply-title,
		#ie7 #s,
		#ie7 body,
		#ie8 #comments input,
		#ie8 #comments textarea,
		#ie8 #comments-title,
		#ie8 #reply-title,
		#ie8 #s,
		#ie8 body,
		#ie9 #comments input,
		#ie9 #comments textarea,
		#ie9 #comments-title,
		#ie9 #reply-title,
		#ie9 #s,
		#ie9 body',
		array(
			array( 'property' => 'font-family', 'value' => 'Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif' )
		)
	);

	return $category_rules;
} );
