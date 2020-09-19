<?php

      function jp_enqueue_styles() {
        wp_enqueue_style('style', get_template_directory_uri().'/assets/css/custom.css' );

      }
      add_action( 'wp_enqueue_scripts', 'jp_enqueue_styles' ); 


    /* ======= Menus ========*/
      // Activate Menu Support
      if (function_exists('add_theme_support')) {
         add_theme_support('menus');
      }

      // This adds more than one menu location
      function jp_menus() {
         register_nav_menus(
         array(
            // 'footer-menu' => __( 'Footer Menu' ),
            'main-menu' => __( 'Main Menu' )
            )
         );
      }
      add_action( 'init', 'jp_menus' );
  	/* ======= Menus ========*/

	  	/**
	 * Register Custom Navigation Walker
	 */
	function register_navwalker(){
		require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';
	}
	add_action( 'after_setup_theme', 'register_navwalker' );


  function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        // 'thumbnail_image_width' => 150,
        // 'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 2,
            'min_rows'        => 2,
            'max_rows'        => 4,
            'default_columns' => 3,
            'min_columns'     => 2,
            'max_columns'     => 3,
        ),
    ) );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
// add_filter( 'woocommerce_enqueue_styles', '__return_false' );
// add_theme_support( 'wc-product-gallery-zoom' );
// add_theme_support( 'wc-product-gallery-lightbox' );
// add_theme_support( 'wc-product-gallery-slider' );

// add_action( 'after_setup_theme', 'woocommerce_support' );
// function woocommerce_support() {
// add_theme_support( 'woocommerce' );
// }

// remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
// remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
// add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

// function my_theme_wrapper_start() {
//     echo '<div class="col-lg-4 col-md-6">';
// }

// function my_theme_wrapper_end() {
//     echo '</div>';
// }

// function mytheme_add_woocommerce_support() {
// add_theme_support( 'woocommerce' );
// }
// add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
// add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// add_action( 'woocommerce_before_checkout_form', 'checkout_message' );
// function checkout_message() {
// echo '<p>Please fill all required fields. Thank you!</p>';
// }

remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);


function woocommerce_template_product_description() {
  woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
?>