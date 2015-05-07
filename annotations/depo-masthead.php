<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'a,
		abbr,
		acronym,
		address,
		applet,
		big,
		blockquote,
		caption,
		cite,
		code,
		dd,
		del,
		dfn,
		div,
		dl,
		dt,
		em,
		fieldset,
		font,
		form,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		html,
		iframe,
		img,
		ins,
		kbd,
		label,
		legend,
		li,
		object,
		ol,
		p,
		pre,
		q,
		s,
		samp,
		small,
		span,
		strike,
		strong,
		sub,
		sup,
		table,
		tbody,
		td,
		tfoot,
		th,
		thead,
		tr,
		tt,
		ul,
		var',
		array(
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-family', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'body',
		array(
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-family', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'caption,
		td,
		th',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font', 'value' => '88%/1.28em Georgia, serif' ),
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
			array( 'property' => 'font-family', 'value' => '"Courier New",Courier,monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'em',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#container h1.sitename',
		array(
			array( 'property' => 'font', 'value' => '4em/33px Arial, Helvetica, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#container h1',
		array(
			array( 'property' => 'font-size', 'value' => '4em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#menu ul li a,
		#menu ul li a:link,
		#menu ul li a:visited',
		array(
			array( 'property' => 'font', 'value' => 'bold 1em/1em Arial, Helvetica, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .entry',
		array(
			array( 'property' => 'font-size', 'value' => '1.09em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#home #content',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .postmetadata',
		array(
			array( 'property' => 'font', 'value' => 'bold .86em/1.166em Arial, Helvetica, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.72em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.4em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.3em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content h6',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#home h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.28em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content small',
		array(
			array( 'property' => 'font', 'value' => 'italic .86em/1.166em normal Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content small a,
		#content small a:link,
		#content small a:visited,
		#content small strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .readmore a,
		#content .readmore a:link,
		#content .readmore a:visited',
		array(
			array( 'property' => 'font', 'value' => '0.6875em/2.5em Arial, Helvetica, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.pagetitle',
		array(
			array( 'property' => 'font-size', 'value' => '1.7142em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.navigation .arrow',
		array(
			array( 'property' => 'font-size', 'value' => '9.28em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation .link .after,
		.navigation .link .before',
		array(
			array( 'property' => 'font', 'value' => 'bold .86em/1.166em Arial,Helvetica,"Helvetica Neue",sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.navigation .link .title',
		array(
			array( 'property' => 'font-size', 'value' => '1.285em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation .link .date',
		array(
			array( 'property' => 'font-size', 'value' => '0.86em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#showcomments',
		array(
			array( 'property' => 'font', 'value' => 'normal .86em/1.166em Arial,Helvetica,"Helvetica Neue",sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#comments .commentmetadata cite',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#comments .commentmetadata small',
		array(
			array( 'property' => 'font-size', 'value' => '0.86em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.possibly-related p strong',
		array(
			array( 'property' => 'font', 'value' => 'normal .86em/1.166em Arial,Helvetica,"Helvetica Neue",sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.possibly-related li',
		array(
			array( 'property' => 'font-size', 'value' => '0.89em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#comments form .rules',
		array(
			array( 'property' => 'font-size', 'value' => '0.92em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond label',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .required',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .subscribe-label',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .comment-notes',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments form label',
		array(
			array( 'property' => 'font', 'value' => 'bold .78em/2em Arial,Helvetica,"Helvetica Neue",sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments form .form span',
		array(
			array( 'property' => 'font', 'value' => '0.78em/2em Arial,Helvetica,"Helvetica Neue",sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#sidebar',
		array(
			array( 'property' => 'font-size', 'value' => '0.928em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#sidebar h2,
		#sidebar h3',
		array(
			array( 'property' => 'font', 'value' => 'bold 1em/1em Arial, Helvetica, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer',
		array(
			array( 'property' => 'font-size', 'value' => '0.928em' ),
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
