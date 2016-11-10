<?php  
/**
 * The template for displaying the 404.php.
 * Author: Atsadet Hannsamer
 * @package Hello Bootpress Theme
 */
?>
<?php

get_header(); ?>

		<div id="content">

			<header class="page-header">
				<h1 class="page-title"><?php _e( '404', 'Atsadet' ); ?></h1>

				<div class="page-404">
					<h2><?php _e( 'ไม่พบหน้าที่คุณต้องการ นะจ๊ะ' ); ?></h2>
		             <a href=""><p><?php _e( 'ค้นหาสิ่งที่คุณต้องการ  หรือกลับเข้าสู่เว็บไซต์ Media Curated', 'Atsadet' ); ?></p></a>

					<?php get_search_form(); ?>
				</div>

			</header>
		</div>


<?php get_footer(); ?>