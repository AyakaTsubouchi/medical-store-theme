<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

// if (!defined('ABSPATH')) {
//     exit; // Exit if accessed directly

// }
defined('ABSPATH') || exit;

get_header();
// get_header( 'shop' );
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');
?>
<?php $product_id = get_the_ID();
$product = wc_get_product($product_id);
$rating  = $product->get_average_rating();
$num_of_review = $product->get_review_count();
$availability = $product->get_availability();
if ($availability['class'] === 'in-stock') {
    $availIconClass = "fas fa-check";
} else {
    $availIconClass = "fas fa-times";
}
$permalink = $product->get_permalink();
$attachment_ids = $product->get_gallery_image_ids();
$product_details = $product->get_data();
$description = $product_details['description'];
$short_description = $product_details['short_description'];
$image_link = array();
foreach ($attachment_ids as $attachment_id) {
    array_push($image_link, wp_get_attachment_url($attachment_id));
}
$count_img = count($attachment_ids);
$prdAttr = $product->get_attributes();
$prdSterile = $product->get_attribute('pa_sterile');
$prdLength = $product->get_attribute('pa_overall_length');
$packaging = $product->get_attribute('pa_packaging');
$brand = $product->get_attribute('brand');
$desc = $product->get_attribute('description');

$commentCount = $product->get_review_count();
$sku = $product->get_sku();


/* Get the product tag */
$terms = get_the_terms($product_id, 'product_tag');
$tags = array();
if (!empty($terms) && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        $tags[] = $term->slug;
    }
}
?>
<div class="product-main min-height">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 left-col">
            <div class="product-title">
                <h3><?php the_title(); ?></h3>
               
                <h5><?php echo $desc;?></h5>
                <p>SKU: <?php echo $sku;?></p>
            </div>
            <div class="large-image">
                <div class="image-gallery">
                    <?php
                    /**
                     * Hook: woocommerce_before_single_product_summary.
                     *
                     * @hooked woocommerce_show_product_sale_flash - 10
                     * @hooked woocommerce_show_product_images - 20
                     */
                   
                 
                    do_action('woocommerce_before_single_product_summary');
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 right-col">

            <div class="attribute-icons">
                <div class="icon">
                    <?php
                    if ($prdSterile === "Sterile") {
                        echo " <img src='http://localhost:8888/wp-content/uploads/2021/03/sterile.png'>";
                
                    };
                    ?>

                </div>
                <div class="icon length">
                    <p> <?php echo $prdLength; ?></p>
                    <img src='http://localhost:8888/wp-content/uploads/2021/03/overall_length.jpg'>
               
                </div>
            </div>
            <hr>
            <div class="review-section">
                <div class="row">
                    <div class="col-lg-8">
                        <a href="#tab-title-reviews"><?php if ($commentCount === 0) {
                                                            echo '<h5>BE THE FIRST TO REVIEW</h5>';
                                                        } else {
                                                            echo '<h5>Read The Review</h5>';
                                                        }

                                                        ?></a>

                    </div>
                    <div class="share col-lg-4">
                       
                        <a href="/mail"> <i class="fas fa-share-alt"></i>SHARE</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="packaging">
                <div class="row">
                    <div class="col">
                        <p>PACKAGING</p>
                    </div>
                    <div class="col">
                        <div class="box">
                            <?php echo $packaging; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-btn where-to-buy">
                <a href="/contact">Where to Buy</a>
            </div>
            <div class="custom-btn certificate">
                <a href="/request-quote">Request a Quote</a>
            </div>

            <div class="contact-us">
                <a href="/contact"><i class="fas fa-envelope"></i>Contact Us</a>
            </div>
 
            <hr>
            <table class="attributes">
                <tr>
                    <td class="label">CATEGORY</td>
                    <td><?php $terms = get_the_terms($product->ID, 'product_cat');
                        foreach ($terms as $term) {
                            $product_cat = $term->name;
                            echo $product_cat;
                            break;
                        } ?></td>
                </tr>
                <tr>
                    <td class="label">BRAND</td>
                    <td><?php echo $brand; ?></td>
                </tr>
                <tr>
                    <td class="label">OVERALL LENGTH</td>
                    <td><?php echo $prdLength; ?></td>
                </tr>
                <tr>
                    <td class="label">STERILE</td>
                    <td><?php echo $prdSterile; ?></td>
                </tr>
            </table>

        </div>
    </div>


    <div class="product-footer">

        <?php
        
        do_action('woocommerce_after_single_product_summary');
        // do_action( 'woocommerce_after_main_content' );
        ?>

    </div>

</div>
</div>





<?php
get_footer();
// get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
