<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		tt',
		array(
			array( 'property' => 'font-family', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
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
		html,
		iframe,
		img,
		ins,
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
		ul,
		var',
		array(
			array( 'property' => 'font-family', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
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
			array( 'property' => 'font-family', 'value' => 'Helvetica, Arial, "Lucida Grande", Verdana, sans-serif' ),
			array( 'property' => 'font-family', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-style', 'value' => 'inherit' ),
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'caption,
		td,
		th',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => 'Helvetica, Arial, "Lucida Grande", Verdana, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '75%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html > body',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
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
			array( 'property' => 'font-family', 'value' => 'Helvetica,Arial,"Lucida Grande",Verdana,sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '3em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dl dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'address,
		cite,
		em,
		i,
		var',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd,
		tt',
		array(
			array( 'property' => 'font', 'value' => '0.9em Monaco,monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'big',
		array(
			array( 'property' => 'font-size', 'value' => '131.25%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'label',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'p.small',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'p.large',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.incr p,
		p.incr',
		array(
			array( 'property' => 'font-size', 'value' => '0.83333em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'a.button,
		button',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font', 'value' => '100% "Lucida Grande",Tahoma,Arial,Verdana,sans-serif 	line-height: 130%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#header #logo .title',
		array(
			array( 'property' => 'font-family', 'value' => 'Helvetica, Arial, "Lucida Grande", Verdana, sans-serif' ),
			array( 'property' => 'font', 'value' => '700 3em arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#header #logo .title .site-title,
		#header #logo .title a',
		array(
			array( 'property' => 'font-family', 'value' => 'Helvetica, Arial, "Lucida Grande", Verdana,sans-serif' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#header #logo .title .desc',
		array(
			array( 'property' => 'font', 'value' => '400 0.25em arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#menu',
		array(
			array( 'property' => 'font-family', 'value' => 'Helvetica, Arial' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#menu li',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#topbanner .pagetitle_prefix',
		array(
			array( 'property' => 'font', 'value' => '700 2em arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#topbanner .pagetitle',
		array(
			array( 'property' => 'font', 'value' => '700 2em arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.latest_post_meta',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.latest_post_meta a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.feat_title',
		array(
			array( 'property' => 'font', 'value' => '700 12px georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.home_recent_title a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.home_recent_auth,
		.home_recent_date',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#navigation',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.nav ul a',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'table#wp-calendar caption',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'table#wp-calendar td#today,
		table#wp-calendar th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'table#wp-calendar td#today',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'table#wp-calendar td a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.archive_post_meta',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post_meta',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post_text sub,
		.post_text sup',
		array(
			array( 'property' => 'font-size', 'value' => '9px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post_text blockquote',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font', 'value' => 'bold 1.3em georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.mid-column thead th,
		.mid-column tr th,
		.primary-content thead th,
		.primary-content tr th',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#entry-author-info',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#entry-author-info h2',
		array(
			array( 'property' => 'font-size', 'value' => '100%' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ol#commentlist cite',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ol#commentlist li blockquote',
		array(
			array( 'property' => 'font', 'value' => 'italic 1em arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ol#commentlist li .commentauthor',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ol#commentlist li .commentauthor a,
		ol#commentlist li .commenttime a',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ol#commentlist li .commnumber',
		array(
			array( 'property' => 'font-size', 'value' => '3em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.reply a,
		a#cancel-comment-reply-link',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'ol#pinglist .ping_meta',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#commentform label',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-notes,
		.form-allowed-tags,
		.logged-in-as,
		.must-log-in',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#reply-title a#cancel-comment-reply-link',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.contact-form label',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'input.search_input',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'input.submit_input',
		array(
			array( 'property' => 'font', 'value' => 'bold 0.9em arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.archive_name,
		.post_name',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.author_description',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post_cat',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2.post_comm',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2.post_comm2,
		h3#reply-title',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.latest_post_title',
		array(
			array( 'property' => 'font', 'value' => 'bold 1.6em arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3.home_featured',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3.mast',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3.mast2',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3.mast3',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3.mast4',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3.mast5',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3.archive_title a',
		array(
			array( 'property' => 'font', 'value' => 'bold 1.0em arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4.gall',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.dot',
		array(
			array( 'property' => 'font-family', 'value' => '"lucida sans unicode", "arial unicode ms", sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.filedunder',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.captionfull p,
		.captionleft p,
		.captionright p',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption p.wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dd.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	return $category_rules;
} );
