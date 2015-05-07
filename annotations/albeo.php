<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font', 'value' => 'normal 12px "Verdana", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font', 'value' => 'normal 12px/12px "Verdana", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3,
		h4',
		array(
			array( 'property' => 'font-family', 'value' => '"Trebuchet MS"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'.header h1',
		array(
			array( 'property' => 'font', 'value' => 'normal 38px/38px "Trebuchet MS"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#main-menu .menu li',
		array(
			array( 'property' => 'font', 'value' => 'bold 14px/14px "Trebuchet MS"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.title',
		array(
			array( 'property' => 'font', 'value' => 'normal 28px/30px "Trebuchet MS"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.p-head h1',
		array(
			array( 'property' => 'font', 'value' => 'normal 28px/30px "Trebuchet MS"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.p-head h2',
		array(
			array( 'property' => 'font', 'value' => 'normal 26px/28px "Trebuchet MS"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.p-head h3',
		array(
			array( 'property' => 'font', 'value' => 'normal 21px/23px "Trebuchet MS"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.p-who-date',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.p-con p',
		array(
			array( 'property' => 'font', 'value' => 'normal 12px/17px \'Verdana\'' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.p-con ol li',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.p-con ul li',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.p-con blockquote p',
		array(
			array( 'property' => 'font', 'value' => 'normal 13px/19px "Georgia"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.p-con blockquote li',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.p-det li',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.p-tag',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-page h1',
		array(
			array( 'property' => 'font', 'value' => 'normal 28px/30px "Trebuchet MS"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-page h2',
		array(
			array( 'property' => 'font', 'value' => 'normal 26px/28px "Trebuchet MS"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-page p',
		array(
			array( 'property' => 'font', 'value' => 'normal 12px/17px \'Verdana\'' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-page ol li',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-page ul li',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-page blockquote p',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-page blockquote li',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption p.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.nav',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '10px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.sr',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.sr h3',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.search input',
		array(
			array( 'property' => 'font', 'value' => 'normal 11px/14px \'Verdana\'' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.categ .current-cat',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget li ul li',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_tag_cloud',
		array(
			array( 'property' => 'font-family', 'value' => '"Trebuchet MS"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.recent .tabs li',
		array(
			array( 'property' => 'font', 'value' => 'bold 10px/10px "Verdana", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#r-tags',
		array(
			array( 'property' => 'font-family', 'value' => '"Trebuchet MS"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.com-list h3',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.com-list blockquote',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.com-con',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.com-name',
		array(
			array( 'property' => 'font', 'value' => 'bold 14px/14px "Trebuchet MS"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.com-date',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#respond h3',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond p strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#respond input',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond label',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .required',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .subscribe-label',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .comment-notes',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.footer p',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	return $category_rules;
} );
