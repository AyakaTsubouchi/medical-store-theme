<?php get_header(); ?>
<div class="single-customer container">
    <h2><?php the_title(); ?></h2>


    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="customer-content">
                <?php
              
                if (has_post_thumbnail()) : ?>
                    <img src="<?php if (the_post_thumbnail_url()) {
                                    the_post_thumbnail_url();
                                }; ?>" alt="<?php the_title(); ?>" class="single-post-thumb">
                <?php endif;
                ?>
              
                <P><?php echo get_the_date('Y-m-d'); ?>/<?php echo get_the_author(); ?></P>
                <?php the_content(); ?>
            </div>
            <customer-footer>
                <p>PREVIOUS: <?php previous_post_link(); ?></p>
                <p> NEXT: <?php next_post_link(); ?></p>

            </customer-footer>
        </div>

        <div class="col-lg-5  col-md-5 col-sm-12">
            <?php
            if (is_active_sidebar('customer-service-post-sidebar')) {
                dynamic_sidebar('customer-service-post-sidebar');
            }
            ?>

        </div>
    </div>



</div>


<?php get_footer(); ?>