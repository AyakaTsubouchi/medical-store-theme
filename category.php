<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 
 <?php

$categories = get_terms(array('taxonomy'  => 'blog_categories', 'hide_empty' => false,));
foreach ($categories as $category) {
    print_r($category);
    $imageUrl =  get_field('image',$category->term_id);
    echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name .$imageUrl. '</a></div>';
}


$taxonomy     = 'blogtype2';
$orderby      = 'name';
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 0;      // 1 for yes, 0 for no  
$title        = '';
$empty        = 0;
$args = array(
    'taxonomy'     => $taxonomy,
    'orderby'      => $orderby,
    'show_count'   => $show_count,
    'pad_counts'   => $pad_counts,
    // 'hierarchical' => $hierarchical,
    'title_li'     => $title,
    'hide_empty'   => $empty,
);
?>
<?php $all_categories = get_categories($args);

foreach ($all_categories as $cat) {
    // print_r($cat);
    $thumbnail_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
    $image = wp_get_attachment_url($thumbnail_id);
    if ($cat->slug === 'uncategorized') {
        continue;
    }
    if ($cat->category_parent == 0) {
        $category_id = $cat->term_id;

?>

        <div class="category-card  col-lg-3 col-md-4 col-sm-12">

            <div class="card-body">
                <div class="image-wrapper">

                    <img class="card-img-top" src="<?php echo $image; ?>" alt="Card image cap">
                </div>
                <div class="card-content">

                    <h5 class="card-title"> <?php echo  $cat->name;  ?></h5>
                    <p class="card-text"><?php 
                    $shorten =  substr($cat->description, 0, 30);
                    echo $shorten; 
                    ?></p>
                    <a href="<?php echo  get_term_link($cat->slug, 'product_cat');  ?>" class="btn btn-primary">View More</a>
                </div>

            </div>
        </div>


        <!-- <?php
                $args2 = array(
                    'taxonomy'     => $taxonomy,
                    'child_of'     => 0,
                    'parent'       => $category_id,
                    'orderby'      => $orderby,
                    'show_count'   => $show_count,
                    'pad_counts'   => $pad_counts,
                    'hierarchical' => $hierarchical,
                    'title_li'     => $title,
                    'hide_empty'   => $empty
                );
                $sub_cats = get_categories($args2);
                if ($sub_cats) {
                    foreach ($sub_cats as $sub_category) {
                        echo  $sub_category->name;
                    }
                } ?> -->



<?php }
}
?>






 
<section id="primary" class="site-content">
<div id="content" role="main">
 
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>
 
<header class="archive-header">
<h1 class="archive-title">Category: <?php single_cat_title( '', false ); ?></h1>
 
 
<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
</header>
 
<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
 
<div class="entry">
<?php the_content(); ?>
 
 <p class="postmetadata"><?php
  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
?></p>
</div>
 
<?php endwhile; 
 
else: ?>
<p>Sorry, no posts matched your criteria.</p>
 
 
<?php endif; ?>
</div>
</section>
 
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>