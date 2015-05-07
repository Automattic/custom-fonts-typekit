<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html',
		array(
			array( 'property' => 'font-size', 'value' => '55.0%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Arimo", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
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
			array( 'property' => 'font-family', 'value' => '"Arimo", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '25.6px' ),
			array( 'property' => 'font-size', 'value' => '2.56rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '12.5px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-size', 'value' => '1.2rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '25.6px' ),
			array( 'property' => 'font-size', 'value' => '2.56rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
			array( 'property' => 'font-weight', 'value' => '200' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2.comments-title',
		array(
			array( 'property' => 'font-size', 'value' => '25.6px' ),
			array( 'property' => 'font-size', 'value' => '2.56rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.nav-next a,
		.nav-next a:visited,
		.nav-previous a,
		.nav-previous a:visited',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.showsub-toggle:after',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.social-links ul a:before',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#mobile-link:before',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#mobile-panel h1.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-size', 'value' => '1.8rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.tagcloud a,
		.tags-links a,
		.wp_widget_tag_cloud a',
		array(
			array( 'property' => 'font-size', 'value' => '14px !important' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#widget-link:before',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#colophon',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '1.4rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '40.96px' ),
			array( 'property' => 'font-size', 'value' => '4.096rem' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
			array( 'property' => 'font-size', 'value' => '3.2rem' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '25.6px' ),
			array( 'property' => 'font-size', 'value' => '2.56rem' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '12.5px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html',
		array(
			array( 'property' => 'font-size', 'value' => '62.5%' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '40.96px' ),
			array( 'property' => 'font-size', 'value' => '4.096rem' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
			array( 'property' => 'font-size', 'value' => '3.2rem' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '25.6px' ),
			array( 'property' => 'font-size', 'value' => '2.56rem' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '12.5px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html',
		array(
			array( 'property' => 'font-size', 'value' => '62.5%' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#secondary',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#masthead',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
		),
		array(
			'only screen and (min-width: 40.063em) and (max-width: 64em)',
		)
	);

	return $category_rules;
} );
