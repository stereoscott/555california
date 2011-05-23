<?php
/**
 * Template Name: One column, image banner
 *
 */

get_header(); ?>

<?php if (has_post_thumbnail()):
  the_post_thumbnail('banner', array('class' => 'callout'));
endif ?>

		<div class="main">
      
      <h1><?php single_post_title() ?></h1>
      
      <?php get_template_part( 'loop', 'page') ?>
      
       <div class="clear"></div>
    </div>

<?php get_footer(); ?>
