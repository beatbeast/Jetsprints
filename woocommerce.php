<?php  get_header();
if ( !is_shop()) {
     woocommerce_content();
} else {
?>

<!-- Inner Banner -->
<div class="inner-banner inner-bg7">
    <div class="container">
        <div class="inner-title">
            <h3>Shop</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <i class='bx bxs-chevrons-right'></i>
                </li>
                <li>Shop</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Product Area -->
<section class="product-area pt-100 pb-70">
    <div class="container">
        <div class="scetion-title text-center">
            <span>Product</span>
            <h2>We Have Some Pre-ready Demo Product</h2>
            <p>
                What indication best sick be project proposal in attempt, train of the showed
                some a forth. That homeless, won't many of goals thoughts volumes felt.
            </p>
        </div>
        <div class="row pt-45">
            <?php
                // Define custom query parameters
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 6,
                    'paged'          => $paged
                    );
                $counter = 1;
                $loop = new WP_Query( $args );

                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <?php
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );
                        $regular_price = get_post_meta( get_the_ID(), '_regular_price', true);
                        $sale_price = get_post_meta( get_the_ID(), '_sale_price', true);
                        $terms = get_the_terms( $post->ID, 'product_cat' );
                        foreach ($terms as $term) {
                            $product_cat_name = $term->name;
                            $product_cat_id = $term->term_id;
                            break;
                        }
                        ?>
                    <a href="<?php echo get_permalink() ?>">
                        <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" alt="Products Images">
                    </a>
                    <div class="product-content">
                        <a href="<?php echo get_permalink() ?>">
                            <h3><?php the_title() ?></h3>
                        </a>
                        <p>
                            <?php if($sale_price) {
                            ?>
                            <span><del><?php echo "N" . $regular_price; ?></del></span>
                            <?php
                            }
                            ?>
                            <span>
                            <?php
                            echo "N";
                            echo  ($sale_price) ? $sale_price : $regular_price;
                            ?></span>
                        </p>
                        <div class="product-cart">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_permalink(wc_get_page_id( 'cart' ))  . "?add-to-cart=" .  get_the_ID() ; ?>" data-toggle="tooltip" data-placement="left" title="Add to cart">
                                        <i class='bx bx-cart'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                if ($counter % 3 == 0) {
                ?>
                    </div>
                    <!--Grid row-->
                    <!--Grid dynamic row-->
                    <div class="row wow fadeIn">
                <?php
                }
                $counter++;
                endwhile;
                } else {
                    echo __( 'No products found' );
                }
                // Custom query loop pagination

                ?>

            <!-- Pagination Area -->
            <div class="col-lg-12">
                <div class="pagination-area">
                    <nav aria-label="Page navigation example text-center">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link page-links" href="#">
                                    <i class='bx bx-chevrons-left'></i>
                                </a>
                            </li>
                            <li class="page-item current">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class='bx bx-chevrons-right'></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Pagination Area End -->
        </div>
    </div>
</section>
<!-- Product Area End -->


<?php
} // end else (if single-product)
get_footer();
?>