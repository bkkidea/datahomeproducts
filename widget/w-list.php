<?php 
    /*
    Plugin Name: Datahome Product Display
    Plugin URI: http://www.excworld.com
    Description: Plugin for displaying products from Datahome 
    Author: Mr.Uthai
    Version: 1.0
    Author URI: http://www.excworld.com
    */
   

   // Creating the widget 
class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'wpb_widget', 

// Widget name will appear in UI
__('แสดงโปรโมชั่น Datahome', 'wpb_widget_domain'), 

// Widget description
array( 'description' => __( 'Datahome Display', 'wpb_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$num_list = apply_filters( 'widget_num_list', $instance['num_list'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
echo '<div class="list-group panel panel-primary"><div class="panel-heading text-left hidden-xs">';
if ( ! empty( $title ) )
echo '<h4>'. $title .'</h4>';
echo '</div>';

// This is where you run the code and display the output
//echo __( 'Hello, World!', 'wpb_widget_domain' );

 // mr. uthai insert (begin)  promotions

$type_wlist = 'promotions';
$args_wlist=array(
  'post_type' => $type_wlist,
  'post_status' => 'publish',
  'category'         => '2',
  'orderby'=> 'date',
  'order'=> 'DESC',
  'category_name'    => 'โครงการ',
  'posts_per_page' => $num_list);
$my_query = null;
$my_query = new WP_Query($args_wlist);
if( $my_query->have_posts() ) {
	echo '<div id="cat-navi">';
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <a class="list-group-item hidden-xs" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><i class="icon-leaf"><span class="mleft"><?php the_title(); ?></span></i></a>
    <?php
  endwhile;
  	echo '</div>';
}
wp_reset_query();  // Restore global post data stomped by the_post().


// mr. uthai insert (end)

echo '</div>';
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
$num_list = $instance[ 'num_list' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />

<label for="<?php echo $this->get_field_id( 'num_list' ); ?>"><?php _e( 'แสดง :' ); ?></label> 

<input class="widefat" id="<?php echo $this->get_field_id( 'num_list' ); ?>" name="<?php echo $this->get_field_name( 'num_list' ); ?>" type="text" value="<?php echo esc_attr( $num_list ); ?>" />

</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['num_list'] = ( ! empty( $new_instance['num_list'] ) ) ? strip_tags( $new_instance['num_list'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
?>