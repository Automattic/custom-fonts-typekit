<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Raleway", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' )
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '48px' )
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '30px' )
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '22px' )
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' )
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '18px' )
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '16px' )
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		html,
		input,
		select,
		textarea,
		.author-description h2.author-title,
		.archive-meta,
		h1.archive-title,
		.page-links,
		.entry-content blockquote cite,
		.entry-content blockquote small',
		array(
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' )
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.nav-menu li a',
		array(
			array( 'property' => 'font-size', 'value' => '15px' )
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-meta,
		.comment-meta a',
		array(
			array( 'property' => 'font-size', 'value' => '13px' )
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta,
		.site-footer,
		#content .paging-navigation a,
		#content .post-navigation a,
		.comment-author .fn,
		.comment-author .url,
		.comment-reply-link,
		.comment-reply-login,
		pre,
		table',
		array(
			array( 'property' => 'font-size', 'value' => '14px' )
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption .wp-caption-text,
		.entry-caption, .gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '18px' )
		)
	);
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.hentry.format-link,
		.hentry.format-quote',
		array(
			array( 'property' => 'font-size', 'value' => '28px' )
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-status .entry-content,
		.entry-content blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '24px' )
		)
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .paging-navigation,
		#content .post-navigation,
		.no-comments',
		array(
			array( 'property' => 'font-size', 'value' => '20px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Raleway", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '40px' ),
			array( 'property' => 'font-weight', 'value' => '900' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-description',
		array(
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' )
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.attachment .entry-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '30px' ),
			array( 'property' => 'font-weight', 'value' => '300' )
		)
	);

	return $category_rules;
} );
