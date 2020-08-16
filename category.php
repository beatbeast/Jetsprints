<?php get_header(); ?>


        <!-- Service Area -->
        <section class="service-area pt-100 pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span><h2><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h2></span>
                    <!-- <h2>Pixis Provide Good Quality Printing Services</h2> -->
                    <p>
                        <?php echo category_description(1); ?>
                    </p>
                </div>
                <?php 
                    // Check if there are any products to display
                    //woocommerce_content(); 
                ?>
 
                <div class="row pt-45">
                    <?php 
                        // The Loop
                        while ( have_posts() ) : the_post(); 
                        $post_featured_image = get_field('post_featured_image');
                        $post_caption = get_field('post_caption');
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <a href="<?php the_permalink() ?>">
                                <img src="<?=$post_featured_image?>" alt="">
                            </a>
                            <div class="service-content">
                                <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
                                <p><?=$post_caption?></p>
                                <a href="<?php the_permalink() ?>" class="more-btn">
                                    <i class='bx bx-plus'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
 
                    <?php //else: ?>

                    <!-- <p>Sorry, no posts matched your criteria.</p> -->

                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <a href="services.html">
                                <img src="assets/img/service/2.jpg" alt="Service Images">
                            </a>
                            <div class="service-content">
                                <a href="services.html"><h3>Package Design</h3></a>
                                <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit, sed do eiusmo gd  tempor incididunt ut labore.</p>
                                <a href="services.html" class="more-btn">
                                    <i class='bx bx-plus'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <a href="services.html">
                                <img src="assets/img/service/3.jpg" alt="Service Images">
                            </a>
                            <div class="service-content">
                                <a href="services.html"><h3>Pattern Design</h3></a>
                                <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit, sed do eiusmo gd  tempor incididunt ut labore.</p>
                                <a href="services.html" class="more-btn">
                                    <i class='bx bx-plus'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <a href="services.html">
                                <img src="assets/img/service/4.jpg" alt="Service Images">
                            </a>
                            <div class="service-content">
                                <a href="services.html"><h3>Book Cover</h3></a>
                                <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit, sed do eiusmo gd  tempor incididunt ut labore.</p>
                                <a href="services.html" class="more-btn">
                                    <i class='bx bx-plus'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <a href="services.html">
                                <img src="assets/img/service/5.jpg" alt="Service Images">
                            </a>
                            <div class="service-content">
                                <a href="services.html"><h3>T-shirt Design</h3></a>
                                <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit, sed do eiusmo gd  tempor incididunt ut labore.</p>
                                <a href="services.html" class="more-btn">
                                    <i class='bx bx-plus'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <a href="services.html">
                                <img src="assets/img/service/6.jpg" alt="Service Images">
                            </a>
                            <div class="service-content">
                                <a href="services.html"><h3>Brochure Design</h3></a>
                                <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit, sed do eiusmo gd  tempor incididunt ut labore.</p>
                                <a href="services.html" class="more-btn">
                                    <i class='bx bx-plus'></i>
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div> 
                <?php //endif; ?>
            </div>
        </section>
        <!-- Service Area End -->


        
<?php get_footer(); ?>