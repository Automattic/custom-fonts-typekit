<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

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
			array( 'property' => 'font', 'value' => 'normal 100%/1.375 "Droid Sans", Verdana, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#searchform input#s',
		array(
			array( 'property' => 'font-size', 'value' => '1.077em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#site-title',
		array(
			array( 'property' => 'font', 'value' => '1.875em/1.5 "Pacifico", Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#site-description',
		array(
			array( 'property' => 'font', 'value' => '0.75em/1.125em "Droid Sans", Verdana, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#access a',
		array(
			array( 'property' => 'font-size', 'value' => '0.813em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.featured .entry-title',
		array(
			array( 'property' => 'font', 'value' => 'normal 1em/1.3 "Droid Serif", Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.featured .entry-summary',
		array(
			array( 'property' => 'font-size', 'value' => '0.813em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.feature-slider a',
		array(
			array( 'property' => 'font-size', 'value' => '1.327' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content',
		array(
			array( 'property' => 'font-size', 'value' => '0.813em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.sticky-header',
		array(
			array( 'property' => 'font', 'value' => '0.688em "Droid Sans", Verdana, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font', 'value' => '1.188em "Droid Serif", Georgia, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.archive-title,
		body.attachment .entry-title,
		body.page .entry-title,
		body.single .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.archive-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif",Georgia,"Times New Roman",serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1,
		.entry-content h2,
		.entry-content h3,
		.entry-content h4,
		.entry-content h5,
		.entry-content h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif", Georgia, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '1.846em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.692em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.385em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.231em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.077em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '0.923em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-content dt,
		.entry-content dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-content strong,
		.entry-content strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-content cite,
		.comment-content em,
		.comment-content i,
		.entry-content cite,
		.entry-content em,
		.entry-content i',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-content blockquote cite,
		.comment-content blockquote em,
		.comment-content blockquote i,
		.entry-content blockquote cite,
		.entry-content blockquote em,
		.entry-content blockquote i',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment-content big,
		.entry-content big',
		array(
			array( 'property' => 'font-size', 'value' => '131.25%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content thead th,
		.entry-content tr th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.entry-content pre',
		array(
			array( 'property' => 'font', 'value' => '1em Monaco, Courier New, Courier, monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content sub,
		.entry-content sup',
		array(
			array( 'property' => 'font-size', 'value' => '0.769em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta',
		array(
			array( 'property' => 'font', 'value' => '0.688em/1.4 Verdana, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content nav .nav-next a,
		#content nav .nav-previous a,
		#content nav .next-image a,
		#content nav .previous-image a',
		array(
			array( 'property' => 'font-size', 'value' => '0.688em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-link',
		array(
			array( 'property' => 'font-size', 'value' => '0.846em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '0.813em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font', 'value' => '1.462em/1.9 "Droid Serif", Georgia, "Times New Roman", serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar caption',
		array(
			array( 'property' => 'font-size', 'value' => '0.923em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar thead th',
		array(
			array( 'property' => 'font-size', 'value' => '0.769em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar #today',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar #next,
		#wp-calendar #prev',
		array(
			array( 'property' => 'font-size', 'value' => '0.769em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.rss-date',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-area .blogroll li',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-area .blogroll li a',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#site-info',
		array(
			array( 'property' => 'font-size', 'value' => '0.688em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption .wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '0.846em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#comments-title',
		array(
			array( 'property' => 'font', 'value' => '1.125em/1.125 "Droid Serif", Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.nocomments,
		.nopassword',
		array(
			array( 'property' => 'font-size', 'value' => '1.125em' ),
			array( 'property' => 'font-weight', 'value' => '100' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments li.pingback p',
		array(
			array( 'property' => 'font-size', 'value' => '0.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments .comment-author',
		array(
			array( 'property' => 'font-size', 'value' => '0.75em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments .comment-author cite',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments .comment-meta',
		array(
			array( 'property' => 'font-size', 'value' => '0.688em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments .comment-content p',
		array(
			array( 'property' => 'font-size', 'value' => '0.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#respond h3',
		array(
			array( 'property' => 'font', 'value' => '1.125em/1.125 "Droid Serif", Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond p,
		.comment-notes,
		.logged-in-as',
		array(
			array( 'property' => 'font-size', 'value' => '0.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-reply-link',
		array(
			array( 'property' => 'font-size', 'value' => '0.688em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#cancel-comment-reply-link',
		array(
			array( 'property' => 'font', 'value' => 'bold 0.611em "Droid Sans", Verdana, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond input[type=submit]',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .form-allowed-tags',
		array(
			array( 'property' => 'font-size', 'value' => '0.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comment-nav-above a,
		#comment-nav-below a',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal !important' ),
		)
	);

	return $category_rules;
} );