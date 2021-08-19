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
            <div class="container">
                <div class="row">
                    <div class="logo col-lg-4 col-md-6">
                        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        </button>
                        <div class="logo-wrapper">
                            <!-- <?php echo get_custom_logo(); ?> -->
                            <img src="http://localhost:8888/wp-content/uploads/2021/08/LOGO-EBUY.png" alt="" style="width:100px">
                        </div>
                    </div>
                    <div class="logo col-lg-8 col-md-6">
                        <nav class="navbar navbar-expand-lg nav-toggler-right no-padding-on-mobile">
                            <!-- <ul class="nav">
                                <li class="mr-5 nav-item">HOME</li>
                                <li class="mr-5 nav-item">About Us</li>
                                <li class="mr-5 nav-item">Products</li>
                                <li class="mr-5 nav-item">R&D</li>
                                <li class="mr-5 nav-item">FAQ</li>
                                <li class="mr-5 nav-item">Contact Us</li>
                            </ul> -->
                            <?php
                                    wp_nav_menu(array(
                                        'theme_location'  => 'header_menu',
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
            </div>
        </header>
        <div id="mySidenav" class="sidenav">

        </div>

        <!-- Use any element to open the sidenav -->
        <span class="open">open</span>

        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
        <div id="main">