<?php

wp_enqueue_script('hoverIntent', get_bloginfo('template_url') . '/js/jquery.hoverIntent.minified.js', array('jquery'), '1.0', false);
wp_enqueue_script('enlarge', get_bloginfo('template_url') . '/js/enlarge.js', array('jquery'), '1.0', false);
wp_enqueue_script('slides', get_bloginfo('template_url') . '/js/slides.min.jquery.js', array('jquery'), '1.0', false);

/**
 * Enable the post thumbnail support
 * Add the custom 150X150 image size
 */
if (function_exists('add_theme_support')) {
  /** Register the post thumbnail */
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size( 176, 500 );
}

if (function_exists('add_image_size')) {
  add_image_size('banner', 1000, 180, false);
  add_image_size('sidebar', 176, 1000, false);
  add_image_size('sidebar-wide', 300, 1000, false);
  add_image_size('feature', 650, 1000, false);
}

/*
 * Modifying TinyMCE editor to remove unused items.
 */
function customformatTinyMCE($init) {
	// Add block format elements you want to show in dropdown
  // $init['theme_advanced_blockformats'] = 'p,pre,h1,h2,h3,h4';
	// $init['theme_advanced_disable'] = 'strikethrough,underline,forecolor,justifyfull';
	$init['theme_advanced_text_colors'] = '675C53';// . implode(',', $colors);

	return $init;
}

// Modify Tiny_MCE init
add_filter('tiny_mce_before_init', 'customformatTinyMCE' );

function redirectToFirstChild() {
  global $post;
  $pagekids = get_pages("child_of=".$post->ID."&sort_column=menu_order");
  $firstchild = $pagekids[0];
  wp_redirect(get_permalink($firstchild->ID), 301);
  exit;
}

add_shortcode('redirect_first_child', 'redirectToFirstChild');