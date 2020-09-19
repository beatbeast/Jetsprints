<?php
    $column_label = get_field('column_label','option'); 
    $column_2_label = get_field('column_2_label','option'); 
?>
<!-- Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="footer-contact">
            <div class="newsleter-area">
                <h2>JETSPRINTS UPDATE</h2>
                <p>receive 20% off your first order at JETSPRINTS</p>
                <?php echo do_shortcode('[mc4wp_form id="588"]'); ?>
            </div>
        </div>

        <div class="footer-top-list pb-70">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer-list">
                        <h3><?=$column_label ; ?></h3>
                        <ul> 
                        <?php  if(have_rows('column_1_links','option')):    
                            while (have_rows('column_1_links','option')): the_row();
                            $page_title = get_sub_field('page_title');                              
                            $page_link = get_sub_field('page_link');                          
                        ?>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="<?=$page_link ; ?>"><?=$page_title ; ?></a>
                            </li>
                        <?php endwhile; endif; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="footer-list">
                        <h3><?=$column_2_label ; ?></h3>
                        <ul>
                        <?php  if(have_rows('column_2_links','option')):    
                            while (have_rows('column_2_links','option')): the_row();
                            $page_title = get_sub_field('page_title');                              
                            $page_link = get_sub_field('page_link');                          
                        ?>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="<?=$page_link ; ?>"><?=$page_title ; ?></a>
                            </li>
                        <?php endwhile; endif; ?>
                        </ul>
                    </div>
                </div>

                <?php 
                    $column_title = get_field('column_title', 'option');
                    $telephone_1 = get_field('telephone_1', 'option');
                    $telephone_2 = get_field('telephone_2', 'option');
                    $email_1 = get_field('e-mail_1', 'option');
                    $email_2 = get_field('e-mail_2', 'option');
                    $address = get_field('address', 'option');
                ?> 

                <div class="col-lg-5 col-md-5">
                    <div class="footer-side-list">
                        <h3><?=$column_title?></h3>
                        <ul>
                            <li>
                                <i class='bx bxs-phone'></i>
                                <a href="tel:<?=$telephone_1?>"><?=$telephone_1?></a>
                            </li>
                            <li>
                                <i class='bx bxs-phone'></i>
                                <a href="tel:<?=$telephone_2?>"><?=$telephone_2?></a>
                            </li>
                            <li>
                                <i class='bx bxl-telegram'></i>
                                <a href="mailto:<?=$email_1?>"><?=$email_1?></a>
                            </li>
                            <li>
                                <i class='bx bxl-telegram'></i>
                                <a href="mailto:<?=$email_2?>"><?=$email_2?></a>
                            </li>
                            <li>
                                <i class='bx bxs-map'></i>
                                <?=$address?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    <div class="footer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.png" alt="Footer Logo">
                    </div>
                </div>

                <?php 
                    $facebook = get_field('facebook', 'option');
                    $twitter = get_field('twitter', 'option');
                    $instagram = get_field('instagram', 'option');
                ?>

                <div class="col-lg-8 col-md-9">
                    <div class="bottom-text">
                        <p>
                            Copyright ©<?php echo date("Y"); ?> JetsPrints. All Rights Reserved by 
                            <a href="https://thelinksolutions.com/" target="_blank">TheLinkSolutions</a> 
                        </p>

                        <ul class="social-bottom">
                            <li>
                                <a href="<?=$facebook?>"><i class='bx bxl-facebook'></i></a>
                            </li>
                            <li>
                                <a href="<?=$twitter?>"><i class='bx bxl-twitter'></i></a>
                            </li>
                            <li>
                                <a href="<?=$instagram?>"><i class='bx bxl-instagram'></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->