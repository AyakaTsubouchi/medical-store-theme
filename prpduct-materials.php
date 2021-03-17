<?php
/*
Template name: Product Materials
*/
?>
<?php get_header(); ?>
<?php
if (have_posts()) :

    while (have_posts()) : the_post();

?>
        <div class="pm-post">


            <section class="hero-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </section>

            <?php
            global $post;


            $pm_post_posts = get_posts(array(
                'post_type' => 'pmpost',
                'posts_per_page' => 100

            ));

            if ($pm_post_posts) {
                foreach ($pm_post_posts as $post) :
                    setup_postdata($post);

            ?>

                    <div class="page-post">

                        <?php
                        $style_type =  get_field('style');
                        $bgImg = "url('" . get_field('background_image') . "') no-repeat fixed center;";
                        $bgColor = get_field('background_color');
                        $background =  "background: " . $bgColor . " " .  $bgImg;

                        $color = "black";
                        if ($bgColor === "#424242") {
                            $color = "white";
                        } else if ($bgColor === "#248067") {
                            $color = "white";
                        } else {
                            $color = "black";
                        }




                        $btn = get_field('button_name');
                        !$btn ? $button = null :  $button = '<div class="custom-btn">
                   <a href="' . get_field('button_url') . '">' . get_field('button_name') . '</a></div>';

                        //    standard : Standard
                        //    featured-material : Featured Material (image + text)
                        //    featured-material-one : Featured Material (image)
                        //    material-list : Material List
                        //    two-col-banner : Two Columns Banner


                        switch ($style_type) {
                            case "featured-material": ?>
                                <section class="featured-material container" style="<?php echo $background ?>; color:<?php echo $color; ?>">
                                    <div>
                                        <h2 class="lighter"><span><?php the_title(); ?></span></h2>
                                        <div class="content">
                                            <?php the_content();
                                            echo $button; ?>
                                        </div>
                                    </div>
                                </section>
                            <?php
                                break;
                            case "banner":

                            ?>
                                <section class="banner" style="<?php echo $background ?>; color:<?php echo $color; ?>">
                                    <div class="container">
                                        <h2 class="lighter"><span><?php the_title(); ?></span></h2>
                                        <div class="content">
                                            <?php the_content();
                                            echo $button; ?>

                                        </div>
                                    </div>
                                </section>
                                <section>
                                <?php
                                break;
                            case "standard":
                                ?>
                                    <section class="standard" style="<?php echo $background ?>; color:<?php echo $color; ?>">
                                        <h2 class="lighter"><span><?php the_title(); ?></span></h2>
                                        <div class="content container">
                                            <?php the_content();
                                            echo $button; ?>
                                            <div class="row">


                                                <?php
                                                $link1 = get_field('post_link1');
                                                $link2 = get_field('post_link2');
                                                $link1 && $link2 ? $link_col = "col-lg-6" : $link_col = "col-lg-12";
                                                if ($link1) :
                                                ?>

                                                    <div class=" <?php echo $link_col; ?> col-md-12">
                                                        <div class="card">
                                                            <a href="<?php get_post_permalink($link1); ?>">
                                                                <img src="<?php
                                                                            if (get_the_post_thumbnail_url($link1)) {
                                                                                echo get_the_post_thumbnail_url($link1);
                                                                            } else {
                                                                                echo "http://localhost:8888/wp-content/uploads/2021/03/no-photo.png";
                                                                            };
                                                                            ?>" class="card-img-top" alt="<?php echo $link1->post_title; ?>">
                                                                <div class="card-body">
                                                                    <h5 class="card-title"><?php echo $link1->post_title; ?></h5>
                                                                    <P><?php echo get_the_date('Y-m-d', $link1); ?>/<?php echo get_the_author($link1); ?></P>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php endif;
                                                if ($link2) : ?>
                                                    <div class=" <?php echo $link_col; ?> col-md-12">
                                                        <div class="card">
                                                            <a href="<?php get_post_permalink($link2); ?>">
                                                                <img src="<?php
                                                                            if (get_the_post_thumbnail_url($link2)) {
                                                                                echo get_the_post_thumbnail_url($link2);
                                                                            } else {
                                                                                echo "http://localhost:8888/wp-content/uploads/2021/03/no-photo.png";
                                                                            };

                                                                            ?>" class="card-img-top" alt="<?php echo $link2->post_title; ?>">
                                                                <div class="card-body">
                                                                    <h5 class="card-title"><?php echo $link2->post_title; ?></h5>
                                                                    <P><?php echo get_the_date('Y-m-d', $link2); ?>/<?php echo get_the_author($link2); ?></P>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                    </section>
                                    <section>
                                    <?php
                                    break;
                                case "featured-material-one":
                                    ?>
                                        <section class="featured-material-one" style="<?php echo $background ?>; color:<?php echo $color; ?>">
                                            <h2 class="lighter"><span><?php the_title(); ?></span></h2>
                                            <div class="content container">
                                                <?php the_content();
                                                echo $button; ?>
                                                <div class="row">


                                                    <?php
                                                    $link1 = get_field('post_link1');
                                                    $link2 = get_field('post_link2');
                                                    $link1 && $link2 ? $link_col = "col-lg-6" : $link_col = "col-lg-12";
                                                    if ($link1) :
                                                    ?>

                                                        <div class=" <?php echo $link_col; ?> col-md-12">
                                                            <div class="card">
                                                                <a href="<?php get_post_permalink($link1); ?>">
                                                                    <img src="<?php
                                                                                if (get_the_post_thumbnail_url($link1)) {
                                                                                    echo get_the_post_thumbnail_url($link1);
                                                                                } else {
                                                                                    echo "http://localhost:8888/wp-content/uploads/2021/03/no-photo.png";
                                                                                };
                                                                                ?>" class="card-img-top" alt="<?php echo $link1->post_title; ?>">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title"><?php echo $link1->post_title; ?></h5>
                                                                        <P><?php echo get_the_date('Y-m-d', $link1); ?>/<?php echo get_the_author($link1); ?></P>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php endif;
                                                    if ($link2) : ?>
                                                        <div class=" <?php echo $link_col; ?> col-md-12">
                                                            <div class="card">
                                                                <a href="<?php get_post_permalink($link2); ?>">
                                                                    <img src="<?php
                                                                                if (get_the_post_thumbnail_url($link2)) {
                                                                                    echo get_the_post_thumbnail_url($link2);
                                                                                } else {
                                                                                    echo "http://localhost:8888/wp-content/uploads/2021/03/no-photo.png";
                                                                                };

                                                                                ?>" class="card-img-top" alt="<?php echo $link2->post_title; ?>">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title"><?php echo $link2->post_title; ?></h5>
                                                                        <P><?php echo get_the_date('Y-m-d', $link2); ?>/<?php echo get_the_author($link2); ?></P>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                        </section>
                                        <section>
                                        <?php
                                        break;
                                    case "standard":
                                        include('inc/page-post-standard.php');
                                        break;
                                    case "material-list":
                         
                                        include('inc/styles/material-list.php');
                                        break;
                                    default: ?>
                                            <h1>this is default</h1>
                                    <?php
                                }
                                    ?>
                    </div>



            <?php
                endforeach;
                wp_reset_postdata();
            }
            ?>


        </div>


<?php

    endwhile;
endif;
?>
</div>
<?php get_footer(); ?>