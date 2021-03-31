<?php
/*
Template name: Home
*/
?>
<?php get_header(); ?>
<div class="home min-height">
    <?php include('inc/slider.php'); ?>

    <section class="product-cat"> <?php include('inc/home-categorylist.php'); ?>
    </section>
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

    $newsfeed_posts = get_posts(array(
        'post_type' => 'blogtype3',
        'posts_per_page' => 2

    )); ?>

    <section class="news-feed">
        <div class="container">
            <h2 class="lighter"><span>News Feed</span></h2>
            <div class="content">
                <div class="row">
                    <?php
                    if ($newsfeed_posts) {
                        foreach ($newsfeed_posts as $post) {
                            setup_postdata($post); ?>
                            <div class=" col-lg-6 col-md-12">
                                <div class="card">
                                    <h5 class="card-title"><?php echo the_title(); ?></h5>
                                    <a href="<?php echo get_post_permalink(); ?>">
                                        <img src="<?php
                                                    if (get_the_post_thumbnail_url()) {
                                                        echo get_the_post_thumbnail_url();
                                                    } else {
                                                        echo "http://medproducts.goopter.com/wp-content/uploads/2021/03/images-square-outlined-interface-button-symbol.png";
                                                    };
                                                    ?>" class="card-img-top" alt="<?php echo the_title(); ?>">
                                        <div class="card-body">

                                            <P><?php echo get_the_date('Y-m-d'); ?>/<?php echo get_the_author(); ?></P>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    <?php  }
                        wp_reset_postdata();
                    } ?>
                </div>
            </div>

            <?php


            $event_posts = get_posts(array(
                'post_type' => 'blogtype4',
                'posts_per_page' => 3

            ));
            ?>
            <section class="events">



                <h2>Upcoming Events</h2>

                <hr>
                <?php if ($event_posts) {
                    foreach ($event_posts as $post) {
                        setup_postdata($post); ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <i class="fas fa-calendar-alt"></i> <?php the_field('date'); ?>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <h5><?php echo the_title(); ?></h5>
                                        <p><?php the_field('location'); ?></p>
                                        <p><?php the_field('venue'); ?></p>
                                    </div>
                                </div>

                            </div>


                        </div>

                <?php  }
                    wp_reset_postdata();
                } ?>
            </section>
        </div>
    </section>


</div>
<?php get_footer(); ?>