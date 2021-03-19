<?php get_header(); ?>

<div class="tax-educations">
    <div class="container">
        <h2 class="fancy-after"><span>
                <?php
                $id = get_queried_object()->term_id;
                echo get_term($id)->name

                ?></span></h2>
        <div class="row">
            <div class="col-lg-7 col-md-12">



                <?php
                $args = [
                    'post_type' => 'blogtype2',
                    'tax_query' => [
                        [
                            'taxonomy' => 'educations',
                            'terms' => get_queried_object()->term_id, //blog2
                            'include_children' => false // Remove if you need posts from term 7 child terms
                        ],
                    ],
                    // Rest of your arguments
                ];

                global $post;


                $blogtype2_posts = get_posts($args);

                if ($blogtype2_posts) {
                    foreach ($blogtype2_posts as $post) {
                        setup_postdata($post);

                ?>
                        <div class="my-card">
                            <a href="<?php the_permalink(); ?>">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                            </a>
                            <a href="<?php the_permalink(); ?>"> <img src="
                                    <?php
                                    if (get_the_post_thumbnail_url()) {
                                        echo get_the_post_thumbnail_url();
                                    } else {
                                        echo "http://localhost:8888/wp-content/uploads/2021/03/no-photo.png";
                                    };

                                    ?>" alt="<?php the_title(); ?>"></a>
                            <div class="card-body">
                                <div class="meta">
                                    <P><?php echo get_the_date('Y-m-d'); ?></P>
                                </div>

                            </div>
                        </div>
                <?php
                    }
                    wp_reset_postdata();
                };

                ?>

            </div>
            <div class="col-lg-5 col-md-12">
                <div class="side-bar">


                    <div class="contact">

                        <h3>Need Help?</h3>
                        <p>
                            Have questions about our products? Get in contact with one of our swab experts!
                        </p>
                        <div class="custom-btn">
                            <a href="/contact">Contact Us</a>
                        </div>
                    </div>
                    <?php
                    if (is_active_sidebar('blogtype2-post-sidebar')) {
                        dynamic_sidebar('blogtype2-post-sidebar');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>