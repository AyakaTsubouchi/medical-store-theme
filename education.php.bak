<?php
/*
Template name: Education
*/
?>
<?php get_header(); ?>
<div class="archive-blogtype blogtype2">

    <div class="container">
        <?php

        defined('ABSPATH') || exit;

        do_action('woocommerce_before_main_content');

        ?>
        <!-- <div class="container">
            <div class="contents"> -->

        <!-- <div class="container"> -->
        <?php
        if (have_posts()) :

            while (have_posts()) : the_post();

        ?>
                <h1><span><?php the_title(); ?></span></h1>
                <?php the_content(); ?>

                <?php
                $args = array(
                    'type'                     => 'blogtype2',
                    'child_of'                 => 0,
                    'parent'                   => '',
                    'orderby'                  => 'name',
                    'order'                    => 'ASC',
                    'hide_empty'               => 0,
                    'hierarchical'             => 1,
                    'taxonomy'                 => 'educations',
                    'pad_counts'               => false
                );
                $categories = get_categories($args);


                foreach ($categories as $category) {
                    $url = get_term_link($category);
                    $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                    $imgurl = the_field('image', $category->term_id);
                    $term_img = wp_get_attachment_url($category->term_id);
                ?>
                    <div class="card-body">
                        card
                        <div class="image-wrapper">
                            <a href="<?php echo  $url;  ?>">
                                <img class="card-img-top" src="<?php echo $term_img; ?>" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-content">

                            <h5 class="card-title"> <?php echo  $category->name;  ?></h5>
                            <p class="card-text"><?php echo $catefory->description; ?></p>
                            <a href="<?php echo $url;  ?>" class="btn btn-primary">View More</a>
                        </div>

                    </div>
                <?php
                }
                echo '</ul>';
                ?>
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

<?php

            endwhile;
        endif;
?>
</div>
</div>
</div>
<?php get_footer(); ?>