<!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="<?php echo get_home_url(); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
            <!-- start -->
            <?php
              $menu_name = 'main-menu';
              $locations = get_nav_menu_locations();
              $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
              $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
              $menucount = count($menuitems);  // Actual length of the array
            //   $class = 'has-dropdown';

            //   var_export ($menuitems);
           ?>
                            <ul class="navbar-nav m-auto">
                <?php
                    $count = 0;
                    $submenu = false;
                    foreach( $menuitems as $item ):
                    $link = $item->url;
                    $title = $item->title;

                    // item does not have a parent so menu_item_parent equals 0 (false)
                    if ( !$item->menu_item_parent ):
                        // save this id for later comparison with sub-menu items
                        $parent_id = $item->ID;
                         // Check if array lenght == total count + 1
                        if($count + 1 === $menucount): 
                            // Check if menu item has children
                            if ($menuitems[ $count ]->menu_item_parent != 0) :
                            $class = 'has-dropdown';
                        else : $class = '';
                        endif; ?>
                       <?php else : 
                           if ($menuitems[ $count + 1 ]->menu_item_parent != 0) :
                            $class = 'has-dropdown';
                        else : $class = '';
                        endif; endif;
                ?>
                                <li class="nav-item">
                                    <a href="<?php echo $link; ?>" class="nav-link">
                                        <?php echo $title; 
                          //echo $menuitems[ $count + 1 ]->menu_item_parent; ?>
                                        <i class='bx bx-plus'></i>
                                    </a>

                 <?php endif; ?>

                 <?php if ( $parent_id == $item->menu_item_parent ): 
                        if ( !$submenu ): $submenu = true; 
                    ?>
                                    <ul class="dropdown-menu">
                        <?php endif; ?>
                                        <li class="nav-item">
                                            <a href="<?php echo $link; ?>" class="nav-link">
                                                <?php echo $title; ?>
                                            </a>
                                        </li>

                        <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                                    </ul>
                        <?php $submenu = false; endif;  ?>
                    <?php endif;
                    if($count + 1 === $menucount): 
                         if ( $menuitems[ $count ]->menu_item_parent != $parent_id ): ?>

                            </li>
                            <?php $submenu = false; endif; ?>
                    <?php else : 
                         if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
                             </li>
                            <?php $submenu = false; endif; ?>
                    <?php endif; ?>
                    <?php //if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
                        <!-- </li> -->

                        <?php //$submenu = false; endif; ?>
             <?php $count++; endforeach; ?>
                            </ul>

                            <div class="cart-area">
                                <a href="cart.html">
                                    <i class='bx bx-cart'></i>
                                </a>
                            </div>

                            <div class="menu-btn">
                                <a href="tel:+2349084861581" class="phone-btn">
                                    <i class='bx bxs-phone'></i>
                                    +234 908 486 1581
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->