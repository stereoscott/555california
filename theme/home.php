<?php get_header(); ?>

<script type="text/javascript">
jQuery(document).ready(function($){
	$('.sliderwrap').slides({
	  container: 'slider',
		preload: true,
		preloadImage: 'images/loading.gif',
		fadeSpeed: 1500,
		fadeEasing: 'swing',
		generateNextPrev: false,
		generatePagination: false,
		slidesLoaded: function() {
		  $('#arrow_right').fadeIn();
		},
		animationStart: function(current) {
		  if (current == 1) {
		    $('#arrow_right').fadeOut();
		    $('#arrow_left').fadeIn();
		  } else if (current == 2) {
		    $('#arrow_left').fadeOut();
		    $('#arrow_right').fadeIn();
		  }
		}
	});
});

</script>

		<div class="main">
      
      <div class="sliderwrap">
        <div class="slider">
          <div class="slide" id="slide1">
            <div class="grid_1 rollover top"><img src="<?php bloginfo('template_directory'); ?>/images/photo1.png"></div>
            <div class="grid_1 rollover top"><img src="<?php bloginfo('template_directory'); ?>/images/photo2.png"></div>
            <div class="grid_1 rollover top"><img src="<?php bloginfo('template_directory'); ?>/images/photo3.png"></div>
            <div class="grid_1 rollover top right"><img src="<?php bloginfo('template_directory'); ?>/images/photo4.png"></div>
            
            <div class="grid_1 rollover bottom"><img src="<?php bloginfo('template_directory'); ?>/images/photo5.png"></div>
            <div class="grid_1 rollover bottom"><img src="<?php bloginfo('template_directory'); ?>/images/photo6.png"></div>
            <div class="grid_1 rollover bottom"><img src="<?php bloginfo('template_directory'); ?>/images/photo7.png"></div>
            <div class="grid_1 rollover bottom right"><img src="<?php bloginfo('template_directory'); ?>/images/photo8.png"></div>
          </div>
          <div class="slide brochure" id="slide2">
            
            <div class="container">
              <div class="grid_a alpha">
                <h3><a href="#">retail leasing opportunity</a></h3>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/555.jpg" style="margin-bottom: 28px"></a>

                <h3><a href="#">proposed usage</a></h3>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/usage.jpg"></a>
              </div>
              <div class="grid_b">
                <h3><a href="about.html">about 555 california</a></h3>
                <a href="about.html"><img src="<?php bloginfo('template_directory'); ?>/images/exterior.jpg"></a>
              </div>
              <div class="grid_c omega">
                <h3><a href="#">vicinity highlights</a></h3>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/map.jpg" style="margin-bottom: 17px"></a>

                <div class="col_half alpha">
                  <h3><a href="#">virtual tour</a></h3>
                  <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/virtualtour.jpg"></a>
                </div>
                <div class="col_half omega">
                  <h3><a href="#">sustainability</a></h3>
                  <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sustainability.jpg"></a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <div class="edge transparent" id="arrow_left" style="display:none">
          <a href="#" class="arrow prev">&lt;</a>
        </div>
        <div class="edge wide transparent" id="arrow_right" style="display:none">
          <a href="#" class="explore next">EXPLORE</a> <a href="#" class="arrow next">&gt;</a>
        </div>
      </div>
      
      
    </div>

<?php get_footer(); ?>
