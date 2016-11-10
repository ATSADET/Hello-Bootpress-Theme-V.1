<?php  
/**
 * The template for displaying the index.php.
 * Author: Atsadet Hannsamer
 * @package Hello Bootpress Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


     <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> 
    
	<div class="entry-content">

		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->


</article><!-- #post-## -->
