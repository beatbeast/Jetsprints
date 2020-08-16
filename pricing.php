<!-- /* Template Name: Pricing */ -->

<?php
  get_header();

  /* Get the field variable */
  $pricing_page_title = get_field('pricing_page_title');
  $pricing_page_caption = get_field('pricing_page_caption');
  $notes_section_title = get_field('notes_section_title');
?>
        
        <!-- Price Area -->
        <div class="price-area pt-100 pb-20">
            <div class="container">
                <div class="scetion-title text-center">
                    <span>Pricing</span>
                    <h2><?=$pricing_page_title?></h2>
                    <p>
                        <?=$pricing_page_caption?>
                    </p>
                </div>

                <?php  if(have_rows('pricing_plan')): ?>
                <div class="row pt-45">

                    <?php    
                        while (have_rows('pricing_plan')): the_row();
                        $plan_name = get_sub_field('plan_name');                            
                        $currency = get_sub_field('currency');  
                        $price_amount = get_sub_field('price_amount'); 
                        $cta_label = get_sub_field('cta_label');                            
                        $cta_link = get_sub_field('cta_link');  
                        $is_plan_active = get_sub_field('is_plan_active');                          
                        $plan_duration = get_sub_field('plan_duration');              
                    ?>

                        <div class="col-lg-4 col-sm-6">
                            <?php if( $is_plan_active == 'active' ): ?>
                                <div class="single-price border-radius-5 current">
                            <?php else: ?>
                                <div class="single-price border-radius-5">
                            <?php endif; ?>     
                                <span><?=$plan_name?></span>                  
                                <div class="single-price-title">
                                    <h2><sup><?=$currency?></sup><?=$price_amount?><sub>/<?=$plan_duration?></sub></h2>
                                </div>
                                <ul>
                                    <?php  if(have_rows('plan_details')):    
                                            while (have_rows('plan_details')): the_row();
                                            $plan_component = get_sub_field('plan_component');
                                    ?>
                                        <li><?=$plan_component?></li> 
                                    <?php endwhile; endif; ?>
                                </ul>
                                <a href="<?=$cta_link?>" class="get-btn"><?=$cta_label?></a>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
        <!-- Price Area End -->

        <!-- Blog Dtls -->
        <div class="blog-dtls pt-10 ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-dtls-content">
                            <div class="blog-text">
                                <blockquote class="boxicon-quote">
									<p><?=$notes_section_title?>
                                        <ol>
                                            <?php  if(have_rows('notes')):    
                                                while (have_rows('notes')): the_row();
                                                $notes = get_sub_field('notes');
                                            ?>
                                                <li>
                                                    <?=$notes?>
                                                </li>
                                            <?php endwhile; endif; ?>
                                        </ol>
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Dtls End -->

<?php get_footer(); ?>