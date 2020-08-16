        <?php 

        /*Definition of Variables */
        $page_banner_image = get_field('page_banner_image');

        ?>

        <!-- Inner Banner inner-bg12 -->
        <div class="inner-banner" data-src="<?php echo $image_exist; ?>" alt="image">
            <div class="container">
                <div class="inner-title">
                    <h3><?php single_cat_title(); ?></h3>
                    <ul>
                        <li>
                            <a href="<?php echo site_url(); ?>">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li><?php single_cat_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->