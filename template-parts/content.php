<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php

	if ('tips' == get_post_type()) {
		include('custom-single-post/single-tips.php');
	} elseif ('recomend' == get_post_type()) {
		include('custom-single-post/single-customer.php');
	} elseif ('promotion' == get_post_type()) {
		include('custom-single-post/single-promotion.php');
	} elseif ('customerservice' == get_post_type()) {
		include('custom-single-post/single-customer.php');
	} elseif ('about' == get_post_type()) {
		include('custom-single-post/single-about.php');
	} elseif ('news' == get_post_type()) {
		include('custom-single-post/single-news.php');
		
	} elseif ('howto' == get_post_type()) {
		include('custom-single-post/single-howto.php');
	} elseif ('interior' == get_post_type()) {
		include('custom-single-post/single-customer.php');
	} elseif ('page' == get_post_type()) {
		include('content-page.php');
	} elseif ('posts' == get_post_type()) {
		include('custom-single-post/single-blog.php');
	} else {

		include('content-none.php');
	}


	?>


</article><!-- #post-<?php the_ID(); ?> -->