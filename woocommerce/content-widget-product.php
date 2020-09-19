<?php
/**
 * The template for displaying product widget entries.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! is_a( $product, 'WC_Product' ) ) {
	return;
}

global $woocommerce;
$cart_url = $woocommerce->cart->get_cart_url();

?>
<div class="col-lg-4 col-md-6">
	<?php do_action( 'woocommerce_widget_product_item_start', $args ); ?>
	    <div class="product-card">
	        <a href="<?php echo esc_url( $product->get_permalink() ); ?>">
	            <img src="<?php echo $product->get_image(); // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="Products Images">
	        </a>
	        <div class="product-content">
	            <a href="<?php echo esc_url( $product->get_permalink() ); ?>">
	                <h3><?php echo wp_kses_post( $product->get_name() ); ?></h3>
	            </a>
	            <p><span><?php echo $product->get_price_html(); // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span> +vat</p>
	            <div class="product-cart">
	                <ul>
	                    <li>
	                        <a href="#">
	                            <i class='bx bx-heart'></i>
	                        </a>
	                    </li>
	                    <li>
	                        <a href="<?=$cart_url ; ?>">
	                            <i class='bx bx-cart'></i>
	                        </a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
    <?php do_action( 'woocommerce_widget_product_item_end', $args ); ?>
</div>