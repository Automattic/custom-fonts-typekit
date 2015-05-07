<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font', 'value' => '13px/20px "Lucida Grande", Verdana, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'strong',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'em',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
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
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'h4 a.permlink',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4 span.name',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#sidebar h3,
		h2',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2 strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2.haslink a',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2.post-title span.wrap',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'h2.haslink a span.new',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'h2.haslink a span.posted',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2.post-title span.wrap span.posted',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#sidebar h3 span.more a,
		h2.haslink a span.more',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#masthead h1',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '48px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#masthead h1 a',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote p',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'span.quote',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-family', 'value' => 'Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'select',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'input.submit,
		input[type=submit]',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#wrapper input.text,
		#wrapper input[type=text],
		#wrapper textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'small',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#navigation',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#navigation li a',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ul#navigation ul',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .contentblock legend',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow","Helvetica Neue",sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#content .contentblock input',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow","Helvetica Neue",sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content .contentblock h5',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content .contentblock h6',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#content .contentblock table tr th',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#calendar_wrap table caption,
		#calendar_wrap table thead',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'bold',
		'#content .contentblock ol',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .contentblock ul',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.widget form input,
		.widget textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow","Helvetica Neue",sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#sidebar h2,
		#sidebar h3',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#sidebar h2 a,
		#sidebar h3 a',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#footer',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '17px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.postdetails',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#olderposts',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.indexlist',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#intro',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .contentblock .image p',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#commentform textarea,
		#respond input[type=text],
		#respond textarea,
		.commentlist
		#commentform input.text',
		array(
			array( 'property' => 'font-family', 'value' => '"Lucida Grande", Verdana, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#commentform label.for-text,
		.comment-form-author label,
		.comment-form-comment label,
		.comment-form-email label,
		.comment-form-url label',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentform label small',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#content .contentblock .contact-form label',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'#content .contentblock .contact-form input.textbox,
		#content .contentblock .contact-form textarea',
		array(
			array( 'property' => 'font-family', 'value' => '"Lucida Grande",Verdana,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#content .contentblock .contact-form input.pushbutton-wide',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Narrow", "Helvetica Neue", sans-serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.ie6 #sidebar #commentform small',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.ie7 #sidebar #commentform small',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
		)
	);

	return $category_rules;
} );
