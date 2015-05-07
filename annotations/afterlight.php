<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
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
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite,
		blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-password-form label',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-header .nav-menu a',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation .meta-nav',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-navigation .post-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", serif' ),
			array( 'property' => 'font-size', 'value' => '22px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-navigation,
		.image-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site .skip-link',
		array(
			array( 'property' => 'font', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_calendar caption',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rss-date,
		.widget_rss cite',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", serif' ),
			array( 'property' => 'font-size', 'value' => '26px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h1,
		.entry-content h1,
		.page-content h1,
		.textwidget h1',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h2,
		.entry-content h2,
		.page-content h2,
		.textwidget h2',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h3,
		.entry-content h3,
		.page-content h3,
		.textwidget h3',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h4,
		.comment-content h5,
		.comment-content h6,
		.entry-content h4,
		.entry-content h5,
		.entry-content h6,
		.page-content h4,
		.page-content h5,
		.page-content h6,
		.textwidget h4,
		.textwidget h5,
		.textwidget h6',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h6,
		.entry-content h6,
		.page-content h6,
		.textwidget h6',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-title',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.cat-links,
		.comments-link,
		.edit-link,
		.full-size-link,
		.posted-on,
		.sticky-post,
		.tags-links',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links > span,
		.page-links a',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-caption',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-reply-title,
		.comments-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-metadata,
		.pingback .edit-link',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-reply-link',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-form label',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-awaiting-moderation,
		.comment-notes,
		.form-allowed-tags,
		.logged-in-as',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-info',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-footer .blog-credits,
		#infinite-footer .blog-info a',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_jetpack_display_posts_widget .jetpack-display-remote-posts h4',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_jetpack_display_posts_widget .jetpack-display-remote-posts p',
		array(
			array( 'property' => 'font-size', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_goodreads h2[class^="gr_custom_header"]',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_goodreads div[class^="gr_custom_author"]',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-area .widget-grofile h4',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site .portfolio-entry-meta a,
		.site .portfolio-entry-meta span',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site .jetpack-recipe .jetpack-recipe-meta',
		array(
			array( 'property' => 'font-size', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hentry div.sharedaddy h3.sd-title,
		.hentry h3.sd-title',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hentry div#jp-relatedposts h3.jp-relatedposts-headline',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry div#jp-relatedposts div.jp-relatedposts-items p,
		.hentry div#jp-relatedposts div.jp-relatedposts-items-visual h4.jp-relatedposts-post-title',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hentry .jp-relatedposts-post-title,
		.hentry div#jp-relatedposts div.jp-relatedposts-items-visual h4.jp-relatedposts-post-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '31px' ),
		),
		array(
			'screen and (min-width: 29.375em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation,
		.post-navigation .meta-nav,
		.image-navigation,
		.comment-navigation,
		.sticky-post,
		.posted-on,
		.cat-links,
		.tags-links,
		.comments-link,
		.edit-link,
		.full-size-link,
		.page-links a,
		.page-links > span,
		.entry-caption,
		.comment-metadata,
		.pingback .edit-link,
		.comment-form label,
		.comment-notes,
		.comment-awaiting-moderation,
		.logged-in-as,
		.form-allowed-tags,
		.site-info,
		.wp-caption-text,
		.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite,
		blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-password-form label',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-navigation .post-title',
		array(
			array( 'property' => 'font-size', 'value' => '29px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-title,
		.widget_calendar caption',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rss-date,
		.widget_rss cite',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '41px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1,
		.page-content h1,
		.comment-content h1,
		.textwidget h1',
		array(
			array( 'property' => 'font-size', 'value' => '41px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2,
		.page-content h2,
		.comment-content h2,
		.textwidget h2',
		array(
			array( 'property' => 'font-size', 'value' => '35px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3,
		.page-content h3,
		.comment-content h3,
		.textwidget h3',
		array(
			array( 'property' => 'font-size', 'value' => '29px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4,
		.page-content h4,
		.comment-content h4,
		.textwidget h4',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5,
		.entry-content h6,
		.page-content h5,
		.page-content h6,
		.comment-content h5,
		.comment-content h6,
		.textwidget h5,
		.textwidget h6',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-title',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font-size', 'value' => '29px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments-title,
		.comment-reply-title',
		array(
			array( 'property' => 'font-size', 'value' => '29px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-reply-link',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_jetpack_display_posts_widget .jetpack-display-remote-posts h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_goodreads h2[class^="gr_custom_header"]',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_goodreads div[class^="gr_custom_author"]',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-area .widget-grofile h4',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content .portfolio-entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site .portfolio-entry-meta span,
		.site .portfolio-entry-meta a,
		.site .portfolio-entry-content',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hentry div.sharedaddy h3.sd-title,
		.hentry h3.sd-title,
		.hentry div#jp-relatedposts h3.jp-relatedposts-headline,
		.hentry div#jp-relatedposts div.jp-relatedposts-items-visual h4.jp-relatedposts-post-title,
		.hentry .jp-relatedposts-post-title',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry div#jp-relatedposts div.jp-relatedposts-items p',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
		),
		array(
			'screen and (min-width: 36.3125em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '50px' ),
		),
		array(
			'screen and (min-width: 52.0625em)',
		)
	);

	return $category_rules;
} );
