<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'@font-face',
		array(
			array( 'property' => 'font-family', 'value' => '\'Genericons\'' ),
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
			array( 'property' => 'font-family', 'value' => 'Helvetica Neue, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,h2,h3,h4,h5,h6',
		array(
			array( 'property' => 'font-family', 'value' => 'Helvetica Neue, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '200' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);
			
	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.site-title, .entry-title, .entry-title a ',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
			array( 'property' => 'font-family', 'value' => 'Helvetica Neue, Helvetica, Arial, sans-serif' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'site-description',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '1.7em' ),
			array( 'property' => 'font-weight', 'value' => '100' ),
			array( 'property' => 'font-family', 'value' => 'Helvetica Neue, Helvetica, Arial, sans-serif' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'blockquote',
		'blockquote',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, Times New Roman, Times, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'blockquote:before',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons, georgia' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-size', 'value' => '1.5rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font', 'value' => '15px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'.menu-toggle:before',
		array(
			array( 'property' => 'font-family', 'value' => '"genericons"' ),
			array( 'property' => 'font-size', 'value' => '17px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'.entry-content .avatar,
		.format-aside:before,
		.format-audio:before,
		.format-gallery:before,
		.format-image:before,
		.format-link:before,
		.format-quote:before,
		.format-video:before,
		.post.format-standard.sticky:before',
		array(
			array( 'property' => 'font-family', 'value' => '"Genericons"' ),
			array( 'property' => 'font-size', 'value' => '50px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'a.comment-reply-link:before',
		array(
			array( 'property' => 'font-family', 'value' => '"genericons"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'widget-area',
		'.widget-area',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'widget-title',
		'.widget h1, .grofile h4',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-weight', 'value' => '500' ),
		)
	);
	
	return $category_rules;
} );
