<?php get_header(); ?>
<div class="my-archive container min-height">

    <?php
    $s = get_search_query();
    $args = array(
        's' => $s
    );
    // The Query
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) { ?>

        <h2 style='font-weight:bold;color:#000'><span>Search Results for:<?php echo get_query_var('s'); ?></span></h2>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <?php
                while ($the_query->have_posts()) {
                    $the_query->the_post();
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
                } ?>

            </div>
        <?php
    } else {
        ?>
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
                    <div class="alert alert-info">
                        <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                    </div>
                </div>
            <?php } ?>

            <div class="col-lg-5 col-md-5 col-sm-12">
                <?php
                if (is_active_sidebar('search-page-sidevar')) {
                    dynamic_sidebar('search-page-sidevar');
                }
                ?>

            </div>
            </div>



        </div>
        <?php get_footer(); ?>