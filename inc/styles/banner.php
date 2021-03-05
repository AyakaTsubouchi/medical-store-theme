<?php

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
?>
<section class="banner" style="<?php echo $background ?>; color:<?php echo set_color(); ?>">
    <div class="container">
        <h2><span><?php the_title(); ?></span></h2>
        <div class="content">
            <?php the_content();
            echo $button; ?>

        </div>
    </div>
</section>