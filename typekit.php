<?php
class Jetpack_Typekit_Font_Provider extends Jetpack_Font_Provider {

	protected $api_base = 'https://typekit.com/api/v1/json';

	public $id = 'typekit';

	/**
	 * Constructor
	 * @param Jetpack_Fonts $custom_fonts Manager instance
	 */
	public function __construct( Jetpack_Fonts $custom_fonts ) {
		parent::__construct( $custom_fonts );
		// add_filter( 'jetpack_fonts_whitelist_' . $this->id, array( $this, 'default_whitelist' ), 9 );
	}

	public function body_font_whitelist(){
		return array(
		);
	}

	public function headings_font_whitelist(){
		return array(
		);
	}

	public function default_whitelist( $whitelist ) {
		$all_fonts = array_merge ( $this->body_font_whitelist(), $this->headings_font_whitelist() );
		return $all_fonts;
	}

	/**
	 * Retrieve fonts from the API
	 * @return array List of fonts
	 */
	public function retrieve_fonts() {
		return array(
			array(
				'name' => 'Abril Text',
				'id' => 'gjst',
				'slug' => 'abril-text',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n6', 'name' => 'Semibold' ),
					array( 'fvd' => 'i6', 'name' => 'Semibold Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
					array( 'fvd' => 'n8', 'name' => 'Extra Bold' ),
					array( 'fvd' => 'i8', 'name' => 'Extra Bold Italic' )
				),
				'shortname' => 'Abril Text',
				'smallTextLegibility' => true
			),
			array(
				'name' => 'Adelle Web',
				'id' => 'gmsj',
				'slug' => 'adelle-web',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Adelle',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'Ambroise STD',
				'id' => 'sskw',
				'slug' => 'ambroise-std',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
				),
				'shortname' => 'Ambroise',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'Anonymous Pro',
				'id' => 'fbln',
				'slug' => 'anonymous-pro',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Anonymous Pro',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Arimo',
				'id' => 'nlwf',
				'slug' => 'arimo',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Arimo',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Arvo',
				'id' => 'tsyb',
				'slug' => 'arvo',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Arvo',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Brandon Grotesque',
				'id' => 'yvxn',
				'slug' => 'brandon-grotesque',
				'variations' => array(
					array( 'fvd' => 'n1', 'name' => 'Thin' ),
					array( 'fvd' => 'i1', 'name' => 'Thin Italic' ),
					array( 'fvd' => 'n3', 'name' => 'Light' ),
					array( 'fvd' => 'i3', 'name' => 'Light Italic' ),
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n5', 'name' => 'Medium' ),
					array( 'fvd' => 'i5', 'name' => 'Medium Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
					array( 'fvd' => 'n9', 'name' => 'Black' ),
					array( 'fvd' => 'i9', 'name' => 'Black Italic' )
				),
				'shortname' => 'Brandon Grotesque',
				'smallTextLegibility' => false
			),
			array(
				'name' => 'Bree Web',
				'id' => 'ymzk',
				'slug' => 'bree-web',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Oblique' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Oblique' ),
				),
				'shortname' => 'Bree',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'Calluna',
				'id' => 'vybr',
				'slug' => 'calluna',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Calluna',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Calluna Sans',
				'id' => 'wgzc',
				'slug' => 'calluna-sans',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Calluna Sans',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Chaparral Pro',
				'id' => 'hrpf',
				'slug' => 'chaparral-pro',
				'variations' => array(
					array( 'fvd' => 'n3', 'name' => 'Light' ),
					array( 'fvd' => 'i3', 'name' => 'Light Italic' ),
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n6', 'name' => 'Semibold' ),
					array( 'fvd' => 'i6', 'name' => 'Semibold Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' )
				),
				'shortname' => 'Chaparral Pro',
				'smallTextLegibility' => true
			),
			array(
				'name' => 'Chunk',
				'id' => 'klcb',
				'slug' => 'chunk',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
				),
				'shortname' => 'Chunk',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'Coquette',
				'id' => 'drjf',
				'slug' => 'coquette',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
				),
				'shortname' => 'Coquette',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'Droid Sans',
				'id' => 'gkmg',
				'slug' => 'droid-sans',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
				),
				'shortname' => 'Droid Sans',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Droid Sans Mono',
				'id' => 'vqgt',
				'slug' => 'droid-sans-mono',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
				),
				'shortname' => 'Droid Sans Mono',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Droid Serif',
				'id' => 'pcpv',
				'slug' => 'droid-serif',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Droid Serif',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Eigerdals',
				'id' => 'gckq',
				'slug' => 'eigerdals',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Eigerdals',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'FF Basic Gothic Web Pro',
				'id' => 'snqb',
				'slug' => 'ff-basic-gothic-web-pro',
				'variations' => array(
					array( 'fvd' => 'n3', 'name' => 'Regular' ),
					array( 'fvd' => 'i3', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'FF Basic Gothic',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'FF Brokenscript Web Condensed',
				'id' => 'gwsq',
				'slug' => 'ff-brokenscript-web-condensed',
				'variations' => array(
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
				),
				'shortname' => 'FF Brokenscript Condensed',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'FF Dagny Web Pro',
				'id' => 'rlxq',
				'slug' => 'ff-dagny-web-pro',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'FF Dagny',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'FF Dax Web Pro',
				'id' => 'dbqg',
				'slug' => 'ff-dax-web-pro',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'FF Dax',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'FF Market Web',
				'id' => 'fytf',
				'slug' => 'ff-market-web',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
				),
				'shortname' => 'FF Market',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'FF Meta Web Pro',
				'id' => 'brwr',
				'slug' => 'ff-meta-web-pro',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Normal' ),
					array( 'fvd' => 'i4', 'name' => 'Normal Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'FF Meta',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'FF Meta Serif Web Pro',
				'id' => 'rrtc',
				'slug' => 'ff-meta-serif-web-pro',
				'variations' => array(
					array( 'fvd' => 'n5', 'name' => 'Book' ),
					array( 'fvd' => 'i5', 'name' => 'Book Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'FF Meta Serif',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'FF Netto Web',
				'id' => 'rgzb',
				'slug' => 'ff-netto-web',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
				),
				'shortname' => 'FF Netto',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'FF Prater Block Web',
				'id' => 'sbsp',
				'slug' => 'ff-prater-block-web',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
				),
				'shortname' => 'FF Prater Block',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'FF Tisa Web Pro',
				'id' => 'xwmz',
				'slug' => 'ff-tisa-web-pro',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'FF Tisa',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'FacitWeb',
				'id' => 'ttyp',
				'slug' => 'facitweb',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'FacitWeb',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Fertigo Pro',
				'id' => 'pzyv',
				'slug' => 'fertigo-pro',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
				),
				'shortname' => 'Fertigo Pro',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Fertigo Pro Script',
				'id' => 'twbx',
				'slug' => 'fertigo-pro-script',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
				),
				'shortname' => 'Fertigo Pro Script',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'Futura PT',
				'id' => 'ftnk',
				'slug' => 'futura-pt',
				'variations' => array(
					array( 'fvd' => 'n3', 'name' => 'Light' ),
					array( 'fvd' => 'i3', 'name' => 'Light Italic' ),
					array( 'fvd' => 'n4', 'name' => 'Book' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n5', 'name' => 'Medium' ),
					array( 'fvd' => 'i5', 'name' => 'Medium Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
					array( 'fvd' => 'n8', 'name' => 'Extra Bold' ),
					array( 'fvd' => 'i8', 'name' => 'Extra Bold Italic' )
				),
				'shortname' => 'Futura PT',
				'smallTextLegibility' => false
			),
			array(
				'name' => 'Herb Condensed',
				'id' => 'lmgn',
				'slug' => 'herb-condensed',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
				),
				'shortname' => 'Herb Condensed',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'Inconsolata',
				'id' => 'gmvz',
				'slug' => 'inconsolata',
				'variations' => array(
					array( 'fvd' => 'n5', 'name' => 'Regular' ),
				),
				'shortname' => 'Inconsolata',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Jubilat',
				'id' => 'cwfk',
				'slug' => 'jubilat',
				'variations' => array(
					array( 'fvd' => 'n1', 'name' => 'Extra Light' ),
					array( 'fvd' => 'i1', 'name' => 'Extra Light Italic' ),
					array( 'fvd' => 'n2', 'name' => 'Light' ),
					array( 'fvd' => 'i2', 'name' => 'Light Italic' ),
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n5', 'name' => 'Medium' ),
					array( 'fvd' => 'i5', 'name' => 'Medium Italic' ),
					array( 'fvd' => 'n6', 'name' => 'Semibold' ),
					array( 'fvd' => 'i6', 'name' => 'Semibold Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
					array( 'fvd' => 'n9', 'name' => 'Black' ),
					array( 'fvd' => 'i9', 'name' => 'Black Italic' )
				),
				'shortname' => 'Jubilat',
				'smallTextLegibility' => true
			),
			array(
				'name' => 'Kaffeesatz',
				'id' => 'jgfl',
				'slug' => 'kaffeesatz',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
				),
				'shortname' => 'Kaffeesatz',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'LFT Etica Display Web',
				'id' => 'vyvm',
				'slug' => 'lft-etica-display-web',
				'variations' => array(
					array( 'fvd' => 'n2', 'name' => 'Thin' ),
					array( 'fvd' => 'n9', 'name' => 'Heavy' ),
				),
				'shortname' => 'LFT Etica Display',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'LTC Bodoni 175',
				'id' => 'mrnw',
				'slug' => 'ltc-bodoni-175',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' )
				),
				'shortname' => 'LTC Bodoni 175',
				'smallTextLegibility' => false
			),
			array(
				'name' => 'Lapture',
				'id' => 'rvnd',
				'slug' => 'lapture',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Lapture',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'Le Monde Journal STD',
				'id' => 'mvgb',
				'slug' => 'le-monde-journal-std',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Le Monde Journal',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Le Monde Sans STD',
				'id' => 'rshz',
				'slug' => 'le-monde-sans-std',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Le Monde Sans',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'League Gothic',
				'id' => 'kmpm',
				'slug' => 'league-gothic',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
				),
				'shortname' => 'League Gothic',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'Liberation Sans',
				'id' => 'zsyz',
				'slug' => 'liberation-sans',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Liberation Sans',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Liberation Serif',
				'id' => 'lcny',
				'slug' => 'liberation-serif',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Liberation Serif',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Minion Pro',
				'id' => 'nljb',
				'slug' => 'minion-pro',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n5', 'name' => 'Medium' ),
					array( 'fvd' => 'i5', 'name' => 'Medium Italic' ),
					array( 'fvd' => 'n6', 'name' => 'Semibold' ),
					array( 'fvd' => 'i6', 'name' => 'Semibold Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' )
				),
				'shortname' => 'Minion Pro',
				'smallTextLegibility' => true
			),
			array(
				'name' => 'Museo',
				'id' => 'htrh',
				'slug' => 'museo',
				'variations' => array(
					array( 'fvd' => 'n3', 'name' => '300' ),
					array( 'fvd' => 'i3', 'name' => '300 Italic' ),
					array( 'fvd' => 'n7', 'name' => '700' ),
					array( 'fvd' => 'i7', 'name' => '700 Italic' ),
				),
				'shortname' => 'Museo',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Museo Sans',
				'id' => 'ycvr',
				'slug' => 'museo-sans',
				'variations' => array(
					array( 'fvd' => 'n3', 'name' => '300' ),
					array( 'fvd' => 'i3', 'name' => '300 Italic' ),
					array( 'fvd' => 'n7', 'name' => '700' ),
					array( 'fvd' => 'i7', 'name' => '700 Italic' ),
				),
				'shortname' => 'Museo Sans',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Museo Slab',
				'id' => 'llxb',
				'slug' => 'museo-slab',
				'variations' => array(
					array( 'fvd' => 'n3', 'name' => '300' ),
					array( 'fvd' => 'i3', 'name' => '300 Italic' ),
					array( 'fvd' => 'n7', 'name' => '700' ),
					array( 'fvd' => 'i7', 'name' => '700 Italic' ),
				),
				'shortname' => 'Museo Slab',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Omnes Pro',
				'id' => 'mpmb',
				'slug' => 'omnes-pro',
				'variations' => array(
					array( 'fvd' => 'n1', 'name' => 'Hairline' ),
					array( 'fvd' => 'i1', 'name' => 'Hairline Italic' ),
					array( 'fvd' => 'n2', 'name' => 'Extra Light' ),
					array( 'fvd' => 'i2', 'name' => 'Extra Light Italic' ),
					array( 'fvd' => 'n3', 'name' => 'Light' ),
					array( 'fvd' => 'i3', 'name' => 'Light Italic' ),
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n5', 'name' => 'Medium' ),
					array( 'fvd' => 'i5', 'name' => 'Medium Italic' ),
					array( 'fvd' => 'n6', 'name' => 'Semibold' ),
					array( 'fvd' => 'i6', 'name' => 'Semibold Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
					array( 'fvd' => 'n9', 'name' => 'Black' ),
					array( 'fvd' => 'i9', 'name' => 'Black Italic' )
				),
				'shortname' => 'Omnes Pro',
				'smallTextLegibility' => false
			),
			array(
				'name' => 'Open Sans',
				'id' => 'jtcj',
				'slug' => 'open-sans',
				'variations' => array(
					array( 'fvd' => 'n3', 'name' => 'Light' ),
					array( 'fvd' => 'i3', 'name' => 'Light Italic' ),
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n6', 'name' => 'Semi Bold' ),
					array( 'fvd' => 'i6', 'name' => 'Semi Bold Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
					array( 'fvd' => 'n8', 'name' => 'Extra Bold' ),
					array( 'fvd' => 'i8', 'name' => 'Extra Bold Italic' )
				),
				'shortname' => 'Open Sans',
				'smallTextLegibility' => true
			),
			array(
				'name' => 'Orbitron',
				'id' => 'rfss',
				'slug' => 'orbitron',
				'variations' => array(
					array( 'fvd' => 'n5', 'name' => 'Regular' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
				),
				'shortname' => 'Orbitron',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'PT Serif',
				'id' => 'xcqq',
				'slug' => 'pt-serif',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'PT Serif',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Proxima Nova',
				'id' => 'vcsm',
				'slug' => 'proxima-nova',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Proxima Nova',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Puritan',
				'id' => 'ccqc',
				'slug' => 'puritan',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Puritan',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Raleway',
				'id' => 'nqdy',
				'slug' => 'raleway',
				'variations' => array(
					array( 'fvd' => 'n1', 'name' => 'Thin' ),
				),
				'shortname' => 'Raleway',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'Refrigerator Deluxe',
				'id' => 'snjm',
				'slug' => 'refrigerator-deluxe',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
				),
				'shortname' => 'Refrigerator Deluxe',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'Ronnia Web',
				'id' => 'rtgb',
				'slug' => 'ronnia-web',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold ' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Ronnia',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Ronnia Web Condensed',
				'id' => 'hzlv',
				'slug' => 'ronnia-web-condensed',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
				),
				'shortname' => 'Ronnia Condensed',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'Skolar Web',
				'id' => 'wbmp',
				'slug' => 'skolar-web',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Skolar',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Snicker',
				'id' => 'mkrf',
				'slug' => 'snicker',
				'variations' => array(
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
				),
				'shortname' => 'Snicker',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'Sommet Slab',
				'id' => 'qlvb',
				'slug' => 'sommet-slab',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Sommet Slab',
				'smallTextLegibility' => false,
			),
			array(
				'name' => 'Source Sans Pro',
				'id' => 'bhyf',
				'slug' => 'source-sans-pro',
				'variations' => array(
					array( 'fvd' => 'n2', 'name' => 'Extra Light' ),
					array( 'fvd' => 'i2', 'name' => 'Extra Light Italic' ),
					array( 'fvd' => 'n3', 'name' => 'Light' ),
					array( 'fvd' => 'i3', 'name' => 'Light Italic' ),
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n6', 'name' => 'Semibold' ),
					array( 'fvd' => 'i6', 'name' => 'Semibold Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
					array( 'fvd' => 'n9', 'name' => 'Black' ),
					array( 'fvd' => 'i9', 'name' => 'Black Italic' )
				),
				'shortname' => 'Source Sans Pro',
				'smallTextLegibility' => true
			),
			array(
				'name' => 'Sorts Mill Goudy',
				'id' => 'yrwy',
				'slug' => 'sorts-mill-goudy',
				'variations' => array(
					array( 'fvd' => 'n5', 'name' => 'Regular' ),
					array( 'fvd' => 'i5', 'name' => 'Italic' ),
				),
				'shortname' => 'Sorts Mill Goudy',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Tekton Pro',
				'id' => 'fkjd',
				'slug' => 'tekton-pro',
				'variations' => array(
					array( 'fvd' => 'n3', 'name' => 'Light' ),
					array( 'fvd' => 'i3', 'name' => 'Light Oblique' ),
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Oblique' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Oblique' )
				),
				'shortname' => 'Tekton Pro',
				'smallTextLegibility' => false
			),
			array(
				'name' => 'Tinos',
				'id' => 'plns',
				'slug' => 'tinos',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Tinos',
				'smallTextLegibility' => true,
			),
			array(
				'name' => 'Ubuntu',
				'id' => 'jhhw',
				'slug' => 'ubuntu',
				'variations' => array(
					array( 'fvd' => 'n4', 'name' => 'Regular' ),
					array( 'fvd' => 'i4', 'name' => 'Italic' ),
					array( 'fvd' => 'n7', 'name' => 'Bold' ),
					array( 'fvd' => 'i7', 'name' => 'Bold Italic' ),
				),
				'shortname' => 'Ubuntu',
				'smallTextLegibility' => true,
			),
		);
	}

	// TEMP
	public function get_api_key() {
		return '';
	}

	/**
	 * Converts a font from API format to internal format.
	 * @param  array $font API font
	 * @return array       Formatted font
	 */
	public function format_font( $font ) {
		$formatted = array(
			'id'   => urlencode( $font['family'] ),
			'cssName' => $font['family'],
			'displayName' => $font['family'],
			'fvds' => $this->variants_to_fvds( $font['variants'] ),
			'subsets' => $font['subsets'],
			'bodyText' => in_array( urlencode( $font['family'] ), $this->body_font_whitelist() )
		);
		return $formatted;
	}

	/**
	 * Converts API variants to Font Variant Descriptions
	 * @param  array $variants
	 * @return array           FVDs
	 */
	private function variants_to_fvds( $variants ) {
		$fvds = array();
		foreach( $variants as $variant ) {
			$fvd = $this->variant_to_fvd( $variant );
			$fvds[ $fvd ] = $this->fvd_to_variant_name( $fvd );
		}
		return $fvds;
	}

	/**
	 * Convert an API variant to a Font Variant Description
	 * @param  string $variant API variant
	 * @return string          FVD
	 */
	private function variant_to_fvd( $variant ) {
		$variant = strtolower( $variant );

		if ( false !== strpos( $variant, 'italic' ) ) {
			$style = 'i';
			$weight = str_replace( 'italic', '', $variant );
		} elseif ( false !== strpos( $variant, 'oblique' ) ) {
			$style = 'o';
			$weight = str_replace( 'oblique', '', $variant );
		} else {
			$style = 'n';
			$weight = $variant;
		}

		if ( 'regular' === $weight || 'normal' === $weight || '' === $weight ) {
			$weight = '400';
		}
		$weight = substr( $weight, 0, 1 );
		return $style . $weight;
	}

	/**
	 * Adds an appropriate Typekit Fonts stylesheet to the page. Will not be called
	 * with an empty array.
	 * @param  array $fonts List of fonts.
	 * @return void
	 */
	public function render_fonts( $fonts ) {
		//TODO: add css
	}

	/**
	 * Convert FVDs to an API string for variants.
	 * @param  array $fvds FVDs
	 * @return string      API variants
	 */
	private function fvds_to_api_string( $fvds ) {
		$to_return = array();
		foreach( $fvds as $fvd ) {
			switch ( $fvd ) {
				case 'n4':
					$to_return[] = 'r'; break;
				case 'i4':
					$to_return[] = 'i'; break;
				case 'n7':
					$to_return[] = 'b'; break;
				case 'i7':
					$to_return[] = 'bi'; break;
				default:
					$style = substr( $fvd, 1, 1 ) . '00';
					if ( 'i' === substr( $fvd, 0, 1 ) ) {
						$style .= 'i';
					}
					$to_return[] = $style;
			}
		}
		return implode( ',', $to_return );
	}

	/**
	 * The URL for your frontend customizer script. Underscore and jQuery
	 * will be called as dependencies.
	 * @return string
	 */
	public function customizer_frontend_script_url() {

	}

	/**
	 * The URL for your admin customizer script to enable your control.
	 * Backbone, Underscore, and jQuery will be called as dependencies.
	 * @return string
	 */
	public function customizer_admin_script_url() {

	}

	/**
	 * Get all available fonts from Typekit.
	 * @return array A list of fonts.
	 */
	public function get_fonts() {
		if ( $fonts = $this->get_cached_fonts() ) {
			return $fonts;
		}
		$fonts = $this->retrieve_fonts();
		if ( $fonts ) {
			$this->set_cached_fonts( $fonts );
			return $fonts;
		}
		// TODO: the api request is not correctly configured.
		// These are just temporary fonts for testing.
		return array(
			array(
				'id' => 'yvxn',
				'displayName' => 'Brandon Grotesque',
				'cssName' => 'yvxn',
				'provider' => 'typekit',
				'fvds' => array(
					'n4'
				),
				'subsets' => array(
					'0' => 'latin'
				)
			)
		);
		// return array();
	}

	/**
	 * Save the kit
	 * @param  array $fonts     A list of fonts.
	 * @return boolean|WP_Error true on success, WP_Error instance on failure.
	 */
	public function save_fonts( $fonts ) {
		return true;
	}
}
