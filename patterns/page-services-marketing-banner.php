<?php

/**
 * Title: page-services-marketing-banner
 * Slug: page-services-marketing-banner
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Banner" class="wp-block-group page-marketing-banner desktop:h-[860px] h-auto mb-[150px] pt-[60px] desktop:pt-0 relative">
  <!-- wp:group -->
  <div class="wp-block-group container relative mx-auto desktop:px-0 px-[20px]">
    <!-- wp:group -->
    <div class="wp-block-group title-wrapper relative desktop:mb-[58px] mb-[40px] desktop:pt-[90px]">
      <!-- wp:group -->
      <div class="wp-block-group title-wrapper relative container mx-auto desktop:flex">
        <!-- wp:group -->
        <div class="wp-block-group section-title grid desktop:basis-auto desktop:w-[145px] uppercase text-primaryYellow">
          <!-- wp:paragraph -->
          <p class="m-0 desktop:justify-self-end pt-[3px] pr-[15px]">Usługi</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group uslugi-title uppercase font-medium desktop:text-[60px] text-[24px] desktop:leading-[60px] leading-[30px]">
          <!-- wp:paragraph -->
          <p class="m-0 uppercase">Marketing i PR</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
  <!-- wp:group -->
  <div class="wp-block-group about-banner-img relative h-[500px] desktop:h-auto">
    <!-- wp:group -->
    <div class="wp-block-group overflow-hidden w-full h-[350px] desktop:h-[500px]">
      <!-- wp:image -->
      <figure class="wp-block-image h-full w-[920px] desktop:w-auto">
        <img src="<?php echo home_url() . '/wp-content/themes/mutiny/assets/img/page-about/about-banner-bg.jpg'; ?>" alt="bg-image" />
      </figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:group -->


    <!-- wp:group -->
    <div class="wp-block-group btn-more group desktop:w-[175px] w-[140px] desktop:h-[175px] h-[140px] mx-auto text-center rounded-full z-[1]  absolute desktop:top-[-130px] bottom-[80px] wide:left-[70%] desktop:left-[85%] left-[50%] translate-x-[-50%] transition ease-out duration-300 flex flex-col justify-center items-center gap-y-0 cursor-pointer  overflow-hidden">
      <!-- wp:group -->
      <div class="wp-block-group yellow-bg w-full h-full rounded-full bg-primaryYellow scale-100 group-hover:scale-[85%] absolute transition ease-in-out duration-[700ms] z-0">
        <!-- wp:paragraph -->
        <p class="hidden">yellow bg</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group white-bg w-full h-full rounded-full bg-white scale-0 group-hover:scale-[85%] absolute transition ease-in-out duration-[500ms] z-[1]">
        <!-- wp:paragraph -->
        <p class="hidden">white bg</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:paragraph -->
      <p class="z-[2] text-white group-hover:text-black transition ease-in-out duration-[550ms]"><a href="#Poznaj nas"><span class="font-bold block">Zobacz</span><span class="font-bold block text-[25px]">WIĘCEJ</span></a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->







  </div>
  <!-- /wp:buttons -->
</div>
<!-- /wp:group -->