<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'site-title',
		'#sidebar h1',
		array(
			array( 'property' => 'font-family', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => 'inherit' ),
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1, h2, h3, h4, h5, h6',
		array(
			array( 'property' => 'font-family', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => 'inherit' ),
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'inherit' ),
			array( 'property' => 'font-size', 'value' => 'inherit' ),
			array( 'property' => 'font-weight', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => '"Adobe Caslon Pro", Cambria, "Adobe Garamond Pro", "Garamond", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-size', 'value' => '62.5%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#sidebar h1,
		.chat h1,
		.gallery h1,
		.link h1,
		.text h1',
		array(
			array( 'property' => 'font-family', 'value' => '"Big Caslon", "Adobe Caslon Pro", "Hoefler Text", Constantia, "Adobe Garamond Pro", "Garamond", Centaur,"Goudy Old Style", "Gill Sans", "Gill Sans MT", Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#buttontext,
		.postbody blockquote,
		.postbody blockquote *,
		.postbody em,
		.postbody i',
		array(
			array( 'property' => 'font-family', 'value' => 'Constantia, "Adobe Garamond Pro", "Garamond", Georgia, "Times New Roman", Times, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.postbody code',
		array(
			array( 'property' => 'font', 'value' => 'normal 1.3em/1.3 Consolas,"Lucida Console",Monaco,Courier,sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.amp',
		array(
			array( 'property' => 'font-family', 'value' => '"Adobe Caslon Pro", Baskerville, Georgia, serif' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.datebox',
		array(
			array( 'property' => 'font-family', 'value' => '"Adobe Caslon Pro", Cambria, "Adobe Garamond Pro", "Garamond", Georgia, "Times New Roman", Times, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote blockquote p',
		array(
			array( 'property' => 'font', 'value' => 'italic 1.8em/1.3 "Hoefler Text",Constantia,"Adobe Garamond Pro","Garamond",Georgia,"Times New Roman",Times,serif' ),
		)
	);

	return $category_rules;
} );
