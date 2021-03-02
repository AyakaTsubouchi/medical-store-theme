<section id="carouselExampleIndicators" class="carousel slide mt-2 slider_section" data-ride="carousel">

    <div class="carousel-inner" role="listbox">
        <ol class="carousel-indicators">
            <?php

            $count = wp_count_posts('header_slider')->publish;
            if ($count) {
                for ($i = 0; $i < $count; $i++) :

            ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>" ></li>
            <?php
                endfor;
            }
            ?>
        </ol>
        <?php
        global $post;

        $gallery_post = get_posts(array(
            'post_type' => 'header_slider',
            'posts_per_page' => 1,

        ));

        if ($gallery_post) {
            foreach ($gallery_post as $post) :
                setup_postdata($post);

        ?>
                <div class="carousel-item active carousel_one">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                </div>

        <?php
            endforeach;
            wp_reset_postdata();
        }
        ?>
        <?php
        global $post;

        $gallery_post = get_posts(array(
            'post_type' => 'header_slider',
            'offset' => 1

        ));

        if ($gallery_post) {
            foreach ($gallery_post as $post) :
                setup_postdata($post);

        ?>

                <div class="carousel-item carousel_one">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                </div>

        <?php
            endforeach;
            wp_reset_postdata();
        }
        ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon " aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>