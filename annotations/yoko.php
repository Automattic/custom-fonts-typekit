<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'a, applet, article, aside, audio, b, blockquote, body,	bold,
		html, canvas, caption, center, dd, details,	div, dl, dt,
		embed, fieldset, figcaption, figure, footer, form,
		h1, h2, h3, h4, h5, h6, header, hgroup, i, iframe, img,
		italic, label, legend, li, mark, menu, nav,	object,
		ol, output, p, ruby, section, span, strong, summary,
		table, tbody, td, tfoot, th, thead, time, tr, u, ul,
		var, video',
		array(
			array( 'property' => 'font', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Sans", arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content h1',
		array(
			array( 'property' => 'font', 'value' => 'bold 1.4em/1.4 "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content h2',
		array(
			array( 'property' => 'font', 'value' => 'bold 1.3em/1.4 "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content h3',
		array(
			array( 'property' => 'font', 'value' => 'bold 1.2em/ 1.4 "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content h4',
		array(
			array( 'property' => 'font', 'value' => 'bold 1.1em/1.4 "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content h5',
		array(
			array( 'property' => 'font', 'value' => 'bold 1em/1.3 "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content h6',
		array(
			array( 'property' => 'font', 'value' => 'bold .9em/1.3 "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#site-title h1',
		array(
			array( 'property' => 'font', 'value' => 'normal 2.1em "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#site-title h2',
		array(
			array( 'property' => 'font', 'value' => 'italic .9em "Droid Serif", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content .entry-header h2.entry-title',
		array(
			array( 'property' => 'font', 'value' => 'bold 1.3em/1.4 "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .entry-details',
		array(
			array( 'property' => 'font', 'value' => 'italic .8em/1.6 "Droid Serif", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .entry-details p a,
		#content .entry-details p span.entry-date',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Sans", arial, sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .entry-meta p',
		array(
			array( 'property' => 'font', 'value' => 'italic .8em/1.5 "Droid Serif", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .entry-meta a',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Sans", arial, sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content p em',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif", Times, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content em',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif", Times, serif' ),
			array( 'property' => 'font-size', 'value' => '.9em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .page blockquote,
		#content .post blockquote',
		array(
			array( 'property' => 'font', 'value' => 'italic 1.1em/1.6 "Droid Serif", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content blockquote cite',
		array(
			array( 'property' => 'font', 'value' => 'normal .8em "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'#content pre',
		array(
			array( 'property' => 'font-family', 'value' => 'monospace' ),
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .post p.wp-caption-text',
		array(
			array( 'property' => 'font', 'value' => 'normal .8em/1.4 "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content .single-entry-header h1.entry-title',
		array(
			array( 'property' => 'font', 'value' => 'bold 1.3em/1.4 "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .single-entry-header p span.entry-author,
		#content .single-entry-header p span.entry-date',
		array(
			array( 'property' => 'font', 'value' => 'italic 1em/1.5 "Droid Serif", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .post .single-entry-meta p',
		array(
			array( 'property' => 'font', 'value' => 'italic .8em/1.5 "Droid Serif", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .post .single-entry-meta p a',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Sans", arial, sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content .post .author-info h3',
		array(
			array( 'property' => 'font', 'value' => 'bold .9em/1.5 "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#comments p.moderation',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif", Times, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'form#commentform textarea#comment',
		array(
			array( 'property' => 'font', 'value' => '1em "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .entry-post-format .entry-header p',
		array(
			array( 'property' => 'font', 'value' => 'italic .8em/1.5 "Droid Serif", Times, serif' ),
			array( 'property' => 'font-family', 'value' => '"Droid Sans", arial, sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content .page-entry-header h1.entry-title',
		array(
			array( 'property' => 'font', 'value' => 'bold 1.5em/1.5 "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .wpcf7 textarea',
		array(
			array( 'property' => 'font', 'value' => '1em "Droid Sans", arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_calendar #wp-calendar caption',
		array(
			array( 'property' => 'font-family', 'value' => '"Droid Serif", Times, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	return $category_rules;
} );
