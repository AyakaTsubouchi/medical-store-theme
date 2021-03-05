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
    global $post;
    $blogtype2_posts = get_posts(array(
        'post_type' => 'blogtype2',
        'posts_per_page' => 100
    ));
    if ($blogtype2_posts) {
        foreach ($blogtype2_posts as $post) :
            setup_postdata($post);
    ?>

<?php
    $args = array(
        'type'                     => 'blogtype2',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'name',
        'order'                    => 'ASC',
        'hide_empty'               => 1,
        'hierarchical'             => 1,
        'exclude'                  => '',
        'include'                  => '',
        'number'                   => '',
        // 'taxonomy'                 => '',
        'pad_counts'               => false );
        $categories = get_categories( $args);
    foreach( $categories as $cat){
        echo $cat;
    }
    echo "sd";
    ?>
<?php
                                    endforeach;
                                    wp_reset_postdata();
                                }
                                ?>




    <?php

        endwhile;
    endif;
    ?>
</div>
<?php get_footer(); ?>