<?php
// WooCommerce Functions

//Removes WooCommerce default CSS
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Removes WooCommerce default hooks
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

function benites_reeds_wrapper_start() {
    echo '<main>';
}
add_action('woocommerce_before_main_content', 'benites_reeds_wrapper_start', 10);
function benites_reeds_wrapper_end() {
    echo '</main>';
}
add_action('woocommerce_after_main_content', 'benites_reeds_wrapper_end', 10);

function benites_reeds_add_woocommerce_support() {
  add_theme_support( 'woocommerce', array(
      'thumbnail_image_width' => 150,
      'single_image_width'    => 300,

      'product_grid'          => array(
          'default_rows'    => 3,
          'min_rows'        => 2,
          'max_rows'        => 8,
          'default_columns' => 4,
          'min_columns'     => 2,
          'max_columns'     => 5,
      ),
  ) );
}

add_action( 'after_setup_theme', 'benites_reeds_add_woocommerce_support' );