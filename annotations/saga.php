<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'b,
		strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dfn',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '80%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'sub,
		sup',
		array(
			array( 'property' => 'font-size', 'value' => '75%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		pre,
		samp',
		array(
			array( 'property' => 'font-family', 'value' => 'monospace, monospace' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'optgroup',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.screen-reader-text:active,
		.screen-reader-text:focus,
		.screen-reader-text:hover',
		array(
			array( 'property' => 'font-size', 'value' => '0.625em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-family', 'value' => '"Lato", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
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

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Menlo, Consolas, "Courier New", monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Menlo, Consolas, "Courier New", monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'kbd',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Menlo, Consolas, "Courier New", monospace' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
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

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.form-allowed-tags code',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
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
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'abbr.initialism',
		array(
			array( 'property' => 'font-size', 'value' => '90%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote em,
		blockquote i',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'address',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
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
			array( 'property' => 'font-family', 'value' => '"Playfair Display", serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '38px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '34px' ),
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
			array( 'property' => 'font-size', 'value' => '26px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span,
		.button,
		.comment-reply-link,
		button,
		input[type="submit"]',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.form-control,
		input[type="color"],
		input[type="date"],
		input[type="datetime"],
		input[type="datetime-local"],
		input[type="email"],
		input[type="month"],
		input[type="number"],
		input[type="password"],
		input[type="search"],
		input[type="tel"],
		input[type="text"],
		input[type="time"],
		input[type="url"],
		input[type="week"],
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'legend',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '24px' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-description',
		array(
			array( 'property' => 'font-weight', 'value' => '400' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and ( min-width: 48em )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.icon-menu',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-family', 'value' => '"Genericons"' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-variant', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.main-navigation ul a[href*="/feed"]:before,
		.main-navigation ul a[href*="codepen.io"]:before,
		.main-navigation ul a[href*="digg.com"]:before,
		.main-navigation ul a[href*="dribbble.com"]:before,
		.main-navigation ul a[href*="dropbox.com"]:before,
		.main-navigation ul a[href*="facebook.com"]:before,
		.main-navigation ul a[href*="flickr.com"]:before,
		.main-navigation ul a[href*="foursquare.com"]:before,
		.main-navigation ul a[href*="getpocket.com"]:before,
		.main-navigation ul a[href*="github.com"]:before,
		.main-navigation ul a[href*="instagram.com"]:before,
		.main-navigation ul a[href*="linkedin.com"]:before,
		.main-navigation ul a[href*="mailto"]:before,
		.main-navigation ul a[href*="path.com"]:before,
		.main-navigation ul a[href*="pinterest.com"]:before,
		.main-navigation ul a[href*="plus.google.com"]:before,
		.main-navigation ul a[href*="reddit.com"]:before,
		.main-navigation ul a[href*="skype"]:before,
		.main-navigation ul a[href*="spotify.com"]:before,
		.main-navigation ul a[href*="stumbleupon.com"]:before,
		.main-navigation ul a[href*="tumblr.com"]:before,
		.main-navigation ul a[href*="twitch.tv"]:before,
		.main-navigation ul a[href*="twitter.com"]:before,
		.main-navigation ul a[href*="vimeo.com"]:before,
		.main-navigation ul a[href*="youtube.com"]:before,
		.widget_nav_menu ul a[href*="/feed"]:before,
		.widget_nav_menu ul a[href*="codepen.io"]:before,
		.widget_nav_menu ul a[href*="digg.com"]:before,
		.widget_nav_menu ul a[href*="dribbble.com"]:before,
		.widget_nav_menu ul a[href*="dropbox.com"]:before,
		.widget_nav_menu ul a[href*="facebook.com"]:before,
		.widget_nav_menu ul a[href*="flickr.com"]:before,
		.widget_nav_menu ul a[href*="foursquare.com"]:before,
		.widget_nav_menu ul a[href*="getpocket.com"]:before,
		.widget_nav_menu ul a[href*="github.com"]:before,
		.widget_nav_menu ul a[href*="instagram.com"]:before,
		.widget_nav_menu ul a[href*="linkedin.com"]:before,
		.widget_nav_menu ul a[href*="mailto"]:before,
		.widget_nav_menu ul a[href*="path.com"]:before,
		.widget_nav_menu ul a[href*="pinterest.com"]:before,
		.widget_nav_menu ul a[href*="plus.google.com"]:before,
		.widget_nav_menu ul a[href*="reddit.com"]:before,
		.widget_nav_menu ul a[href*="skype"]:before,
		.widget_nav_menu ul a[href*="spotify.com"]:before,
		.widget_nav_menu ul a[href*="stumbleupon.com"]:before,
		.widget_nav_menu ul a[href*="tumblr.com"]:before,
		.widget_nav_menu ul a[href*="twitch.tv"]:before,
		.widget_nav_menu ul a[href*="twitter.com"]:before,
		.widget_nav_menu ul a[href*="vimeo.com"]:before,
		.widget_nav_menu ul a[href*="youtube.com"]:before',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-family', 'value' => '"Genericons"' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-variant', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links',
		array(
			array( 'property' => 'font-size', 'value' => '1.125rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta .author',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.entry-format:before',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-family', 'value' => '"Genericons"' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-variant', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.plural-title',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
			array( 'property' => 'font-family', 'value' => '"Lato", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote .entry-content ol,
		.format-quote .entry-content p,
		.format-quote .entry-content ul',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote .entry-content:after,
		.format-quote .entry-content:before',
		array(
			array( 'property' => 'font-size', 'value' => '135px' ),
			array( 'property' => 'font-family', 'value' => '"Playfair Display", serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.icon-link-external:before',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-family', 'value' => '"Genericons"' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-variant', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.singular-title',
		array(
			array( 'property' => 'font-size', 'value' => '50px' ),
		),
		array(
			'screen and ( min-width: 62em )',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content ol,
		.entry-content p,
		.entry-content ul',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-reply-link',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.no-comments',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-family', 'value' => '"Lato", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
			array( 'property' => 'font-size', 'value' => '20px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-footer .blog-credits,
		#infinite-footer .blog-info',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-footer .blog-credits a,
		#infinite-footer .blog-info a',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	return $category_rules;
} );
