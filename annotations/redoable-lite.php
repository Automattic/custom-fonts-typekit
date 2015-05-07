<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font', 'value' => '62.5% "Lucida Grande", Verdana, Arial, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'h1',
		array(
			array( 'property' => 'font-family', 'value' => '"Century Gothic", "Lucida Grande", Verdana, Arial' ),
			array( 'property' => 'font-size', 'value' => '5em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2,
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Trebuchet MS", Verdana, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '2.4em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#primary h3,
		#primary h3 a,
		#primary h4,
		#primaryFirst h3,
		#primaryFirst h4,
		.single #primary .redo-asides h3,
		.single #primaryFirst .redo-asides h3',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#primary .entry-content h2,
		#primaryFirst .entry-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '2.2em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#primary .entry-content h3,
		#primaryFirst .entry-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.8em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-family', 'value' => '"Trebuchet MS", Verdana, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#primary .entry-content h4,
		#primaryFirst .entry-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#primary .redo-asides h3,
		#primaryFirst .redo-asides h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.6em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'body.page .entry-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.7em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'body.page .entry-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3.entry-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Helvetica, Arial, Sans-Serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#header .description',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ul.menu li a',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#menu',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#menu a',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#alt_menu',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#alt_menu a',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#firefox_check',
		array(
			array( 'property' => 'font-family', 'value' => '"Century Gothic", "Lucida Grande", Verdana, Arial' ),
			array( 'property' => 'font-size', 'value' => '3em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.secondary',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.tertiary',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.secondary h2,
		.tertiary h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em !important' ),
			array( 'property' => 'font-weight', 'value' => 'normal !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.single #primary .redo-asides .entry-content,
		.single #primaryFirst .redo-asides .entry-content',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.link-title a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.link-header',
		array(
			array( 'property' => 'font-family', 'value' => '"Century Gothic", "Lucida Grande", Verdana, Arial' ),
			array( 'property' => 'font-size', 'value' => '3em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#primary .metalink a,
		#primary .metalink a:visited,
		#primaryFirst .metalink a,
		#primaryFirst .metalink a:visited,
		.secondary .metalink a,
		.secondary .metalink a:visited,
		.secondary .metalink a:visited,
		.secondary span a,
		.secondary span a:visited,
		.tertiary .metalink a,
		.tertiary span a,
		.tertiary span a:visited',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#primary .hentry .entry-head .metalink,
		#primaryFirst .hentry .entry-head .metalink',
		array(
			array( 'property' => 'font-size', 'value' => '1.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#primary .redo-asides .entry-head .metalink,
		#primaryFirst .redo-asides .entry-head .metalink',
		array(
			array( 'property' => 'font-size', 'value' => '1.4em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-meta',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.sidenote',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.sidenote h2',
		array(
			array( 'property' => 'font-size', 'value' => '2em !important' ),
			array( 'property' => 'font-weight', 'value' => 'normal !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#pinglist',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#pinglist li small',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#leavecomment,
		.comments #loading',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#respond input[type=text],
		#respond textarea,
		.comments input[type=text],
		.comments textarea',
		array(
			array( 'property' => 'font', 'value' => '1.2em "Courier New", Courier, Monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond label',
		array(
			array( 'property' => 'font', 'value' => '9px "Lucida Grande",Verdana,Arial,Sans-Serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentlist li .comment-content',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentlist li .commentauthor',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentlist li .counter',
		array(
			array( 'property' => 'font', 'value' => 'normal 3em "Century Gothic", "Lucida Grande", Arial, Helvetica, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer a',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'abbr,
		acronym',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp_quotes',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-nav',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-nav .current_page_item,
		.page-nav .current_page_item a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.sb-comments ul li small a,
		.sb-comments-blc ul li span a',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.activityentry',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'div#brians-latest-comments small',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#poststuff #title',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.imp-download,
		.imp-download-error',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.imp-download strong,
		.imp-download-error strong',
		array(
			array( 'property' => 'font-size', 'value' => '1em !important' ),
			array( 'property' => 'font-weight', 'value' => 'normal !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.imp-download small,
		.imp-download-error small',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.alert,
		.code,
		.construction,
		.download,
		.information,
		.new,
		.note',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ul.alert,
		ul.code,
		ul.construction,
		ul.download,
		ul.information,
		ul.new,
		ul.note',
		array(
			array( 'property' => 'font-size', 'value' => '1em !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ol.alert,
		ol.code,
		ol.construction,
		ol.download,
		ol.information,
		ol.new,
		ol.note',
		array(
			array( 'property' => 'font-size', 'value' => '1em !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dl.alert,
		dl.code,
		dl.construction,
		dl.download,
		dl.information,
		dl.new,
		dl.note',
		array(
			array( 'property' => 'font-size', 'value' => '1em !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dl.alert dt,
		dl.code dt,
		dl.construction dt,
		dl.download dt,
		dl.information dt,
		dl.new dt,
		dl.note dt',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em !important' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.code',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier New", Courier, Fixed' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.callout',
		array(
			array( 'property' => 'font-size', 'value' => '1.4em !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comment-block h4,
		#reply-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comment-block',
		array(
			array( 'property' => 'font', 'value' => '1em "Lucida Grande", Verdana, Arial, Sans-Serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comment-block h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em !important' ),
			array( 'property' => 'font-weight', 'value' => 'normal !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.sb-badge ul.tr_linkcount li',
		array(
			array( 'property' => 'font-size', 'value' => '140%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.published .day',
		array(
			array( 'property' => 'font-size', 'value' => '3.0em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.published .month',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.published .year',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.published_sm .day',
		array(
			array( 'property' => 'font-size', 'value' => '1.6em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.published_sm .month',
		array(
			array( 'property' => 'font-size', 'value' => '1.05em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.published_sm .year',
		array(
			array( 'property' => 'font-size', 'value' => '1.4em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.published_tiny',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.published_link',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar',
		array(
			array( 'property' => 'font-size', 'value' => '9px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#wp-calendar h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em !important' ),
			array( 'property' => 'font-weight', 'value' => 'normal !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar caption',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em !important' ),
			array( 'property' => 'font-weight', 'value' => 'normal !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar td',
		array(
			array( 'property' => 'font', 'value' => 'normal 9px "Lucida Grande", "Lucida Sans Unicode", Verdana, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar td.pad:hover',
		array(
			array( 'property' => 'font-size', 'value' => '9px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar #today',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#wp-calendar th',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.php_title',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.php',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, "Courier New", Courier, Fixed' ),
			array( 'property' => 'font-size', 'value' => '12px !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.java_title',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.java',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, "Courier New", Courier, Fixed' ),
			array( 'property' => 'font-size', 'value' => '12px !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.css_title',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.css',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, "Courier New", Courier, Fixed' ),
			array( 'property' => 'font-size', 'value' => '12px !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.html_title',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.html4strict',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, "Courier New", Courier, Fixed' ),
			array( 'property' => 'font-size', 'value' => '12px !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.js_title',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.javascript',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, "Courier New", Courier, Fixed' ),
			array( 'property' => 'font-size', 'value' => '12px !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.text_title',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.text',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, "Courier New", Courier, Fixed' ),
			array( 'property' => 'font-size', 'value' => '12px !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.first-alt .relatedPosts h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em !important' ),
			array( 'property' => 'font-weight', 'value' => 'normal !important' ),
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
