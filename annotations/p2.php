<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'address,
		caption,
		dfn,
		#postbox h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		th,
		var',
		array(
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#postbox textarea#posttext,
		textarea.posttext',
		array(
			array( 'property' => 'font-size', 'value' => '1.3em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#postbox label',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '1.6em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#main .transparent-title',
		array(
			array( 'property' => 'font-size', 'value' => '0' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond p label',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond #cancel-comment-reply-link,
		body,
		form *,
		input,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#header h1',
		array(
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#help dd,
		#postbox label,
		.inlineediting input.title,
		#postbox h1,
		h2,
		h3',
		array(
			array( 'property' => 'font-family', 'value' => '"HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '200' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		pre',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Consolas, "Courier New", monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'html',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-size', 'value' => '62.5%' ),
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
		em',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		pre',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.category-quote blockquote p',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '4.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#header small',
		array(
			array( 'property' => 'font-size', 'value' => '1.3em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '2.0em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-weight', 'value' => '500' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.postcontent h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => '"HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer p',
		array(
			array( 'property' => 'font-size', 'value' => '1.3em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#main',
		array(
			array( 'property' => 'font-size', 'value' => '1.3em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#postbox',
		array(
			array( 'property' => 'font-size', 'value' => '1.4em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#postbox .inputarea',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#postbox textarea#posttext,
		textarea.posttext',
		array(
			array( 'property' => 'font-size', 'value' => '1.3em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wrapper form input[type="text"],
		.inlineediting input[type="text"]',
		array(
			array( 'property' => 'font-size', 'value' => '1.3em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#postbox label',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '1.6em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#main button,
		#main input[type="submit"],
		#postbox button,
		#postbox input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '1.3em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#main .controls',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#main h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#main h4 a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#main h4 span a',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.postcontent h1',
		array(
			array( 'property' => 'font-size', 'value' => '2.0em' ),
			array( 'property' => 'font-weight', 'value' => '500' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#main .postcontent h2,
		.inlineediting input.title',
		array(
			array( 'property' => 'font-size', 'value' => '1.8em' ),
			array( 'property' => 'font-weight', 'value' => '500' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.postcontent h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.6em' ),
			array( 'property' => 'font-weight', 'value' => '500' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#main .postcontent h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.4em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.postcontent h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.3em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.postcontent h6',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#main ol,
		#main p,
		#main ul',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond #cancel-comment-reply-link',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#respond h3 small',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#main p.comment-notes,
		#main p.logged-in-as,
		#main p.must-log-in',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond textarea,
		.textedit textarea',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#main span.meta',
		array(
			array( 'property' => 'font-size', 'value' => '0.85em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#main .meta em',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#main p.meta',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#sidebar h2',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '1.7em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#sidebar ul',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#sidebar ul li',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#sidebar ul li ul li ul',
		array(
			array( 'property' => 'font-size', 'value' => '1.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption p.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.ac_results',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'form.textedit textarea',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#notify',
		array(
			array( 'property' => 'font-size', 'value' => '1.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#help dl',
		array(
			array( 'property' => 'font-size', 'value' => '2.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#postpage h2.title',
		array(
			array( 'property' => 'font-size', 'value' => '1px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#post-types li',
		array(
			array( 'property' => 'font-size', 'value' => '9px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.invisible',
		array(
			array( 'property' => 'font-size', 'value' => '1px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption p.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .mu_register label',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	return $category_rules;
} );
