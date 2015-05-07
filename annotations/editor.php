<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
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
			array( 'property' => 'font-family', 'value' => '"Roboto Condensed","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '50px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '40px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'b,
		strong',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-family', 'value' => '"Roboto Condensed","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '32px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'blockquote:before',
		array(
			array( 'property' => 'font-family', 'value' => '"FontAwesome"' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch",Courier,monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font', 'value' => '15px Monaco,Consolas,"Andale Mono","DejaVu Sans Mono",monospace' ),
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
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span,
		.button,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-family', 'value' => '"Roboto Condensed","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'table',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#main .contact-form label',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation a',
		array(
			array( 'property' => 'font-family', 'value' => '"Roboto Condensed","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation .nav-next a,
		.post-navigation .nav-previous a',
		array(
			array( 'property' => 'font-family', 'value' => '"Roboto Condensed","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '26px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation .nav-next a,
		.post-navigation .nav-previous a',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and ( max-width: 840px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation .meta-nav',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.screen-reader-text:active,
		.screen-reader-text:focus,
		.screen-reader-text:hover',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.pull-right,
		.pull-left',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-area',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-area .widget-title,
		.widget-area .widgettitle',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-area .widget_search .search-field',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-area .featured-post h3',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-area .featured-post .featured-post-meta i',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget-area .featured-post .entry-date',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar tr th',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar tfoot td',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rss-date,
		.widget_rss cite',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-title,
		.comment-reply-title',
		array(
			array( 'property' => 'font-size', 'value' => '52px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-title,
		.comment-reply-title',
		array(
			array( 'property' => 'font-size', 'value' => '45px' ),
		),
		array(
			'screen and ( min-width: 841px ) and ( max-width:980px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-title',
		array(
			array( 'property' => 'font-size', 'value' => '38px' ),
		),
		array(
			'screen and ( max-width: 840px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-reply-title',
		array(
			array( 'property' => 'font-size', 'value' => '34px' ),
		),
		array(
			'screen and ( max-width: 840px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-content',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and ( max-width: 840px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.bypostauthor .comment-cite:after',
		array(
			array( 'property' => 'font-family', 'value' => '"FontAwesome"' ),
			array( 'property' => 'font-size', 'value' => '1.6rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-cite',
		array(
			array( 'property' => 'font-family', 'value' => '"Roboto Condensed","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-edit-link,
		.comment-time',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-reply-title small a',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-notes,
		.logged-in-as',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-form label',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-subscription-form label',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '48px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
		),
		array(
			'screen and ( max-width: 840px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote blockquote:before',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote blockquote:before',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array(
			'screen and ( max-width: 840px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote cite',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote cite',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		),
		array(
			'screen and ( max-width: 840px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption,
		.wp-caption-text',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Roboto Condensed","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '40px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
		),
		array(
			'screen and ( max-width: 840px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-footer',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-date',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Roboto Condensed","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '80px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '65px' ),
		),
		array(
			'screen and ( min-width: 841px ) and ( max-width:980px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '50px' ),
		),
		array(
			'screen and ( max-width: 840px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		),
		array(
			'screen and ( max-width: 840px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.taxonomy-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.meta-list',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.meta-list li:before',
		array(
			array( 'property' => 'font-family', 'value' => '"FontAwesome"' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content',
		array(
			array( 'property' => 'font-family', 'value' => '"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '20' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and ( max-width: 840px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-description',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-description',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and ( max-width: 840px )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-description h2',
		array(
			array( 'property' => 'font-size', 'value' => '34px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.author-description h2',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
		),
		array(
			'screen and ( max-width: 840px )',
		)
	);

	return $category_rules;
} );
