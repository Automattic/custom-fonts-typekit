<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Garamond, "Hoefler Text",Times New Roman, Times, serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-family', 'value' => '\'Raleway\', "Helvetica Neue", Arial, Helvetica, "Nimbus Sans L", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '25px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1.recent-title',
		array(
			array( 'property' => 'font-family', 'value' => '\'Raleway\', "Helvetica Neue", Arial, Helvetica, "Nimbus Sans L", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-family', 'value' => 'Garamond, "Hoefler Text",Times New Roman, Times, serif' ),
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'pre',
		array(
			array( 'property' => 'font', 'value' => '13px "Courier 10 Pitch", Courier, monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font', 'value' => '13px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#site-title',
		array(
			array( 'property' => 'font-family', 'value' => '\'Raleway\', "Helvetica Neue", Arial, Helvetica, "Nimbus Sans L", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '60px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#site-description',
		array(
			array( 'property' => 'font-family', 'value' => '\'Raleway\', "Helvetica Neue", Arial, Helvetica, "Nimbus Sans L", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '25px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.recent-post .entry-meta',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-header .entry-meta',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'footer.entry-meta',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#comments-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#reply-title',
		array(
			array( 'property' => 'font-family', 'value' => '\'Raleway\',"Helvetica Neue",Arial,Helvetica,"Nimbus Sans L",sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '25px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-family', 'value' => '\'Raleway\', "Helvetica Neue", Arial, Helvetica, "Nimbus Sans L", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '21px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#main div.sharedaddy h3.sd-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '10px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	return $category_rules;
} );
