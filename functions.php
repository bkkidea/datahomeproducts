<?php

// Enable theme support
add_theme_support( 'post-thumbnails' );

// Create Post of Promotion
add_action( 'init', 'datahome_promotion' );
function datahome_promotion() {
  register_post_type('promotions',
    array(
      'labels' => array(
        'name' => __( 'Promotion' ),
        'search_items' =>('Search Promotions'),
        'singular_name' => ('promotions')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'promotions'),
      'supports'=>array( 'title', 'excerpt','editor', 'thumbnail'),
      'taxonomies' => array('post_tag','category')
    )
  );
}

// Add meta box of Promotion
// 


function promtion_detail() {
  $screens = array( 'promotions');
  foreach ( $screens as $screen ) {
    add_meta_box('promotions_sectionid',__( 'DATAHOME PROMOTION', 'promotion_data' ),'promotion_data_input',$screen,'side');
  }

}

function promotion_data_input(){
  global $post;
  $pro_name = get_post_meta($post->ID, 'pro_name', true);
  $built_in_type = get_post_meta($post->ID, 'built_in_type', true);
  $area = get_post_meta($post->ID, 'area', true);
  $regular_price = get_post_meta($post->ID, 'regular_price', true);
  $sale_price = get_post_meta($post->ID, 'sale_price', true);
  
  echo '<div class="promotion_data_input">';
  echo '<div><lable>ชื่อโปรโมชั่น :</lable><input type="text" name="pro_name" id="pro_name" value="'.$pro_name.'" /> </div>';
  echo '<div><lable>ประเภทห้อง :</lable><input type="text" name="built_in_type" id="built_in_type" value="'.$built_in_type.'" /> </div>';
  echo '<div><lable>พื้นที่ : </lable><input type="text" name="area" id="area" value="'.$area.'" /> ตร.ม.</div>';
  echo '<div><lable>ราคา : </lable><input type="text" name="regular_price" id="regular_price" value="'.$regular_price.'" /> บาท</div>';
  echo '<div><lable>ลดเหลือ : </lable><input type="text" name="sale_price" id="sale_price" value="'.$sale_price.'" /> บาท</div>';
  echo '</div>';
  
}
function save_promotion(){
  global $post;
  update_post_meta($post->ID, "built_in_type", $_POST["built_in_type"]);
  update_post_meta($post->ID, "area", $_POST["area"]);
  update_post_meta($post->ID, "regular_price", $_POST["regular_price"]);
  update_post_meta($post->ID, "sale_price", $_POST["sale_price"]);
  update_post_meta($post->ID, "pro_name", $_POST["pro_name"]);
}

add_action( 'add_meta_boxes', 'promtion_detail' );
add_action('save_post', 'save_promotion');




// Create menu 
function datahome_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      'footer-menu'=> __('Footer Menu'),
      'header2-menu'=> __('Header2 Menu')
    )
  );
}
add_action( 'init', 'datahome_menus');



/**
 * Register our sidebars and widgetized areas.
 *
 */

add_action('widgets_init','footer_w1');
add_action('widgets_init','footer_w2');
add_action('widgets_init','footer_w3');
add_action('widgets_init','footer_w4');
add_action('widgets_init','home_left');
add_action('widgets_init','home_right');


function home_left() {
  register_sidebar( array(
    'name'          => 'home left',
    'id'            => 'home_left',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );

}

function home_right() {
  register_sidebar( array(
    'name'          => 'home right',
    'id'            => 'home_right',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );

}


function footer_w1() {
  register_sidebar( array(
    'name'          => 'Footer 1',
    'id'            => 'footer_w1',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );

}
function footer_w2() {
  register_sidebar( array(
    'name'          => 'Footer 2',
    'id'            => 'footer_w2',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );

}
function footer_w3() {
  register_sidebar( array(
    'name'          => 'Footer 3',
    'id'            => 'footer_w3',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );

}
function footer_w4() {
  register_sidebar( array(
    'name'          => 'Footer 4',
    'id'            => 'footer_w4',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );
}
// SET Display
// 
// Show posts of 'post', 'page' and 'movie' post types on home page
add_action( 'pre_get_posts', 'theme_promotion' );

function theme_promotion( $query ) {
  if ( is_home() && $query->is_main_query() )
    $query->set( 'archive-datahome_promotion', array( 'datahome_promotion'));
  return $query;
}


// admin css
// 
function my_admin_theme_style() {
    wp_enqueue_style('my-admin-theme', get_template_directory_uri().'/admin.css');
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');