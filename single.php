<?php get_header(); 

	$pricing_table_title = get_field('pricing_table_title','option'); 
    $pricing_table_caption = get_field('pricing_table_caption','option');

?>

        <!-- Service Dtls -->
        <div class="service-dtls pt-100 pb-70">
        	<?php
                $post_content = get_field('post_content');
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                	<?php  if(have_rows('post_images')): ?>
                        <div class="service-dtls-slider  owl-carousel owl-theme">
                        	<?php   
			                     while (have_rows('post_images')): the_row(); /* parent repeater */
			                         $post_image = get_sub_field('post_image');
			                                                 
			                ?>
                            <div class="service-dtls-item">
                                <img src="<?=$post_image ?>" alt="">
                            </div>
                        <?php endwhile; ?>
                            <!-- <div class="service-dtls-item">
                                <img src="assets/img/service/dtls2.jpg" alt="Images">
                            </div>
                            <div class="service-dtls-item">
                                <img src="assets/img/service/dtls3.jpg" alt="Images">
                            </div> -->
                        </div>
                    <?php endif; ?>

                        <div class="service-dtls-title">
                            <h3><?php the_title(); ?></h3>
                            <p>
                                <?=$post_content ?> 
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="service-sidebar">
                            <div class="service-sidebar-widget">
                                <!-- <h3>More Services</h3> -->
                                <h3>More <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h3>
								 <ul> 
                                <?php 
		                             //the_query
		                            $the_query = new WP_QUERY( array(
		                            'cat' => 1,
		                            'posts_per_page' => 6,
		                            ));
		                            if ( $the_query->have_posts() ) :
		                            while ( $the_query->have_posts() ) : $the_query->the_post();
		                                    $image = get_field('featured_image');
	                            ?> 
								        <li>
								        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								        </li> 
								        <?php endwhile; wp_reset_postdata(); ?>
                            <?php endif; ?>
                                </ul>
                            </div>


                            <?php 
	                            $column_title = get_field('column_title', 'option');
	                            $telephone_1 = get_field('telephone_1', 'option');
	                            $telephone_2 = get_field('telephone_2', 'option');
	                            $email_1 = get_field('e-mail_1', 'option');
	                            $email_2 = get_field('e-mail_2', 'option');
	                            $address = get_field('address', 'option');
	                        ?> 
                            <div class="service-sidebar-widget">
                                <h3><?=$column_title?></h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                        <?=$address?>
                                    </li>
                                    <li>
                                        <i class='bx bxs-phone-call'></i>
                                        <a href="tel:<?=$telephone_1?>">
                                            <?=$telephone_1?>
                                        </a> 
                                    </li>
                                    <li>
                                        <i class='bx bxl-telegram'></i>
                                        <a href="mailto:<?=$email_1?>"><?=$email_1?></a>
                                    </li>
                                </ul>
                            </div>

                            <!-- <div class="service-sidebar-tag">
                                <h3>Tags</h3>
                                <ul>
                                    <li>
                                        <a href="#">T-shirt</a>
                                    </li>
                                    <li>
                                        <a href="#">Cover</a>
                                    </li>
                                    <li>
                                        <a href="#">Great</a>
                                    </li>
                                    <li>
                                        <a href="#">Print Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Hoodie Design</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>
                                    </li>
                                    <li>
                                        <a href="#">Mug Design</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Dtls End -->

        <!-- Price Area -->
        <div class="price-area pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span>Pricing Table</span>
                    <h2><?=$pricing_table_title ?></h2>
                    <p>
                        <?=$pricing_table_caption ?>
                    </p>
                </div>                
            	<?php  if(have_rows('pricing_table','option')): ?>
                <div id="prices-conten">
                    <div id="monthly" class="active prices-conten-area animated">
                        <div class="row">
                		<?php    
	                        while (have_rows('pricing_table','option')): the_row();
	                        $plan_name = get_sub_field('plan_name');                            
	                        $currency = get_sub_field('currency');  
	                        $plan_price = get_sub_field('plan_price'); 
	                        $cta_label = get_sub_field('cta_label');                            
	                        $cta_link = get_sub_field('cta_link');  
	                        $is_plan_active = get_sub_field('is_plan_active');                      
	                        $plan_duration = get_sub_field('plan_duration');              
	                    ?>
                            <div class="col-lg-4 col-sm-6">
                        		<?php if( $is_plan_active == 'active' ): ?>
                                <div class="single-price current">
                        		<?php else: ?>
                                <div class="single-price">
                        		<?php endif; ?>
                                    <span><?=$plan_name?></span>
                                    <div class="single-price-title">
                                        <h2><sup><?=$currency?></sup><?=$plan_price?><sub>/<?=$plan_duration?></sub></h2>
                                    </div>
                                    <?php if(have_rows('plan_details')): ?>
                                    <ul>
                                        <?php while (have_rows('plan_details')): the_row();
                                            $plan_component = get_sub_field('plan_component');
                                    	?>
                                        <li><?=$plan_component?></li>
                    					<?php endwhile; ?>
                                    </ul>                
                					<?php endif; ?>
                                    <a href="<?=$cta_link?>" class="get-btn"><?=$cta_label?></a>
                                </div>
                            </div>
                    		<?php endwhile; ?>

	                            <!-- <div class="col-lg-4 col-sm-6">
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
	                            </div> -->
                        </div>
                    </div>
                </div>                
                <?php endif; ?>
            </div>
        </div>
        <!-- Price Area End -->

<?php get_footer(); ?>