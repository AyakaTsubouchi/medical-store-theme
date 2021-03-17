<?php
/*
Template name: Products
*/
?>
<?php get_header(); ?>
<div class="products">


    <?php
    if (have_posts()) :

        while (have_posts()) : the_post();

    ?>
            <?php include('inc/slider.php'); ?>
            <div class="products container">
                <section class="product-cat"> <?php include('inc/home-categorylist.php'); ?>
                </section>

                <?php
                global $post;


                $homepost_posts = get_posts(array(
                    'post_type' => 'homepost',
                    'posts_per_page' => 100

                ));

                if ($homepost_posts) {
                    foreach ($homepost_posts as $post) {
                        setup_postdata($post);

                        include('inc/page-post.php');
                    }
                    wp_reset_postdata();
                }

                if (is_active_sidebar('home-footer-widget')) {
                    dynamic_sidebar('home-footer-widget');
                }
                ?>
            </div>


    <?php

        endwhile;
    endif;
    ?>
    
</div>
<?php get_footer(); ?>