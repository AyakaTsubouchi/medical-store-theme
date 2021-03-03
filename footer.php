<footer class="site-footer" style="overflow:hidden;">
   <div class="row">
      <div class="col">
         <div class="row">
            <div class="col"> <?php wp_nav_menu(array('theme_location' => 'interior_footer_menu'));
                              if (is_active_sidebar('footer1-widget')) {
                                 dynamic_sidebar('footer1-widget');
                              } ?></div>
            <div class="col"> <?php wp_nav_menu(array('theme_location' => 'interior_footer_menu'));
                              if (is_active_sidebar('footer2-widget')) {
                                 dynamic_sidebar('footer2-widget');
                              } ?></div>
            <div class="col"> <?php wp_nav_menu(array('theme_location' => 'interior_footer_menu'));
                              if (is_active_sidebar('footer3-widget')) {
                                 dynamic_sidebar('footer3-widget');
                              } ?></div>
         </div>
      </div>
      <div class="col">
         <?php wp_nav_menu(array('theme_location' => 'interior_footer_menu'));
         if (is_active_sidebar('footer4-widget')) {
            dynamic_sidebar('footer4-widget');
         } ?>
      </div>
   </div>
   <div class="footer-bottom">

      <div class="copyright_txt">
         <p></p>
         <p>© 2014-<?php
                     echo date("Y")
                     ?> All rights reserved, Powered by <a href="https://www.goopter.com/">Goopter</a></p>

      </div>
      <a href="#">
         <div class="back-to-top">

            <p>↑Top</p>
         </div>
      </a>

   </div>
</footer>
<?php wp_footer(); ?>
</div>
</body>

</html>