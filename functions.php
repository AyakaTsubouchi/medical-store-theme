<?php



function load_stylesheets()
{
  
    
  // wp_register_style('camera', get_template_directory_uri() . '/css/camera.css', array(), false, 'all');
  // wp_enqueue_style('camera');
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');
  

  wp_register_style('fontawsome', get_template_directory_uri() . '/css/fontawesome.min.css', array(), false, 'all');
  wp_enqueue_style('fontawsome');
  
  // wp_register_style('owlcarousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
  // wp_enqueue_style('owlcarousel');

  // wp_register_style('owltheme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), false, 'all');
  // wp_enqueue_style('owltheme');

  
  wp_register_style('custom', get_template_directory_uri() . '/css/app.css', '', 1, 'all');
  wp_enqueue_style('custom');


}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery()
{
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.js', '', 1, true);
  wp_enqueue_script('jquery');
  
  
  wp_deregister_script('jquery-migrate');
  wp_register_script('jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js', '', 1, true);
  wp_enqueue_script('jquery-migrate');

}
add_action('wp_enqueue_scripts', 'include_jquery');

function load_js()
{

  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1, true);
  wp_enqueue_script('bootstrap');
  
  
  wp_register_script('bootstrap-hover-dropdown', get_template_directory_uri() . '/js/bootstrap-hover-dropdown.min.js', '', 1, true);
  wp_enqueue_script('bootstrap-hover-dropdown');
  
  
  wp_register_script('jquery-mobile', get_template_directory_uri() . '/js/jquery.mobile.custom.min.js', '', 1, true);
  wp_enqueue_script('jquery-mobile');
  
  wp_register_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', '', 1, true);
  wp_enqueue_script('jquery-ui');

    
    // wp_register_script('camera', get_template_directory_uri() . '/js/camera.min.js', '', 1, true);
    // wp_enqueue_script('camera');
  
  wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
  wp_enqueue_script('customjs');


  wp_register_script('fontawesome', get_template_directory_uri() . '/js/fontawesome.min.js', '', 1, true);
  wp_enqueue_script('fontawesome');



  wp_register_script('kit.fontawesome', get_template_directory_uri() . '/js/kit.fontawesome.js', '', 1, true);
  wp_enqueue_script('kit.fontawesome');
  
  // wp_register_script('owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', '', 1, true);
  // wp_enqueue_script('owlcarousel');

}
add_action('wp_enqueue_scripts', 'load_js');




/**************
 * Supporting Elements
 ****************************/


/*-----Nav Walker-----------*/
require_once('class-wp-bootstrap-navwalker.php');
/*-----Nav Walker-----------*/


/*Added Support Custom Logo*/
add_theme_support('custom-logo', array(
  'height'      => 100,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array('site-title', 'site-description'),
));
/*Added Support Custom Logo*/


/*Added Support Slider Images*/
add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails', array('post'));          // Posts only
add_theme_support('post-thumbnails', array('page'));          // Pages only
add_theme_support('post-thumbnails', array('post', 'slider')); // Posts and Movies

/*Added Support Slider Images*/

/*Added Nav Menu*/

function consilting_register_nav_menu()
{
  register_nav_menus(array(
    'medical_header_menu' => __('medical Header Menu', 'goopter'),
    'medical_footer1_menu' => __('medical Footer1 Menu', 'goopter'),
    'medical_footer2_menu' => __('medical Footer2 Menu', 'goopter'),
    'medical_footer3_menu' => __('medical Footer3 Menu', 'goopter'),
    'medical_footer4_menu' => __('medical Footer4 Menu', 'goopter')
  ));
}
add_action('after_setup_theme', 'consilting_register_nav_menu');

/*Added Nav Menu*/


// edit the search widget
function html5_search_form( $form ) { 
  $form = '<section class="search"><form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
 <label class="screen-reader-text" for="s">' . __('',  'domain') . '</label>
  <input class="search-text" type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Search for Products, Category, ETC" />
  <button class="search-btn" type="submit" id="searchsubmit" ><i class="fas fa-search"></i></button>
  </form></section>';
  return $form;
}

add_filter( 'get_search_form', 'html5_search_form' );
// edit the search widget


// Register widget area.
function my_widgets_init()

{
  register_sidebar(array(
    'name'          => 'Custom Header Widget Area',
    'id'            => 'custom-header-widget',
    'before_widget' => '<div class="chw-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="chw-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'my_widgets_init');
// Register widget area.
// Register promo widget area.
function promo_widgets_init()

{
  register_sidebar(array(
    'name'          => 'Promo Widget Area',
    'id'            => 'promo-widget',
    'before_widget' => '<div class="card">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="card-title">',
    'after_title'   => '</h5>',
  ));
}
add_action('widgets_init', 'promo_widgets_init');
// Register promo  widget area.
// Register home footer area.
function home_fotter_init()

{
  register_sidebar(array(
    'name'          => 'Home footer Widget Area',
    'id'            => 'home-footer-widget',
    'before_widget' => '<div class="chw-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="chw-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'home_fotter_init');
// Register home farea.


// Register widget footer
function topheader_widget_init()

{
  register_sidebar(array(
    'name'          => 'Custom Top Header Widget Area',
    'id'            => 'custom-topheader-widget',
    'before_widget' => '<div class="topheader-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="topheader-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'topheader_widget_init');
// Register widget area.

//Register custom sidebar
function sidebar_widgets_init()

{
  register_sidebar(array(
    'name'          => 'Page Sidebar',
    'id'            => 'page-sidebar',
    'before_widget' => '<div class="sidebar-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="middle-bar"><h4 class="sidebar-title">',
    'after_title'   => '</h4></div>',
    
    
  ));
}
add_action('widgets_init', 'sidebar_widgets_init');
//Register product sidebar
function product_sidebar_init()

{
  register_sidebar(array(
    'name'          => 'Product Sidebar',
    'id'            => 'product-sidebar',
    'before_widget' => '<div class="card">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="card-title">',
    'after_title'   => '</h5>',
    
    
  ));
}
add_action('widgets_init', 'product_sidebar_init');
//Register custom footer6
function footer4_widgets_init()

{
  register_sidebar(array(
    'name'          => 'Footer4 Widget',
    'id'            => 'footer4-widget',
    'before_widget' => '<div class="footer4-widget">',
    'after_widget'  => '</div>',
  ));
}
add_action('widgets_init', 'footer4_widgets_init');

//Register custom footer1
function footer1_widgets_init()

{
  register_sidebar(array(
    'name'          => 'Footer1 Widget',
    'id'            => 'footer1-widget',
    'before_widget' => '<div class="footer1-widget">',
    'after_widget'  => '</div>',
  ));
}
add_action('widgets_init', 'footer1_widgets_init');


// Register widget area.
function searchpage_sidebar()

{
  register_sidebar(array(
    'name'          => 'Search Page Sidebar',
    'id'            => 'search-page-sidevar',
    'before_widget' => '<div class="chw-widget card">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="chw-title card-title">',
    'after_title'   => '</h5>',
  ));
}
add_action('widgets_init', 'searchpage_sidebar');
// Register widget area.


/*Added homepost Post in Wordpress*/
function homepost_post_type()
{

  $homepost_labels = array(
    'name' => __('homepost', 'medicalStore_site'),
    'singular_name' => __('homepost', 'medicalStore_site'),
    'add_new' => __('Add new homepost', 'medicalStore_site'),
    'add_new_item' => __('Add new homepost', 'medicalStore_site'),
    'featured_image' => __('homepost post image', 'medicalStore_site'),
    'set_featured_image' => __('Set homepost image', 'medicalStore_site'),

  );

  $homepost_args = array(

    'labels' =>  $homepost_labels,
    'public' => true,
    'show_ui' => true,
    // 'rewrite' => array('slug' => 'homepost'),
    'capability_type' => 'post',
    'menu_position' => null,
    'show_in_rest' => true,

    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category','post_tag'),
  

  );

  register_post_type('homepost', $homepost_args);
}

add_action('init', 'homepost_post_type');

/*Added homepost Post in Wordpress*/
/*register homepost sidebar in Wordpress*/
function homepost_widget_init()

{
  register_sidebar(array(
    'name'          => 'homepost Post Sidebar',
    'id'            => 'homepost-post-sidebar',
    'before_widget' => '<div class="card">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="card-title">',
    'after_title'   => '</h5>',
    
    
  ));
}
add_action('widgets_init', 'homepost_widget_init');

/*Added pmpost Post in Wordpress*/
function pmpost_post_type()
{

  $pmpost_labels = array(
    'name' => __('pmpost', 'medicalStore_site'),
    'singular_name' => __('pmpost', 'medicalStore_site'),
    'add_new' => __('Add new pmpost', 'medicalStore_site'),
    'add_new_item' => __('Add new pmpost', 'medicalStore_site'),
    'featured_image' => __('pmpost post image', 'medicalStore_site'),
    'set_featured_image' => __('Set pmpost image', 'medicalStore_site'),

  );

  $pmpost_args = array(

    'labels' =>  $pmpost_labels,
    'public' => true,
    'show_ui' => true,
    // 'rewrite' => array('slug' => 'pmpost'),
    'capability_type' => 'post',
    'menu_position' => null,
    'show_in_rest' => true,

    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category','post_tag'),
  

  );

  register_post_type('pmpost', $pmpost_args);
}

add_action('init', 'pmpost_post_type');

/*Added pmpost Post in Wordpress*/
/*register pmpost sidebar in Wordpress*/
function pmpost_widget_init()

{
  register_sidebar(array(
    'name'          => 'pmpost Post Sidebar',
    'id'            => 'pmpost-post-sidebar',
    'before_widget' => '<div class="card">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="card-title">',
    'after_title'   => '</h5>',
    
    
  ));
}
add_action('widgets_init', 'pmpost_widget_init');

/*Added blogtype1 Post in Wordpress*/
/*Add aboutpost Post in Wordpress*/
function aboutpost_post_type()
{

  $aboutpost_labels = array(
    'name' => __('aboutpost', 'medicalStore_site'),
    'singular_name' => __('aboutpost', 'medicalStore_site'),
    'add_new' => __('Add new aboutpost', 'medicalStore_site'),
    'add_new_item' => __('Add new aboutpost', 'medicalStore_site'),
    'featured_image' => __('aboutpost post image', 'medicalStore_site'),
    'set_featured_image' => __('Set aboutpost image', 'medicalStore_site'),

  );

  $aboutpost_args = array(

    'labels' =>  $aboutpost_labels,
    'public' => true,
    'show_ui' => true,
    // 'rewrite' => array('slug' => 'aboutpost'),
    'capability_type' => 'post',
    'menu_position' => null,
    'show_in_rest' => true,

    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category','post_tag'),
  

  );

  register_post_type('aboutpost', $aboutpost_args);
}

add_action('init', 'aboutpost_post_type');

/*Added aboutpost Post in Wordpress*/
/*register aboutpost sidebar in Wordpress*/
function aboutpost_widget_init()

{
  register_sidebar(array(
    'name'          => 'aboutpost Post Sidebar',
    'id'            => 'aboutpost-post-sidebar',
    'before_widget' => '<div class="card">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="card-title">',
    'after_title'   => '</h5>',
    
    
  ));
}
add_action('widgets_init', 'aboutpost_widget_init');

/*Added blogtype1 Post in Wordpress*/
function blogtype1_post_type()
{

  $blogtype1_labels = array(
    'name' => __('blogtype1', 'medicalStore_site'),
    'singular_name' => __('blogtype1', 'medicalStore_site'),
    'add_new' => __('Add new blogtype1', 'medicalStore_site'),
    'add_new_item' => __('Add new blogtype1', 'medicalStore_site'),
    'featured_image' => __('blogtype1 post image', 'medicalStore_site'),
    'set_featured_image' => __('Set blogtype1 image', 'medicalStore_site'),

  );

  $blogtype1_args = array(

    'labels' =>  $blogtype1_labels,
    'public' => true,
    'show_ui' => true,
    // 'rewrite' => array('slug' => 'aboutpost'),
    'capability_type' => 'post',
    'menu_position' => null,
    'show_in_rest' => true,

    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category','post_tag'),
  

  );

  register_post_type('blogtype1', $blogtype1_args);
}

add_action('init', 'blogtype1_post_type');

/*Added blogtype1 Post in Wordpress*/
/*register blogtype1 sidebar in Wordpress*/
function blogtype1_widget_init()

{
  register_sidebar(array(
    'name'          => 'blogtype1 Post Sidebar',
    'id'            => 'blogtype1-post-sidebar',
    'before_widget' => '<div class="card">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="card-title">',
    'after_title'   => '</h5>',
    
    
  ));
}
add_action('widgets_init', 'blogtype1_widget_init');

/*Added blogtype2 Post in Wordpress*/
function blogtype2_post_type()
{

  $blogtype2_labels = array(
    'name' => __('blogtype2', 'medicalStore_site'),
    'singular_name' => __('blogtype2', 'medicalStore_site'),
    'add_new' => __('Add new blogtype2', 'medicalStore_site'),
    'add_new_item' => __('Add new blogtype2', 'medicalStore_site'),
    'featured_image' => __('blogtype2 post image', 'medicalStore_site'),
    'set_featured_image' => __('Set blogtype2 image', 'medicalStore_site'),

  );

  $blogtype2_args = array(

    'labels' =>  $blogtype2_labels,
    'public' => true,
    'show_ui' => true,
    // 'rewrite' => array('slug' => 'blogtype2'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category','post_tag'),
  

  );

  register_post_type('blogtype2', $blogtype2_args);
}

add_action('init', 'blogtype2_post_type');

/*Added blogtype2 Post in Wordpress*/
/*register blogtype2 sidebar in Wordpress*/
function blogtype2_widget_init()

{
  register_sidebar(array(
    'name'          => 'blogtype2 Post Sidebar',
    'id'            => 'blogtype2-post-sidebar',
    'before_widget' => '<div class="card">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="card-title">',
    'after_title'   => '</h5>',
    
    
  ));
}
add_action('widgets_init', 'blogtype2_widget_init');


/*Added blogtype3 Post in Wordpress*/
function blogtype3_post_type()
{

  $blogtype3_labels = array(
    'name' => __('blogtype3', 'medicalStore_site'),
    'singular_name' => __('blogtype3', 'medicalStore_site'),
    'add_new' => __('Add new blogtype3', 'medicalStore_site'),
    'add_new_item' => __('Add new blogtype3', 'medicalStore_site'),
    'featured_image' => __('blogtype3 post image', 'medicalStore_site'),
    'set_featured_image' => __('Set blogtype3 image', 'medicalStore_site'),

  );

  $blogtype3_args = array(

    'labels' =>  $blogtype3_labels,
    'public' => true,
    'show_ui' => true,
    // 'rewrite' => array('slug' => 'blogtype3'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category','post_tag'),
  

  );

  register_post_type('blogtype3', $blogtype3_args);
}

add_action('init', 'blogtype3_post_type');

/*Added blogtype3 Post in Wordpress*/
/*register blogtype3 sidebar in Wordpress*/
function blogtype3_widget_init()

{
  register_sidebar(array(
    'name'          => 'blogtype3 Post Sidebar',
    'id'            => 'blogtype3-post-sidebar',
    'before_widget' => '<div class="card">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="card-title">',
    'after_title'   => '</h5>',
    
    
  ));
}
add_action('widgets_init', 'blogtype3_widget_init');


/*Added blogtype4 Post in Wordpress*/
function blogtype4_post_type()
{

  $blogtype4_labels = array(
    'name' => __('blogtype4', 'medicalStore_site'),
    'singular_name' => __('blogtype4', 'medicalStore_site'),
    'add_new' => __('Add new blogtype4', 'medicalStore_site'),
    'add_new_item' => __('Add new blogtype4', 'medicalStore_site'),
    'featured_image' => __('blogtype4 post image', 'medicalStore_site'),
    'set_featured_image' => __('Set blogtype4 image', 'medicalStore_site'),

  );

  $blogtype4_args = array(

    'labels' =>  $blogtype4_labels,
    'public' => true,
    'show_ui' => true,
    // 'rewrite' => array('slug' => 'blogtype4'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category','post_tag'),
  

  );

  register_post_type('blogtype4', $blogtype4_args);
}

add_action('init', 'blogtype4_post_type');

/*Added blogtype4 Post in Wordpress*/
/*register blogtype4 sidebar in Wordpress*/
function blogtype4_widget_init()

{
  register_sidebar(array(
    'name'          => 'blogtype4 Post Sidebar',
    'id'            => 'blogtype4-post-sidebar',
    'before_widget' => '<div class="card">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="card-title">',
    'after_title'   => '</h5>',
    
    
  ));
}
add_action('widgets_init', 'blogtype4_widget_init');


/*Added blogtype5 Post in Wordpress*/
function blogtype5_post_type()
{

  $blogtype5_labels = array(
    'name' => __('blogtype5', 'medicalStore_site'),
    'singular_name' => __('blogtype5', 'medicalStore_site'),
    'add_new' => __('Add new blogtype5', 'medicalStore_site'),
    'add_new_item' => __('Add new blogtype5', 'medicalStore_site'),
    'featured_image' => __('blogtype5 post image', 'medicalStore_site'),
    'set_featured_image' => __('Set blogtype5 image', 'medicalStore_site'),

  );

  $blogtype5_args = array(

    'labels' =>  $blogtype5_labels,
    'public' => true,
    'show_ui' => true,
    // 'rewrite' => array('slug' => 'blogtype5'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category','post_tag'),
  

  );

  register_post_type('blogtype5', $blogtype5_args);
}

add_action('init', 'blogtype5_post_type');

/*Added blogtype5 Post in Wordpress*/
/*register blogtype5 sidebar in Wordpress*/
function blogtype5_widget_init()

{
  register_sidebar(array(
    'name'          => 'blogtype5 Post Sidebar',
    'id'            => 'blogtype5-post-sidebar',
    'before_widget' => '<div class="card">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="card-title">',
    'after_title'   => '</h5>',
    
    
  ));
}
add_action('widgets_init', 'blogtype5_widget_init');


// get post image url
add_action('rest_api_init', 'register_rest_images');
function register_rest_images()
{
  register_rest_field(
    array('gallery'),
    'fimg_url',
    array(
      'get_callback'    => 'get_rest_featured_image',
      'update_callback' => null,
      'schema'          => null,
    )
  );
}
function get_rest_featured_image($object, $field_name, $request)
{
  if ($object['featured_media']) {
    $img = wp_get_attachment_image_src($object['featured_media'], 'href');
    return $img[0];
  }
  return false;
}
// end of get post image url
/*Added header_slider Post in Wordpress*/
function header_slider_post_type()
{
  $header_slider_labels = array(
    'name' => __('header_slider', 'interiorStore_site'),
    'singular_name' => __('header_slider', 'interiorStore_site'),
    'add_new' => __('Add new header_slider', 'interiorStore_site'),
    'add_new_item' => __('Add new header_slider', 'interiorStore_site'),
    'featured_image' => __('header_slider post image', 'interiorStore_site'),
    'set_featured_image' => __('Set header_slider image', 'interiorStore_site'),
  );

  $header_slider_args = array(

    'labels' =>  $header_slider_labels,
    'public' => true,
    'show_ui' => true,
    'show_in_rest' => true,
    'rewrite' => array('slug' => 'header_slider'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category', 'post_tag'),

  );

  register_post_type('header_slider', $header_slider_args);
}

add_action('init', 'header_slider_post_type');

/*Added header_slider Post in Wordpress*/

/*Added gallery Post in Wordpress*/
function gallery_post_type()
{

  $gallery_labels = array(
    'name' => __('Gallery', 'medicalStore_site'),
    'singular_name' => __('Gallery', 'medicalStore_site'),
    'add_new' => __('Add new Gallery', 'medicalStore_site'),
    'add_new_item' => __('Add new Gallery', 'medicalStore_site'),
    'featured_image' => __('Gallery post image', 'medicalStore_site'),
    'set_featured_image' => __('Set Gallery image', 'medicalStore_site'),

  );

  $gallery_args = array(

    'labels' =>  $gallery_labels,
    'public' => true,
    'show_ui' => true,
    'show_in_rest' => true,
    'rewrite' => array('slug' => 'gallery'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category', 'post_tag'),

  );

  register_post_type('gallery', $gallery_args);
}

add_action('init', 'gallery_post_type');

/*Added gallery Post in Wordpress*/

/*Added mtlist Post in Wordpress*/
function mtlist_post_type()
{

  $mtlist_labels = array(
    'name' => __('Material List', 'medicalStore_site'),
    'singular_name' => __('mtlist', 'medicalStore_site'),
    'add_new' => __('Add new mtlist', 'medicalStore_site'),
    'add_new_item' => __('Add new mtlist', 'medicalStore_site'),
    'featured_image' => __('mtlist post image', 'medicalStore_site'),
    'set_featured_image' => __('Set mtlist image', 'medicalStore_site'),

  );

  $mtlist_args = array(

    'labels' =>  $mtlist_labels,
    'public' => true,
    'show_ui' => true,
    // 'rewrite' => array('slug' => 'mtlist'),
    'capability_type' => 'post',
    'menu_position' => null,
    'show_in_rest' => true,

    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category','post_tag'),
  

  );

  register_post_type('mtlist', $mtlist_args);
}

add_action('init', 'mtlist_post_type');

/*Added mtlist Post in Wordpress*/

/*Added businessInfo Post in Wordpress*/
function businessInfo_post_type()
{

  $businessInfo_labels = array(
    'name' => __('businessInfo', 'medicalStore_site'),
    'singular_name' => __('Business Info', 'medicalStore_site'),
    'add_new' => __('Add new business Info', 'medicalStore_site'),
    'add_new_item' => __('Add new business info', 'medicalStore_site'),
    'featured_image' => __('Business info post image', 'medicalStore_site'),
    'set_featured_image' => __('Set business info image', 'medicalStore_site'),

  );

  $businessInfo_args = array(

    'labels' =>  $businessInfo_labels,
    'public' => true,
    'show_ui' => true,
    'rewrite' => array('slug' => 'businessInfo'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category', 'post_tag'),

  );

  register_post_type('businessInfo', $businessInfo_args);
}

add_action('init', 'businessInfo_post_type');

/*Added businessInfo Post in Wordpress*/



/*Added  header info in Wordpress*/
function header_post_type()
{
  $header_labels = array(
    'name' => __('header', 'medicalStore_site'),
    'singular_name' => __('header', 'medicalStore_site'),
    'add_new' => __('Add new header', 'medicalStore_site'),
    'add_new_item' => __('Add new header', 'medicalStore_site'),
    'featured_image' => __('header post image', 'medicalStore_site'),
    'set_featured_image' => __('Set header image', 'medicalStore_site'),
  );
  $header_args = array(
    'labels' =>  $header_labels,
    'public' => true,
    'show_ui' => true,
    'rewrite' => array('slug' => 'header'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category', 'post_tag'),
  );

  register_post_type('header', $header_args);
}

add_action('init', 'header_post_type');




// Changing excerpt more
function new_excerpt_more($more)
{
  global $post;
  return '… <a href="' . get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Changing excerpt more


//for easy appointment translate(loco translate)
load_theme_textdomain('themify', TEMPLATEPATH . '/languages');



//for woocommerce
function mytheme_add_woocommerce_support()
{
  add_theme_support('woocommerce');
  
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');


 
function yourtheme_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'yourtheme_setup' );

// make the Woocommerce Products Widget display Products of a specific Category only
add_filter( 'woocommerce_products_widget_query_args', function( $query_args ){
  // Set HERE your product category slugs 
  $categories = array( 'blinds', 'draperies','motorization' );

  $query_args['tax_query'] = array( array(
      'taxonomy' => 'product_cat',
      'field'    => 'slug',
      'terms'    => $categories,
  ));

  return $query_args;
}, 10, 1 );


    // add_filter( 'pre_get_posts', 'slug_cpt_category_archives' );
    // function slug_cpt_category_archives( $query ) {
    // if ( $query->is_category() && $query->is_main_query()  )  {
    //     $query->set( 'post_type',
    //         array(
    //             'post',
    //             'blogtype2'
    //         )
    //     );
    // }

    // return $query;

    // }
    // add_action( 'pre_get_posts', 'slug_cpt_category_archives' );
    // function slug_cpt_category_archives( $query ) {
    //     if ( is_tax( 'educations') )  {
    //         $tax_query = $query->tax_query->queries;
    //         $tax_query['include_children'] = 0;
    //         $query->set( 'tax_query', $tax_query );
    //     };
      
    // }

    //woocommerce disable the image zoom
    function remove_image_zoom_support()
    {
      remove_theme_support('wc-product-gallery-zoom');
    }
    add_action('wp', 'remove_image_zoom_support', 100);
    
    //woocommerce: add navigation for gallery slider
    add_filter( 'woocommerce_single_product_carousel_options', 'sf_update_woo_flexslider_options' );
/** 
 * Filer WooCommerce Flexslider options - Add Navigation Arrows
 */
// function sf_update_woo_flexslider_options( $options ) {

//     $options = array(
//       'rtl'            => is_rtl(),
//       'animation'      => 'slide',
//       'smoothHeight'   => true,
//       'directionNav'   => true,
//       'controlNav'     => 'thumbnails',
     
//       'slideshow'      => false,
//       'animationSpeed' => 500,
//       'animationLoop'  => false, // Breaks photoswipe pagination if true.
//       'allowOneSlide'  => true,
//     );

//     return $options;
// }
    
    
    //allow to upload svg file
    function cc_mime_types($mimes) {
      $mimes['svg'] = 'image/svg+xml';
      return $mimes;
    }
    add_filter('upload_mimes', 'cc_mime_types');
    
    //add image icon to the nav menu
    add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
	
	// loop
	foreach( $items as &$item ) {
		
		// vars
		$icon = get_field('icon', $item);
		$iconBg = get_field('icon_background', $item);
		
		
		// append icon
		if( $icon ) {
			
			$item->title .= ' <img src="'.$icon.'" style="background:'.$iconBg.'"}>';
			
		}
		
	}
	
	
	// return
	return $items;
	
}