<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-size', 'value' => 'medium !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.feedback,
		li,
		p',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		th',
		array(
			array( 'property' => 'font', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2.storytitle',
		array(
			array( 'property' => 'font', 'value' => 'italic 150% Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#header h1',
		array(
			array( 'property' => 'font', 'value' => '150% Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#header h3',
		array(
			array( 'property' => 'font', 'value' => 'normal 90% "lucida grande", "trebuchet ms", georgia, times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.meta',
		array(
			array( 'property' => 'font', 'value' => 'bold 9px/13px "lucida grande", "trebuchet ms", georgia, times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#linkcat-1 h2',
		array(
			array( 'property' => 'font', 'value' => 'bold  "lucida grande", "trebuchet ms", georgia, times, serif' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.meta,
		.meta a',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'cite',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.credit',
		array(
			array( 'property' => 'font-size', 'value' => '80%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'abbr,
		acronym,
		span.caps',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ul.post-meta span.post-meta-key',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'li#search',
		array(
			array( 'property' => 'font-size', 'value' => '80%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#menu input#sub',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#menu li',
		array(
			array( 'property' => 'font-family', 'value' => '"lucida grande", "trebuchet ms", Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#menu h2',
		array(
			array( 'property' => 'font-size', 'value' => '80%' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#menu ul ul li',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#menu ul ul.children',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#calendar',
		array(
			array( 'property' => 'font-size', 'value' => '80%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar',
		array(
			array( 'property' => 'font-size', 'value' => '80%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar caption',
		array(
			array( 'property' => 'font', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-size', 'value' => '120%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#wp-calendar td',
		array(
			array( 'property' => 'font', 'value' => 'normal 100% \'Lucida Grande\', \'Lucida Sans Unicode\', Verdana, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#wp-calendar th',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#trackback p',
		array(
			array( 'property' => 'font-family', 'value' => '"lucida grande", "trebuchet ms", Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '70%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments',
		array(
			array( 'property' => 'font-size', 'value' => '110%' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentlist li cite',
		array(
			array( 'property' => 'font-family', 'value' => '"lucida grande", "trebuchet ms", Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '70%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#reply-title',
		array(
			array( 'property' => 'font-size', 'value' => '110%' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentform p',
		array(
			array( 'property' => 'font-family', 'value' => '"lucida grande", "trebuchet ms", Arial, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '70%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.wp-caption p.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	return $category_rules;
} );
