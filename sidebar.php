<?php  
/**
 * The template for displaying the index.php.
 * Author: Atsadet Hannsamer
 * @package Hello Bootpress Theme
 */
?>

<?php

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="col-md-2 widget-area" role="complementary">

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
</div><!-- #secondary -->
