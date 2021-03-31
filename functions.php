<?php



function load_stylesheets()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');
  wp_register_style('fontawsome', get_template_directory_uri() . '/css/fontawesome.min.css', array(), false, 'all');
  wp_enqueue_style('fontawsome');
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

  wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
  wp_enqueue_script('customjs');


  wp_register_script('fontawesome', get_template_directory_uri() . '/js/fontawesome.min.js', '', 1, true);
  wp_enqueue_script('fontawesome');



  wp_register_script('kit.fontawesome', get_template_directory_uri() . '/js/kit.fontawesome.js', '', 1, true);
  wp_enqueue_script('kit.fontawesome');
  wp_enqueue_script('owlcarousel');
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
function html5_search_form($form)
{
  $form = '<section class="search"><form role="search" method="get" id="search-form" action="' . home_url('/') . '" >
 <label class="screen-reader-text" for="s">' . __('',  'domain') . '</label>
  <input class="search-text" type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Search for Products" />
  <button class="search-btn" type="submit" id="searchsubmit" ><i class="fas fa-search"></i></button>
  </form></section>';
  return $form;
}

add_filter('get_search_form', 'html5_search_form');
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
    'capability_type' => 'post',
    'menu_position' => null,
    'show_in_rest' => true,

    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category', 'post_tag'),


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
    'taxonomies'          => array('category', 'post_tag'),


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
    'taxonomies'          => array('category', 'post_tag'),


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

// /*Added technical Post in Wordpress*/
// function technical_post_type()
// {

//   $technical_labels = array(
//     'name' => __('technical', 'medicalStore_site'),
//     'singular_name' => __('technical', 'medicalStore_site'),
//     'add_new' => __('Add new technical', 'medicalStore_site'),
//     'add_new_item' => __('Add new technical', 'medicalStore_site'),
//     'featured_image' => __('technical post image', 'medicalStore_site'),
//     'set_featured_image' => __('Set technical image', 'medicalStore_site'),

//   );

//   $technical_args = array(

//     'labels' =>  $technical_labels,
//     'public' => true,
//     'show_ui' => true,
//     // 'rewrite' => array('slug' => 'aboutpost'),
//     'capability_type' => 'post',
//     'menu_position' => null,
//     'show_in_rest' => true,

//     'supports' => array(
//       'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
//       'comments', 'revisions', 'custom-fields'
//     ),
//     'taxonomies'          => array('category','post_tag'),


//   );

//   register_post_type('technical', $technical_args);
// }

// add_action('init', 'technical_post_type');

// /*Added technical Post in Wordpress*/
// /*register technical sidebar in Wordpress*/
// function technical_widget_init()

// {
//   register_sidebar(array(
//     'name'          => 'technical Post Sidebar',
//     'id'            => 'technical-post-sidebar',
//     'before_widget' => '<div class="card">',
//     'after_widget'  => '</div>',
//     'before_title'  => '<h5 class="card-title">',
//     'after_title'   => '</h5>',


//   ));
// }
// add_action('widgets_init', 'technical_widget_init');

/*Added education Post in Wordpress*/
// function education_post_type()
// {

//   $education_labels = array(
//     'name' => __('education', 'medicalStore_site'),
//     'singular_name' => __('education', 'medicalStore_site'),
//     'add_new' => __('Add new education', 'medicalStore_site'),
//     'add_new_item' => __('Add new education', 'medicalStore_site'),
//     'featured_image' => __('education post image', 'medicalStore_site'),
//     'set_featured_image' => __('Set education image', 'medicalStore_site'),

//   );

//   $education_args = array(

//     'labels' =>  $education_labels,
//     'public' => true,
//     'show_ui' => true,
//     // 'rewrite' => array('slug' => 'education'),
//     'capability_type' => 'post',
//     'menu_position' => null,
//     'supports' => array(
//       'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
//       'comments', 'revisions', 'custom-fields'
//     ),
//     'taxonomies'          => array('category','post_tag'),


//   );

//   register_post_type('education', $education_args);
// }

// add_action('init', 'education_post_type');

/*Added education Post in Wordpress*/
/*register education sidebar in Wordpress*/
// function education_widget_init()

// {
//   register_sidebar(array(
//     'name'          => 'education Post Sidebar',
//     'id'            => 'education-post-sidebar',
//     'before_widget' => '<div class="card">',
//     'after_widget'  => '</div>',
//     'before_title'  => '<h5 class="card-title">',
//     'after_title'   => '</h5>',


//   ));
// }
// add_action('widgets_init', 'education_widget_init');


/*Added newsfeed Post in Wordpress*/
// function newsfeed_post_type()
// {

//   $newsfeed_labels = array(
//     'name' => __('newsfeed', 'medicalStore_site'),
//     'singular_name' => __('newsfeed', 'medicalStore_site'),
//     'add_new' => __('Add new newsfeed', 'medicalStore_site'),
//     'add_new_item' => __('Add new newsfeed', 'medicalStore_site'),
//     'featured_image' => __('newsfeed post image', 'medicalStore_site'),
//     'set_featured_image' => __('Set newsfeed image', 'medicalStore_site'),

//   );

//   $newsfeed_args = array(

//     'labels' =>  $newsfeed_labels,
//     'public' => true,
//     'show_ui' => true,
//     // 'rewrite' => array('slug' => 'newsfeed'),
//     'capability_type' => 'post',
//     'menu_position' => null,
//     'supports' => array(
//       'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
//       'comments', 'revisions', 'custom-fields'
//     ),
//     'taxonomies'          => array('category','post_tag'),


//   );

//   register_post_type('newsfeed', $newsfeed_args);
// }

// add_action('init', 'newsfeed_post_type');

/*Added newsfeed Post in Wordpress*/
/*register newsfeed sidebar in Wordpress*/
// function newsfeed_widget_init()

// {
//   register_sidebar(array(
//     'name'          => 'newsfeed Post Sidebar',
//     'id'            => 'newsfeed-post-sidebar',
//     'before_widget' => '<div class="card">',
//     'after_widget'  => '</div>',
//     'before_title'  => '<h5 class="card-title">',
//     'after_title'   => '</h5>',


//   ));
// }
// add_action('widgets_init', 'newsfeed_widget_init');


/*Added event Post in Wordpress*/
// function event_post_type()
// {

//   $event_labels = array(
//     'name' => __('event', 'medicalStore_site'),
//     'singular_name' => __('event', 'medicalStore_site'),
//     'add_new' => __('Add new event', 'medicalStore_site'),
//     'add_new_item' => __('Add new event', 'medicalStore_site'),
//     'featured_image' => __('event post image', 'medicalStore_site'),
//     'set_featured_image' => __('Set event image', 'medicalStore_site'),

//   );

//   $event_args = array(

//     'labels' =>  $event_labels,
//     'public' => true,
//     'show_ui' => true,
//     // 'rewrite' => array('slug' => 'event'),
//     'capability_type' => 'post',
//     'menu_position' => null,
//     'supports' => array(
//       'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
//       'comments', 'revisions', 'custom-fields'
//     ),
//     'taxonomies'          => array('category','post_tag'),


//   );

//   register_post_type('event', $event_args);
// }

// add_action('init', 'event_post_type');

// /*Added event Post in Wordpress*/
// /*register event sidebar in Wordpress*/
// function event_widget_init()

// {
//   register_sidebar(array(
//     'name'          => 'event Post Sidebar',
//     'id'            => 'event-post-sidebar',
//     'before_widget' => '<div class="card">',
//     'after_widget'  => '</div>',
//     'before_title'  => '<h5 class="card-title">',
//     'after_title'   => '</h5>',


//   ));
// }
// add_action('widgets_init', 'event_widget_init');

/*Added blogtype1 Post in Wordpress*/
function blogtype1_post_type()
{

  $blogtype1_labels = array(
    'name' => __('Technical', 'medicalStore_site'),
    'singular_name' => __('Technical', 'medicalStore_site'),
    'add_new' => __('Add new Technical', 'medicalStore_site'),
    'add_new_item' => __('Add new Technical', 'medicalStore_site'),
    'featured_image' => __('Technical post image', 'medicalStore_site'),
    'set_featured_image' => __('Set Technical image', 'medicalStore_site'),

  );

  $blogtype1_args = array(

    'labels' =>  $blogtype1_labels,
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'menu_position' => null,
    'show_in_rest' => true,
    'rewrite' => array('slug' => 'blogtype1'),
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category', 'post_tag'),


  );

  register_post_type('blogtype1', $blogtype1_args);
}

add_action('init', 'blogtype1_post_type');

/*Added blogtype1 Post in Wordpress*/
/*register blogtype1 sidebar in Wordpress*/
function blogtype1_widget_init()

{
  register_sidebar(array(
    'name'          => 'Technical Post Sidebar',
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
    'name' => __('Education', 'medicalStore_site'),
    'singular_name' => __('Education', 'medicalStore_site'),
    'add_new' => __('Add new Education', 'medicalStore_site'),
    'add_new_item' => __('Add new Education', 'medicalStore_site'),
    'featured_image' => __('Education post image', 'medicalStore_site'),
    'set_featured_image' => __('Set Education image', 'medicalStore_site'),

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
    'taxonomies'          => array('post_tag'),


  );

  register_post_type('blogtype2', $blogtype2_args);
}

add_action('init', 'blogtype2_post_type');

/*Added blogtype2 Post in Wordpress*/
/*register blogtype2 sidebar in Wordpress*/
function blogtype2_widget_init()

{
  register_sidebar(array(
    'name'          => 'Education Post Sidebar',
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
    'name' => __('News Feed', 'medicalStore_site'),
    'singular_name' => __('News Feed', 'medicalStore_site'),
    'add_new' => __('Add new News Feed', 'medicalStore_site'),
    'add_new_item' => __('Add new News Feed', 'medicalStore_site'),
    'featured_image' => __('News Feed post image', 'medicalStore_site'),
    'set_featured_image' => __('Set News Feed image', 'medicalStore_site'),

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
    'taxonomies'          => array('category', 'post_tag'),


  );

  register_post_type('blogtype3', $blogtype3_args);
}

add_action('init', 'blogtype3_post_type');

/*Added blogtype3 Post in Wordpress*/
/*register blogtype3 sidebar in Wordpress*/
function blogtype3_widget_init()

{
  register_sidebar(array(
    'name'          => 'News Feed Post Sidebar',
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
    'name' => __('Event', 'medicalStore_site'),
    'singular_name' => __('Event', 'medicalStore_site'),
    'add_new' => __('Add new Event', 'medicalStore_site'),
    'add_new_item' => __('Add new Event', 'medicalStore_site'),
    'featured_image' => __('Event post image', 'medicalStore_site'),
    'set_featured_image' => __('Set Event image', 'medicalStore_site'),

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
    'taxonomies'          => array('category', 'post_tag'),


  );

  register_post_type('blogtype4', $blogtype4_args);
}

add_action('init', 'blogtype4_post_type');

/*Added blogtype4 Post in Wordpress*/



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
    'taxonomies'          => array('category', 'post_tag'),


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



function yourtheme_setup()
{
  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'yourtheme_setup');

// make the Woocommerce Products Widget display Products of a specific Category only
add_filter('woocommerce_products_widget_query_args', function ($query_args) {
  // Set HERE your product category slugs 
  $categories = array('blinds', 'draperies', 'motorization');

  $query_args['tax_query'] = array(array(
    'taxonomy' => 'product_cat',
    'field'    => 'slug',
    'terms'    => $categories,
  ));

  return $query_args;
}, 10, 1);

//allow to upload svg file
function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//add image icon to the nav menu
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects($items, $args)
{

  // loop
  foreach ($items as &$item) {

    // vars
    $icon = get_field('icon', $item);
    $iconBg = get_field('icon_background', $item);


    // append icon
    if ($icon) {

      $item->title .= ' <img src="' . $icon . '" style="background:' . $iconBg . '"}>';
    }
  }


  // return
  return $items;
}




//try
function wpbeginner_numeric_posts_nav()
{

  if (is_singular())
    return;

  global $wp_query;

  /** Stop execution if there's only 1 page */
  if ($wp_query->max_num_pages <= 1)
    return;

  $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
  $max   = intval($wp_query->max_num_pages);

  /** Add current page to the array */
  if ($paged >= 1)
    $links[] = $paged;

  /** Add the pages around the current page to the array */
  if ($paged >= 3) {
    $links[] = $paged - 1;
    $links[] = $paged - 2;
  }

  if (($paged + 2) <= $max) {
    $links[] = $paged + 2;
    $links[] = $paged + 1;
  }

  echo '<div class="navigation"><ul>' . "\n";

  /** Previous Post Link */
  if (get_previous_posts_link())
    printf('<li>%s</li>' . "\n", get_previous_posts_link());


  /** Link to first page, plus ellipses if necessary */
  if (!in_array(1, $links)) {
    $class = 1 == $paged ? ' class="active"' : '';

    printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

    if (!in_array(2, $links))
      echo '<li>…</li>';
  }

  /** Link to current page, plus 2 pages in either direction if necessary */
  sort($links);
  foreach ((array) $links as $link) {
    $class = $paged == $link ? ' class="active"' : '';
    printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
  }

  /** Link to last page, plus ellipses if necessary */
  if (!in_array($max, $links)) {
    if (!in_array($max - 1, $links))
      echo '<li>…</li>' . "\n";

    $class = $paged == $max ? ' class="active"' : '';
    printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
  }

  /** Next Post Link */
  if (get_next_posts_link())
    printf('<li>%s</li>' . "\n", get_next_posts_link());

  echo '</ul></div>' . "\n";
}
