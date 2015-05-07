<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font', 'value' => '0.93em/1.5em Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '0.86em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'em,
		i',
		array(
			array( 'property' => 'font', 'value' => 'italic 1.2em Baskerville, "Times New Roman", Times, serif' ),
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
			array( 'property' => 'font-size', 'value' => '1.6em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.4em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'input,
		select,
		textarea',
		array(
			array( 'property' => 'font', 'value' => 'normal 1em/1.4em Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'blockquote',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#header #logo',
		array(
			array( 'property' => 'font', 'value' => 'bold 3em/1em Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#header #description',
		array(
			array( 'property' => 'font', 'value' => 'italic 1.3em/1em Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#nav ul.menu',
		array(
			array( 'property' => 'font', 'value' => '1.15em/1em Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-variant', 'value' => 'small-caps' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#nav .menu ul',
		array(
			array( 'property' => 'font', 'value' => '0.76em/1em Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-variant', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#nav .menu ul ul',
		array(
			array( 'property' => 'font', 'value' => '1em/1em Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#nav .rss a',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#searchform #s',
		array(
			array( 'property' => 'font', 'value' => '0.9em/1em Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#searchform #searchsubmit',
		array(
			array( 'property' => 'font', 'value' => '0.9em/1em Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-date',
		array(
			array( 'property' => 'font', 'value' => '1em/1em Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-date .day',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-date .month',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-date .year',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-date .postcomment',
		array(
			array( 'property' => 'font', 'value' => '0.86em/1em Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.postcomment a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-data',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-data a',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-title',
		array(
			array( 'property' => 'font', 'value' => 'bold 1.8em/1em Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.more-link',
		array(
			array( 'property' => 'font', 'value' => '10px/100%  Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-nav span em',
		array(
			array( 'property' => 'font', 'value' => '10px/1.1em Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-nav a',
		array(
			array( 'property' => 'font', 'value' => 'bold 115%/100% Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#comments h3',
		array(
			array( 'property' => 'font', 'value' => 'bold 1.6em/1em Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#comments h3 em',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-nav',
		array(
			array( 'property' => 'font', 'value' => '0.8em/1.4em Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-nav a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.commentlist .timestamp',
		array(
			array( 'property' => 'font', 'value' => '75%/100% Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-author small',
		array(
			array( 'property' => 'font', 'value' => '0.8em/1.3em Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-author cite',
		array(
			array( 'property' => 'font', 'value' => 'bold 1.3em/1.3em Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.commentlist .comment-reply-link',
		array(
			array( 'property' => 'font', 'value' => '10px/1em Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#respond #cancel-comment-reply-link',
		array(
			array( 'property' => 'font', 'value' => '0.8em/1em Arial, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentform .comment-notes',
		array(
			array( 'property' => 'font-size', 'value' => '0.86em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentform label',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#commentform label small',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#commentform input#submit',
		array(
			array( 'property' => 'font', 'value' => 'small-caps 1em/1em Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#sidebar',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#sidebar h4,
		h4.widgettitle',
		array(
			array( 'property' => 'font', 'value' => 'bold 1.35em/1em Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget #wp-calendar caption',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#secondary',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#secondary .widget em',
		array(
			array( 'property' => 'font-family', 'value' => '"Times New Roman", Times, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#secondary .widget cite',
		array(
			array( 'property' => 'font-family', 'value' => '"Times New Roman", Times, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer p.credits',
		array(
			array( 'property' => 'font', 'value' => '0.8em/1em Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption-text',
		array(
			array( 'property' => 'font', 'value' => 'italic 1.2em/1.1em Baskerville, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.adcode',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	return $category_rules;
} );
