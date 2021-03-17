<?php
/*
Template name: Request a Quote
*/
?>
<?php get_header(); ?>
<div class="quote container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <h2><span><?php the_title(); ?></span></h2>
            <div class="form-wrapper">
                <div class="form-inner">
                    <?php echo do_shortcode('[contact-form-7 id="3426" title="Medical quote form"]'); ?>
                    <!-- <form action="">
                        <div class="form-row">
                            <div class="col-lg-6 col-md-12">
                                <label for="firstname">First Name*</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label for="lastName">Last Name*</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-6 col-md-12">
                                <label for="companyName">Company Name*</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label for="workEmail">Work Email*</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-6 col-md-12">
                                <label for="productCode">Product Code*</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label for="lotNumber">Lot Number*</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-6 col-md-12">
                                <label for="location">State/Region/Province*
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label for="country">Country</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Canada</option>
                                    <option>United States</option>
                                    <option>France</option>
                                    <option>Germany</option>
                                    <option>Italy</option>
                                    <option>United Kingdom</option>
                                    <option>Japan</option>
                                    <option>Russia</option>
                                    <option>China</option>
                                    <option>Other</option>
                      
                                </select>
                            </div>
                        </div> -->
                        <!-- <div class="form-row">

                            <div class="col">
                                <label for="comment">How Can We Help?</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        Privacy Notice: Puritan Medical Products requires the contact information you provide to us in order to send you the requested content and to contact you about our services. You may unsubscribe from these communications at any time. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, please see our Privacy Policy
                        <input class="form-control form-custom-btn" type="submit" value="Submit">
                    </form> -->
                </div>
            </div>
    <?php

        endwhile;
    endif;
    ?>

</div>
<?php get_footer(); ?>