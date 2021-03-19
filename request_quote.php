<?php
/*
Template name: Request a Quote
*/
?>
<?php get_header(); ?>
<div class="quote container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <h2><span><?php the_title(); ?></span></h2>
            <div class="form-wrapper">
                <div class="form-inner">
                    <?php echo do_shortcode('[contact-form-7 id="3426" title="Medical quote form"]'); ?>

                </div>
            </div>
    <?php

        endwhile;
    endif;
    ?>

</div>
<?php get_footer(); ?>