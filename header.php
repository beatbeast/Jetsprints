<!DOCTYPE html>
<html lang="zxx">
  <?php include('includes/header-info.php'); ?>


    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="pre-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="Logo">
                    </div>
                    <div class="spinner">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <?php 
          if ( !is_404()) {
            include('includes/main-nav.php');
          } 
            if (is_front_page()):
              include 'includes/home_banner_slider.php';
            else:
              if (is_page()) :
                include 'includes/page_banner.php';
              elseif (is_category()):
                include 'includes/category_banner.php';
              endif;    
            endif   
          ?>