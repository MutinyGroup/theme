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
  <?php print_r(get_post_thumbnail_id()); ?>
  <div class="above-img-banner flex">
    <div class="post-title w-[70%] text-[50px] leading-[55px] font-medium">
      <!-- wp:post-title /-->
    </div>


    <div class="post-author-wrapper w-[30%]">
      <div class="post-date">
        <!-- wp:post-date /-->
      </div>
      <div class="author-name">
        <!-- wp:post-author-name /-->
      </div>
    </div>
  </div>

 



  <div class="featured-image">
    <!-- wp:post-featured-image /-->
  </div>

    <!-- wp:post-content /-->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->



