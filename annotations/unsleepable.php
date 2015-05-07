<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#title',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#title a',
		array(
			array( 'property' => 'font-family', 'value' => '"Lucida Grande", Verdana, Arial, Sans-Serif' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => '"Lucida Grande", Verdana, Arial, Sans-Serif' ),
			array( 'property' => 'font-size', 'value' => '11px !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ul.secondary',
		array(
			array( 'property' => 'font', 'value' => '12px Trebuchet MS' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3,
		h4',
		array(
			array( 'property' => 'font-family', 'value' => '"Lucida Grande", Verdana, Arial, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.pagetitle h2',
		array(
			array( 'property' => 'font-size', 'value' => '23px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-family', 'value' => 'Helvetica, Arial, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.secondary h2',
		array(
			array( 'property' => 'font-family', 'value' => 'Helvetica, Arial, Sans-Serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.secondary h2 a:hover',
		array(
			array( 'property' => 'font-family', 'value' => 'Helvetica, Arial, Sans-Serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.permalink .primary .aside h3,
		.primary h3,
		.primary h4',
		array(
			array( 'property' => 'font-size', 'value' => '2.2em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.primary .aside h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.6em' ),
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
		'.primary .metalink a,
		.primary .metalink a:visited,
		.secondary .metalink a,
		.secondary .metalink a:visited,
		.secondary span a,
		.secondary span a:visited',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments .primary .metalink,
		.primary .item .itemhead .metalink',
		array(
			array( 'property' => 'font-size', 'value' => '1.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.primary .aside .itemhead .metalink',
		array(
			array( 'property' => 'font-size', 'value' => '1.4em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.permalink .primary .aside .itemtext',
		array(
			array( 'property' => 'font-size', 'value' => '1.4em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.metadata',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.metadata a',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.chronodata',
		array(
			array( 'property' => 'font-family', 'value' => 'Helvetica, Arial, Sans-Serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '23px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.primary .item .itemtext',
		array(
			array( 'property' => 'font', 'value' => '1.2em Trebuchet MS' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.commentmetadata',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments .commentlist li .commentauthor',
		array(
			array( 'property' => 'font-size', 'value' => '1.4em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments .commentlist li .counter',
		array(
			array( 'property' => 'font', 'value' => 'normal 1.5em Helvetica, Sans-Serif' ),
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
			array( 'property' => 'font', 'value' => '0.8em Arial, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments #leavecomment',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments #loading',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'input[type=text],
		textarea',
		array(
			array( 'property' => 'font', 'value' => '1.1em Trebuchet MS' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.itemtext a',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.itemtext a:hover',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code',
		array(
			array( 'property' => 'font', 'value' => '1.3em \'Courier New\', Courier, Fixed' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'abbr,
		acronym',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.item2',
		array(
			array( 'property' => 'font', 'value' => '1.2em Trebuchet MS' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.itemtext2',
		array(
			array( 'property' => 'font', 'value' => '1.2em Trebuchet MS' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.delicious-extended',
		array(
			array( 'property' => 'font-size', 'value' => '12px !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments h4 a',
		array(
			array( 'property' => 'font-family', 'value' => 'Trebuchet MS !important' ),
			array( 'property' => 'font-size', 'value' => '22px !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments h4',
		array(
			array( 'property' => 'font-family', 'value' => 'Trebuchet MS !important' ),
			array( 'property' => 'font-size', 'value' => '22px !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#glass-bottomblock',
		array(
			array( 'property' => 'font-family', 'value' => 'Trebuchet MS' ),
			array( 'property' => 'font-size', 'value' => '1.15em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#glass-bottomblock h2',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-family', 'value' => 'Helvetica, Arial, Sans-Serif !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption p.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	return $category_rules;
} );
