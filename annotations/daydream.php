<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Book Antiqua", "Souvenir Lt BT", "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#header h1',
		array(
			array( 'property' => 'font-size', 'value' => '2.8em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-family', 'value' => 'Georgia, "Book Antiqua", "Souvenir Lt BT", "Times New Roman", serif' ),
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
			array( 'property' => 'font-family', 'value' => 'Georgia, "Book Antiqua", "Souvenir Lt BT", "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.description',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#topbar .menu li',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.sticky h2',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.9em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post .data',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.3em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .postmetadata,
		.post .postmetadata',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.postmetadata small',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.tags_page h2',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '1.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.tags_page p',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.aside .entry',
		array(
			array( 'property' => 'font-size', 'value' => '0.7em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .aside p.postmetadata',
		array(
			array( 'property' => 'font-size', 'value' => '0.7em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#respond h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.3em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#commentform input,
		#commentform textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Verdana, Geneva, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#commentform input#submit',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Book Antiqua", "Souvenir Lt BT", "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond label',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .required',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .comment-notes,
		#respond .subscribe-label',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'p.mustbe',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ol.commentlist',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.sanda h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.9em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.archives h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.7em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#sidebar li h2',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '1.6em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer p',
		array(
			array( 'property' => 'font-size', 'value' => '0.7em' ),
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
