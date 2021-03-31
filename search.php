<?php get_header(); ?>
<div class="my-archive container min-height">
    <?php if (have_posts()) : ?>

        <h2 class="page-title"><?php printf(__('Search Results for: %s', 'shape'), '<span>' . get_search_query() . '</span>'); ?></h2>
        <div class="row border-bottom">

            <?php while (have_posts()) : the_post(); ?>
                <div class="col-lg-3 col-md-3 col-sm-6 custom-sm-screen">
                    <div class="my-card">

                        <a href="<?php echo get_permalink() ?>"> <img src="
                                    <?php
                                    if (get_the_post_thumbnail_url()) {
                                        echo get_the_post_thumbnail_url();
                                    } else {
                                        echo "http://medproducts.goopter.com/wp-content/uploads/2021/03/images-square-outlined-interface-button-symbol.png";
                                    };

                                    ?>" alt="<?php the_title(); ?>"></a>
                        <div class="card-body">

                            <a href="<?php echo get_permalink(); ?>">
                                <p class="card-title"><?php the_title(); ?></p>
                            </a>
                        </div>
                    </div>




                </div>

            <?php endwhile; ?>

        </div>


        <?php wp_pagenavi(); ?>
    <?php else : ?>
        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
        <div class="alert alert-info">
            <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
    <?php endif; ?>
    <div class="back-to-top">
        <a href="#">
            <i class="fas fa-arrow-up"></i>TOP
        </a>
    </div>
</div>
<?php get_footer(); ?>