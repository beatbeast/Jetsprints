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
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,

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
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

?>