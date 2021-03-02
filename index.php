<?php get_header();
?>

	<main id="primary" class="site-main">
		<?php
		if ( have_posts() ) :

			while ( have_posts() ) :
				the_post();

				
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :
echo 'no post';
echo get_post_type();

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();