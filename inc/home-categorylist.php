<?php
$taxonomy     = 'product_cat';
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
        $cat_id = "product_cat_$category_id"
?>

        <div class="category-list  col">

            <div class="container">


                <div class="image-wrapper">
                    <a href="<?php echo  get_term_link($cat->slug, 'product_cat');  ?>">
                        <img src="<?php echo get_field('icon', $cat_id); ?>" alt="" style="width:60px;    width: 60px; background: <?php echo get_field('icon_background_color', $cat_id); ?>;   border-radius: 40px; padding: 10px;">
                    </a>


                    <h5 class="title"> <?php echo  $cat->name;  ?></h5>

                </div>
            </div>

        </div>



<?php }
}
?>