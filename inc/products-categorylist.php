<?php
$taxonomy     = 'product_cat';
$orderby      = 'name';
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 0;      // 1 for yes, 0 for no  
$title        = '';
$empty        = 0;
$args = array(
    // 'taxonomy'     => $taxonomy,
    'orderby'      => $orderby,
    'show_count'   => $show_count,
    'pad_counts'   => $pad_counts,
    // 'hierarchical' => $hierarchical,
    'title_li'     => $title,
    'hide_empty'   => $empty,
    'tax_query' => [
        [
            'taxonomy' =>  $taxonomy,
            'terms' => get_queried_object()->term_id, //blog2
            'include_children' => false // Remove if you need posts from term 7 child terms
        ],
    ],
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

        <div class="category-list  col">

           
                <div class="image-wrapper" style="backgroundimage:url('http://localhost:8888/wp-content/uploads/2021/03/cheese.png'); height:100px;">
                    <a href="<?php echo  get_term_link($cat->slug, 'product_cat');  ?>" >
                      <img src="http://localhost:8888/wp-content/uploads/2021/03/cheese.png" alt="" style="width:80px;">
                    </a>
             


                <h5 class="title"> <?php echo  $cat->name;  ?></h5>

            </div>
        </div>





<?php }
}
?>