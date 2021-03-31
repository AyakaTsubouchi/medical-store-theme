<div class="site-footer" style="overflow:hidden;">
   <section class="fixed-btn-wrapper">
      <div class="message-button" data-toggle="modal" data-target="#messageModal">
         <i class="far fa-envelope"></i>
      </div>
      <div class="hiring-button">
         <a href="/contact"><img src="http://medproducts.goopter.com/wp-content/uploads/2021/03/announcement-1.svg" alt="hiring"></a>
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
            <div class="sns-box">


               <?php if (get_field("instagram_link", 533))
                  echo '<a href="' . get_field("finstagram_link", 533) . '" target="_blank" ><i class="fab fa-instagram"></i></a>' ?>
               <?php if (get_field("facebook_link", 533))
                  echo '<a href="' . get_field("facebook_link", 533) . '" target="_blank" ><i class="fab fa-facebook-f"></i></a>' ?>
               <?php if (get_field("twitter_link", 533))
                  echo '<a href="' . get_field("twitter_link", 533) . '" target="_blank" ><i class="fab fa-twitter"></i></a>' ?>
               <?php if (get_field("linkedin", 533))
                  echo '<a href="' . get_field("linkedin", 533) . '" target="_blank" ><i class="fab fa-linkedin-in"></i></a>' ?>
               <?php if (get_field("youtube_link", 533))
                  echo '<a href="' . get_field("youtube_link", 533) . '" target="_blank" ><i class="fab fa-youtube"></i></a>' ?>


            </div>

         </div>

      </div>
   </div>
   <div class="footer-bottom">

      <div class="copyright_txt">
         <p>© 2014-<?php
                     echo date("Y")
                     ?> All rights reserved, Powered by <a href="https://www.goopter.com/">Goopter</a></p>

      </div>

   </div>
</div>
<?php wp_footer(); ?>
</div>
</body>

</html>