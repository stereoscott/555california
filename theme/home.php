<?php get_header(); ?>

<script type="text/javascript">

(function($) {
  var cache = [];
  // Arguments are image paths relative to the current page.
  $.preLoadImages = function() {
    var args_len = arguments.length;
    for (var i = args_len; i--;) {
      var cacheImage = document.createElement('img');
      cacheImage.src = arguments[i];
      cache.push(cacheImage);
    }
  }
  
  $(document).ready(function(){
  	var startSlide = 1;
  	if (window.location.hash) {
  		startSlide = window.location.hash.replace('#','');
  		if (startSlide == 2) {
  		  $('.sliderwrap').animate({top:'26px'});
  		}
  	}

  	$('.sliderwrap').slides({
  	  container: 'slider',
  	  preload: true,
  		preloadImage: '<?php bloginfo('template_directory'); ?>/images/loading.gif',
  		fadeSpeed: 1500,
  		fadeEasing: 'swing',
  		generateNextPrev: false,
  		generatePagination: false,
  		start: startSlide,
  		autoHeight: true,
  		slidesLoaded: function() {
  		  $('.slider div.slide:eq('+(startSlide-1)+')').fadeIn();
  		  //control.find('img:eq(' + start + ')')
  		  if (startSlide == 1) {
  		    $('#arrow_right').fadeIn();
  		  } else {
  		    $('#arrow_left').show();
  		  }
  		},
  		animationStart: function(current) {
  		  if (current == 1) {
  		    $('.sliderwrap').animate({top:'26px'});
  		    $('#arrow_right').fadeOut();
  		    $('#arrow_left').fadeIn();
  		  } else if (current == 2) {
  		    $('.sliderwrap').animate({top:'60px'});
  		    $('#arrow_left').fadeOut();
  		    $('#arrow_right').fadeIn();
  		  }
  		},
  		animationComplete: function(current) {
  		  window.location.hash = '#' + current;
  		}
  	});


    $('.newspaper a.sepia img').each(function(){
        var t=$(this);
        var src= t.attr('src'); // initial src
        var srcBase = src.substring(0, src.lastIndexOf('.'));; // let's get file name without extension
        var srcOver = srcBase+ '-over.' + /[^.]+$/.exec(src);
        $.preLoadImages(srcOver);
        t.hover(function(){
            $(this).attr('src', srcOver); //last part is for extension   
        }, function(){
            $(this).attr('src', srcBase + '.' + /[^.]+$/.exec(src)); //removing '-over' from the name
        });
    });
  });
})(jQuery)



</script>
  
		<div class="main">
      <div class="sliderwrap">
        <div class="slider">
          <div class="slide" id="slide1">
            <!-- slide 1 -->
            <div class="grid_1 rollover top"><img src="<?php bloginfo('template_directory'); ?>/images/photo1.png"></div>
            <div class="grid_1 rollover top"><img src="<?php bloginfo('template_directory'); ?>/images/photo2.png"></div>
            <div class="grid_1 rollover top"><img src="<?php bloginfo('template_directory'); ?>/images/photo3.png"></div>
            <div class="grid_1 rollover top right"><img src="<?php bloginfo('template_directory'); ?>/images/photo4.png"></div>
            <div class="grid_1 rollover bottom"><img src="<?php bloginfo('template_directory'); ?>/images/photo5.png"></div>
            <div class="grid_1 rollover bottom"><img src="<?php bloginfo('template_directory'); ?>/images/photo6.png"></div>
            <div class="grid_1 rollover bottom"><img src="<?php bloginfo('template_directory'); ?>/images/photo7.png"></div>
            <div class="grid_1 rollover bottom right"><img src="<?php bloginfo('template_directory'); ?>/images/photo8.png"></div>
            <!-- end slide 1 -->
          </div>
        
          <div class="slide newspaper" id="slide2">
            <!-- slide 2 -->
            <div class="container">
              <div class="grid_a alpha">
                <h3><a href="<?php echo site_url('/retail-leasing-opportunity/mezzanine-level-overview/') ?>">retail leasing opportunity</a></h3>
                <a class="sepia" id="link_retail" href="<?php echo site_url('/retail-leasing-opportunity/mezzanine-level-overview/') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/555.jpg" style="margin-bottom: 28px"></a>
                <h3><a href="<?php echo site_url('/retail-leasing-opportunity/proposed-usage/') ?>">proposed usage</a></h3>
                <a class="sepia" id="link_proposed" href="<?php echo site_url('/retail-leasing-opportunity/proposed-usage/') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/usage.jpg"></a>
              </div>
              <div class="grid_b">
                <h3><a href="<?php echo site_url('/about/') ?>">about 555 california</a></h3>
                <a class="sepia" id="link_about" href="<?php echo site_url('/about/') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/exterior.jpg"></a>
              </div>
              <div class="grid_c omega">
                <h3><a href="<?php echo site_url('/vicinity-highlights/') ?>">vicinity highlights</a></h3>
                <a class="sepia" id="link_vicinity" href="<?php echo site_url('/vicinity-highlights/') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/map.jpg" style="margin-bottom: 17px"></a>
                <div class="col_half alpha">
                  <h3><a href="<?php echo site_url('/virtual-tour/') ?>">virtual tour</a></h3>
                  <a class="sepia" id="link_tour" href="<?php echo site_url('/virtual-tour/') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/virtualtour.jpg"></a>
                </div>
                <div class="col_half omega">
                  <h3><a href="<?php echo site_url('/sustainability/') ?>">sustainability</a></h3>
                  <a class="sepia" id="link_sustainability" href="<?php echo site_url('/sustainability/') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/sustainability.jpg"></a>
                </div>
              </div>
              <br class="clear">
            </div>
            <!-- end slide two -->
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