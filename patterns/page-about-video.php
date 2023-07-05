<?php
/**
 * Title: page-about-video
 * Slug: page-about-video
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group -->
<div class="wp-block-group video relative container mx-auto overscroll-x-hidden mb-[150px]">
  <!-- wp:group -->
  <div class="wp-block-group group img-clip-path-rounded">
    <!-- wp:group -->
    <div class="wp-block-group img-clip-path-video overflow-hidden rounded-tr-[22px]">
      <!-- wp:image -->
      <figure class="wp-block-image grayscale group-hover:grayscale-0 transition ease-out duration-300">
        <img src="https://mutiny.webo.design/wp-content/themes/mutiny/assets/img/page-about/about-video.jpg" alt="image">
      </figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
    <!-- wp:paragraph -->
    <svg class="flt_svg" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <filter id="flt_tag">
          <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />    
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="flt_tag" />
          <feComposite in="SourceGraphic" in2="flt_tag" operator="atop"/>
        </filter>
      </defs>
    </svg>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->

