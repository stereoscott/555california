<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', '555california' ), max( $paged, $page ) );
?></title>
<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri() ?>/grid.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" >
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head() ?>
</head>
<body class="<?php echo is_home() ? 'home' : 'interior cms' ?>">
	<div id="body" class="container_4">
	  <div class="header">
	    <h3 class="logo"><a href="<?php echo home_url() ?>">555 California Street</a></h3>
	    <?php if (is_page()): ?>
	    <?php   if (is_page_template('onecolumn-vornado.php')): ?>
	      <img class="right" src="<?php bloginfo('template_directory'); ?>/images/vornado.gif" alt="Vornado Realty Trust">
	    <?php   else: ?> 
	    <h2 class="title">
	      <?php echo $post->post_parent ? get_the_title($post->post_parent) : single_post_title(); ?> </h2>
	    <?php   endif ?>
	    <?php endif ?>
    </div>