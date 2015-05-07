<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
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
			array( 'property' => 'font-family', 'value' => 'Raleway, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '0.925em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'b,
		strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'cite,
		dfn,
		em,
		i',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"courier 10 Pitch", courier, monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-size', 'value' => '1.5rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd',
		array(
			array( 'property' => 'font', 'value' => '15px Monaco, consolas, "andale Mono", "dejaVu Sans Mono", monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'tt,
		var',
		array(
			array( 'property' => 'font', 'value' => '15px Monaco, consolas, "andale Mono", "dejaVu Sans Mono", monospace' ),
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
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '75%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'big',
		array(
			array( 'property' => 'font-size', 'value' => '125%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
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
		'.content #respond input[type="submit"],
		.content .button,
		button,
		html input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '0.925em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input[type="email"],
		input[type="password"],
		input[type="search"],
		input[type="text"],
		input[type="url"],
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-family', 'value' => 'Lato, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.screen-reader-text:active,
		.screen-reader-text:focus,
		.screen-reader-text:hover',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-navigation .search-form #s',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-family', 'value' => 'Lato, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.header .site-title',
		array(
			array( 'property' => 'font-size', 'value' => '2.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-title',
		array(
			array( 'property' => 'font-size', 'value' => '2.25em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.media-caption-container',
		array(
			array( 'property' => 'font-size', 'value' => '0.85em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote .post-content blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '1.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote .post-content blockquote cite',
		array(
			array( 'property' => 'font-weight', 'value' => '400' ),
			array( 'property' => 'font-size', 'value' => '0.725em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.single-format-quote .post-content blockquote',
		array(
			array( 'property' => 'font-family', 'value' => 'Raleway, "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.single-format-quote .post-content blockquote cite',
		array(
			array( 'property' => 'font-weight', 'value' => '600' ),
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-meta',
		array(
			array( 'property' => 'font-size', 'value' => '0.825em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-cat-tags',
		array(
			array( 'property' => 'font-size', 'value' => '0.925em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-content',
		array(
			array( 'property' => 'font-size', 'value' => '1.075em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '0.925em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-content blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
			array( 'property' => 'font-family', 'value' => 'Raleway, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-content cite',
		array(
			array( 'property' => 'font-family', 'value' => 'Raleway, "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-content blockquote cite',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-content blockquote cite em',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'em,
		q',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-content em strong,
		.post-content strong em',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-content big',
		array(
			array( 'property' => 'font-size', 'value' => '1.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		pre',
		array(
			array( 'property' => 'font-size', 'value' => '0.85em' ),
			array( 'property' => 'font-family', 'value' => 'Menlo, Monaco, monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-content dl dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-content .gallery-caption,
		.post-content .wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-content .gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-content table,
		.widget-content table',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-content th,
		.widget-content th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#reply-title,
		.comments-title,
		.pingbacks-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.75em' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-actions a,
		a#cancel-comment-reply-link',
		array(
			array( 'property' => 'font-weight', 'value' => '500' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta-content cite',
		array(
			array( 'property' => 'font-size', 'value' => '1.075em' ),
			array( 'property' => 'font-family', 'value' => 'Raleway, "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.bypostauthor .comment-meta-content cite .post-author',
		array(
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta-content p',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-awaiting-moderation',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-nav-below h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h1,
		.comment-content h2,
		.comment-content h3,
		.comment-content h4,
		.comment-content h5,
		.comment-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '1.25em' ),
			array( 'property' => 'font-weight', 'value' => '500' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.content input#s,
		.footer input#s',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-family', 'value' => 'Lato, "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.archive-col',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-footer .blog-credits,
		#infinite-footer .blog-info a',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-footer .blog-credits a:focus,
		#infinite-footer .blog-credits a:hover,
		#infinite-footer .blog-info a:focus,
		#infinite-footer .blog-info a:hover',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '0.875em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-content',
		array(
			array( 'property' => 'font-size', 'value' => '0.925em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_tag_cloud .tagcloud a',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar thead th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.credits',
		array(
			array( 'property' => 'font-size', 'value' => '0.85em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.credits p',
		array(
			array( 'property' => 'font-weight', 'value' => '500' ),
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.header .site-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.75em' ),
		),
		array( 'screen and (max-width: 600px)' )
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		),
		array( 'screen and (max-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.375em' ),
		),
		array( 'screen and (max-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.25em' ),
		),
		array( 'screen and (max-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		),
		array( 'screen and (max-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h5',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		),
		array( 'screen and (max-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		),
		array( 'screen and (max-width: 600px)' )
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		),
		array( 'screen and (max-width: 600px)' )
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments-title, #reply-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		),
		array( 'screen and (max-width: 600px)' )
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.archive-col',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		),
		array( 'screen and (max-width: 600px)' )
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.credits',
		array(
			array( 'property' => 'font-size', 'value' => '0.925em' ),
		),
		array( 'screen and (max-width: 600px)' )
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array( 'screen and (max-width: 600px)' )
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array( 'screen and (max-width: 800px)' )
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation a,
		.navigation .search-form #s',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (max-width: 770px)' )
	);

	return $category_rules;
} );
