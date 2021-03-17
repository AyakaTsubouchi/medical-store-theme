
<div class="site-footer" style="overflow:hidden;">
   <section class="fixed-btn-wrapper">
      <div class="message-button" data-toggle="modal" data-target="#messageModal">
         <i class="fas fa-comment-alt"></i>
      </div>
      <div class="hiring-button">
         <a href="/contact"><img src="http://localhost:8888/wp-content/uploads/2021/03/announcement-1.svg" alt="hiring"></a>
      </div>
   </section>
   <?php include('inc/message-modal.php'); ?>
   
   <div class="container">


      <div class="row">
         <div class="col"> <?php wp_nav_menu(array('theme_location' => 'medical_footer1_menu'));
                           if (is_active_sidebar('footer1-widget')) {
                              dynamic_sidebar('footer1-widget');
                           } ?></div>
         <div class="col"> <?php wp_nav_menu(array('theme_location' => 'medical_footer2_menu'));
                           if (is_active_sidebar('footer2-widget')) {
                              dynamic_sidebar('footer2-widget');
                           } ?></div>
         <div class="col"> <?php wp_nav_menu(array('theme_location' => 'medical_footer3_menu'));
                           if (is_active_sidebar('footer3-widget')) {
                              dynamic_sidebar('footer3-widget');
                           } ?></div>

         <div class="col">
            <?php wp_nav_menu(array('theme_location' => 'medical_footer4_menu'));
            if (is_active_sidebar('footer4-widget')) {
               dynamic_sidebar('footer4-widget');
            } ?>
         </div>

      </div>
   </div>
   <div class="footer-bottom">

      <div class="copyright_txt">
         <p></p>
         <p>© 2014-<?php
                     echo date("Y")
                     ?> All rights reserved, Powered by <a href="https://www.goopter.com/">Goopter</a></p>

      </div>
      <!-- <a href="#">
         <div class="back-to-top">

            <p>↑Top</p>
         </div>
      </a> -->

   </div>
</div>
<?php wp_footer(); ?>
</div>
</body>

</html>