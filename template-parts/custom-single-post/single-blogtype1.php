<?php get_header(); ?>
<div class="single-blog1">
    <?php
    defined('ABSPATH') || exit;
    do_action('woocommerce_before_main_content');
    ?>
    <div class="container  min-height">


        <div class="contents">

            <h1><span><?php the_title(); ?></span></h1>

            <?php the_content(); ?>
        </div>



    </div>
</div>

<?php get_footer(); ?>