<?php get_header(); ?>
<?php get_the_title(); ?>
<div class="container">
    <?php
    if (have_posts()) :

        while (have_posts()) : the_post();
        
            ?>
            <h2><?php echo the_title(); ?></h2>
            <div><?php  echo the_content(); ?></div>
            
        <?php endwhile;

    else :
        _e('Sorry, no posts matched your criteria.', 'textdomain');

    endif;

    ?>
</div>





<?php get_footer(); ?>