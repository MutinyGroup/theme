<?php

/*
 * Title: header
 * Slug: header
 * Categories: header
 * Viewport Width: 1280
 */
?>

<!-- wp:list {"templateLock":"contentOnly","anchor":true} -->
<ul id="Desktop" class="wp-block-list nav-desktop h-[60px] desktop:h-[90px] hidden desktop:flex justify-center items-center relative z-[3]">
  <!-- wp:list-item -->
  <li>
    <a href="https://mutiny.webo.design" class="fixed top-[32px] left-[22px] z-[4]">
      <!-- wp:image -->
      <figure class="wp-block-image w-[30px] mr-[10px]">
        <img src="https://mutiny.webo.design/wp-content/themes/mutiny/assets/img/front-page/logo-mutiny.png" alt="webo-logo" />
      </figure>
      <!-- /wp:image -->
    </a>
  </li>
  <!-- /wp:list-item -->

  <!-- wp:navigation /-->

  <!-- wp:list-item -->
  <li class="wp-block-group lang-btn group max-h-fit hidden desktop:block p-[10px_20px] text-center uppercase font-medium border-[2px] border-[#AAAAAA] rounded-full hover:rounded-[20px] absolute top-[20px] right-[20px] cursor-pointer hover:bg-white hover:border-white hover:text-black transition-max-h ease-out duration-300">
    <a class="block hover:text-primaryYellow group-hover:mb-[10px]" href="https://mutiny.webo.design/se/">PL</a>
    <a class="block hover:text-primaryYellow group-hover:mb-[10px] max-h-0 opacity-0 group-hover:opacity-100 group-hover:max-h-fit transition ease-out duration-300" href="https://mutiny.webo.design/eng/">ENG</a>
    <a class="block hover:text-primaryYellow group-hover:mb-[10px] max-h-0 opacity-0 group-hover:opacity-100 group-hover:max-h-fit transition ease-out duration-300" href="https://mutiny.webo.design/se/">SE</a>
  </li>
  <!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"anchor":true} -->
<div id="Mobile" class="wp-block-group nav-mobile h-[60px] desktop:hidden container mx-auto px-[20px] bg-[#101010] z-[2] fixed top-0 left-0 transition ease-out duration-300">
  <!-- wp:group -->
  <div class="wp-block-group h-full flex justify-between items-center">
    <!-- wp:paragraph -->
    <p>
      <a href="/" class="w-[35px] h-[27px] fixed top-[15px] left-[20px]">
        <!-- wp:image -->
        <figure class="wp-block-image menu-logo desktop:hidden mr-[10px]">
          <img src="/wp-content/themes/mutiny/assets/img/front-page/logo-mutiny.png" alt="webo-logo" />
        </figure>
        <!-- /wp:image -->
      </a>
    </p>
    <!-- /wp:paragraph -->
    <!-- wp:group -->
    <div class="wp-block-group btn-open-menu ml-[10px] font-medium cursor-pointer">
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line w-[30px] h-[2px] bg-white mb-[8px] rounded-[5px] transition ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line h-[2px] bg-white mb-[8px] rounded-[5px] transition-width ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line w-[30px] h-[2px] bg-white rounded-[5px] transition ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:list -->
  <ul class="wp-block-list mobile-nav-menu text-[20px] font-semibold w-screen h-screen overflow-scroll pt-[40px] bg-[#101010] z-[3] flex flex-col items-center gap-y-[30px] fixed top-[60px] left-0 translate-x-[100%] opacity-[0] transition ease-in-out duration-500">
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <!-- wp:paragraph -->
      <p><a href="/about/">O NAS</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <!-- wp:paragraph -->
      <p><a href="/services/">USŁUGI</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <!-- wp:paragraph -->
      <p><a href="/realizations/">REALIZACJE</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <!-- wp:paragraph -->
      <p><a href="/blog/">Aktualności</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="p-[10px_20px] uppercase border-[2px] border-white rounded-full w-fit cursor-pointer hover:bg-white hover:text-black transition ease-out duration-300">
      <!-- wp:paragraph -->
      <p><a href="/contact/">Kontakt</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li>
      <!-- wp:buttons -->
      <div class="wp-block-buttons desktop:mr-[25px] p-[10px_20px] uppercase font-medium border-[2px] border-white rounded-full cursor-pointer hover:bg-white hover:text-black transition ease-out duration-300">
        <!-- wp:paragraph -->
        <p><a href="/se/">SE</a></p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:buttons -->
    </li>
    <!-- /wp:list-item -->
  </ul>
  <!-- /wp:list -->
</div>
<!-- /wp:group -->