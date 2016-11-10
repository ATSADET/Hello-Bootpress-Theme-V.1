<?php  
/**
 * The template for displaying the Category.php.
 * Author: Atsadet Hannsamer
 * @package Hello Bootpress Theme
 */
?>

<?php get_header(); ?>


<?php require('head-main.php');?>

<br><br><br><br>
 <div class="container">


     <div  class="text-center"> <h2><?php the_category( '' ); ?></h2></div>  <!--  <?php the_category( ' ' ); ?>  name หมวดหมู่ -->
<br>
          <div class="row text-center">

    
    
                     <?php if ( have_posts() ) : while ( have_posts() ) : the_post();     ?>
       
              <div class="col-md-4 col-xs-12 col-sm-12">
                                  <a href="<?php the_permalink(); ?>">
                                       <?php if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'medium' );
                                    }
                                        ?>
                                        </a>

                         <h3><a  href="<?php the_permalink(); ?>"> <div class="th-text"> <?php the_title(); ?>   </div></a>    </h3>
                            <div class="th-ex_cat"> <?php the_excerpt(); ?></div>
                    
                </div>


               <?php endwhile; else : ?>
                  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
          
         </div>

         <div class="col-sm-offset-6 col-sm-5">
          <nav>
              <?php previous_posts_link('&laquo; Newer') ?>
              <?php next_posts_link('Older &raquo;') ?>
          </nav>

</div>
     </div>   
<br><br><br><br>



<?php get_footer(); ?>


