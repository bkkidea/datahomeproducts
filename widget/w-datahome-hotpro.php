<?php 
// Creating the widget 
class data_hotpro_widget extends WP_Widget {
  function __construct() {
    parent::__construct('data_hotpro_widget', 
    __('HOT PROMOTION', 'data_hotpro_widget'), 
    array( 'description' => __( 'Datahome Port Display', 'data_hotpro_widget' ), ) );
  }

  public function widget( $args, $instance )
  {
      $title = apply_filters( 'widget_title', $instance['title'] );
      $num_list = apply_filters( 'widget_num_list', $instance['num_list'] );
      echo '<div class="list-group panel panel-default hot-promotion">';
      echo $args['before_widget'];
      if ( ! empty( $title ) )
      echo  '<div class="panel-heading padding-0 "><h4>'.$title.'</h4></div>';
        
        $type_port = 'promotions';
        $args_portt=array(
          'post_type' => $type_port,
          'meta_key' => 'pro_hot',
          'meta_value' => 'hot',
          'post_status' => 'publish',
          'orderby'=> 'date',
          'order'=> 'DESC',
          'posts_per_page' => $num_list);
        $my_query = null;
        $my_query = new WP_Query($args_portt);
        
        if( $my_query->have_posts() ):
            echo '<div class="panel-body padding-0 thumbnail">';
            while ($my_query->have_posts()) : 
              $my_query->the_post();
              $g_id=get_the_ID();
              echo '<a href="';the_permalink();echo '" title="Permanent Link to';the_title_attribute();echo '">';
              echo get_the_post_thumbnail( $g_id, 'thumbnail',array('class'=>'img-responsive'));
              echo '<div class="caption"><h5>';the_title();echo '</h5></div>';
              echo 'ปกติ : <span class="price"> <strike>'.get_post_meta($g_id,'regular_price', true).' </strike>บาท</span> | ';
              echo 'เหลือ : <span class="price2">'.get_post_meta($g_id,'sale_price', true).'</span> บาท';
              echo '</a>';
            endwhile;
            echo '</div>';
        endif;
      echo '</div>';
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
function hotpro_load_widget() {register_widget( 'data_hotpro_widget' );}
add_action( 'widgets_init', 'hotpro_load_widget' );
?>