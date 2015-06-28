<?php 
// Creating the widget 
class data_onpro_widget extends WP_Widget {
  function __construct() {
    parent::__construct('data_onpro_widget', 
    __('ON PROMOTION', 'data_onpro_widget'), 
    array( 'description' => __( 'Datahome On Promotion Display', 'data_onpro_widget' ), ) );
  }

  public function widget( $args, $instance )
  {
      $title = apply_filters( 'widget_title', $instance['title'] );
      $num_list = apply_filters( 'widget_num_list', $instance['num_list'] );
      echo '<div class="list-group panel panel-primary promotion-home">';
      echo $args['before_widget'];
      if ( ! empty( $title ) )
      echo  '<div class="panel-heading text-left hidden-xs "><h4>โปรโมชั่น  <span class="sname"> | '.$title.'</span></h4></div>';
        $type_wlist = 'promotions';
        $args_wlist=array(
          'post_type' => $type_wlist,
          'post_status' => 'publish',
          'category'=> '2',
          'orderby'=> 'date',
          'order'=> 'DESC',
          'category_name'=> 'โปรโมชั่น',
          'posts_per_page' => $num_list);
        $my_query = null;
        $my_query = new WP_Query($args_wlist);
        if( $my_query->have_posts() ) {
          echo '<div id="cat-navi">';
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <a class="list-group-item hidden-xs" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><i class="icon-gift"></i> | <?php the_title(); ?></a>
    <?php
  endwhile;
    ?>
    <div class="panel-footer">
              <hr class="margin-0"><a href="#" class="btn"><i class="icon-list-alt"> โปรโมชั่นทั้งหมด</i></a>
    </div>
    <?php
    echo '</div></div>';
}
wp_reset_query();  // Restore global post data stomped by the_post().


// mr. uthai insert (end)
      echo $args['after_widget'];
      
  }
  		

  public function form( $instance )
  { 
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
      $num_list = $instance[ 'num_list' ];
      }
      else {
      $title = __( 'New title', 'wpb_widget_domain' );
    }
    ?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />

<label for="<?php echo $this->get_field_id( 'num_list' ); ?>"><?php _e( 'แสดง :' ); ?></label> 

<input class="widefat" id="<?php echo $this->get_field_id( 'num_list' ); ?>" name="<?php echo $this->get_field_name( 'num_list' ); ?>" type="text" value="<?php echo esc_attr( $num_list ); ?>" />

</p>
<?php 
  }
  	

  public function update( $new_instance, $old_instance )
  {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['num_list'] = ( ! empty( $new_instance['num_list'] ) ) ? strip_tags( $new_instance['num_list'] ) : '';
    return $instance;
  }

} 
// Class data_port_widget ends here

// Register and load the widget
function load_data_onpro_widget() {register_widget( 'data_onpro_widget' );}
add_action( 'widgets_init', 'load_data_onpro_widget' );
?>