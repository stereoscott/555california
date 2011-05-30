<?php
/**
 * Template Name: Two column, shaded sidebar
 *
 * A two column template with a shaded sidebar
 *
 */

get_header(); ?>

		<div class="main shaded">
      
      <?php get_template_part( 'sidebar', 'shaded') ?>

      <div class="grid_3 right_col">
        <h1><?php single_post_title() ?></h1>
        
        <?php if (has_post_thumbnail()):
          the_post_thumbnail('feature', array());
        endif ?>
        
      </div>

       <div class="clear"></div>
    </div>

<?php get_footer(); ?>
