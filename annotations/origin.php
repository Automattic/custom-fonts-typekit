<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#site-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '2.30769em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#site-description',
		array(
			array( 'property' => 'font-family', 'value' => 'Bitter, Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-size', 'value' => '1.84615em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hentry .entry-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Bitter, Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-size', 'value' => '1.23077em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.single .entry-title,
		.page .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.84615em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.sidebar .widget-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Bitter, Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-size', 'value' => '0.769231em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed h1,
		.hfeed h2,
		.hfeed h3,
		.hfeed h4,
		.hfeed h5,
		.hfeed h6',
		array(
			array( 'property' => 'font-family', 'value' => 'Bitter, Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed h1',
		array(
			array( 'property' => 'font-size', 'value' => '2.76923em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.84615em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.53846em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.38462em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.23077em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hfeed h6',
		array(
			array( 'property' => 'font-size', 'value' => '1.07692em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font', 'value' => '0.8125em/1.692307em Bitter, Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'cite,
		em',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'address',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ins',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'code,
		kbd,
		pre,
		samp',
		array(
			array( 'property' => 'font-family', 'value' => '\'courier new\', monospace' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, monospace, Courier, "Courier New"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'code',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, monospace, Courier, "Courier New"' ),
			array( 'property' => 'font-size', 'value' => '0.8461538461538462em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dl dt',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-size', 'value' => '1.230769230769231em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote,
		blockquote blockquote blockquote',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-size', 'value' => '1.153846153846154em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'form input,
		form label,
		form textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Bitter, Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.byline',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-size', 'value' => '0.8461538461538462em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.author,
		.category,
		.edit,
		.published',
		array(
			array( 'property' => 'font-family', 'value' => '"Bitter", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.commentlist .comment-reply-link,
		.commentlist .edit,
		.commentlist .published',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	return $category_rules;
} );
