<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font', 'value' => '72% Verdana, "Bitstream Vera Sans", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'input#s',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.secondary',
		array(
			array( 'property' => 'font', 'value' => '1em/1.5em "Lucida Grande",Verdana,Arial,Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2,
		h3,
		h4',
		array(
			array( 'property' => 'font-family', 'value' => '"lucida grande",tahoma,arial,helvetica,sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.pagetitle h2',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.primary h2',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.secondary h2',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.secondary p',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.sb-module',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code',
		array(
			array( 'property' => 'font', 'value' => '1em "Courier New",Courier,Fixed' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.commentlist blockquote,
		blockquote',
		array(
			array( 'property' => 'font-family', 'value' => 'Trebuchet MS, Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ul.sbmenu li a',
		array(
			array( 'property' => 'font', 'value' => '1.5em Verdana, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#header h1',
		array(
			array( 'property' => 'font-family', 'value' => 'Trebuchet MS, Serif' ),
			array( 'property' => 'font-size', 'value' => '2.5em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#header .description',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.permalink .primary .aside h3,
		.primary h3,
		.primary h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.8em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.primary .aside h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.itemtext h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.7em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.itemtext h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.permalink .primary .aside .itemtext',
		array(
			array( 'property' => 'font-family', 'value' => 'Trebuchet MS, Serif' ),
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.aside',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.metadata',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.aside .metadata',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.primary .item .itemtext',
		array(
			array( 'property' => 'font-family', 'value' => 'Trebuchet MS, Serif' ),
			array( 'property' => 'font', 'value' => '1.1em/1.5em "Lucida Grande",Verdana,Arial,Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments .commentlist li .commentauthor',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments .pinglist',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments .pinglist li .commentauthor',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments .pinglist li small',
		array(
			array( 'property' => 'font', 'value' => '1em Arial,Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments #leavecomment',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'input[type=text],
		textarea',
		array(
			array( 'property' => 'font', 'value' => '1.1em Verdana,Arial,Helvetica,Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.activityentry',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer small',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp_caption_dd',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.sticky h3',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	return $category_rules;
} );
