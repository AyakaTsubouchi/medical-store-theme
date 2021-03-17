<?php get_header(); ?>
<div class="single-blog3">
    <div class="container">
        <?php
        defined('ABSPATH') || exit;
        do_action('woocommerce_before_main_content');
        ?>
    </div>
    <div class="contents">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">

                    <?php the_content(); ?>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="side-bar">
                        <div class="contact">

                            <h3>Need Help?</h3>
                            <p>
                                Have questions about our products? Get in contact with one of our swab experts!
                            </p>
                            <div class="custom-btn">
                                <a href="/contact">Contact Us</a>
                            </div>
                        </div>
                        <?php
                        if (is_active_sidebar('blogtype3-post-sidebar')) {
                            dynamic_sidebar('blogtype3-post-sidebar');
                        }
                        ?>
                    </div>
                </div>
            </div>


        </div>
    </div>



</div>


<?php get_footer(); ?>