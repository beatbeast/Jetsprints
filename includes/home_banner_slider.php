
        <?php  if(have_rows('banner_slider')):  /* parent repeater */ ?>
        <!-- Home Slider -->
        <div class="home-slider owl-carousel owl-theme">
            <?php   
                 while (have_rows('banner_slider')): the_row(); /* parent repeater */
                     $banner_image = get_sub_field('banner_image');
                     $banner_header = get_sub_field('banner_header');
                     $banner_caption = get_sub_field('banner_caption');
                     $cta1_label = get_sub_field('cta1_label');
                     $cta1_link = get_sub_field('cta1_link');
                     $cta2_label = get_sub_field('cta2_label');
                     $cta2_link = get_sub_field('cta2_link');
                                             
            ?>
            <div class="slider-item" style="background-image: url(<?=$banner_image?>);" alt="image">
            <!-- <div class="slider-item" style="background-color: #0066cc;" alt="image"> -->
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-content">
                                <h1><?=$banner_header?></h1>
                                <p><?=$banner_caption?></p>
                                <div class="slider-btn">
                                    <a href="<?=$cta1_link?>" class="default-btn"><?=$cta1_label?></a>
                                    <a href="<?=$cta2_link?>" class="default-btn active"><?=$cta2_label?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
<?php endif; ?>
        <!-- Home Slider End -->