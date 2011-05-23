<?php
/**
 * Template Name: One column standard
 *
 * A custom page template without sidebar.
 *
 */

get_header(); ?>

		<div class="main">
      
      <?php get_template_part( 'loop', 'page') ?>
      
       <div class="clear"></div>
    </div>

<?php get_footer(); ?>
