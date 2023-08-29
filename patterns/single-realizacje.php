<?php

/**
 * Title: single-realizacje
 * Slug: single-realizacje
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Wpis" class="wp-block-group single-realizacje mb-[150px] overflow-hidden">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto relative desktop:px-0 px-[20px]">

    <!-- wp:group -->
    <div class="hidden loop-test wp-block-group">
      <!-- wp:paragraph -->
      <p>php loop test</p>
      <!-- /wp:paragraph -->
      <?php
      $args = array(
        'post_type' => 'post'
      );

      $post_query = new WP_Query($args);

      if ($post_query->have_posts()) {
        while ($post_query->have_posts()) {
          $post_query->the_post();
      ?>
          <!-- wp:paragraph -->
          <p><?php the_title(); ?></p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p><?php the_time('m/d/Y') ?></p>
          <!-- /wp:paragraph -->
      <?php
        }
      }
      ?>
    </div>
    <!-- /wp:group -->


    <!-- wp:paragraph -->
    <a href="/realizations/" class="group mt-[60px] mb-[40px] w-fit font-semibold flex items-center gap-[8px]">
      <!-- wp:group -->
      <div class="wp-block-group group w-[56px] h-[56px]">
        <!-- wp:paragraph -->
        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="rotate-180 scale-[0.65] fill-transparent group-hover:fill-[#FEC400]">
          <rect x="1.5" y="1.5" width="53" height="53" rx="26.5" stroke="#AAAAAA" stroke-width="3" class="group-hover:fill-[#FEC400] group-hover:stroke-primaryYellow transition-stroke ease-out duration-500" />
          <path d="M28 35L35 28.0189L28.0379 21" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
          <path d="M20 28L31 28" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
        </svg>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph -->
      <p class="uppercase text-[14px]">WRÓĆ DO LISTY</p>
      <!-- /wp:paragraph -->
    </a>
    <!-- /wp:paragraph -->

    <!-- wp:group -->
    <div class="wp-block-group post-title text-[50px] leading-[55px] font-normal">
      <!-- wp:post-title /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group post-content desktop:w-[100%]">
      <!-- wp:post-content /-->
    </div>
    <!-- /wp:group -->


    <!-- wp:group -->
    <div class="wp-block-group border-wrapper pt-[20px] border-opacity-[40%] border-[#D5D5D5] border-t-[2px]">
      <!-- wp:paragraph -->
      <a href="/realizations/" class="group w-fit font-semibold flex items-center gap-[8px]">
        <!-- wp:group -->
        <div class="wp-block-group group w-[56px] h-[56px]">
          <!-- wp:paragraph -->
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="rotate-180 scale-[0.65] fill-transparent group-hover:fill-[#FEC400]">
            <rect x="1.5" y="1.5" width="53" height="53" rx="26.5" stroke="#AAAAAA" stroke-width="3" class="group-hover:fill-[#FEC400] group-hover:stroke-primaryYellow transition-stroke ease-out duration-500" />
            <path d="M28 35L35 28.0189L28.0379 21" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
            <path d="M20 28L31 28" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
          </svg>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:paragraph -->
        <p class="uppercase text-[14px]">WRÓĆ DO LISTY</p>
        <!-- /wp:paragraph -->
      </a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>