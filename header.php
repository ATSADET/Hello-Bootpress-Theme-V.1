<?php  
/**
 * The template for displaying the index.php.
 * Author: Atsadet Hannsamer
 * @package Hello Bootpress Theme
 */
?>

<!DOCTYPE html>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">

<?php wp_head(); ?>
</head>

              
<body<?php body_class(); ?> style="color:<?php echo get_theme_mod( 'set_color', '#FFFFFF' ); ?>">
     
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                       <!-- COTOM and logo-->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php echo get_theme_mod('set_logo'); ?>" class="circle-logo" alt="LOGO" width="50" height="50"> </a> 
                   
                 <!-- COTOM and tite-->
                <?php the_custom_logo();

                    if ( is_front_page() && is_home() ) : ?>
                      
                       <a class="navbar-brand page-scroll" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                    <?php else : ?>
                 <a class="navbar-brand page-scroll" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                    <?php endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                       <?php echo $description; ?>
                    <?php endif;
                ?>
           <!-- COTOM and tite-->
            </div>

           

         <?php
                            wp_nav_menu( array(
                                'menu'              => 'primary',
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav navbar-right',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                  ?>


  



        </div>
        <!-- /.container-fluid -->
    </nav>



 


  
