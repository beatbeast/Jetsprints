<!-- /* Template Name: About JetsPrints */ -->

<?php 
  get_header();  
 
  /* Get the field variable */  
  $about_section_title = get_field('about_section_title'); 
  $about_image_1 = get_field('about_image_1'); 
  $about_image_2 = get_field('about_image_2'); 
  $about_title = get_field('about_title'); 
  $about_synopsis = get_field('about_synopsis');
  $cta_label = get_field('cta_label'); 
  $cta_link = get_field('cta_link'); 
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

        <!-- About Area -->
        <div class="about-area pt-100 pb-70">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="<?=$about_image_1?>" alt="">
                            <div class="about-bg-shape">
                                <img src="<?=$about_image_2?>" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="about-content">
                            <span><?=$about_section_title?></span>
                            <h2><?=$about_title?></h2>
                            <p><?=$about_synopsis?></p>
                            <div class="about-btn">
                                <a href="<?=$cta_link?>" class="know-more-btn"><?=$cta_label?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->
        
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

        <!-- Designer Area -->
        <!-- <div class="designer-area pt-100 pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span>Our Designer</span>
                    <h2>Our Company Leads by Professional Designer</h2>
                    <p>
                        What indication best sick be project proposal in attempt, train of the showed
                        some a forth. That homeless, won't many of goals thoughts volumes felt.
                    </p>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-3 col-sm-6">
                        <div class="designer-card">
                            <div class="designer-img">
                                <a href="designer.html">
                                    <img src="assets/img/designer/1.jpg" alt="Designer Images">
                                </a>
                            </div>
                            <div class="designer-content">
                                <a href="designer.html">
                                    <h3>John Doe</h3>
                                </a>
                                <span>Director</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-instagram' ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="designer-card">
                            <div class="designer-img">
                                <a href="designer.html">
                                    <img src="assets/img/designer/2.jpg" alt="Designer Images">
                                </a>
                            </div>
                            <div class="designer-content">
                                <a href="designer.html">
                                    <h3>John Smith</h3>
                                </a>
                                <span>Product Designer</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-instagram' ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="designer-card">
                            <div class="designer-img">
                                <a href="designer.html">
                                    <img src="assets/img/designer/3.jpg" alt="Designer Images">
                                </a>
                            </div>
                            <div class="designer-content">
                                <a href="designer.html">
                                    <h3>Evanaa</h3>
                                </a>
                                <span>llustrator Designer</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-instagram' ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="designer-card">
                            <div class="designer-img">
                                <a href="designer.html">
                                    <img src="assets/img/designer/4.jpg" alt="Designer Images">
                                </a>
                            </div>
                            <div class="designer-content">
                                <a href="designer.html">
                                    <h3>Knot Doe</h3>
                                </a>
                                <span>Mockup Specialist</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" >
                                                <i class='bx bxl-instagram' ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Designer Area End -->
        
<?php get_footer(); ?>