<?php 
  get_header();  
 
  /* Get the field variable */ 
  $product_images = get_field('product_images'); 
  $reasons_section_title = get_field('reasons_section_title'); 
  $reason_section_caption = get_field('reason_section_caption'); 
  $section_synopsis = get_field('section_synopsis'); 
  $services_section_title = get_field('services_section_title'); 
  $services_section_caption = get_field('services_section_caption'); 
  $services_section_synopsis = get_field('services_section_synopsis'); 
  $section_title = get_field('section_title'); 
  $section_image = get_field('section_image'); 
  $section_caption = get_field('section_caption'); 
  $section_content = get_field('section_content'); 
  $section_cta = get_field('section_cta'); 
  $designers_section_title = get_field('designers_section_title'); 
  $designers_section_caption = get_field('designers_section_caption');  
  $designers_section_content = get_field('designers_section_content'); 
  $testimonial_section_title = get_field('testimonial_section_title'); 
  $testimonial_section_caption = get_field('testimonial_section_caption');  
  $testimonial_section_synopsis = get_field('testimonial_section_synopsis'); 
?>
        <!-- Product Images -->
        <div class="product-images ptb-100">
            <div class="container">
            <?php 
                $images = get_field('product_images');
                if( $images ): ?>
                <div class="product-images-slider owl-carousel owl-theme">
                <?php foreach( $images as $image ): ?>
                    <div class="product-images-item">
                        <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                <?php endforeach; ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
        <!-- Product Images End -->
        
        <!-- Choose Area -->
        <section class="choose-area ptb-100 pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span><?=$reasons_section_title?></span>
                    <h2><?=$reason_section_caption?></h2>
                    <p><?=$section_synopsis?></p>
                </div>
                <?php  if(have_rows('reasons')): ?>
                <div class="row pt-45">
                    <?php   
                        while (have_rows('reasons')): the_row();
                        $reason = get_sub_field('reason'); 
                        $reason_icon = get_sub_field('reason_icon');                              
                    ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="choose-card">
                            <i class='<?=$reason_icon?>'></i>
                            <h3><?=$reason?></h3>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            </div>
        </section>
        <!-- Choose Area End -->

        <!-- Service Area -->
        <section class="service-area pt-100 pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span><?=$services_section_title?></span>
                    <h2><?=$services_section_caption?></h2>
                    <p><?=$services_section_synopsis?></p>
                </div>
                <?php  if(have_rows('services')): ?>
                <div class="row pt-45">
                    <?php   
                        while (have_rows('services')): the_row();
                        $service_image = get_sub_field('service_image');
                        $service_title = get_sub_field('service_title');
                        $service_caption = get_sub_field('service_caption');
                        $service_page_link = get_sub_field('service_page_link');                              
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <a href="<?=$service_page_link?>">
                                <img src="<?=$service_image?>" alt="">
                            </a>
                            <div class="service-content">
                                <a href="<?=$service_page_link?>"><h3><?=$service_title?></h3></a>
                                <p><?=$service_caption?></p>
                                <a href="<?=$service_page_link?>" class="more-btn">
                                    <i class='bx bx-plus'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            </div>
        </section>
        <!-- Service Area End -->

        <!-- About Area -->
        <!-- <div class="about-area pb-70">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="about-content about-width">
                            <span><?=$section_title?></span>
                            <h2><?=$section_caption?></h2>
                            <p><?=$section_content?></p>
                            <div class="about-btn">
                                <?php 
                                    $section_cta = get_field('section_cta');
                                    if( $section_cta ): 
                                    $section_cta_url = $section_cta['url'];
                                    $section_cta_title = $section_cta['title'];
                                    $section_cta_target = $section_cta['target'] ? $section_cta['target'] : '_self';
                                ?>
                                <a href="<?php echo esc_url( $section_cta_url ); ?>" class="know-more-btn"><?php echo esc_html( $section_cta_title ); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="about-img-2">
                            <img src="<?=$section_image?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- About Area End -->

        <!-- Product Area -->
        <!-- <section class="product-area pb-70">
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
                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="product-details.html">
                                <img src="assets/img/products/1.jpg" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="product-details.html">
                                    <h3>Package Design</h3>
                                </a>
                                <p><span>$29</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="product-details.html">
                                <img src="assets/img/products/2.jpg" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="product-details.html">
                                    <h3>T-shirt Design</h3>
                                </a>
                                <p><span>$20</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="product-details.html">
                                <img src="assets/img/products/3.jpg" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="product-details.html">
                                    <h3>Cover Van</h3>
                                </a>
                                <p><span>$30</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="product-details.html">
                                <img src="assets/img/products/4.jpg" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="product-details.html">
                                    <h3>Mug Design</h3>
                                </a>
                                <p><span>$10</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="product-details.html">
                                <img src="assets/img/products/5.jpg" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="product-details.html">
                                    <h3>Book Cover</h3>
                                </a>
                                <p><span>$15</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="product-details.html">
                                <img src="assets/img/products/6.jpg" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="product-details.html">
                                    <h3>Astronaut Cover</h3>
                                </a>
                                <p><span>$35</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-shape">
                <img src="assets/img/products/shape.png" alt="Products Shape">
            </div>
        </section> -->
        <!-- Product Area End -->

        <!-- Price Area -->
        <!--  <div class="price-area pb-70">
                <div class="container">
                    <div class="scetion-title text-center">
                        <span>Pricing Table</span>
                        <h2>We Have Pre-ready Pricing Plan for Our Services</h2>
                        <p>
                            It is a long established fact that a reader will be 
                            distracted by the readable content of a page when looking at its layout.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 pt-45">
                            <div class="tabs-item-list">
                                <ul id="tabs-item" class="text-center">
                                    <li class="active">
                                        <a href="#monthly" class="prices-tab">Monthly</a>
                                    </li> 
                                    <li>
                                        <a href="#yearly" class="prices-tab">Yearly</a>
                                    </li> 
                                </ul> 
                            </div>
                        </div>
                    </div>
                    <div id="prices-conten">
                        <div id="monthly" class="active prices-conten-area animated">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-price">
                                        <span>Basic Plan</span>
                                        <div class="single-price-title">
                                            <h2><sup>$</sup>30<sub>/month</sub></h2>
                                        </div>
                                        <ul>
                                            <li>Brand Identy</li>
                                            <li>Package Design</li>
                                            <li>Web Application</li>
                                            <li>Bill Board</li>
                                            <li class="color-gray"><del>Tshirt Design</del></li>
                                            <li class="color-gray"><del>Vector Art</del></li>
                                            <li class="color-gray"><del>Print Ready Source</del></li>
                                        </ul>
                                        <a href="#" class="get-btn">Get Stated</a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-price current">
                                        <span>Standard Plan</span>
                                        <div class="single-price-title">
                                            <h2><sup>$</sup>60<sub>/month</sub></h2>
                                        </div>
                                        <ul>
                                            <li>Brand Identy</li>
                                            <li>Package Design</li>
                                            <li>Web Application</li>
                                            <li>Bill Board</li>
                                            <li>Tshirt Design</li>
                                            <li class="color-gray"><del>Vector Art</del></li>
                                            <li class="color-gray"><del>Print Ready Source</del></li>
                                        </ul>
                                        <a href="#" class="get-btn">Get Stated</a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                    <div class="single-price">
                                        <span>Premium Plan</span>
                                        <div class="single-price-title">
                                            <h2><sup>$</sup>90<sub>/month</sub></h2>
                                        </div>
                                        <ul>
                                            <li>Brand Identy</li>
                                            <li>Package Design</li>
                                            <li>Web Application</li>
                                            <li>Bill Board</li>
                                            <li>Tshirt Design</li>
                                            <li>Vector Art</li>
                                            <li> Print Ready Source</li>
                                        </ul>
                                        <a href="#" class="get-btn">Get Stated</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="yearly" class="animated prices-conten-area">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-price">
                                        <span>Basic Plan</span>
                                        <div class="single-price-title">
                                            <h2><sup>$</sup>70<sub>/Year</sub></h2>
                                        </div>
                                        <ul>
                                            <li>Brand Identy</li>
                                            <li>Package Design</li>
                                            <li>Web Application</li>
                                            <li>Bill Board</li>
                                            <li class="color-gray"><del>Tshirt Design</del></li>
                                            <li class="color-gray"><del>Vector Art</del></li>
                                            <li class="color-gray"><del>Print Ready Source</del></li>
                                        </ul>
                                        <a href="#" class="get-btn">Get Stated</a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-price current">
                                        <span>Standard Plan</span>
                                        <div class="single-price-title">
                                            <h2><sup>$</sup>120<sub>/Year</sub></h2>
                                        </div>
                                        <ul>
                                            <li>Brand Identy</li>
                                            <li>Package Design</li>
                                            <li>Web Application</li>
                                            <li>Bill Board</li>
                                            <li>Tshirt Design</li>
                                            <li class="color-gray"><del>Vector Art</del></li>
                                            <li class="color-gray"><del>Print Ready Source</del></li>
                                        </ul>
                                        <a href="#" class="get-btn">Get Stated</a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                    <div class="single-price">
                                        <span>Premium Plan</span>
                                        <div class="single-price-title">
                                            <h2><sup>$</sup>170<sub>/Year</sub></h2>
                                        </div>
                                        <ul>
                                            <li>Brand Identy</li>
                                            <li>Package Design</li>
                                            <li>Web Application</li>
                                            <li>Bill Board</li>
                                            <li>Tshirt Design</li>
                                            <li>Vector Art</li>
                                            <li> Print Ready Source</li>
                                        </ul>
                                        <a href="#" class="get-btn">Get Stated</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- Price Area End -->

        <!-- Designer Area -->
        <!-- <div class="designer-area pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span><?=$designers_section_title?></span>
                    <h2><?=$designers_section_caption?></h2>
                    <p><?=$designers_section_content?></p>
                </div>
                <?php  if(have_rows('designers_cards')):  /* parent repeater */ ?>
                <div class="row pt-45">
                  <?php   
                     while (have_rows('designers_cards')): the_row(); /* parent repeater */
                     $designers_image = get_sub_field('designers_image');
                     $designers_profile = get_sub_field('designers_profile');  
                     $designers_name = get_sub_field('designers_name');
                     $designers_position = get_sub_field('designers_position');
                     $designers_social = get_sub_field('designers_social');                                 
                  ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="designer-card">
                            <div class="designer-img">
                                <a href="<?=$designers_profile?>">
                                    <img src="<?=$designers_image?>" alt="">
                                </a>
                            </div>
                            <div class="designer-content">
                                <a href="<?=$designers_profile?>">
                                    <h3><?=$designers_name?></h3>
                                </a>
                                <span><?=$designers_position?></span>
                                <?php if( have_rows('designers_social') ): ?>
                                <?php while( have_rows('designers_social') ): the_row(); 

                                    // Get sub field values.
                                    $facebook = get_sub_field('facebook');
                                    $twitter = get_sub_field('twitter');
                                    $instagram = get_sub_field('instagram');

                                    ?>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="<?=$facebook?>" target="_blank" >
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=$twitter?>" target="_blank" >
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=$instagram?>" target="_blank" >
                                                <i class='bx bxl-instagram' ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                  <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div> -->
        <!-- Designer Area End -->
        
        <!-- Testimonial Area Two -->
        <div class="testimonial-area-two ptb-100">
            <div class="container">
                <div class="scetion-title text-center">
                    <span><?=$testimonial_section_title?></span>
                    <h2 class="text-white"><?=$testimonial_section_caption?></h2>
                    <p class="text-white"><?=$testimonial_section_synopsis?></p>
                </div>
                <?php  if(have_rows('testimonials')):  /* parent repeater */ ?>
                <div class="testimonial-slider-two owl-carousel owl-theme pt-45">
                    <?php   
                     while (have_rows('testimonials')): the_row(); /* parent repeater */
                         $client_image = get_sub_field('client_image');
                         $image_exist = ($client_image == '')? get_bloginfo('template_directory').'/img/image-placeholder-for-website.jpg' : $banner_image;
                         $client_name = get_sub_field('client_name');
                         $client_testimonial = get_sub_field('client_testimonial');
                         $cta_label = get_sub_field('cta_label');
                         $cta_link = get_sub_field('cta_link');
                                                 
                    ?>
                        <div class="testimonial-card">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="testimonail-card-content">
                                        <h3 style="color: #fff;"><?=$client_name?></h3>
                                        <p><?=$client_testimonial?></p>
                                    </div>
                                </div>
            
                                <div class="col-lg-5">
                                    <div class="testimonial-img-2">
                                        <img src="<?php echo $client_image; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            </div>
            <div class="testimonial-icon">
                <i class='bx bxs-quote-alt-right'></i>
            </div>
        </div>
        <!-- Testimonial Area Two End -->
        
        <!-- Blog Area -->
        <!-- <div class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span>Blogs</span>
                    <h2>Our Regular Blog Post</h2>
                    <p>
                        What indication best sick be project proposal in attempt, train of the showed
                        some a forth. That homeless, won't many of goals thoughts volumes felt.
                    </p>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/1.jpg" alt="Blog Images">
                            </a>
                            
                            <div class="blog-content">
                                <a href="blog-details.html">
                                    <h3>Work Once Print 100+</h3>
                                </a>
                                <ul class="blog-admin">
                                    <li>
                                        <a href="#">
                                            <i class='bx bxs-user'></i>Admin
                                        </a>
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar-alt' ></i>
                                        18 May 2020
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit.</p>
                                <a href="blog-details.html" class="read-more-btn">Read More <i class='bx bxs-chevrons-right'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/2.jpg" alt="Blog Images">
                            </a>
                            
                            <div class="blog-content">
                                <a href="blog-details.html">
                                    <h3>Keep Your Print Great</h3>
                                </a>
                                <ul class="blog-admin">
                                    <li>
                                        <a href="#">
                                            <i class='bx bxs-user'></i>Admin
                                        </a>
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar-alt' ></i>
                                        18 May 2020
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit.</p>
                                <a href="blog-details.html" class="read-more-btn">Read More <i class='bx bxs-chevrons-right'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="blog-card">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/3.jpg" alt="Blog Images">
                            </a>
                            
                            <div class="blog-content">
                                <a href="blog-details.html">
                                    <h3>Digital Print is Science</h3>
                                </a>
                                <ul class="blog-admin">
                                    <li>
                                        <a href="#">
                                            <i class='bx bxs-user'></i>Admin
                                        </a>
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar-alt' ></i>
                                        18 May 2020
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit.</p>
                                <a href="blog-details.html" class="read-more-btn">Read More <i class='bx bxs-chevrons-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Blog Area End -->


<?php get_footer(); ?>