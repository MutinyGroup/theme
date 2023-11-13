<?php

/**
 * Title: page-services-banner
 * Slug: page-services-banner
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Banner" class="wp-block-group services-banner desktop:mb-[150px]">
  <!-- wp:group -->
  <div class="wp-block-group container relative mx-auto desktop:px-0 px-[20px]">
    <!-- wp:group -->
    <div class="wp-block-group title-wrapper relative desktop:mb-[40px] mb-[20px] desktop:mt-[90px]">
      <!-- wp:group -->
      <div class="wp-block-group relative container mx-auto desktop:flex">
        <!-- wp:group -->
        <div class="wp-block-group section-title grid desktop:w-[145px] w-[90px] uppercase text-primaryYellow">
          <!-- wp:group -->
          <div class="wp-block-group h-fit overflow-hidden flex desktop:justify-end">
            <!-- wp:heading {"level":3} -->
            <h3 class="test01 justify-self-end pt-[4px] pr-[15px]">USŁUGI</h3>
            <!-- /wp:heading -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":1} -->
        <h1 class="wp-block-heading max-w-[75%] uslugi-title uppercase font-medium desktop:text-[60px] text-[30px] desktop:leading-[60px] leading-[30px]"><span class="block overflow-hidden"><span class="test01 company-title block font-medium overflow-hidden"><span class="block">JAK MOŻEMY</span></span></span><span class="block overflow-hidden"><span class="uppercase test01 inline-block ">CI<span class="relative ml-[12px] inline-block uppercase italic before:content-[''] before:inline-block desktop:before:mr-[18px] before:mr-[8px] before:bottom-0 before:left-0 desktop:before:w-[90px] before:w-[30px] desktop:before:h-[3px] before:h-[2px] before:bg-black">POMÓC</span></span><span class="test01 inline-block company-title font-medium"><span class="ml-[-8px] desktop:ml-[-16px] desktop:text-[100px] text-[70px] leading-[1px] desktop:leading-auto">.</span></span></span></h1>
        <!-- /wp:heading -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
  <!-- wp:group -->
  <div class="wp-block-group services-banner-img relative h-[500px] desktop:h-auto">
    <!-- wp:group -->
    <div class="wp-block-group overflow-hidden w-full h-[350px] desktop:h-[500px]">
      <!-- wp:image -->
      <figure class="wp-block-image h-full w-[920px] desktop:w-auto">
        <img src="<?php echo home_url() . '/wp-content/themes/mutiny/assets/img/page-services/services-banner-bg.jpg'; ?>" alt="bg-image" />
      </figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:group -->


    <!-- wp:group -->
    <div class="wp-block-group btn-more group desktop:w-[175px] w-[140px] desktop:h-[175px] h-[140px] mx-auto text-center rounded-full z-[1]  absolute desktop:top-[-130px] top-[320px] wide:left-[70%] desktop:left-[85%] left-[50%] translate-x-[-50%] transition ease-out duration-300 flex flex-col justify-center items-center gap-y-0 cursor-pointer  overflow-hidden">
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
      <p class="z-[2] text-white group-hover:text-black transition ease-in-out duration-[550ms]"><a href="#Kafelki"><span class="font-bold block">Zobacz</span><span class="font-bold block text-[25px]">WIĘCEJ</span></a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->