<?php
/**
 * Title: page-about-video
 * Slug: page-about-video
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group -->
<div class="wp-block-group hidden desktop:block video overflow-hidden">
  <!-- wp:paragraph -->
  <p>test</p>
  <!-- /wp:paragraph -->
<!-- wp:group -->
  <div class="wp-block-group video relative container mx-auto desktop:px-0 px-[20px] mb-[150px]">
    <!-- wp:group -->
    <div class="wp-block-group paragraph-wrapper relative w-full pt-[100px]">

    </div>
    <!-- /wp:group -->
    <!-- wp:group -->
    <div class="wp-block-group hidden only-video-bg group cursor-pointer img-clip-path-rounded">
      <!-- wp:buttons -->
      <div
        class="wp-block-buttons z-[1] desktop:w-[175px] w-[80px] desktop:h-[175px] h-[80px] mx-0 text-white text-center uppercase rounded-full border desktop:border-[4px] border-[3px] border-[#D5D5D5] translate-y-[-50%] absolute desktop:top-[50%] top-[300px] desktop:left-[50%] left-[50%] translate-x-[-50%] group-hover:border-none group-hover:bg-primaryYellow group-hover:text-white transition ease-out duration-300 flex flex-col justify-center items-center gap-y-0 cursor-pointer"
      >
        <!-- wp:paragraph -->
        <p class="desktop:text-[35px] text-[18px] font-extrabold">play</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p class="">video</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:buttons -->
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
</div>
<!-- /wp:group -->

