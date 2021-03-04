<?php
/*
Template name: Blog type1 archive
*/
?>
<?php get_header(); ?>
<div class="archive-blogtype1 container">
    <?php

    defined('ABSPATH') || exit;

    do_action('woocommerce_before_main_content');

    ?>

    <div class="contents">


        <?php
        if (have_posts()) :

            while (have_posts()) : the_post();

        ?>
                <h1><span><?php the_title(); ?></span></h1>
                <?php the_content(); ?>
                <div class="row">
                    <div class="customer-content">
                        <?php
                        global $post;
                        $blogtype1_posts = get_posts(array(
                            'post_type' => 'blogtype1',
                            'posts_per_page' => 100
                        ));
                        if ($blogtype1_posts) {
                            foreach ($blogtype1_posts as $post) :
                                setup_postdata($post);
                        ?>
                                <div class="card col" style="width: 18rem;">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>

                                    </div>
                                </div>
                        <?php
                            endforeach;
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                </div>
    </div>
<?php
            endwhile;

        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');

        endif;


?>


</div>
<?php get_footer(); ?>