<section id="carouselExampleIndicators" class="carousel slide mt-2 slider_section" data-ride="carousel">

    <div class="carousel-inner" role="listbox">
      
        <?php
        global $post;

        $gallery_post = get_posts(array(
            'post_type' => 'header_slider',
            'posts_per_page' => 1,

        ));

        if ($gallery_post) {
            foreach ($gallery_post as $post) :
                setup_postdata($post);

                $btn = get_field('button_name');
                $btnUrl = get_field('button_url');
                $btnLabel = get_field('button_label');

                $contentLabel = get_field('content_label');
                $content = get_field('content_text');
                $mobile_img = get_field('image_for_mobile');
                $thumbnail =  get_the_post_thumbnail_url();
                if(wp_is_mobile() && $mobile_img){
                    $bg_img = $mobile_img;
                }
                    else{
                        $bg_img =  $thumbnail;
                    } 
                

                !$btn ? $button = null :  $button = '<div class="custom-btn">
               <a href="' . $btnUrl . '">' . $btn . '</a></div>';

        ?>
                <div class="carousel-item active carousel_one">
                    <div class="bg-img" style="background-image:url('<?php echo  $bg_img; ?>');height:400px; background-position: center; background-repeat: no-repeat; background-size: cover;">
                        <?php
                        if ($btnLabel) : ?>
                            <div class="button-wrapper">
                                <?php echo $btnLabel;
                                echo $button;
                                ?>

                            </div>

                        <?php endif; ?>

                        <?php
                        if ($content) : ?>
                            <div class="content">
                                <div class="text-wrapper">
                                    <h2><?php echo $contentLabel; ?></h2>
                                    <p><?php echo  $content; ?></p>

                                </div>
                            </div>
                        <?php endif;?>

                    </div>

                </div>

        <?php
            endforeach;
            wp_reset_postdata();
        }
        ?>
        <?php
        global $post;

        $gallery_post = get_posts(array(
            'post_type' => 'header_slider',
            'offset' => 1

        ));

        if ($gallery_post) {
            foreach ($gallery_post as $post) :
                setup_postdata($post);
                $btn = get_field('button_name');
                $btnUrl = get_field('button_url');
                $btnLabel = get_field('button_label');
                $contentLabel = get_field('content_label');
                $content = get_field('content_text');
                $mobile_img = get_field('image_for_mobile');
                $thumbnail =  get_the_post_thumbnail_url();
                if(wp_is_mobile() && $mobile_img){
                    $bg_img = $mobile_img;
                }
                    else{
                        $bg_img =  $thumbnail;
                    } 

                !$btn ? $button = null :  $button = '<div class="custom-btn">
               <a href="' . $btnUrl . '">' . $btn . '</a></div>';

        ?>

                <div class="carousel-item carousel_one">

                    <div class="bg-img" style="background-image:url('<?php echo $bg_img; ?>');height:400px; background-position: center; background-repeat: no-repeat; background-size: cover;">
                        <?php
                        if ($btnLabel) : ?>
                            <div class="button-wrapper">
                                <?php echo $btnLabel;
                                echo $button;
                                ?>
                            </div>
                        <?php endif;
                        ?>

                        <?php
                        if ($content) : ?>
                            <div class="content">
                                <div class="text-wrapper">
                                    <h2><?php echo $contentLabel; ?></h2>
                                    <p><?php echo  $content; ?></p>

                                </div>
                            </div>
                        <?php endif;?>




                    </div>

                </div>

        <?php
            endforeach;
            wp_reset_postdata();
        }
        ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon " aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>