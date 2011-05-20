<div class="grid_1 left_col">
  
  <?php
  $args = array(
    'title_li' => false,
    'sort_column' => 'menu_order',
    'echo' => false,
  );
  if ($post->post_parent):
    $children = wp_list_pages(array_merge($args, array('child_of' => $post->post_parent)));
  else:
    $children = wp_list_pages(array_merge($args, array('child_of' => $post->ID)));
  endif;
  if ($children):
  ?>
    <ul class="nav">
    <?php echo $children ?>
    </ul>
  <?php endif ?>
  
  <div class="shadedside">
    <?php single_post_title() ?>
  </div>
  
</div>