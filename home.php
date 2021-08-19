<?php
/*
Template name: Home
*/
?>
<?php get_header(); ?>
<div class="home min-height">
    <?php include('inc/slider.php'); ?>

    <!-- <section class="product-cat"> <?php include('inc/home-categorylist.php'); ?>
    </section> -->
    <?php
    global $post;


    $homepost_posts = get_posts(array(
        'post_type' => 'homepost',
        'posts_per_page' => 100

    ));

    if ($homepost_posts) {
        foreach ($homepost_posts as $post) {
            setup_postdata($post);

            include('inc/page-post.php');
        }
        wp_reset_postdata();
    }

    ?>




</div>
<?php get_footer(); ?>