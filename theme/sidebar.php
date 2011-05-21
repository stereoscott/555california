<div class="grid_1 left_col">
  
<?php if (has_post_thumbnail()):
  the_post_thumbnail('sidebar', array('class' => 'callout'));
endif ?>

<?php get_template_part('sidenav', 'sidebar') ?>

</div>