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
		body,
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
			array( 'property' => 'font-family', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'@font-face',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.iconbefore',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.iconafter',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_button:after',
		array(
			array( 'property' => 'font-family', 'value' => '"FontAwesome"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_date:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_external:after',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_video:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_status:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_audio:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_comment:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_link:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_folder:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_tag:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_post:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_edit:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_archive:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_category:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_page:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_comment:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.icon_post:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
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
			array( 'property' => 'font-family', 'value' => 'Open Sans, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-family', 'value' => 'Open Sans, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
			array( 'property' => 'font-size', 'value' => '1.777em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-family', 'value' => 'Open Sans, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-family', 'value' => 'Open Sans, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
			array( 'property' => 'font-size', 'value' => '1.333em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-family', 'value' => 'Open Sans, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
			array( 'property' => 'font-size', 'value' => '1.125em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5, h6',
		array(
			array( 'property' => 'font-family', 'value' => 'Open Sans, Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'span.ampersand',
		array(
			array( 'property' => 'font-family', 'value' => 'Baskerville, Palatino, "Book Antiqua", serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font', 'value' => '15px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input[type="checkbox"]:before,
		input[type="checkbox"]:checked:before',
		array(
			array( 'property' => 'font-family', 'value' => '\'FontAwesome\'' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.header .nav-toggle:after',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-nav .buttons a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-date:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.sticky .post-date:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-meta span.comment:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-meta span.comment:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-meta span.categories:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-meta span.edit-link:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-meta span.tags-links:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-aside .entry-format:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-link .entry-format:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote .entry-format:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-status .entry-format:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-image .entry-format:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-video .entry-format:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-audio .entry-format:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation-comments .nav-previous a:before,
		.navigation-paging .nav-previous a:before,
		.navigation-post .nav-previous a:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation-comments .nav-next a:after,
		.navigation-paging .nav-next a:after,
		.navigation-post .nav-next a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'p.nocomments:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments .comment-author cite a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments .comment-author .comment-meta .date-link:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments .comment-author .comment-meta .comment-edit-link:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments .comment-reply-link:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_archive li:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_categories li:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_pages li:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_recent_comments li:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_recent_comments li:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_recent_entries li:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_recent_entries li:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'form.searchform:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.footer a.back-to-top:after,
		.footer a.back-to-top:before',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-nav ul.menu > li.parent > a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		),
		array(
			'only screen and (min-width: 769px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-nav ul.menu ul li.parent > a:after',
		array(
			array( 'property' => 'font-family', 'value' => 'FontAwesome' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		),
		array(
			'only screen and (min-width: 769px)',
		)
	);

	return $category_rules;
} );
