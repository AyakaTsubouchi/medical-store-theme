<?php
/*
Template name: About
*/
?>
<?php get_header(); ?>
<?php
if (have_posts()) :

    while (have_posts()) : the_post();

?>
        <section class="hero-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
            <?php the_content(); ?>
        </section>

        <?php
        global $post;


        $aboutpost_posts = get_posts(array(
            'post_type' => 'aboutpost',
            'posts_per_page' => 100

        ));

        if ($aboutpost_posts) {
            foreach ($aboutpost_posts as $post) :
                setup_postdata($post);

        ?>
               <?php include('inc/page-post.php'); ?>
                <?php
            endforeach;
            wp_reset_postdata();
        }
                ?>


                </div>


        <?php

    endwhile;
endif;
        ?>

        <?php get_footer(); ?>