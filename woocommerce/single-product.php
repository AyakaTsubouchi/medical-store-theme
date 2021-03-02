<?php get_header(); ?>
<div class="my-single-product container">
    <h2><?php the_title(); ?></h2>


    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="product-content">
                <?php
                if (has_post_thumbnail()) : ?>
                    <img src="<?php if (the_post_thumbnail_url()) {
                                    the_post_thumbnail_url();
                                }; ?>" alt="<?php the_title(); ?>" class="single-post-thumb">
                <?php endif; ?>
                <P><?php echo get_the_date('Y-m-d'); ?>/<?php echo get_the_author(); ?></P>
                <?php the_content(); ?>
                <div class="product-gallery">


                    <?php
                    global $product;
                    $gallery_images = $product->get_gallery_image_ids();
                    foreach ($gallery_images as $img) {
                        $imgUrl = wp_get_attachment_url($img);
                        echo "<div  class='image-wrapper'><a href='$imgUrl' target='blank' ><img src='{$imgUrl}'  ></a></div>";
                    }
                    ?>
                </div>
            </div>
            <customer-footer>
                <p>PREVIOUS: <?php previous_post_link(); ?></p>
                <p> NEXT: <?php next_post_link(); ?></p>
            </customer-footer>
        </div>
        <div class="col-lg-5  col-md-5 col-sm-12">

            <?php

            if (is_singular('product')) {

                global $post;
                $terms = wp_get_post_terms($post->ID, 'product_cat');
                foreach ($terms as $term) $cats_array[] = $term->term_id;

                $query_args = array('post__not_in' => array($post->ID), 'posts_per_page' => 5, 'no_found_rows' => 1, 'post_status' => 'publish', 'post_type' => 'product', 'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'id',
                        'terms' => $cats_array
                    )
                ));

                $r = new WP_Query($query_args); ?>
                <div class="card">
                    <h5 class="card-title"><?php the_title(); ?></h5>

                    <?php
                    if ($r->have_posts()) {
                    ?>
                        <ul>

                            <?php while ($r->have_posts()) : $r->the_post();
                                global $product; ?>
                                <li>
                                    <a href="<?php the_permalink() ?>">
                                        <?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>
                                    </a>
                                </li>


                            <?php endwhile; ?>
                        </ul>
                <?php

                        wp_reset_query();
                    }
                }
                ?>

                </div>
        </div>
    </div>



</div>


<?php get_footer(); ?>