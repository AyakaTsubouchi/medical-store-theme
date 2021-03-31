<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php

	if ('blog' == get_post_type()) {
		include('custom-single-post/single-blog.php');
	} elseif ('blogtype1' == get_post_type()) {
		include('custom-single-post/single-blogtype1.php');
	} elseif ('blogtype2' == get_post_type()) {
		include('custom-single-post/single-blogtype1.php');
	} elseif ('blogtype3' == get_post_type()) {
		include('custom-single-post/single-blogtype1.php');
	
	} else {

		include('content-none.php');
	}


	?>


</article><!-- #post-<?php the_ID(); ?> -->