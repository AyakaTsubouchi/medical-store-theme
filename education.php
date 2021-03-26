<?php
/*
Template name: Education
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
                                <div class="my-card">
                                    <a href="<?php echo $url; ?>"> <img src="
                                    <?php
                                    if ($term_img) {
                                        echo $term_img;
                                    } else {
                                        echo "http://medproducts.goopter.com/wp-content/uploads/2021/03/images-square-outlined-interface-button-symbol.png";
                                    };

                                    ?>" alt="<?php  echo  $category->name; ?>"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php  echo  $category->name; ?></h5>

                                    </div>
                                </div>
                        <?php
                           
                        }
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