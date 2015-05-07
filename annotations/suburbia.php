<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'caption,
		td,
		th',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		input,
		textarea',
		array(
			array( 'property' => 'font', 'value' => 'normal 12px "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.footer',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'cite,
		em,
		i',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre',
		array(
			array( 'property' => 'font', 'value' => '13px "Courier 10 Pitch", Courier, monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd',
		array(
			array( 'property' => 'font', 'value' => '13px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'sub,
		sup',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input#s',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#site-title',
		array(
			array( 'property' => 'font', 'value' => '300 25px/30px "Helvetica Neue", Helvetica, Verdana, "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#access',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#access ul ul',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.grid h2',
		array(
			array( 'property' => 'font', 'value' => 'normal 15px/23px Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.grid p',
		array(
			array( 'property' => 'font', 'value' => 'normal 13px/21px Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.grid .time',
		array(
			array( 'property' => 'font-size', 'value' => '9px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.grid.sticky h2',
		array(
			array( 'property' => 'font', 'value' => 'normal 17px/25px Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.grid.sticky p',
		array(
			array( 'property' => 'font', 'value' => 'normal 14px/22px Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#single h1',
		array(
			array( 'property' => 'font', 'value' => 'normal 22px/30px Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#single h2',
		array(
			array( 'property' => 'font', 'value' => 'normal 19px/27px Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#single h3',
		array(
			array( 'property' => 'font', 'value' => 'bold 16px/24px "Helvetica Neue", Helvetica,Verdana, "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#single h4',
		array(
			array( 'property' => 'font', 'value' => 'bold 14px/22px "Helvetica Neue", Helvetica,Verdana, "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#single h5',
		array(
			array( 'property' => 'font', 'value' => 'bold 13px/21px "Helvetica Neue", Helvetica,Verdana, "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#single h6',
		array(
			array( 'property' => 'font', 'value' => 'bold 12px/20px "Helvetica Neue", Helvetica,Verdana, "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#single p',
		array(
			array( 'property' => 'font', 'value' => 'normal 14px/22px Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#single strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#single th',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
			array( 'property' => 'font-weight', 'value' => '500' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#single #author-info h3',
		array(
			array( 'property' => 'font', 'value' => 'bold 13px/21px "Helvetica Neue",Helvetica,Verdana,"Lucida Sans Unicode","Lucida Grande","Lucida Sans",Arial,sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#single h3.edit-link',
		array(
			array( 'property' => 'font', 'value' => 'bold 13px/21px "Helvetica Neue", Helvetica,Verdana, "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption p.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font', 'value' => 'normal 12px/18px "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry .gallery .gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.archive-heading,
		.aside h3,
		.meta h3',
		array(
			array( 'property' => 'font', 'value' => 'bold 13px/21px "Helvetica Neue", Helvetica,Verdana, "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.navigation h3',
		array(
			array( 'property' => 'font', 'value' => 'bold 13px/21px "Helvetica Neue", Helvetica,Verdana, "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font', 'value' => 'bold 13px/21px "Helvetica Neue", Helvetica, Verdana, "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_calendar #wp-calendar th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#single h3#comments-title,
		#single h3#reply-title',
		array(
			array( 'property' => 'font', 'value' => 'bold 13px/21px "Helvetica Neue",Helvetica,Verdana,"Lucida Sans Unicode","Lucida Grande","Lucida Sans",Arial,sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-date',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#single .sharedaddy h3',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	return $category_rules;
} );
