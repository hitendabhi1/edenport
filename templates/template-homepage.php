<?php
/**
 * Template Name: Main Page
 * Template Post Type: post, page
 *
 */

get_header();
?>

<main id="home" class="p01">
  <div class="container">
    <h3 class="p01__post-title">
      <?php echo get_the_title(); ?>
    </h3>
    <div class="video-wrapper">
      <iframe
        src="https://player.vimeo.com/video/530245499?loop=false&byline=false&portrait=false&title=false&speed=true&transparent=0&gesture=media"
        allowfullscreen
        allowtransparency
        allow="autoplay"
      ></iframe>
    </div>
    <div class="video-wrapper">
      <iframe
          src="https://player.vimeo.com/video/337805520?loop=false&byline=false&portrait=false&title=false&speed=true&transparent=0&gesture=media"
          allowfullscreen
          allowtransparency
          allow="autoplay"
      ></iframe>
    </div>
   

    
  </div>
</main><!-- #home -->


<?php get_footer(); ?>
