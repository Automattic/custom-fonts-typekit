<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.event-date',
		array(
			array( 'property' => 'font-family', 'value' => 'Cutive' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.event-date span',
		array(
			array( 'property' => 'font-family', 'value' => 'Raleway' ),
			array( 'property' => 'font-size', 'value' => '3.7142857143em' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
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
		'button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => 'Raleway, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.lead',
		array(
			array( 'property' => 'font-size', 'value' => '21px' ),
			array( 'property' => 'font-weight', 'value' => '200' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '85%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'em',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'cite',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
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
			array( 'property' => 'font-family', 'value' => 'Cutive, Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'h1 small,
		h2 small,
		h3 small,
		h4 small,
		h5 small,
		h6 small',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '24.0px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '18.0px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '16.0px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '15.0px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '11.9px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'h1 small',
		array(
			array( 'property' => 'font-size', 'value' => '24.5px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'h2 small',
		array(
			array( 'property' => 'font-size', 'value' => '17.5px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'h3 small',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'h4 small',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'abbr.initialism',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote p',
		array(
			array( 'property' => 'font-size', 'value' => '17.5px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'address',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		pre',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Menlo, Consolas, "Courier New", monospace' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'pre',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'legend',
		array(
			array( 'property' => 'font-size', 'value' => '21px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'legend small',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input,
		label,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Raleway, Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.uneditable-input,
		input[type="color"],
		input[type="date"],
		input[type="datetime"],
		input[type="datetime-local"],
		input[type="email"],
		input[type="month"],
		input[type="number"],
		input[type="password"],
		input[type="search"],
		input[type="tel"],
		input[type="text"],
		input[type="time"],
		input[type="url"],
		input[type="week"],
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.input-append,
		.input-prepend',
		array(
			array( 'property' => 'font-size', 'value' => '0' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.input-append .dropdown-menu,
		.input-append .popover,
		.input-append .uneditable-input,
		.input-append input,
		.input-append select,
		.input-prepend .dropdown-menu,
		.input-prepend .popover,
		.input-prepend .uneditable-input,
		.input-prepend input,
		.input-prepend select',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.input-append .add-on,
		.input-prepend .add-on',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.dropdown-menu > li > a',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.close',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.btn,
		.comments-area .comment-reply-link',
		array(
			array( 'property' => 'font-size', 'value' => '0.9285714286em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.btn-large',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.btn-small',
		array(
			array( 'property' => 'font-size', 'value' => '11.9px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.btn-mini',
		array(
			array( 'property' => 'font-size', 'value' => '10.5px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.btn-group',
		array(
			array( 'property' => 'font-size', 'value' => '0' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.btn-toolbar',
		array(
			array( 'property' => 'font-size', 'value' => '0' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.btn-group > .btn,
		.btn-group > .dropdown-menu,
		.btn-group > .popover,
		.comments-area .btn-group > .comment-reply-link',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.btn-group > .btn-mini',
		array(
			array( 'property' => 'font-size', 'value' => '10.5px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.btn-group > .btn-small',
		array(
			array( 'property' => 'font-size', 'value' => '11.9px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.btn-group > .btn-large',
		array(
			array( 'property' => 'font-size', 'value' => '17.5px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.nav-header',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navbar .brand',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-weight', 'value' => '200' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navbar-search .search-query',
		array(
			array( 'property' => 'font-family', 'value' => 'Raleway, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pagination-large ul > li > a,
		.pagination-large ul > li > span',
		array(
			array( 'property' => 'font-size', 'value' => '17.5px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pagination-small ul > li > a,
		.pagination-small ul > li > span',
		array(
			array( 'property' => 'font-size', 'value' => '11.9px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pagination-mini ul > li > a,
		.pagination-mini ul > li > span',
		array(
			array( 'property' => 'font-size', 'value' => '10.5px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.tooltip',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.popover-title',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.eb-carousel-control',
		array(
			array( 'property' => 'font-size', 'value' => '60px' ),
			array( 'property' => 'font-weight', 'value' => '100' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.hide-text',
		array(
			array( 'property' => 'font', 'value' => '0/0 a' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.hide-text',
		array(
			array( 'property' => 'font', 'value' => '0/0 a' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.nav-collapse .dropdown-menu a,
		.nav-collapse .nav > li > a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments-area .nav-collapse .comment-reply-link,
		.nav-collapse .btn,
		.nav-collapse .comments-area .comment-reply-link',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'@font-face',
		array(
			array( 'property' => 'font-family', 'value' => 'Cutive' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '0.8571428571em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'header .logo-text h1',
		array(
			array( 'property' => 'font', 'value' => '3.7857142857em/1 Cutive' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'header .logo-text h5',
		array(
			array( 'property' => 'font', 'value' => '1em/1 Raleway' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'header .logo-text h1',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'div.menu li ul li ul a,
		nav li ul li ul a',
		array(
			array( 'property' => 'font-size', 'value' => '0.8571428571em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'div.menu a,
		nav a',
		array(
			array( 'property' => 'font', 'value' => '1em/4 Cutive, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-footer .blog-info a',
		array(
			array( 'property' => 'font-family', 'value' => 'Cutive, Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.sidebar .widget li a',
		array(
			array( 'property' => 'font-family', 'value' => '"Cutive"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.sidebar .widget li',
		array(
			array( 'property' => 'font', 'value' => '0.9285714286em/1.5 Raleway' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.sidebar .widget li span',
		array(
			array( 'property' => 'font-family', 'value' => '"Cutive"' ),
			array( 'property' => 'font-size', 'value' => '0.7857142857em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle > span',
		array(
			array( 'property' => 'font-family', 'value' => 'Raleway, Helvetica, Arial, sans-serif' ),
		)
	);

	return $category_rules;
} );
