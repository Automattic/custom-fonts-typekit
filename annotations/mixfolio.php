<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'div.subheader,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1 a,
		h2 a,
		h3 a,
		h4 a,
		h5 a,
		h6 a',
		array(
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '46px' ),
			array( 'property' => 'font-size', 'value' => '4.6rem' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '35px' ),
			array( 'property' => 'font-size', 'value' => '3.5rem' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
			array( 'property' => 'font-size', 'value' => '2.8rem' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'div.subheader,
		h4',
		array(
			array( 'property' => 'font-size', 'value' => '21px' ),
			array( 'property' => 'font-size', 'value' => '2.1rem' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-size', 'value' => '1.8rem' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-size', 'value' => '1.5rem' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.subheader,
		.widget-title,
		div.subheader',
		array(
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#site-title,
		#site-title a,
		#site-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#site-title,
		#site-title a',
		array(
			array( 'property' => 'font-size', 'value' => '46px' ),
			array( 'property' => 'font-size', 'value' => '4.6rem' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#site-description',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'div.lead,
		p.lead',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-size', 'value' => '1.8rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		p',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-size', 'value' => '1.5rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'em',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '60%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-size', 'value' => '1.2rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'abbr,
		acronym',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'table tbody tr td,
		table thead tr th',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'table tbody tr th,
		table thead tr th',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	return $category_rules;
} );
