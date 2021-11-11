<?php

/**
 * Plugin Name:       adrianpajares.com - Hide Shipping if Free Shipping
 * Plugin URI:        https://adrianpajares.com/
 * Description:       Plugin to hide othe shipping method if free shipping is available.
 * Version:           1.0
 * Author:            adrianpajares.com
 * License:           MIT
 */

// Removes Order Notes Title

add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );

// Remove Order Notes Field

add_filter( 'woocommerce_checkout_fields' , 'njengah_order_notes' );

function njengah_order_notes( $fields ) {

  unset($fields['order']['order_comments']);

  return $fields;

}
