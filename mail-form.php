<?php
/*
Template name: mail
*/
?>
<?php get_header(); ?>
<div class="mail container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <h2><span><?php the_title(); ?></span></h2>
            <div class="form-wrapper">
                <div class="form-inner">
                    <?php echo do_shortcode('[contact-form-7 id="3429" title="Medical Email to Friend"]'); ?>
                    <!-- <form action="">
                        <div class="sender">
                            <h5>Sender</h5>
                            <div class="form-row">
                                <div class="col-lg-6 col-md-12">
                                    <label for="name">Name*</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label for="email">Email*</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="comment">Message*</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="invitee">
                            <h5>Invitee</h5>
                            <form action="">
                                <div class="form-row">
                                    <div class="col-lg-6 col-md-12">
                                        <label for="name">Name*</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <label for="email">Email*</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <input class="form-control form-custom-btn" type="submit" value="Send Email">
                        </div>
                    </form> -->
                </div>
            </div>
    <?php

        endwhile;
    endif;
    ?>

</div>
<?php get_footer(); ?>