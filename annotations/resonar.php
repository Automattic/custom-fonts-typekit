<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2:not(.site-description),
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", georgia, serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite,
		blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
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
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-header .nav-menu a',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation .meta-nav',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-navigation .post-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '22px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pagination',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-navigation,
		.image-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
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
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_calendar caption',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_recent_entries .post-date',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rss-date,
		.widget_rss cite',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '22px' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Baskerville", georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h1,
		.entry-content h1,
		.entry-summary h1,
		.page-content h1,
		.textwidget h1',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h2,
		.entry-content h2,
		.entry-summary h2,
		.page-content h2,
		.textwidget h2',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h3,
		.entry-content h3,
		.entry-summary h3,
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
		.entry-summary h4,
		.entry-summary h5,
		.entry-summary h6,
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
		.entry-summary h6,
		.page-content h6,
		.textwidget h6',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-heading',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.author-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.author-description',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
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
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links > span,
		.page-links a',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.single .entry-title,
		.sticky .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-caption',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-reply-title,
		.comments-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-author',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-metadata,
		.pingback .edit-link',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-list .reply',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-list .reply a',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-form label',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-awaiting-moderation,
		.comment-notes,
		.form-allowed-tags,
		.logged-in-as',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-info',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widecolumn h2',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widecolumn .mu_register label,
		.widecolumn label',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widecolumn #key,
		.widecolumn .mu_register #blog_title,
		.widecolumn .mu_register #blogname,
		.widecolumn .mu_register #user_email,
		.widecolumn .mu_register #user_name',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widecolumn #submit,
		.widecolumn .mu_register input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#infinite-footer .blog-info',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#infinite-footer .blog-info a',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-font',
		'#infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_jetpack_display_posts_widget .jetpack-display-remote-posts h4',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-area .widget-grofile h4',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site .portfolio-entry-meta',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site .portfolio-entry-meta a,
		.site .portfolio-entry-meta span',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hentry div.sharedaddy h3.sd-title,
		.hentry h3.sd-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hentry div#jp-relatedposts h3.jp-relatedposts-headline',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'.hentry div#jp-relatedposts div.jp-relatedposts-items p',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hentry .jp-relatedposts-post-title,
		.hentry div#jp-relatedposts div.jp-relatedposts-items-visual h4.jp-relatedposts-post-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry div#jp-relatedposts div.jp-relatedposts-items .jp-relatedposts-post .jp-relatedposts-post-context,
		.hentry div#jp-relatedposts div.jp-relatedposts-items .jp-relatedposts-post .jp-relatedposts-post-date',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments-area #respond p.form-submit input#comment-submit',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-content p.comment-likes span.comment-like-feedback',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pd-rating',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_authors strong',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.time-machine-date,
		.time-machine-navigation',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.top_rated div > p',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		),
		array(
			'screen and (min-width: 29.375em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title,
		.single .entry-title,
		.sticky .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '37px' ),
		),
		array(
			'screen and (min-width: 29.375em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '31px' ),
		),
		array(
			'screen and (min-width: 37.5625em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title,
		.single .entry-title,
		.sticky .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '45px' ),
		),
		array(
			'screen and (min-width: 37.5625em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-heading',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.cat-links,
		.comment-awaiting-moderation,
		.comment-form label,
		.comment-list .reply,
		.comment-metadata,
		.comment-navigation,
		.comment-notes,
		.comments-link,
		.edit-link,
		.entry-caption,
		.form-allowed-tags,
		.full-size-link,
		.gallery-caption,
		.image-navigation,
		.logged-in-as,
		.main-navigation,
		.page-links > span,
		.page-links a,
		.pingback .edit-link,
		.post-navigation .meta-nav,
		.posted-on,
		.site-info,
		.sticky-post,
		.tags-links,
		.widget,
		.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite,
		blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-password-form label',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-navigation .post-title',
		array(
			array( 'property' => 'font-size', 'value' => '37px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget blockquote cite,
		.widget blockquote small',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget h1',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget h2',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget h3',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget h4,
		.widget h5,
		.widget h6',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget button,
		.widget input[type="button"],
		.widget input[type="reset"],
		.widget input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget input[type="email"],
		.widget input[type="password"],
		.widget input[type="search"],
		.widget input[type="text"],
		.widget input[type="url"],
		.widget textarea',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget .wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget .widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_calendar caption',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rss-date,
		.widget_rss cite',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '37px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title,
		.single .entry-title,
		.sticky .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '54px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h1,
		.entry-content h1,
		.entry-summary h1,
		.page-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '37px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h2,
		.entry-content h2,
		.entry-summary h2,
		.page-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '31px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h3,
		.entry-content h3,
		.entry-summary h3,
		.page-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h4,
		.entry-content h4,
		.entry-summary h4,
		.page-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content h5,
		.comment-content h6,
		.entry-content h5,
		.entry-content h6,
		.entry-summary h5,
		.entry-summary h6,
		.page-content h5,
		.page-content h6',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.author-bio,
		.author-title',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-reply-title,
		.comments-title',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widecolumn h2',
		array(
			array( 'property' => 'font-size', 'value' => '37px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widecolumn .mu_register label,
		.widecolumn label',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widecolumn #submit,
		.widecolumn .mu_register input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site .portfolio-entry-meta a,
		.site .portfolio-entry-meta span',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site .portfolio-entry-content',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hentry div.sharedaddy h3.sd-title,
		.hentry h3.sd-title',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hentry div#jp-relatedposts h3.jp-relatedposts-headline',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry div#jp-relatedposts div.jp-relatedposts-items p',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.hentry .jp-relatedposts-post-title,
		.hentry div#jp-relatedposts div.jp-relatedposts-items-visual h4.jp-relatedposts-post-title',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (min-width: 43.75em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content blockquote.aligncenter',
		array(
			array( 'property' => 'font-size', 'value' => '31px' ),
		),
		array(
			'screen and (min-width: 51.755em)',
		)
	);

	return $category_rules;
} );
