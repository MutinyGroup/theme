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
    <!-- wp:link -->
    <a href="https://mutiny.webo.design/blog/" class="wp-block-link mb-[60px] flex gap-[10px]">
      <!-- wp:paragraph -->
      <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none"          class="rotate-180 group fill-transparent group-hover:fill-[#FEC400]">
        <rect x="1.5" y="1.5" width="53" height="53" rx="26.5" stroke="#AAAAAA" stroke-width="3" class="group-hover:stroke-primaryYellow transition-stroke ease-out duration-500"/>
        <path d="M28 35L35 28.0189L28.0379 21" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500"/>
        <path d="M20 28L31 28" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500"/>
      </svg>
      <!-- /wp:paragraph -->
      WRÓĆ DO LISTY
    </a>
    <!-- /wp:link -->
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



