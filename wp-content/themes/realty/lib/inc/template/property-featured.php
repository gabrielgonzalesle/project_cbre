<?php
/* QUERY PROPERTIES
============================== */
global $wp_query;
if ( is_author() ) {
	$author = get_user_by( 'slug', get_query_var( 'author_name' ) );
	$property_args = array(
		'post_type' 				=> 'property',
		'posts_per_page' 		=> -1,
		'order'            => 'DESC',
		'author'						=> $author->ID,
		
	);
}
else {
	
	
	$listing_style = '';
	$columns = get_query_var('featured_columns');
	$listing_style = get_query_var('featured_listing_style');
	$location = get_query_var('featured_location');
	$status = get_query_var('featured_status');
	$type = get_query_var('featured_type');
	$features = get_query_var('featured_features');
	$tax_query = array();
	
	if ( $location ) {
		$tax_query[]	= array(
			'taxonomy' 	=> 'property-location',
			'field' 		=> 'slug',
			'terms'			=> $location
		);
	}
	
	if ( $status ) {
		$tax_query[]	= array(
			'taxonomy' 	=> 'property-status',
			'field' 		=> 'slug',
			'terms'			=> $status
		);
	}
	
	if ( $type ) {
		$tax_query[]	= array(
			'taxonomy' 	=> 'property-type',
			'field' 		=> 'slug',
			'terms'			=> $type
		);
	}
	
	if ( $features ) {
		$tax_query[]	= array(
			'taxonomy' 	=> 'property-features',
			'field' 		=> 'slug',
			'terms'			=> explode( ',', $features ),
			'operator'	=> 'AND'
		);
	}
	
	// Count Taxonomy Queries + set their relation for search query
	$tax_count = count( $tax_query );
	if ( $tax_count > 1 ) {
		$tax_query['relation'] = 'AND';
	}
	$property_args = array(
		'post_type' 				=> 'property',
		'posts_per_page' 		=> get_query_var('posts_per_page'),
		'orderby'          => 'date',
	    'order'            => get_query_var('order'),
		'meta_query' 				=> array(
			array(
				'key'	  	=> 'estate_property_featured',
				'value'	  	=> '1',
				'compare' => 'LIKE'
			),
		),
		'tax_query' => $tax_query,
	);
}

$query_property = new WP_Query( $property_args );
if ( $query_property->have_posts() ) : 

// On author page use two column carousel. All other carousel column counts are set via shortcode.
if ( is_author() ) {
	echo '<h3 class="section-title"><span>' . __( 'My Listings', 'tt' ) . '</span></h3>';
	echo '<div class="owl-carousel-2">';
}
if( $listing_style == 'normal' ) { 

   echo '<ul class="row list-unstyled">';

}
while ( $query_property->have_posts() ) : $query_property->the_post();
$property_location = get_the_terms( $post->ID, 'property-location' );
$property_status = get_the_terms( $post->ID, 'property-status' );
$property_type = get_the_terms( $post->ID, 'property-type' );
if ( $property_type || $property_status || $property_location ) {	
	$no_property_details = false;
}
else {
	$no_property_details = true;	
}
if( $listing_style == 'normal' ) {
	
	if ( isset( $columns ) && $columns == "1" ) {
		
		echo '<li class="col-md-12">';
	}
	else if ( isset( $columns ) && $columns == "2" ) {
		
		echo '<li class="col-md-6">';
	}
	else if ( isset( $columns ) && $columns == "3" ) {
		
		echo '<li class="col-lg-4 col-md-6">';
	}
	else if ( isset( $columns ) && $columns == "4" ) {
		
		echo '<li class="col-lg-3 col-md-6">';
	}
	else {
		
		echo '<li class="col-md-6">';
		
	}
}
get_template_part( 'lib/inc/template/property-item' );
if( $listing_style == 'normal' ) {

echo '</li>';

}
endwhile;
?>
</div><!-- .owl-carousel -->
<?php
wp_reset_query();
endif;