<?php
/*
Template name: Contact
*/
?>
<?php get_header(); ?>
<div class="contactus">
	<div class="container">



		<?php

		defined('ABSPATH') || exit;

		do_action('woocommerce_before_main_content');

		?>
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>
				<h2><span><?php the_title(); ?></span></h2>



				<?php
				global $post;

				$businessInfo_post = get_posts(array(
					'post_type' => 'businessInfo',
					'posts_per_page' => 1,
				));

				if ($businessInfo_post) {
					foreach ($businessInfo_post as $post) :
						setup_postdata($post);
						$current_lang = pll_current_language();
						if ($current_lang === 'zh') {
							include('inc/contact-zh.php');
						} else {
							include('inc/contact-en.php');
						}
					endforeach;
					wp_reset_postdata();
				}

				?>




		<?php
			endwhile;
		endif;
		?>
	</div>
</div>
<?php get_footer(); ?>