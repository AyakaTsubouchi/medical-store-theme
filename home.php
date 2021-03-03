<?php
/*
Template name: Home
*/
?>
<?php get_header(); ?>
<?php
if (have_posts()) :

    while (have_posts()) : the_post();

?>
        <?php include('inc/slider.php'); ?>
        <div class="home container">
            <section class="product-cat"> <?php include('inc/home-categorylist.php'); ?>
            </section>

            <?php
            global $post;


            $homepost_posts = get_posts(array(
                'post_type' => 'homepost',
                'posts_per_page' => 100

            ));

            if ($homepost_posts) {
                foreach ($homepost_posts as $post) :
                    setup_postdata($post);

            ?>
                    <?php
                    $style_type =  get_field('style');
                    $bg = get_field('background_image');

                    !$bg ? $background = "background-color:white;" : $background = "background-image: url(" . $bg . ");";
                    $btn = get_field('button_name');
                    !$btn ? $button = null :  $button = '<div class="custom-btn">
                   <a href="' . get_field('button_url') . '">' . get_field('button_name') . '</a></div>';




                    switch ($style_type) {
                        case "two-col": ?>
                            <section class="image-text-two-col" style="<?php echo $background ?>">
                                <div class="row">


                                    <div class="col-lg-6 col md-12">

                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    </div>
                                    <div class="col-lg-6 col md-12">
                                        <h2 class="lighter"><span><?php the_title(); ?></span></h2>
                                        <div class="content">

                                            <?php the_content();
                                            echo $button; ?>


                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php
                            break;
                        case "banner":
                        ?>
                            <section class="banner" style="<?php echo $background ?>">
                                <h2 class="lighter"><span><?php the_title(); ?></span></h2>
                                <div class="content">
                                    <?php the_content();
                                    echo $button; ?>

                                </div>
                            </section>
                            <section>
                            <?php
                            break;
                        case "standard":
                            ?>
                                <section class="standard" style="<?php echo $background ?>">
                                    <h2 class="lighter"><span><?php the_title(); ?></span></h2>
                                    <div class="content">
                                        <?php the_content();
                                        echo $button;
                                        $link1 = get_field('post_link1');
                                        $link2 = get_field('post_link2');
                                        if ($link1) :
                                        ?>
                                            <div class="card">
                                                <a href="<?php get_post_permalink($link1); ?>">
                                                    <img src="<?php echo get_the_post_thumbnail_url($link1);
                                                                ?>" class="card-img-top" alt="<?php echo $link2->post_title; ?>">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $link1->post_title; ?></h5>
                                                        <P><?php echo get_the_date('Y-m-d', $link1); ?>/<?php echo get_the_author($link1); ?></P>
                                                </a>
                                            </div>
                                    </div>
                                <?php endif;
                                        if ($link2) : ?>
                                    <div class="card">
                                        <a href="<?php get_post_permalink($link2); ?>">
                                            <img src="<?php echo get_the_post_thumbnail_url($link2);
                                                        ?>" class="card-img-top" alt="<?php echo $link2->post_title; ?>">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $link2->post_title; ?></h5>
                                                <P><?php echo get_the_date('Y-m-d', $link2); ?>/<?php echo get_the_author($link2); ?></P>
                                        </a>
                                    </div>
        </div>
    <?php endif; ?>
    </div>

    </section>
    <section>
    <?php
                            break;
                        default: ?>
        <h1>this is default</h1>
<?php
                    }
?>
<?php
                endforeach;
                wp_reset_postdata();
            }
?>

<?php
        if (is_active_sidebar('home-footer-widget')) {
            dynamic_sidebar('home-footer-widget');
        }
?>
</div>


<?php

    endwhile;
endif;
?>

<?php get_footer(); ?>