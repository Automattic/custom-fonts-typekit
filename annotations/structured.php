<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif", Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3,
		h4,
		h5',
		array(
			array( 'property' => 'font-family', 'value' => 'Rokkitt, Droid Serif, Georgia, Times, serif' ),
		)
	);
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1, .site-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Rokkitt", Droid Serif, Georgia, Times, serif' ),
			array( 'property' => 'font-size', 'value' => '36px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'@font-face',
		array(
			array( 'property' => 'font-family', 'value' => 'Genericons' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-textr',
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

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input,
		select,
		textarea',
		array(
			array( 'property' => 'font', 'value' => '100% Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input[type="email"],
		input[type="text"],
		textarea',
		array(
			array( 'property' => 'font-family', 'value' =>  'Droid Serif, Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#masthead .form-search .text input[type=search]',
		array(
			array( 'property' => 'font', 'value' => 'italic 10px/13px Droid Serif, Georgia, Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation',
		array(
			array( 'property' => 'font', 'value' => 'bold 11px/14px Droid Serif, Georgia, Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery article .author',
		array(
			array( 'property' => 'font', 'value' => '11px/18px Droid Serif, Georgia, Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery .frame .tools',
		array(
			array( 'property' => 'font', 'value' => '11px/14px Droid Serif, Georgia, Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.box-notes .widget-title',
		array(
			array( 'property' => 'font', 'value' => 'normal 14px Droid Serif, Georgia, Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.portfolio-block .heading h3',
		array(
			array( 'property' => 'font', 'value' => '20px/20px Rokkitt, Georgia, Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.portfolio-block .list h5',
		array(
			array( 'property' => 'font-family', 'value' => 'Droid Serif, Georgia, Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.time-stamp',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif", Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.time-stamp span',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif", Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '28px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content article blockquote',
		array(
			array( 'property' => 'font', 'value' => '22px/24px Rokkitt, Georgia, Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content article .entry-meta ul li',
		array(
			array( 'property' => 'font', 'value' => '13px/22px Droid Serif, Georgia, Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-category:before,
		.entry-comment:before,
		.entry-date:before,
		.entry-edit:before,
		.entry-tag:before,
		.entry-user:before',
		array(
			array( 'property' => 'font-family', 'value' => 'genericons' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond input[type="text"],
		#respond textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Droid Serif, Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Droid Serif, Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .sharedaddy .sd-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Rokkitt, Droid Serif, Georgia, Times, serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-title',
		array(
			array( 'property' => 'font', 'value' => '16px/16px Rokkitt, Georgia, Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif", Georgia, Times, serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget input[type=search]',
		array(
			array( 'property' => 'font-family', 'value' => 'Droid Serif, Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer',
		array(
			array( 'property' => 'font', 'value' => 'bold 10px/12px Droid Serif, Georgia, Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer-wrapper .footer-nav',
		array(
			array( 'property' => 'font', 'value' => 'bold 11px/14px Droid Serif, Georgia, Times, serif' ),
		)
	);

	return $category_rules;
} );
