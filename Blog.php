
 <div class="container bg2"> </div>
    <div class="band-h">
     <div class="container">


      <h1 class="texhaed"> <?php echo get_theme_mod( 'text_setblog', 'no entry'); ?></h1>

       <div class="texbody"> <?php echo get_theme_mod( 'text_set_dblog', 'no entry'); ?> </div>


               <br> <br> <br>
                     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       


              <div class="col-md-4 col-xs-12 col-sm-6 text-center">
                                  <a href="<?php the_permalink(); ?>">
                                       <?php if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'medium' );
          
                                             }
                                        ?>
                                   </a>

                   <h3><a  href="<?php the_permalink(); ?>"> <div class="th-text"> <?php the_title(); ?>   </div></a> </h3>
                              <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
                            <div class="th-text_ex "><?php the_excerpt(); ?></div>
                    
                </div>


               <?php endwhile; else : ?>
                  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

       

          <br><br>
         </div>


       </div>  
    </div> 