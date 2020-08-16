<!-- /* Template Name: Contact Page */ -->
<?php 

get_header(); 

    /*Definition of Variables */
    $page_title = get_field('page_title');
    $page_text = get_field('page_text');
    $page_caption = get_field('page_caption');
?>
        
        <!-- Contact Area End -->
        <div class="contact-area ptb-100">
            <div class="scetion-title text-center">
                <span><?=$page_title?></span>
                <h2><?=$page_text?></h2>
                <p><?=$page_caption?></p>
            </div>
            <div class="container">
                <div class="contact-wrap pt-45">
                    <div class="contact-wrap-form">                        
                            <?php echo do_shortcode( '[contact-form-7 id="339" title="Contact Us Form"]' ); ?>
                         <!-- <form id="contactForm"> -->
                             <!-- <div class="row">
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
        </div>
        <!-- Contact Area End -->
        
<?php get_footer(); ?>