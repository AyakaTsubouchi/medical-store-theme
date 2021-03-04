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
        <div class="about">
            <section class="hero-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
            <div class="content">                
                <?php the_content(); ?>
            </div>
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
</div>
<?php get_footer(); ?>