<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", helvetica, arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'caption,
		td,
		th',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-family', 'value' => 'Helvetica Neue, helvetica, arial, sans-serif' ),
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
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-family', 'value' => 'Georgia, "Bitstream Charter", serif' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
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
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		html input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta,
		.comment-meta a',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-author',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-author cite',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
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
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-family', 'value' => 'Georgia, "Helvetica Neue", Helvetica, Arial, sans-serif' ),
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
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '34px' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Helvetica, Arial, sans-serif' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-description,
		.single .site-content .related-content .entry-title',
		array(
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.featured-content .entry-title,
		.site-content .entry-title,
		.featured-content-secondary .entry-title,
		.comments-area #reply-title,
		.comments-area .comments-title',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments-area footer .comment-author',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", serif' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.single .site-content .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '44px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-area .widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta,
		.entry-meta a,
		.site-content .entry-meta,
		.site-content .entry-header .entry-meta,
		.comments-area footer .comment-meta, .comments-area footer .comment-meta a',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-footer,
		.site-footer a',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'table td',
		array(
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
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
