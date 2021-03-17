<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');
/**
 * Display category image on category archive
 */
add_action('woocommerce_archive_description', 'woocommerce_category_image', 2);
function woocommerce_category_image()
{
	if (is_product_category()) {
		global $wp_query;
		$cat = $wp_query->get_queried_object();
		$thumbnail_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
		$image = wp_get_attachment_url($thumbnail_id);
		if ($image) {
			echo '<img src="' . $image . '" alt="' . $cat->name . '"  class="cat-image"/>';
		}
	}
}
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns()
	{
		return 3; // 3 products per row
	}
}

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action('woocommerce_before_main_content');
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

?>
<header class="woocommerce-products-header">
	<?php
	// if (apply_filters('woocommerce_show_page_title', true)) : 
	?>
	<!-- <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1> -->
	<?php
	// endif; 
	?>


	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */

	// do_action('woocommerce_archive_description');
	?>
</header>
<div class="container">


	<div class="row">
		<div class="col-lg-3">
			<div class="sorting">
				<h3>Sorting Options</h3>
				<?php if (is_active_sidebar('product-sidebar')) {
					dynamic_sidebar('product-sidebar');
				}

				?>
			</div>
			<div class="contact contact-for-large-screen">

				<h3>Need Help?</h3>
				<p>
					Have questions about our products? Get in contact with one of our swab experts!
				</p>
				<div class="custom-btn">
					<a href="/contact">Contact Us</a>
				</div>
			</div>
		</div>
		<div class="col-lg-9">
			<?php
			do_action('woocommerce_before_main_content'); ?>
			<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
			<?php
			do_action('woocommerce_archive_description');

			?>
			<hr>
			<?php

			if (woocommerce_product_loop()) {

				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked woocommerce_output_all_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action('woocommerce_before_shop_loop');

				woocommerce_product_loop_start();

				if (wc_get_loop_prop('total')) {
					while (have_posts()) {
						the_post();

						/**
						 * Hook: woocommerce_shop_loop.
						 */
						do_action('woocommerce_shop_loop');

						wc_get_template_part('content', 'product');
					}
				}

				woocommerce_product_loop_end();

				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action('woocommerce_after_shop_loop');
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action('woocommerce_no_products_found');
			}

			/**
			 * Hook: woocommerce_after_main_content.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action('woocommerce_after_main_content');



			?>
			<div class="contact contact-for-mobile">

				<h3>Need Help?</h3>
				<p>
					Have questions about our products? Get in contact with one of our swab experts!
				</p>
				<div class="custom-btn">
					<a href="/contact">Contact Us</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php

get_footer('shop');
?>