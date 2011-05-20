<?php get_header(); ?>

		<div class="main">
      
      <?php get_sidebar() ?>

      <div class="grid_3 right_col">
        <h1><?php single_post_title() ?></h1>
        
        <?php get_template_part('loop', 'index') ?>
      </div>
      
    </div>

<?php get_footer(); ?>
