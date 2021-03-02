<?php
/*
Template name: Contact
*/
?>

<?php get_header(); ?>

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
				

		<?php get_footer(); ?>