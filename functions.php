<?php  
/**
 * The template for displaying the functions.php.
 * Author: Atsadet Hannsamer
 * @package Hello Bootpress Theme
 */
?>

<?php 

require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Hello Bootpress Theme' ),));

the_post_thumbnail();
add_theme_support( 'post-thumbnails' ); 

add_theme_support( 'title-tag' );


/** margin top 0*/
 add_action('get_header', 'my_filter_head');
  function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }the_post_thumbnail();



function Atsadetbootpress_style() {
  wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css');
  wp_enqueue_style( 'atsadet-bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css' ); 

}
add_action( 'wp_enqueue_scripts', 'Atsadetbootpress_style' );

function Atsadetbootpress_scripts() {
  wp_enqueue_script( 'bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), 3.3, true);   
}

add_action( 'wp_enqueue_scripts', 'Atsadetbootpress_scripts' );



include_once( dirname( __FILE__ ) . '/kirki/kirki.php' );
include ( dirname( __FILE__ ) . '/inc/kirki-config.php' );



?>


