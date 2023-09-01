<?php

/**
 * Title: header-bright
 * Slug: header-bright
 * Categories: header-bright
 * Viewport Width: 1280
 */
$url = substr(home_url(), 27, 3);;
?>

<!-- wp:list {"templateLock":"contentOnly","anchor":true} -->
<ul id="Menu-desktop" class="wp-block-list nav-desktop headerBright bg-brightWhite h-[60px] w-[100%] desktop:h-[90px] hidden desktop:flex justify-center items-center z-[4] fixed">
  <!-- wp:list-item -->
  <li>
    <a href="<?php echo ($url == 'se') ? 'https://mutiny.webo.design/se/' : 'https://mutiny.webo.design/'; ?>" class="fixed top-[32px] left-[22px] z-[3]">
      <!-- wp:image -->
      <figure class="wp-block-image w-[30px] mr-[10px]">
        <img src="https://mutiny.webo.design/wp-content/themes/mutiny/assets/img/front-page/logo-mutiny-black.png" alt="webo-logo" />
      </figure>
      <!-- /wp:image -->
    </a>
  </li>
  <!-- /wp:list-item -->

  <!-- wp:navigation /-->

  <?php
  $url = substr(home_url(), 27, 3);
  if ($url == '') {
  ?>
    <!-- wp:list-item -->
    <li class="lang-btn group h-[48px] hover:h-[120px] hidden desktop:block p-[10px_12px] text-center uppercase font-medium border-[2px] border-[#AAAAAA] rounded-[50px] hover:rounded-[20px] absolute top-[20px] right-[20px] cursor-pointer hover:bg-white hover:border-white hover:text-black transition-height ease-out duration-300">
      <!-- wp:paragraph -->
      <p class="block hover:text-primaryYellow group-hover:mb-[10px]">PL</p>
      <!-- /wp:paragraph -->
      <a class="block hover:text-primaryYellow group-hover:mb-[10px] opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="http://mutiny.webo.design/eng/">ENG</a>
      <a class="block hover:text-primaryYellow opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="http://mutiny.webo.design/se/">SE</a>
    </li>
    <!-- /wp:list-item -->
  <?php
  } elseif ($url == 'eng') {
  ?>
    <!-- wp:list-item -->
    <li class="lang-btn group h-[48px] hover:h-[120px] hidden desktop:block p-[10px_12px] text-center uppercase font-medium border-[2px] border-[#AAAAAA] rounded-[50px] hover:rounded-[20px] absolute top-[20px] right-[20px] cursor-pointer hover:bg-white hover:border-white hover:text-black transition-height ease-out duration-300">
      <!-- wp:paragraph -->
      <p class="block hover:text-primaryYellow group-hover:mb-[10px]">ENG</p>
      <!-- /wp:paragraph -->
      <a class="block hover:text-primaryYellow group-hover:mb-[10px] opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="mutiny.webo.design/">PL</a>
      <a class="block hover:text-primaryYellow opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="mutiny.webo.design/se/">SE</a>
    </li>
    <!-- /wp:list-item -->
  <?php
  } elseif ($url == 'se') {
  ?>
    <!-- wp:list-item -->
    <li class="lang-btn group h-[48px] hover:h-[120px] hidden desktop:block p-[10px_12px] text-center uppercase font-medium border-[2px] border-[#AAAAAA] rounded-[50px] hover:rounded-[20px] absolute top-[20px] right-[20px] cursor-pointer hover:bg-white hover:border-white hover:text-black transition-height ease-out duration-300">
      <!-- wp:paragraph -->
      <p class="block hover:text-primaryYellow group-hover:mb-[10px]">PL</p>
      <!-- /wp:paragraph -->
      <a class="block hover:text-primaryYellow group-hover:mb-[10px] opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="http://mutiny.webo.design/eng/">ENG</a>
      <a class="block hover:text-primaryYellow opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="http://mutiny.webo.design/se/">SE</a>
    </li>
    <!-- /wp:list-item -->
  <?php
  };
  ?>

  <!-- wp:list-item -->
  <li class="lang-btn group h-[48px] hover:h-[120px] hidden desktop:block p-[10px_12px] text-center uppercase font-medium border-[2px] border-[#AAAAAA] rounded-[50px] hover:rounded-[20px] absolute top-[20px] right-[20px] cursor-pointer hover:bg-white hover:border-white hover:text-black transition-height ease-out duration-300">
    <a class="block hover:text-primaryYellow group-hover:mb-[10px]" href="https://mutiny.webo.design/se/">PL</a>
    <a class="block hover:text-primaryYellow group-hover:mb-[10px] max-h-0 opacity-0 group-hover:opacity-100 group-hover:max-h-fit transition ease-out duration-300" href="https://mutiny.webo.design/eng/">ENG</a>
    <a class="block hover:text-primaryYellow max-h-0 opacity-0 group-hover:opacity-100 group-hover:max-h-fit transition ease-out duration-300" href="https://mutiny.webo.design/se/">SE</a>
  </li>
  <!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:group -->
<div id="Mobile" class="wp-block-group nav-mobile headerMobileBright h-[60px] desktop:hidden block container mx-auto px-[20px] bg-[#F2F2F2] z-[4] transition ease-out duration-300">
  <!-- wp:list -->
  <ul class="wp-block-list h-full flex justify-between items-center">
    <!-- wp:list-item -->
    <li>
      <a href="https://mutiny.webo.design">
        <!-- wp:image -->
        <figure class="wp-block-image w-[30px]">
          <img src="/wp-content/themes/mutiny/assets/img/front-page/logo-mutiny-black.png" alt="webo-logo" />
        </figure>
        <!-- /wp:image -->
      </a>
    </li>
    <!-- /wp:list-item -->

    <!-- wp:list-item -->
    <li class="btn-open-menu font-medium cursor-pointer">
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line w-[30px] h-[2px] bg-black mb-[8px] rounded-[5px] transition ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line h-[2px] bg-black mb-[8px] rounded-[5px] transition-width ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line w-[30px] h-[2px] bg-black rounded-[5px] transition ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </li>
    <!-- /wp:list-item -->
  </ul>
  <!-- /wp:list -->

  <!-- wp:list -->
  <ul class="wp-block-list mobile-nav-menu text-[20px] font-semibold w-screen h-screen pt-[40px] bg-[#F2F2F2] z-[3] flex flex-col items-center gap-y-[30px] fixed top-[60px] left-0 translate-x-[100%] opacity-[0] transition ease-in-out duration-500">
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <a href="/about/">O NAS</a>
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <a href="/services/">USŁUGI</a>
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <a href="/realizations/">REALIZACJE</a>
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <a href="/blog/">Aktualności</a>
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="p-[10px_20px] uppercase border-[2px] border-[#AAAAAA] rounded-full cursor-pointer hover:bg-white hover:text-black hover:border-white transition ease-out duration-300">
      <a href="/contact/">Kontakt</a>
    </li>
    <!-- /wp:list-item -->

    <?php
    $url = substr(home_url(), 27, 3);;
    if ($url == '') {
    ?>
      <!-- wp:list-item -->
      <li class="lang-btn group w-[65px] h-[48px] hover:h-[130px] block p-[7px_12px] text-center uppercase font-medium border-[2px] border-[#AAAAAA] rounded-[50px] hover:rounded-[20px] cursor-pointer hover:bg-white hover:border-white hover:text-black transition-height ease-out duration-300">
        <!-- wp:paragraph -->
        <p class="block hover:text-primaryYellow group-hover:mb-[10px]">PL</p>
        <!-- /wp:paragraph -->
        <a class="block hover:text-primaryYellow group-hover:mb-[10px] opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="http://mutiny.webo.design/eng/">ENG</a>
        <a class="block hover:text-primaryYellow opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="http://mutiny.webo.design/se/">SE</a>
      </li>
      <!-- /wp:list-item -->
    <?php
    } elseif ($url == 'eng') {
    ?>
      <!-- wp:list-item -->
      <li class="lang-btn group w-[65px] h-[48px] hover:h-[130px] block p-[7px_12px] text-center uppercase font-medium border-[2px] border-[#AAAAAA] rounded-[50px] hover:rounded-[20px] cursor-pointer hover:bg-white hover:border-white hover:text-black transition-height ease-out duration-300">
        <!-- wp:paragraph -->
        <p class="block hover:text-primaryYellow group-hover:mb-[10px]">ENG</p>
        <!-- /wp:paragraph -->
        <a class="block hover:text-primaryYellow group-hover:mb-[10px] opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="mutiny.webo.design/">PL</a>
        <a class="block hover:text-primaryYellow opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="http://mutiny.webo.design/se/">SE</a>
      </li>
      <!-- /wp:list-item -->
    <?php
    } elseif ($url == 'se') {
    ?>
      <!-- wp:list-item -->
      <li class="lang-btn group w-[65px] h-[48px] hover:h-[130px] block p-[7px_12px] text-center uppercase font-medium border-[2px] border-[#AAAAAA] rounded-[50px] hover:rounded-[20px] cursor-pointer hover:bg-white hover:border-white hover:text-black transition-height ease-out duration-300">
        <!-- wp:paragraph -->
        <p class="block hover:text-primaryYellow group-hover:mb-[10px]">SE</p>
        <!-- /wp:paragraph -->
        <a class="block hover:text-primaryYellow group-hover:mb-[10px] opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="http://mutiny.webo.design/" href="http://mutiny.webo.design/">PL</a>
        <a class="block hover:text-primaryYellow opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="http://mutiny.webo.design/eng/">ENG</a>
      </li>
      <!-- /wp:list-item -->
    <?php
    };
    ?>

  </ul>
  <!-- /wp:list -->
</div>
<!-- /wp:group -->