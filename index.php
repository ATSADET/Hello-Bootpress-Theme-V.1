<?php  
/**
 * The template for displaying the index.php.
 * Author: Atsadet Hannsamer
 * @package Hello Bootpress Theme
 */
?>
<style type="text/css" media="screen">
  html { margin-top: 0px !important; }
  * html body { margin-top: 0px !important; }
</style>

<?php get_header(); ?>

   <img src='<?php echo get_theme_mod('set_img','no entry'); ?>' class="img-responsive" alt="BANNER" width="100%" height="406"> 

<!--Set VDO -->

<!-- <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
</video> -->

<!-- <video id="home-video" width="1920" height="1000" autoplay muted loop>
        <source src="http://artexproductions.com/wp-content/uploads/2015/07/Artex-Landing-Reel-JULY2016.mp4" type="video/mp4">
</video> -->
   
    <div class="band-h1">
        <div class="container">
                 <div class="col-sm-4"> <h1 class="texhaed1"><?php echo get_theme_mod( 'text_setname', 'no entry'); ?> </h1></div>
                  <div class="col-sm-8"> <div class="texbody1"> <?php echo get_theme_mod( 'text_set_dname', 'no entry'); ?> </div>
                  </div> 

            </div>
        </div>
    <div class="overlay"></div>


<br><br>

<?php require('Package.php');?>

<br><br><br>
<?php require('Blog.php');?>

<div class=" bg2"></div>
<div class=" bgr2"></div>
<?php get_footer(); ?>



