<?php get_header(); ?>

<?php
if (have_posts()) :

    while (have_posts()) : the_post();

?>
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
                    <a href="<?php the_permalink(); ?>"> <img src="
                                    <?php
                                    if (get_the_post_thumbnail_url()) {
                                        echo get_the_post_thumbnail_url();
                                    } else {
                                        echo "http://localhost:8888/wp-content/uploads/2021/03/no-photo.png";
                                    };

                                    ?>" alt="<?php the_title(); ?>"></a>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>

                    </div>
                </div>
        <?php
            }
        };

        ?>

<?php

    endwhile;
endif;
?>

<?php get_footer(); ?>