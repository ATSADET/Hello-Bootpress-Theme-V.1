<?php  
/**
 * The template for displaying the index.php.
 * Author: Atsadet Hannsamer
 * @package Hello Bootpress Theme
 */
?>

<?php get_header(); ?>
<?php require('head-main.php');?>

   <br><br><br> <br><br><br>
 <div class="container">

             <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-10<?php else : ?>col-md-12<?php endif; ?> content-area">
                   
                 <!-- # Code loop post--> 

                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                  
                                    <a href="<?php the_permalink(); ?>">
                                       <?php if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'full' );
          
                                             }
                                        ?>
                                   </a>

                                  <h2><div class="th-textbody"><?php the_title(); ?></div></h2> 
                                      <hr>
                                       <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
                                  <div class="th-textbody"><?php the_content(); ?></div>

                            <?php endwhile; else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>

               <!-- #Facebook omment -->
              <div class="fb-comments" data-href="https://www.facebook.com/" data-width="100%" data-numposts="5"></div>


             </div><!-- # if sidebar Col-8-12 -->
                  <?php get_sidebar(); ?>


      
 </div> <!-- /container -->

<?php get_footer(); ?>




