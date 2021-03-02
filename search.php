<?php get_header(); ?>
<div class="my-archive container">

    <?php
    $s = get_search_query();
    $args = array(
        's' => $s
    );
    // The Query
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) { ?>

        <h2 style='font-weight:bold;color:#000'>Search Results for:<?php echo get_query_var('s'); ?></h2>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <?php
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                ?>
                    <div>
                        <a href="<?php the_permalink(); ?>" class="entry-title">
                            <h4><?php the_title(); ?></h4>
                        </a>
                        <P class="meta-data"><?php echo get_the_date('Y-m-d'); ?>/<?php echo get_the_author(); ?></P>
                        <?php the_excerpt(); ?>
                        <hr>
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
                if (is_active_sidebar('news-post-sidebar')) {
                    dynamic_sidebar('news-post-sidebar');
                }
                ?>

            </div>
            </div>



        </div>
        <?php get_footer(); ?>