<?php  
/**
 * The template for displaying the  Example Customize.
 * Author: Atsadet Hannsamer
 * @package Hello Bootpress Theme
 */
?>

<?php 

function up_kirki_section( $wp_customize ) {
 /**
 * Add panels
 */
 $wp_customize->add_panel( 'up_theme_options', array(
 'priority'    => 10,
 'title'       => __( 'กดเข้าสู่การปรับแต่งเว็บไซต์', 'upplanet' ),
 ) );
 
 /**
 * Add sections
 */
     /*-------------------- 1 test  */
  $wp_customize->add_section('logo1',array(
     'title' => __('โหลดรูปภาพ ของคุณ','upplanet'),
     'priority' => 7,
     'panel' => 'up_theme_options',
 
     ));
        /*-------------------- 1 test  */


      /*-------------------- 1 test  */
  $wp_customize->add_section('testo',array(
     'title' => __('โหลดรูปภาพ ของคุณ','upplanet'),
     'priority' => 8,
     'panel' => 'up_theme_options',
 
     ));
        /*-------------------- 1 test  */


   /*-------------------- 2 test  */
  $wp_customize->add_section('text_1',array(
     'title' => __('ใส่ข้อความของคุณ','upplanet'),
     'priority' => 9,
     'panel' => 'up_theme_options',
 
     ));
        /*-------------------- 2 test  */



  /*-------------------- 4 test  */
  $wp_customize->add_section('color_1',array(
     'title' => __('ใส่ Color','upplanet'),
     'priority' => 11,
     'panel' => 'up_theme_options',
 
     ));
        /*-------------------- 4 test  */


  $wp_customize->add_section( 'code_1', array(
    'title'          => __( 'Custom CSS' ),
    'description'    => __( 'Add custom CSS here' ),
    'panel'          => '', // Not typically needed.หมายความว่า ให้อยู่ในหรืออยู่นอนก
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


     $wp_customize->add_section( 'general_options', array(
 'title'       => __( 'General Options', 'upplanet' ),
 'priority'    => 12,
 'panel'       => 'up_theme_options',
 ) );
 



     $wp_customize->add_section( 'header_options', array(
 'title'       => __( 'Header Options', 'upplanet' ),
 'priority'    => 20,
 'panel'       => 'up_theme_options',
 ) );
 
    $wp_customize->add_section('layout_options',array(
     'title' => __('Layouts Options','upplanet'),
     'priority' => 30,
     'panel' => 'up_theme_options',
 
     ));
 
    $wp_customize->add_section('slide_options',array(
     'title' => __('Slide Options','upplanet'),
     'priority' => 30,
     'panel' => 'up_theme_options',
 
     ));
 
    $wp_customize->add_section('page_options',array(
     'title' => __('Page Options','upplanet'),
     'priority' => 30,
     'panel' => 'up_theme_options',
 
     ));
 
    $wp_customize->add_section('single_options',array(
     'title' => __('Single Page','upplanet'),
     'priority' => 40,
     'panel' => 'up_theme_options',
 
     ));
 
    $wp_customize->add_section('footer_options',array(
     'title' => __('Footer Options','upplanet'),
     'priority' => 50,
     'panel' => 'up_theme_options',
 
     ));
 
 
}
add_action( 'customize_register', 'up_kirki_section' );
 
 
 /* Options*/

function up_kirki_fields( $wp_customize ) {


 /*test Options -------------------------------------- #1 test*/
 
    $fields[] = array(
 'type'        => 'image',
 'settings'    => 'set_logo',
 'label'       => __( 'test สิ่งแรก', 'upplanet' ),
 'description' => __( 'โหลดรูปภาพ', 'upplanet' ),
 'section'     => 'logo1',
 'default'     => '',
 'priority'    => 1,
);

 /*test Options -------------------------------------- #1 test*/
 
    $fields[] = array(
 'type'        => 'image',
 'settings'    => 'set_image',
 'label'       => __( 'test สิ่งแรก', 'upplanet' ),
 'description' => __( 'โหลดรูปภาพ', 'upplanet' ),
 'section'     => 'testo',
 'default'     => '',
 'priority'    => 1,
);
 
 /*General Options -------------------------------------- #1 test*/

 /*test Options -------------------------------------- #2 test*/
 
    $fields[] = array(
 'type'        => 'textarea',
 'settings'    => 'set_editor',
 'label'       => __( 'ลงข้อความ', 'upplanet' ),
 'description' => __( 'เขียนข้อความ', 'upplanet' ),
 'section'     => 'text_1',
 'default'     => '',
 'priority'    => 1,
);
 /*General Options -------------------------------------- #2test*/

/*test Options -------------------------------------- #3 test*/
 
    $fields[] = array(
    'type'        => 'code',
	'settings'    => 'set_code',
	'label'       => __( 'Code Control', 'my_textdomain' ),
	'section'     => 'code_1',
	'default'     => 'body { background: #fff; }',
	'priority'    => 1,
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'monokai',
		'height'   => 250,
),);
 /*General Options -------------------------------------- #3test*/


 /*General Options -------------------------------------- #4test*/
$fields[] = array(
'type'        => 'color',
	'settings'    => 'set_color',
	'label'       => __( 'This is the label', 'my_textdomain' ),
	'section'     => 'color_1',
	'default'     => '#0088CC',
	'priority'    => 10,
	'alpha'       => true,
);

 /*General Options -------------------------------------- #4test*/



 /*General Options*/
 
    $fields[] = array(
 'type'        => 'image',
 'settings'    => 'fav_icon',
 'label'       => __( 'Favicon', 'upplanet' ),
 'description' => __( 'Upload your site favicon here', 'upplanet' ),
 'section'     => 'general_options',
 'default'     => '',
 'priority'    => 10,
);
 
 
 // Header Options
 
 $fields[] = array(
     'type'        => 'radio-image',
     'setting'     => 'header_hero',
     'label'       => __( 'Choose to show slide or text in header', 'upplanet' ),
     'section'     => 'header_options',
     'default'     => 'slide',
     'priority'    => 10,
     'choices'     => array(
       'slide' => trailingslashit( get_template_directory_uri() ) . 'images/header-slide.png',
       'text' => trailingslashit( get_template_directory_uri() ) . 'images/header-text.png',
     ),
 );
 
 
 // Layouts Options
 
    $fields[] = array(
        'type'        => 'radio-image',
        'setting'     => 'up_layout',
        'label'       => __( 'Site Layout', 'upplanet' ),
        'description' => __( 'Decide which layout you want for your site', 'upplanet' ),
        'section'     => 'layout_options',
        'default'     => 'sidebar-right',
        'priority'    => 10,
        'choices'     => array(
          'sidebar-right' => trailingslashit( get_template_directory_uri() ) . 'images/layout-right-side.png',
          'sidebar-left' => trailingslashit( get_template_directory_uri() ) . 'images/layout-left-side.png',
          'right-left' => trailingslashit( get_template_directory_uri() ) . 'images/right-left-side.png',
        ),
    );
 
 
 // Slide Options
 
    $fields[] = array(
 'type'        => 'radio',
 'settings'    => 'slide_query',
 'label'       => __( 'What to Query in Slide', 'upplanet' ),
 'section'     => 'slide_options',
 'default'     => 'recent-posts',
 'priority'    => 10,
 'choices'     => array(
 'most-commented'   => esc_attr__( 'Query most commented posts', 'upplanet' ),
 'recent-posts' => esc_attr__( 'Query most recent posts', 'upplanet' ),
 ),
     );
 
 
 /*Page Options*/

    $fields[] = array(
 'type'        => 'slider',
 'settings'    => 'page_hero',
 'label'       => esc_attr__( 'Page Header Hieght', 'upplanet' ),
 'section'     => 'page_options',
 'default'     => 120,
 'choices'     => array(
 'min'  => '100',
 'max'  => '400',
 'step' => '1',
 ),
 );
 
 /*Single Post*/
 
 $fields[] = array(
 'type'        => 'checkbox',
 'settings'    => 'show_single_social',
 'label'       => __( 'Show Social Share', 'upplanet' ),
 'section'     => 'single_options',
 'default'     => '1',
 'priority'    => 10,
 );
 
 
 // Footer Options
 
    $fields[] = array(
 'type'     => 'textarea',
 'settings' => 'copy_right',
 'label'    => __( 'Footer Copyright Note', 'upplanet' ),
 'section'  => 'footer_options',
 'default'  => esc_attr__( 'Theme By <a href="http://www.upplanet.com">Upplanet </a>', 'upplanet' ),
 'priority' => 10,
 'sanitize_callback' => 'do_not_filter_anything',
 
 );
 
    return $fields;
}
 
add_filter( 'kirki/fields', 'up_kirki_fields' );





?>

