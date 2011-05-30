<?php
/**
 * Template Name: Vicinity Highlights
 *
 */

get_header(); ?>

<?php if (has_post_thumbnail()):
  the_post_thumbnail('banner', array('class' => 'callout'));
endif ?>

		<div class="main">
      
      <?php get_template_part( 'loop', 'page') ?>
      
      <iframe width="100%" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://dev.citymaps.com/map_555cal.php?param=<?php echo time(); ?>"></iframe>
            
       <div class="clear"></div>
    </div>

<?php get_footer(); ?>
