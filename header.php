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
                            <button class="open">
                            <!-- <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> -->
                  
                                <img src="http://medproducts.goopter.com/wp-content/uploads/2021/03/menu.png">

                            </button>
                            <div class="logo-wrapper">
                                <?php echo get_custom_logo(); ?>
                            </div>
                        </div>
                        <div class="search-btn-for-mobile col-md-6">

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
                        <ul class="prod-menu">
                            <li>Products</li>
                            <div class="prod-dropdown">
                                <div class="flex-box">

                                    <?php
                                    $taxonomy     = 'product_cat';
                                    $orderby      = 'name';
                                    $show_count   = 0;      // 1 for yes, 0 for no
                                    $pad_counts   = 0;      // 1 for yes, 0 for no
                                    $hierarchical = 0;      // 1 for yes, 0 for no  
                                    $title        = '';
                                    $empty        = 0;
                                    $args = array(
                                        'taxonomy'     => $taxonomy,
                                        'orderby'      => $orderby,
                                        'show_count'   => $show_count,
                                        'pad_counts'   => $pad_counts,
                                        // 'hierarchical' => $hierarchical,
                                        'title_li'     => $title,
                                        'hide_empty'   => $empty,
                                    );
                                    $allcats = get_categories($args); // get ALL categories 
                                    // $allcats = get_the_category(); // get only categories assigned to post
                                    $parents = $all_ids = array();

                                    //  find parents
                                    foreach ($allcats as $cats) {
                                        if ($cats->category_parent === 0) {
                                            $cats->children = array();
                                            $parents[] =  $cats;
                                        }
                                    }

                                    //  find childredn and assign it to corresponding parrent  
                                    foreach ($allcats as $cats) {
                                        if ($cats->category_parent != 0) {
                                            foreach ($parents as $parent) {
                                                if ($cats->category_parent === $parent->term_id) {
                                                    $parent->children[] = $cats;
                                                }
                                            }
                                        }
                                    }
                                    foreach ($parents as $parent) {
                                        if ($parent->slug === 'uncategorized') {
                                            continue;
                                        }
                                        $p_category_id = $parent->term_id;
                                        $p_cat_id = "product_cat_$p_category_id"
                                    ?>
                                        <div class="card">
                                            <div class="title">
                                                <a href="<?php echo  get_term_link($parent->slug, 'product_cat');  ?>">
                                                    <h5><?php echo $parent->name; ?></h5>
                                                </a>
                                                <img src="<?php echo get_field('icon', $p_cat_id); ?>" alt="" style="background-color:<?php echo get_field('icon_background_color', $p_cat_id); ?>;">

                                            </div>

                                            <?php
                                            if ($parent->children) {
                                                $child_cats = $parent->children;
                                                foreach ($child_cats as $child) { ?>
                                                    <a href="<?php echo  get_term_link($child->slug, 'product_cat');  ?>">
                                                        <p><?php echo $child->name ?></p>
                                                    </a>

                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    <?php
                                    }

                                    ?>





                                </div>
                            </div>
                        </ul>
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
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn">&times;</a>
            <?php
            $taxonomy     = 'product_cat';
            $orderby      = 'name';
            $show_count   = 0;      // 1 for yes, 0 for no
            $pad_counts   = 0;      // 1 for yes, 0 for no
            $hierarchical = 0;      // 1 for yes, 0 for no  
            $title        = '';
            $empty        = 0;
            $args = array(
                'taxonomy'     => $taxonomy,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                // 'hierarchical' => $hierarchical,
                'title_li'     => $title,
                'hide_empty'   => $empty,
            );
            $allcats = get_categories($args); // get ALL categories 
            // $allcats = get_the_category(); // get only categories assigned to post
            $parents = $all_ids = array();

            //  find parents
            foreach ($allcats as $cats) {
                if ($cats->category_parent === 0) {
                    $cats->children = array();
                    $parents[] =  $cats;
                }
            }

            //  find childredn and assign it to corresponding parrent  
            foreach ($allcats as $cats) {
                if ($cats->category_parent != 0) {
                    foreach ($parents as $parent) {
                        if ($cats->category_parent === $parent->term_id) {
                            $parent->children[] = $cats;
                        }
                    }
                }
            } ?>
            <div class="card">
                <div class="title">
                    <a href="#">
                        <h5>Products</h5>
                    </a>


                    <?php
                    foreach ($parents as $parent) {
                        if ($parent->slug === 'uncategorized') {
                            continue;
                        }
                        $p_category_id = $parent->term_id;
                        $p_cat_id = "product_cat_$p_category_id"
                    ?>
                        <div class="cat-title child">
                            <div class="card">
                                <a href="<?php echo  get_term_link($parent->slug, 'product_cat');  ?>">
                                    <p><?php echo $parent->name; ?></p>
                                    <img src="<?php echo get_field('icon', $p_cat_id); ?>" alt="" style="background-color:<?php echo get_field('icon_background_color', $p_cat_id); ?>;">
                                </a>


                            </div>


                        </div>
                    <?php
                    }

                    ?>
                </div>
            </div>
            <?php
            $menu_name = "medical_header_menu";
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));

            $menus =  wp_get_menu_array($menu->term_id);

            foreach ($menus as $menu) :
            ?>
                <div class="card">
                    <div class="title">
                        <a href="<?php echo  $menu['url'] ?>">
                            <h5><?php echo  $menu['title'] ?></h5>
                        </a>




                        <?php
                        $children = $menu['children'];

                        if ($menu['children']) {
                            foreach ($children as $child) { ?>
                                <li class="child">
                                    <a href="<?php echo  $child['url'] ?>">
                                        <p><?php echo $child['title']; ?></p>
                                    </a>
                                </li>
                            <?php } ?>

                        <?php
                        }
                        ?>
                    </div>
                </div>






            <?php endforeach; ?>

        </div>

        <!-- Use any element to open the sidenav -->
        <!-- <span class="open">open</span> -->

        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
        <div id="main">