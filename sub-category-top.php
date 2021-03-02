/*
Template name: Sub Category Top Page
*/
<?php get_header(); ?>
<?php
if (have_posts()) :

    while (have_posts()) : the_post();
        the_content();
    endwhile;

else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');

endif;

?>
<?php include( 'woocommerce/archive-product.php' ); ?>


<?php get_footer(); ?>