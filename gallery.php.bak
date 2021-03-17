<?php
/*
Template name: Gallery
*/
?>
<?php get_header(); ?>
<?php
defined('ABSPATH') || exit;
do_action('woocommerce_before_main_content');
?>
<div class="gallery container">
    <div class="fluid_container">
        <div class="camera_wrap camera_emboss" id="gallery-camera_wrap_3">

            <?php
            global $post;

            $gallery_post = get_posts(array(
                'post_type' => 'gallery',
                'posts_per_page' => 100,
            ));
            $count = wp_count_posts('gallery')->publish;


            if ($gallery_post) {
                foreach ($gallery_post as $post) :
                    setup_postdata($post);
            ?>
                    <div data-thumb="<?php echo get_the_post_thumbnail_url(); ?>" data-src="<?php echo get_the_post_thumbnail_url(); ?>">
                    </div>
            <?php
                endforeach;
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>