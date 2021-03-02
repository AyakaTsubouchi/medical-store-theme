<?php
/*
Template name: news archive
*/
?>
<?php get_header(); ?>
<?php

defined('ABSPATH') || exit;

do_action('woocommerce_before_main_content');

?>
<div class="my-archive container">

    <?php
    if (have_posts()) :

        while (have_posts()) : the_post();

    ?>


            <h2>Company News
            </h2>
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="customer-content">

                        <?php
                        global $post;


                        $news_posts = get_posts(array(
                            'post_type' => 'news',
                            'posts_per_page' => 100

                        ));

                        if ($news_posts) {
                            foreach ($news_posts as $post) :
                                setup_postdata($post);

                        ?>
                                <div>
                                    <a href="<?php the_permalink(); ?>" class="entry-title">
                                        <h4><?php the_title(); ?></h4>
                                    </a>
                                    <P class="meta-data"><?php echo get_the_date('Y-m-d'); ?>/<?php echo get_the_author(); ?></P>
                                    <?php the_excerpt(); ?>
                                    <hr>
                                </div>

                        <?php
                            endforeach;
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                </div>

                <div class="col-lg-5  col-md-5 col-sm-12">

                    <?php
                    if (is_active_sidebar('news-post-sidebar')) {
                        dynamic_sidebar('news-post-sidebar');
                    }
                    ?>

                </div>
            </div>

    <?php
        endwhile;

    else :
        _e('Sorry, no posts matched your criteria.', 'textdomain');

    endif;


    ?>

    <?php include('inc/archive-footer.php'); ?>
</div>
<?php get_footer(); ?>