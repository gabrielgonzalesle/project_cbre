<?php
// Credits: http://buffercode.com/simple-method-create-custom-wordpress-widget-admin-dashboard/
// REGISTER WIDGET
function widget_featured_properties() {
	register_widget( 'widget_featured_properties' );
}
add_action( 'widgets_init', 'widget_featured_properties' );

class widget_featured_properties extends WP_Widget {

	// CONSTRUCT WIDGET
	function widget_featured_properties() {
		$widget_ops = array( 
			'classname' 	=> 'widget_featured_properties', 
			'description' => __( 'Featured Properties', 'tt' ),
			'panels_icon' => 'icon-themetrail',
		);
		parent::__construct( 'widget_featured_properties', __( 'Realty - Featured Properties', 'tt' ), $widget_ops );
	}
	
	// CREATE WIDGET FORM (WORDPRESS DASHBOARD)
  function form($instance) {
  
	  if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		} else {
			$title = __( 'Featured Properties', 'tt' );
		}
		
		if ( isset ( $instance[ 'amount' ] ) ) {
			$amount = $instance[ 'amount' ];
		} else {
			$amount = -1;
		}
		
		if ( isset ( $instance[ 'random' ] ) ) {
			$random = $instance[ 'random' ];
		} else {
			$random = false;
		}
		?>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'tt' ); ?></label> 
			<input name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title );?>" class="widefat" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'amount' ); ?>"><?php _e( 'Number of Properties to Display:', 'tt' ); ?></label>
			<input name="<?php echo $this->get_field_name( 'amount' ); ?>" type="number" min="-1" value="<?php echo esc_attr( $amount );?>" class="widefat" />
			<small><?php _e( 'Enter "-1" to show all', 'tt' ); ?></small>
		</p>
		
		<p>
			<input name="<?php echo $this->get_field_name( 'random' ); ?>" type="checkbox" <?php checked( $random, 'on' ); ?> />
			<label for="<?php echo $this->get_field_id( 'random' ); ?>"><?php _e( 'Instead of Newest First, Order Randomly', 'tt' ); ?></label> 
		</p>
		 
		<?php
		
  }

  // UPDATE WIDGET
  function update( $new_instance, $old_instance ) {
  	  
	  $instance = $old_instance;
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';		 
		$instance['amount'] = ( ! empty( $new_instance['amount'] ) ) ? strip_tags( $new_instance['amount'] ) : '';
		$instance['random'] = ( ! empty( $new_instance['random'] ) ) ? strip_tags( $new_instance['random'] ) : '';
		
		return $instance;
	  
  }

  // DISPLAY WIDGET ON FRONT END
  function widget( $args, $instance ) {
	  
	  extract( $args );
 
		// Widget starts to print information
		echo $before_widget;
		 
		$title = apply_filters( 'widget_title', $instance[ 'title' ] );	 
		$amount = empty( $instance[ 'amount' ] ) ? '3' : $instance[ 'amount' ];
		$amount = intval( $amount );
		$random = $instance[ 'random' ] ? true : false;
		 
		if ( !empty( $title ) ) { 
			echo $before_title . $title . $after_title; 
		};

		// Query Featured Properties
		$args_featured_properties = array(
			'post_type' 				=> 'property',
			'posts_per_page' 		=> $amount,
			'meta_query' 				=> array(
				array(
					'key'	  	=> 'estate_property_featured',
					'value'	  	=> '1',
					'compare' => 'LIKE'
			),
			)
		);
		
		// Order By:
		if ( $random ) {
			$args_featured_properties[ 'orderby' ] = 'rand';
		}
		
		$query_featured = new WP_Query( $args_featured_properties );
		if ( $query_featured->have_posts() ) :
		?>
		<div class="owl-carousel-1-nav">
			<?php
			while ( $query_featured->have_posts() ) : $query_featured->the_post();
			global $post;
			?>
			<div class="widget-container">
				<a href="<?php the_permalink(); ?>">
					<div class="widget-thumbnail">
						<?php 
						if ( has_post_thumbnail() ) { 
							the_post_thumbnail( 'thumbnail-400-300' );
						}	
						else {
							echo '<img src ="//placehold.it/400x300/eee/ccc/&text=.." />';
						}
						?>
					</div>
					
					<div class="widget-text">
						<?php the_title( '<h5 class="title">', '</h5>' ); ?>
						<div class="property-price"><?php echo tt_property_price(); ?></div>
					</div>
				</a>
			</div>
			<?php
			endwhile;
			?>
		</div>
		<?php
		wp_reset_query();
		endif;
		
		// Widget ends printing information
		echo $after_widget;
	  
  }
	
	

}