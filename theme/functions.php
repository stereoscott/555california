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

  /** Register custom size */
  add_image_size('sidebar', 176, 500, true);
}