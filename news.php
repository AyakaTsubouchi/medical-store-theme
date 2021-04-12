<?php
/*
Template name: News
*/
?>
<?php get_header(); ?>
<div class="archive-blogtype blogtype1 min-height">

    <?php

    defined('ABSPATH') || exit;

    do_action('woocommerce_before_main_content');

    ?>


    <div class="contents">
        <div class="container">


            <?php
            if (have_posts()) :

                while (have_posts()) : the_post();

            ?>
                    <h1><span><?php the_title(); ?></span></h1>
                    <?php the_content(); ?>

                    <div class="flex-container">



                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = array(
                            'post_type' => 'blogtype3', // Your post type name
                            'posts_per_page' => 6,
                            'paged' => $paged,
                        );

                        $loop = new WP_Query($args);
                        if ($loop->have_posts()) {
                            while ($loop->have_posts()) : $loop->the_post();
                                $image = get_the_post_thumbnail_url();
                        ?>
                                <div class="my-card">
                                    <a href="<?php the_permalink(); ?>"> <img src="
                                    <?php
                                    if ($image) {
                                        echo $image;
                                    } else {
                                        echo "http://medproducts.goopter.com/wp-content/uploads/2021/03/images-square-outlined-interface-button-symbol.png";
                                    };

                                    ?>" alt="<?php the_title(); ?>"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>

                                    </div>
                                </div>

                            <?php endwhile; ?>
                    </div>
                    <div class="pagination">

                    <?php $total_pages = $loop->max_num_pages;

                            if ($total_pages > 1) {

                                $current_page = max(1, get_query_var('paged'));

                                echo paginate_links(array(
                                    'base' => get_pagenum_link(1) . '%_%',
                                    'format' => '/page/%#%',
                                    'current' => $current_page,
                                    'total' => $total_pages,
                                    'prev_text'    => __('« prev'),
                                    'next_text'    => __('next »'),
                                ));
                            }
                        }
                        wp_reset_postdata();
                    ?>

                    </div>

        </div>

        <?php

                    $bgImg = "url('" . get_field('banner_background_image') . "'); background-repeat:no-repeat; background-position:center;background-size: 150%;";
                    $bgColor = "linear-gradient(" . get_field('banner_background_color') . "," . get_field('banner_background_color') . ")";

                    $background =  "background-image: " . $bgColor . " ," . $bgImg . " ";

                    $title = get_field('banner_title');
                    $text = get_field('banner_text');
                    $button_text = get_field('banner_button_text');
                    $button_link = get_field('banner_button_link');
        ?>
    </div>
</div>
<section class="banner" style="<?php echo $background ?>">
    <div class="container">
        <h2><span><?php echo $title; ?></span></h2>
        <p><?php echo $text; ?></p>
        <a href="<?php echo $button_link ?>" class="custom-btn"><?php echo $button_text ?></a>
    </div>
</section>

<?php
                endwhile;

            else :
                _e('Sorry, no posts matched your criteria.', 'textdomain');

            endif;


?>



<?php get_footer(); ?>