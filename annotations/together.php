<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
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
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5,f
		h6',
		array(
			array( 'property' => 'font-size', 'value' => '1.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6,
		#respond #reply-title',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#portfolio-wrapper .jetpack-portfolio .project-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.8em' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '1.75em' ),
		),
		array(
			'screen and (max-width: 800px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		),
		array(
			'screen and (max-width: 800px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.25em' ),
		),
		array(
			'screen and (max-width: 800px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		),
		array(
			'screen and (max-width: 800px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5,
		h6',
		array(
			array( 'property' => 'font-size', 'value' => '0.75em' ),
		),
		array(
			'screen and (max-width: 800px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '0.5em' ),
		),
		array(
			'screen and (max-width: 800px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-info,
		.wp-caption .wp-caption-text,
		.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#jp-carousel-comment-form-button-submit,
		input#carousel-reblog-submit',
		array(
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
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
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Menlo, Consolas, "Courier New", monospace' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Menlo, Consolas, "Courier New", monospace' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.btn',
		array(
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .required',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '3em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.blog .format-image.has-post-thumbnail .entry-title,
		 .archive .format-image.has-post-thumbnail .entry-title,
		 .search .format-image.has-post-thumbnail .entry-title,
		 .blog .format-video .entry-title,
		.archive .format-video .entry-title,
		.search .format-video .entry-title,
		.blog .format-audio .entry-title,
		.archive .format-audio .entry-title,
		.search .format-audio .entry-title,
		.blog .format-status .entry-title,
		.archive .format-status .entry-title,
		.search .format-status .entry-title,
		.blog .format-aside .entry-title,
		.archive .format-aside .entry-title,
		.search .format-aside .entry-title,
		.blog .format-quote .entry-title,
		.archive .format-quote .entry-title,
		.search .format-quote .entry-title,
		.blog .format-link .entry-title,
		.archive .format-link .entry-title,
		.search .format-link .entry-title,
		.single .format-status .entry-title,
		.single .format-aside .entry-title,
		.single .format-link .entry-title,
		.blog .format-link .entry-title,
		.archive .format-link .entry-title,
		.search .format-link .entry-title,
		.single .format-link .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments .comment-top,
		#comments .comment-reply-link,
		#comments .comment-edit-link,
		#comments .cancel-comment a',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.js .blog .format-status .entry-summary,
		.js .archive .format-status .entry-summary,
		.js .search .format-status .entry-summary,
		.js .single .format-status .entry-summary',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		)
	);


	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.error:after,
		.notice:after,
		.success:after,
		.update:after',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_recent_entries .post-date,
		#respond p.logged-in-as',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation ul,
		.widget',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.js .menu-social li a:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-navigation .nav-next a,
		.comment-navigation .nav-previous a,
		.paging-navigation .nav-next a,
		.paging-navigation .nav-previous a,
		.post-navigation .nav-next a,
		.post-navigation .nav-previous a',
		array(
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span',
		array(
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.widget_recent_entries .post-date:before',
		array(
			array( 'property' => 'font-family', 'value' => '"fontawesome", arial' ),
			array( 'property' => 'font-weight', 'value' => '200' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond .form-submit input',
		array(
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-description,
		.site-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Gentium Book Basic", serif' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '72px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '27px' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '54px' ),
		),
		array(
			'screen and (max-width: 1000px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#jp-carousel-comment-form-button-submit,
		input#carousel-reblog-submit',
		array(
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	return $category_rules;
} );
