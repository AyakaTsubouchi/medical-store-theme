<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="robots" content="noindex,nofollow">
   <meta name="description" content="">
   <meta name="keywords" content="HTML,CSS,JavaScript">
   <meta name="author" content="">


   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <div class="overflow">
      <header>
         <div class="top-header">
            <div class="container">
               <div class="row">

                  <p>ALERT: Tremendous demand for COVID-19 testing supplies may lead to delays in response times, orders and fulfillment for many of our products. We’re committed to your needs and are working virtually nonstop to meet them.</p>
               </div>
               <?php
               if (is_active_sidebar('custom-topheader-widget')) {
                  dynamic_sidebar('custom-topheader-widget');
               }
               ?>
            </div>


         </div>
         <div class="middle-header">


            <div class="container">
               <div class="row">
                  <div class="logo col-lg-4 col-md-6">
                     <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                     </button>
                     <div class="logo-wrapper">
                        <?php echo get_custom_logo(); ?>
                     </div>
                  </div>
                  <div class="search-btn-for-mobile col-md-6">
                     <!-- <i class="fas fa-search"></i> -->
                     <?php
                     if (is_active_sidebar('custom-header-widget')) {
                        dynamic_sidebar('custom-header-widget');
                     }
                     ?>
                  </div>
                  <div class="search-wrapper col-lg-8">

                     <?php
                     if (is_active_sidebar('custom-header-widget')) {
                        dynamic_sidebar('custom-header-widget');
                     }
                     ?>
                  </div>

               </div>
               <nav class="navbar navbar-expand-lg nav-toggler-right no-padding-on-mobile">
                  <!-- <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                     <i class="fas fa-bars"></i>
                  </button> -->
                  <?php
                  wp_nav_menu(array(
                     'theme_location'  => 'medical_header_menu',
                     'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                     'container'       => 'div',
                     'container_class' => 'collapse navbar-collapse nav-contents',
                     'container_id'    => 'navbarNavAltMarkup',
                     'menu_class'      => 'navbar-nav',
                     'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                     'walker'          => new WP_Bootstrap_Navwalker(),
                  ));
                  ?>

               </nav>
            </div>

         </div>

      </header>