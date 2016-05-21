<?php 
/*
 * Plugin Name: Realty - Membership Packages And Invoices
 * Plugin URI: http://themetrail.com/docs/realty/#membership-packages
 * Description: Handles property membership packages and invoices.
 * Author: ThemeTrail
 * Version: 1.0
 * Author URI: http://themetrail.com
/* 
============================== */

//Register Memberships post type
if( !function_exists('tt_register_membership_post_type') ):
function tt_register_membership_post_type() {
		 $labels = array(
			    'name'                  => __( 'Memberships','tt'),
				'singular_name'         => __( 'Memberships','tt'),
				'add_new'               => __('Add New Package','tt'),
                'add_new_item'          =>  __('Add Packages','tt'),
                'edit'                  =>  __('Edit Packages' ,'tt'),
                'edit_item'             =>  __('Edit Package','tt'),
                'new_item'              =>  __('New Packages','tt'),
                'view'                  =>  __('View Package','tt'),
                'view_item'             =>  __('View Package','tt'),
                'search_items'          =>  __('Search Membership Packages','tt'),
                'not_found'             =>  __('No Membership Packages found','tt'),
                'not_found_in_trash'    =>  __('No Membership Packages found','tt'),
                'parent'                =>  __('Parent Membership Package','tt')
  		);
		
		 $args = array(
			'labels'             => $labels,
			'public'             => true,
			'has_archive'        => true,
			'publicly_queryable' => true,
	        'query_var' 		 => true,
	        'show_ui' 			 => true,
			'rewrite'            => array('slug' => __('package', 'tt')),
			'supports'           => array('title', 'editor'),
			'can_export'         => true,	
			'menu_position' 	 => 21,
			'menu_icon'          => 'dashicons-calendar',		
	  
          );
		  register_post_type( 'package', $args );
		
	
}
endif; // end 
add_action( 'init', 'tt_register_membership_post_type' );

//Register Invocies post type
if( !function_exists('tt_register_invoice_post_type') ):
function tt_register_invoice_post_type() {
		 $labels = array(
			    'name'                  => __( 'Invoices','tt'),
				'singular_name'         => __( 'Invoices','tt'),
				'add_new'               => __('Add New Invoice','tt'),
                'add_new_item'          =>  __('Add Invoices','tt'),
                'edit'                  =>  __('Edit Invoices' ,'tt'),
                'edit_item'             =>  __('Edit Invoice','tt'),
                'new_item'              =>  __('New Invoices','tt'),
                'view'                  =>  __('View Invoices','tt'),
                'view_item'             =>  __('View Invoices','tt'),
                'search_items'          =>  __('Search Invoices','tt'),
                'not_found'             =>  __('No Invoices found','tt'),
                'not_found_in_trash'    =>  __('No Invoices found','tt'),
                'parent'                =>  __('Parent Invoice','tt')
  		);
		
		 $args = array(
			'labels'             => $labels,
			'public'             => true,
			'has_archive'        => true,
			'publicly_queryable' => true,
	        'query_var' 		 => true,
	        'show_ui' 			 => true,
			'rewrite'            => array('slug' => 'invoice'),
			'supports'           => array('title'),
			'can_export'         => true,	
			'menu_position' 	 => 22,
			'menu_icon'          => 'dashicons-media-text',		
	  
          );
		  register_post_type( 'invoice', $args );
		
	
}
endif; // end 
add_action( 'init', 'tt_register_invoice_post_type' );

//Manage Clomuns

//Membership admin columns

function tt_package_columns( $package_columns ) {
  $package_columns = array(
      'cb' 				=> '<input type=\'checkbox\' />',
      'title' 		=> __( 'Package Title','tt' ),
      'active' 	=> __( 'Active','tt' ),
      'validperiod' 	=> __( 'Package Period','tt' ),
      'listings' 			=> __( 'Regular Listings','tt' ),
      'featuredlistings' 	=> __( 'Featured Listings','tt' ),
	  'packageprice' 		=> __( 'Price','tt' ),
	  'packageID' 		=> __( 'Package ID','tt' ),
  );
  return $package_columns;
}
add_filter('manage_edit-package_columns', 'tt_package_columns');

function tt_package_custom_columns( $package_column ) {
  
  global $post;
  
  switch ( $package_column ) {
    
    case 'active' :
	  if( get_post_meta( $post->ID, 'estate_if_package_active', true ) ) {
	  	_e( 'Yes', 'tt' );
	  }
	  else{
		_e( 'No', 'tt' );
	  }
      break;

    case 'validperiod' :
      $period = get_post_meta( $post->ID, 'estate_package_valid_renew', true );
	  $period_unit = get_post_meta( $post->ID, 'estate_package_period_unit', true );
	  if ( !empty( $period_unit  ) && !empty($period )){
			_e( $period. ' '.$period_unit , 'tt' );
	  }
      break;
    case 'listings' :
      $listings = get_post_meta( $post->ID, 'estate_package_allowed_listings', true );
	  if ( !empty( $listings) ) {
			_e( $listings, 'tt' );
	  }
	  break;
    case 'featuredlistings' :
      $featured= get_post_meta( $post->ID, 'estate_package_allowed_featured_listings', true );
	  if ( !empty( $featured) ) {
			_e( $featured, 'tt' );
	  }
	  break;
	case 'packageprice' :
      $price= get_post_meta( $post->ID, 'estate_package_price', true );
	  if ( !empty( $price) ) {
			_e( $price, 'tt' );
	  }
	  break;
	case 'packageID' :
      $package_id= get_post_meta( $post->ID, 'estate_package_stripe_id', true );
	  if ( !empty( $package_id) ) {
			_e( $package_id, 'tt' );
	  }
	  break;
  }
  
}
add_action('manage_package_posts_custom_column', 'tt_package_custom_columns');


// Invoice Columns

function tt_invoice_columns( $invoice_columns ) {
  $invoice_columns = array(
      'cb' 				=> '<input type=\'checkbox\' />',
      'title' 		=> __( 'Invoice Title','tt' ),
      'invoiceID' 	=> __( 'Invoice ID','tt' ),
      'userID' 	=> __( 'User ID','tt' ),
      'paymentmethod' 		=> __( 'Payment Method','tt' ),
      'amountpaid' 			=> __( 'Amount Paid','tt' ),
      'date' 	=> __( 'Invoice Date','tt' ),
  );
  return $invoice_columns;
}
add_filter('manage_edit-invoice_columns', 'tt_invoice_columns');

function tt_invoice_custom_columns( $invoice_column ) {
  
  global $post;
  
  switch ( $invoice_column ) {
    
    case 'invoiceID' :
		$invoice_id=get_post_meta( $post->ID, 'estate_invoice_id', true );
      if( $invoice_id) {
      	_e($invoice_id , 'tt' );
      }
      
      break;
    case 'userID' :
      $user_id = get_post_meta( $post->ID, 'estate_invoiced_user_id', true );
	  if ( !empty( $user_id ) ) {
			_e( $user_id, 'tt' );
	  }
      break;
    case 'paymentmethod' :
      $payment_method = get_post_meta( $post->ID, 'estate_invoice_payment_method', true );
	  if ( !empty( $payment_method) ) {
			_e( $payment_method, 'tt' );
	  }
	  break;
    case 'amountpaid' :
      $amount_paid= get_post_meta( $post->ID, 'estate_invoice_amount_paid', true );
	  if ( !empty( $amount_paid) ) {
			_e( $amount_paid, 'tt' );
	  }
	  break;
  }
  
}
add_action('manage_invoice_posts_custom_column', 'tt_invoice_custom_columns');