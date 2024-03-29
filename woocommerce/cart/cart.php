<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>
<!-- Start Cart Area -->
<section class="cart-wraps-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
							<div class="cart-wraps">
								<div class="cart-table table-responsive">
								<?php do_action( 'woocommerce_before_cart_table' ); ?> 
									<table class="table table-bordered">
										<thead>
											<tr>
												<!-- <th scope="col">Product</th>
												<th scope="col">Name</th>
												<th scope="col">Unit Price</th>
												<th scope="col">Quantity</th>
												<th scope="col">Total</th> -->
												<!-- <th scope="col" class="product-remove">&nbsp;</th>
												<th scope="col" class="product-thumbnail">&nbsp;</th> -->
												<th scope="col"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
												<th scope="col"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
												<th scope="col"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
												<th scope="col"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
												<th scope="col" class="product-remove">&nbsp;</th>
												<th scope="col" class="product-thumbnail">&nbsp;</th>
											</tr>
										</thead>

										<tbody>
										<?php do_action( 'woocommerce_before_cart_contents' ); ?>

										<?php
											foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
												$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
												$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

												if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
													$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
												?>
											<!-- <tr> -->
											<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
											<td class="product-thumbnail">
						<?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
						?>
						</td>

						<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}

						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?>
						</td>
                                                
												<td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
													<span class="unit-amount"><?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?></span>
												</td>

												<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
													<div class="input-counter">
														<span class="minus-btn">
															<i class='bx bx-minus'></i>
														</span>
														<?php
						if ( $_product->is_sold_individually() ) {
							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
						} else {
							$product_quantity = woocommerce_quantity_input(
								array(
									'input_name'   => "cart[{$cart_item_key}][qty]",
									'input_value'  => $cart_item['quantity'],
									'max_value'    => $_product->get_max_purchase_quantity(),
									'min_value'    => '0',
									'product_name' => $_product->get_name(),
								),
								$_product,
								false
							);
						}

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
														<span class="plus-btn">
															<i class='bx bx-plus'></i>
														</span>
													</div>
												</td>

												<td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
													<span class="subtotal-amount"><?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?></span>

								<?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										esc_html__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?>
												</td>
											</tr>
					<?php
				}
			}
			?>

										</tbody>
									</table>
								</div>
								<?php do_action( 'woocommerce_cart_contents' ); ?>
								<div class="cart-buttons">
									<div class="row align-items-center">
										<div class="col-lg-7 col-sm-7 col-md-7">
											<div class="continue-shopping-box">
												<a href="#" class="default-btn">
													Continue Shopping
												</a>
											</div>
										</div>

										<div class="col-lg-5 col-sm-5 col-md-5 text-right">
											<a href="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>" class=" default-btn">
											<?php esc_html_e( 'Update cart', 'woocommerce' ); ?>
											</a>
										</div>
									</div>
								</div>
                            </div>
                            
							<div class="row">
								<!-- <div class="col-lg-6">
									<div class="cart-calc">
										<div class="cart-wraps-form"> 
											<h3>Calculate Shipping</h3>
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group">
														<select>
															<option value="">Credit Card Type</option>
															<option value="">Another option</option>
															<option value="">A option</option>
														</select>	
													</div>
                                                </div>
												<div class="form-group col-lg-6">
													<input type="text" class="form-control" placeholder="Credit Card Number">
												</div>
												<div class="form-group col-12">
													<input type="text" class="form-control" placeholder="Card Verification Number">
												</div>
											</div>
											<?php if ( wc_coupons_enabled() ) { ?>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>">
											</div>
											<a href="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>" class="default-btn">
											<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>
											</a>
											<?php } ?>
										</div>
									</div>
                                </div> -->
                                
								<div class="col-lg-6">
									<div class="cart-totals">
										<h3>Cart Totals</h3>
										<ul>
											<li>Subtotal <span>$150.00</span></li>
											<li>Shipping <span>$30.00</span></li>
											<li>Coupon <span>$20.00</span></li>
											<li>Total <span><b>$160.00</b></span></li>
										</ul>
										<a href="#" class="default-btn">
											Proceed To Checkout
										</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- End Cart Area -->

<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

<div class="cart-collaterals">
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action( 'woocommerce_cart_collaterals' );
	?>
</div>

<?php do_action( 'woocommerce_after_cart' ); ?>