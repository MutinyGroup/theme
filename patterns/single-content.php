<?php
/**
 * Title: single-content
 * Slug: single-content
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group -->
<div class="wp-block-group page-about-services mb-[150px] overflow-hidden">
  <!-- wp:group -->
  <div
    class="wp-block-group container mx-auto relative desktop:px-0 px-[20px]"
  >    

  
  <!-- wp:loop -->
  <div class="wp-loop">
    <!-- wp:loop -->
    <?php
      $args = array(
          'post_type' => 'post'
      );

      $post_query = new WP_Query($args);

      if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
          $post_query->the_post();
          ?>
          <h2><?php the_title(); ?></h2>
          <?php
        }
      }
    ?>
  </div>

  <!-- wp:group -->
  <div class="wp-block-group above-img-banner mb-[50px] flex gap-[50px]">
    <!-- wp:group -->
    <div class="wp-block-group post-title w-[70%] text-[50px] leading-[55px] font-normal">
      <!-- wp:post-title /-->
    </div>
    <!-- /wp:group -->
    
    <!-- wp:group -->
    <div class="wp-block-group post-author-wrapper w-[30%]">
      <!-- wp:group -->
      <div class="wp-block-group post-date mb-[20px] flex items-center before:content-[''] before:inline-block desktop:before:mr-[10px] before:mb-[5px] desktop:before:w-[20px] desktop:before:h-[2px] before:bg-primaryYellow">
        <!-- wp:post-date /-->
      </div>
      <!-- wp:group -->
      <div class="wp-block-group author-wrapper flex gap-[10px]">
        <!-- wp:group -->
        <div class="wp-block-group wp-block-post-author__avatar img author-avatar">
          <!-- wp:post-author-avatar /-->
          
          <!-- wp:avatar {"userId":5, "size":60,"isLink":true,"style":{"spacing":{"margin":{"bottom":"40px"}},"border":{"radius":"10px","width":"3px"},"color":{"duotone":["#000000","#ffe2c7"]}},"borderColor":"vivid-red"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group author-name font-semibold">
          <!-- wp:post-author-name /-->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
  
  <!-- wp:group -->
  <div class="wp-block-group featured-image mb-[100px]">
    <!-- wp:post-featured-image /-->
  </div>
  <!-- /wp:group -->
  
  <!-- wp:group -->
  <div class="wp-block-group above-img-banner mb-[50px] flex gap-[50px]">
    <!-- wp:group -->
    <div class="wp-block-group post-content w-[70%]">
      <!-- wp:post-content /-->
    </div>
    <!-- /wp:group -->
    
    <!-- wp:group -->
    <div class="wp-block-group share-wrapper w-[30%]">
      share
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->



 





    
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->



