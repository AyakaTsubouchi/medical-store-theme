<?php
/*
Template name: Customer Service
*/
?>
<?php get_header(); ?>
<?php
if (have_posts()) :

    while (have_posts()) : the_post();

?>


        <h2><?php the_title(); ?>
        </h2>


        <?php
        global $post;


        $customertwo_posts = get_posts(array(
            'post_type' => 'customer',
            'posts_per_page' => 100

        ));
       
        if ($customertwo_posts) {
            foreach ($customertwo_posts as $post) :
                setup_postdata($post);

        ?>

                <a href="<?php the_permalink(); ?>" class="entry-title"><?php the_title(); ?></a>


        <?php
            endforeach;
            wp_reset_postdata();
        }
        ?>


<?php
    endwhile;

else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');

endif;

?>
<?php get_footer(); ?>