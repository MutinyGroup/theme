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

  <?php 
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post(); 
        print_r(get_post_thumbnail_id()); 
        the_time('j F Y'); 
        //
        // Post Content here
        //
      } // end while
    } // end if
    ?>

  <div class="above-img-banner mb-[50px] flex">
    <div class="post-title w-[70%] text-[50px] leading-[55px] font-normal">
      <!-- wp:post-title /-->
    </div>


    <div class="post-author-wrapper w-[30%]">
      <div class="post-date before:content-[''] before:inline-block desktop:before:mr-[5px] before:mb-[5px] desktop:before:w-[20px] desktop:before:h-[2px] before:bg-primaryYellow">
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



