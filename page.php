<?php  
/**
 * The template for displaying the index.php.
 * Author: Atsadet Hannsamer
 * @package Hello Bootpress Theme
 */
?>

<?php get_header(); ?>
    

    <div class="container">

        <div class="row">

          
                 <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                       
                            <?php get_template_part( 'loop-templates/content', 'page' ); ?>  

                        <?php
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif; 
                        ?>

                    <?php endwhile; ?>

                </main><!-- #main -->
               
           
            
        

        </div><!-- .row -->
        
    </div><!-- Container end -->

    
<?php get_footer(); ?>

