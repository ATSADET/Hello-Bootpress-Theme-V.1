<?php
/**
 * The configuration options for the Shoestrap Customizer
 */
function shoestrap_customizer_config() {

	$args = array(

		// Change the logo image. (URL)
		// If omitted, the default theme info will be displayed.
		// A good size for the logo is 250x50.
		//'logo_image'   => get_template_directory_uri() . '/assets/img/logo.png',

		// The color of active menu items, help bullets etc.
		//'color_active' => '#1abc9c',

		// Color used for secondary elements and desable/inactive controls
		//'color_light'  => '#8cddcd',

		// Color used for button-set controls and other elements
		//'color_select' => '#34495e',

		// Color used on slider controls and image selects
		//'color_accent' => '#FF5740',

		// The generic background color.
		// You should choose a dark color here as we're using white for the text color.
		//'color_back'   => '#222',

		// If Kirki is embedded in your theme, then you can use this line to specify its location.
		// This will be used to properly enqueue the necessary stylesheets and scripts.
		// If you are using kirki as a plugin then please delete this line.
		'url_path'     => get_template_directory_uri() . '/inc/kirki/',

		// If you want to take advantage of the backround control's 'output',
		// then you'll have to specify the ID of your stylesheet here.
		// The "ID" of your stylesheet is its "handle" on the wp_enqueue_style() function.
		// http://codex.wordpress.org/Function_Reference/wp_enqueue_style
		// 'stylesheet_id' => 'shoestrap',

		);

return $args;

}
add_filter( 'kirki/config', 'shoestrap_customizer_config' );



/**
 * Create the section
 */
function Atsadetbootpress_section( $wp_customize ) {


	// Create Sections-----------------------
	$wp_customize->add_section( 'intro', array(
		'title'    => __( 'กำหนดข้อความ', 'Atsadet' ),
		'priority' => 21
		) );
	$wp_customize->add_section( 'thumbnail', array(
		'title'    => __( 'กำหนดรูปภาพ', 'Atsadet
			' ),
		'priority' => 20
		) );
	$wp_customize->add_section( 'text', array(
		'title'    => __( 'Footer Text', 'Atsadet' ),
		'priority' => 30
		) );

	$wp_customize->add_section( 'Package', array(
		'title'    => __( 'กำหนดรายละเอียดแพคเกจ', 'Atsadet' ),
		'priority' => 22
		) );


	$wp_customize->add_section( 'Veraion_2', array(
		'title'    => __( 'พัฒนาเวอร์ชั่น : 2 ', 'Atsadet' ),
		'priority' => 90
		) );

}


add_action( 'customize_register', 'Atsadetbootpress_section' );



// Register the setting ------------------------------ 2
function Atsadetbootpress_setting( $controls ) {

	$introtext = __('Hello Bootpress Theme', '');
	$controls[] = array(
		'type'     => 'text',
		'setting'  => 'text_setname',
		'label'    => __( 'กำหนดข้อความแบบสั้น', '' ),
		'section'  => 'intro',
		'default'  => $introtext,
		'priority' => 10,
		);


	$introtext = __('Hello Bootpress Theme', '');
	$controls[] = array(
		'type'     => 'textarea',
		'setting'  => 'text_set_dname',
		'label'    => __( 'รายละเอียด', '' ),
		'section'  => 'intro',
		'default'  => $introtext,
		'priority' => 11,
		);



	$introtext = __('Hello Bootpress Theme', '');
	$controls[] = array(
		'type'     => 'text',
		'setting'  => 'text_setservice',
		'label'    => __( 'กำหนดข้อความแบบสั้น', '' ),
		'section'  => 'intro',
		'default'  => $introtext,
		'priority' => 20,
		);


	$introtext = __('Hello Bootpress Theme', '');
	$controls[] = array(
		'type'     => 'textarea',
		'setting'  => 'text_set_dservice',
		'label'    => __( 'รายละเอียด ', '' ),
		'section'  => 'intro',
		'default'  => $introtext,
		'priority' => 21,
		);



$introtext = __('Hello Bootpress Theme', '');
	$controls[] = array(
		'type'     => 'text',
		'setting'  => 'text_setblog',
		'label'    => __( 'กำหนดข้อความแบบสั้น', '' ),
		'section'  => 'intro',
		'default'  => $introtext,
		'priority' => 30,
		);


	$introtext = __('Hello Bootpress Theme', '');
	$controls[] = array(
		'type'     => 'textarea',
		'setting'  => 'text_set_dblog',
		'label'    => __( 'รายละเอียด ', '' ),
		'section'  => 'intro',
		'default'  => $introtext,
		'priority' => 31,
		);



// img ------------------------------ **
	$introtext = __('Hello Bootpress Theme', '');
$controls[] = array(
		'type'     => 'image',
		'setting'  => 'set_img',
		'label'    => __( 'รูปแบนเนอร์', '' ),
		'section'  => 'thumbnail',
		'default'  => $introtext,
		'priority' => 3,
		);

$controls[] = array(
		'type'     => 'image',
		'setting'  => 'set_img2',
		'label'    => __( 'รูปฟุตเตอร์', '' ),
		'section'  => 'thumbnail',
		'default'  => $introtext,
		'priority' => 4,
		);

$controls[] = array(
		'type'     => 'image',
		'setting'  => 'set_logo',
		'label'    => __( 'รูปโลโก้', '' ),
		'section'  => 'thumbnail',
		'default'  => $introtext,
		'priority' => 1,
		);


// Package ------------------------------ **

$introtext = __('Hello Bootpress Theme', '');
	$controls[] = array(
		'type'     => 'text',
		'setting'  => 'text_setPackage11',
		'label'    => __( '1 : ( ชื่อแพคเกจ )', '' ),
		'section'  => 'Package',
		'default'  => $introtext,
		'priority' => 30,
		);

	$introtext = __('Hello Bootpress Theme', '');
	$controls[] = array(
		'type'     => 'image',
		'setting'  => 'text_setPackage12',
		'label'    => __( 'รูปภาพ รายละเอียด', '' ),
		'section'  => 'Package',
		'default'  => $introtext,
		'priority' => 31,
		
	);

$introtext = __('Bootpress ', '');
	$controls[] = array(
		'type'     => 'text',
		'setting'  => 'text_setPackage13',
		'label'    => __( 'ราคา', '' ),
		'section'  => 'Package',
		'default'  => $introtext,
		'priority' => 32,
		);


$introtext = __('Hello Bootpress Theme', '');
	$controls[] = array(
		'type'     => 'text',
		'setting'  => 'text_setPackage21',
		'label'    => __( '2 : ( ชื่อแพคเกจ )', '' ),
		'section'  => 'Package',
		'default'  => $introtext,
		'priority' => 33,
		);

	$introtext = __('Hello Bootpress Theme', '');
	$controls[] = array(
		'type'     => 'image',
		'setting'  => 'text_setPackage22',
		'label'    => __( 'รูปภาพ รายละเอียด', '' ),
		'section'  => 'Package',
		'default'  => $introtext,
		'priority' => 34,
		
	);

$introtext = __('Bootpress', '');
	$controls[] = array(
		'type'     => 'text',
		'setting'  => 'text_setPackage23',
		'label'    => __( 'ราคา', '' ),
		'section'  => 'Package',
		'default'  => $introtext,
		'priority' => 35,
		);



$introtext = __('Hello Bootpress Theme', '');
	$controls[] = array(
		'type'     => 'text',
		'setting'  => 'text_setPackage31',
		'label'    => __( '3 : ( ชื่อแพคเกจ )', '' ),
		'section'  => 'Package',
		'default'  => $introtext,
		'priority' => 36,
		);

	$introtext = __('Hello Bootpress Theme', '');
	$controls[] = array(
		'type'     => 'image',
		'setting'  => 'text_setPackage32',
		'label'    => __( 'รูปภาพ รายละเอียด', '' ),
		'section'  => 'Package',
		'default'  => $introtext,
		'priority' => 37,
		
	);

$introtext = __('Bootpress', '');
	$controls[] = array(
		'type'     => 'text',
		'setting'  => 'text_setPackage33',
		'label'    => __( 'ราคา', '' ),
		'section'  => 'Package',
		'default'  => $introtext,
		'priority' => 38,
		);



// Version : 2 ------------------------------ **

$introtext = __('Hello Bootpress Theme V.2 coming soon', '');
	$controls[] = array(
		'type'     => 'text',
		'setting'  => '',
		'label'    => __( ' ( ใส่วีดีโอ )', '' ),
		'section'  => 'Veraion_2',
		'default'  => $introtext,
		'priority' => 10,
		);

	return $controls;
}
add_filter( 'kirki/controls', 'Atsadetbootpress_setting' );

?>