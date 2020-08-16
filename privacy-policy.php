<!-- /* Template Name: Privacy Policy */ -->


<?php 
  get_header();  
 
  /* Get the field variable */  
  $policy_page_title = get_field('policy_page_title'); 
  $privacy_policy = get_field('privacy_policy'); 
?>
        
        <!-- Privacy Policy Area -->
        <div class="privacy-policy-area ptb-100">
            <div class="container">
                <div class="single-content">
                    <h3><?=$policy_page_title?></h3>
                    <p>
                        <?=$privacy_policy?>
                    </p>
                </div>
            </div>
        </div>
        <!-- Privacy Policy Area End -->

<?php get_footer(); ?>