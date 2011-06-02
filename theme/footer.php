    <div class="footer shade">
      <ul class="nav">
        <?php if (is_home()): ?>
        <li class="home"><a href="#2" id="home_footer">Explore</a></li>
        <script type="text/javascript">
          (function($) {
            $('#home_footer').click(function(evt) {
              if ($('#slide1').is(':visible')) {
                $('#arrow_right a.explore').click();
              }
            });
          })(jQuery);
        </script>
        <?php else: ?>
        <li class="home"><a href="<?php echo home_url() ?>/#2">Explore</a></li>
        <?php endif ?>
        <li class="brochure"><a href="<?php echo site_url('/e-brochure/') ?>">E-Brochure</a></li>
        <li class="vornado"><a href="<?php echo site_url('/vornado/about-vornado/') ?>">Vornado</a>
          <ul>
            <li><a href="<?php echo site_url('/vornado/about-vornado/') ?>">About Vornado</a></li>
            <li><a href="<?php echo site_url('/vornado/vornado-retail/') ?>">Vornado Retail</a></li>
          </ul>
        </li>
        <li class="contact"><a href="<?php echo site_url('/contact/') ?>">Contact</a></li>
      </ul>      
    </div>
    <div class="copyright">
      © 2011 Vornado Realty Trust 
      <div style="float:right">
        <a href="http://www.555cal.com" target="_blank">www.555cal.com</a> | <a href="http://www.vno.com" target="_blank">www.vno.com</a> | design by <a href="http://loft22.wordpress.com/" target="_blank">LOFT22creative</a>
      </div>
    </div>
  </div>
</body>
</html>