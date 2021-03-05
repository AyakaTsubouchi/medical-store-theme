<?php
/*
Template name: Education
*/
?>
<?php get_header(); ?>
<div class="education">


    <?php
    if (have_posts()) :

        while (have_posts()) : the_post();

    ?>

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
                // $term = get_queried_object($category);
                $imgurl = the_field( 'image',$category->term_id);
              
                // $thumb_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
                $term_img = wp_get_attachment_url(  $thumbnail_id );
                
                echo $category->term_id.$imgurl  ;
                ?>
                <div class="card-body">
                    <div class="image-wrapper">
                        <a href="<?php echo  $url;  ?>">
                            <img class="card-img-top" src="<?php echo  $imgurl; ?>" alt="Card image cap">
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





    <?php

        endwhile;
    endif;
    ?>
</div>
<?php get_footer(); ?>