<!-- /* Template Name: FAQ */ -->

<?php 
  get_header();  
 
  /* Get the field variable */  
  $faq_page_title = get_field('faq_page_title'); 
  $faq_page_caption = get_field('faq_page_caption'); 
  $faq_form_title = get_field('faq_form_title'); 
  $faq_form_caption = get_field('faq_form_caption');
?>
        
         <!-- Faq Area  -->
         <div class="faq-area-bg pt-100 pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span><?php the_title(); ?></span>
                    <h2><?=$faq_page_title?></h2>
                    <p>
                        <?=$faq_page_caption?>
                    </p>
                </div>
                <div class="row align-items-center pt-45">
                    <!-- Row 1 -->
                    <div class="col-lg-6">
                        <div class="faq-accordion faq-accordion-width">
                            <ul class="accordion">
                                <?php  if(have_rows('faqs_row_1')):    
                                            while (have_rows('faqs_row_1')): the_row();
                                            $faq = get_sub_field('faq');
                                            $faq_answer = get_sub_field('faq_answer');
                                    ?>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            <?=$faq?> 
                                        </a>
        
                                        <div class="accordion-content">
                                            <p> 
                                                <?=$faq_answer?>
                                            </p>
                                        </div>
                                    </li>
                                <?php endwhile; endif; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="col-lg-6">
                        <div class="faq-accordion faq-accordion-width">
                            <ul class="accordion">
                                <?php  if(have_rows('faqs_row_2')):    
                                            while (have_rows('faqs_row_2')): the_row();
                                            $faq = get_sub_field('faq');
                                            $faq_answer = get_sub_field('faq_answer');
                                    ?>
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            <?=$faq?> 
                                        </a>
        
                                        <div class="accordion-content">
                                            <p> 
                                                <?=$faq_answer?>
                                            </p>
                                        </div>
                                    </li>
                                <?php endwhile; endif; ?>
                            </ul>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <!-- Faq Area End -->

         <!-- Contact Section -->
         <section class="contact-section pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span><?php the_title(); ?></span>
                    <h2><?=$faq_form_title?></h2>
                    <p>
                        <?=$faq_form_caption?>
                    </p>
                </div>
                <div class="contact-wrap pt-45">
                   <div class="contact-wrap-form">
                        <!-- <form id="contactForm"> -->
                            <?php echo do_shortcode( '[contact-form-7 id="338" title="FAQ Form"]' ); ?>
                           <!--  <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 text-center">
                                    <button type="submit" class="default-btn page-btn text-center">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div> -->
                        <!-- </form> -->
                   </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->

<?php get_footer(); ?>