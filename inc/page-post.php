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






    switch ($style_type) {
        case "two-col": ?>
            <h1><?php echo $bgColor; ?></h1>
            <h1><?php echo $color; ?></h1>
            <section class="image-text-two-col" style="<?php echo $background ?>; color:<?php echo $color; ?>">
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
                                        if(get_the_post_thumbnail_url($link1)){
                                            echo get_the_post_thumbnail_url($link1);
                                        }else{
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
                                            if(get_the_post_thumbnail_url($link2)){
                                                echo get_the_post_thumbnail_url($link2);
                                            }else{
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
            default: ?>
                    <h1>this is default</h1>
            <?php
        }
            ?>
</div>