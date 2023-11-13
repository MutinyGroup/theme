<?php

/*
 * Title: header
 * Slug: header
 * Categories: header
 * Viewport Width: 1280
 */
$url = home_url();
?>

<!-- wp:list {"templateLock":"contentOnly","anchor":true} -->
<ul id="Menu-desktop" class="wp-block-list nav-desktop headerDark h-[60px] desktop:h-[90px] bg-transparent fixed top-0 w-[100%] hidden desktop:flex justify-center items-center z-[4]">
  <!-- wp:list-item -->
  <li>
    <a href="<?php echo home_url(); ?>" class="fixed top-[32px] left-[22px] z-[4]">
      <!-- wp:image -->
      <figure class="wp-block-image w-[30px] mr-[10px]">
        <img src="/wp-content/themes/mutiny/assets/img/front-page/logo-mutiny.png" alt="webo-logo" />
      </figure>
      <!-- /wp:image -->
    </a>
  </li>
  <!-- /wp:list-item -->

  <!-- wp:list-item -->
  <li><!-- wp:navigation /--></li>
  <!-- /wp:list-item -->

  <?php
  // pl
  if (strpos($url, 'eng2') == '' && strpos($url, 'se') == '') {
  ?>
    <!-- wp:list-item -->
    <li class="lang-btn group h-[48px] hover:h-[120px] hidden desktop:block p-[10px_12px] text-center uppercase font-medium border-[2px] border-[#AAAAAA] rounded-[50px] hover:rounded-[20px] absolute top-[20px] right-[20px] hover:bg-white hover:border-white hover:text-black transition-height ease-out duration-300">
      <!-- wp:group -->
      <div class="wp-block-group link-wrapper">
        <!-- wp:paragraph -->
        <p class="block hover:text-primaryYellow group-hover:mb-[10px]">PL</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <a class="block hover:text-primaryYellow group-hover:mb-[10px] opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="<?php echo home_url() . '/eng2' ?>">ENG</a>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <a class="block hover:text-primaryYellow opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="<?php echo home_url() . '/se' ?>">SE</a>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </li>
    <!-- /wp:list-item -->
  <?php
  } elseif (strpos($url, 'eng2') > 10) {
  ?>
    <!-- wp:list-item -->
    <li class="lang-btn group h-[48px] hover:h-[120px] hidden desktop:block p-[10px_12px] text-center uppercase font-medium border-[2px] border-[#AAAAAA] rounded-[50px] hover:rounded-[20px] absolute top-[20px] right-[20px] hover:bg-white hover:border-white hover:text-black transition-height ease-out duration-300">
      <!-- wp:paragraph -->
      <p class="block hover:text-primaryYellow group-hover:mb-[10px]">ENG</p>
      <!-- /wp:paragraph -->
      <a class="block hover:text-primaryYellow group-hover:mb-[10px] opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="<?php echo rtrim($url, 'eng2'); ?>">PL</a>
      <a class="block hover:text-primaryYellow opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="<?php echo rtrim($url, 'eng2') . 'se'; ?>">SE</a>
    </li>
    <!-- /wp:list-item -->
  <?php
  } elseif (strpos($url, 'se') > 10) {
  ?>
    <!-- wp:list-item -->
    <li class="lang-btn group h-[48px] hover:h-[120px] hidden desktop:block p-[10px_12px] text-center uppercase font-medium border-[2px] border-[#AAAAAA] rounded-[50px] hover:rounded-[20px] absolute top-[20px] right-[20px] hover:bg-white hover:border-white hover:text-black transition-height ease-out duration-300">
      <!-- wp:paragraph -->
      <p class="block hover:text-primaryYellow group-hover:mb-[10px]">SE</p>
      <!-- /wp:paragraph -->
      <a class="block hover:text-primaryYellow group-hover:mb-[10px] opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="<?php echo rtrim($url, 'se'); ?>">PL</a>
      <a href="<?php echo rtrim($url, 'se') . 'eng2'; ?>" class="block hover:text-primaryYellow opacity-0 group-hover:opacity-100 transition ease-out duration-300">ENG</a>
    </li>
    <!-- /wp:list-item -->
  <?php
  };
  ?>
</ul>
<!-- /wp:list -->

<!-- wp:group {" templateLock":"all","lock":{"move":true,"remove":true},"anchor":true} -->
<div id="Mobile" class="wp-block-group nav-mobile headerMobileDark h-[60px] bg-darkBlack desktop:hidden container mx-auto px-[20px] z-[4] transition ease-out duration-300">
  <!-- wp:group -->
  <div class="wp-block-group h-full flex justify-between items-center">
    <!-- wp:paragraph -->
    <p>
      <a href="<?php echo home_url(); ?>" class="w-[35px] h-[27px] fixed top-[15px] left-[20px]">
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
      <p><a href="<?php echo home_url() . '/about' ?>">O NAS</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <!-- wp:paragraph -->
      <p><a href="<?php echo home_url() . '/services' ?>">USŁUGI</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <!-- wp:paragraph -->
      <p><a href="<?php echo home_url() . '/realizations' ?>">REALIZACJE</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <!-- wp:paragraph -->
      <p><a href="<?php echo home_url() . '/blog' ?>">Aktualności</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="p-[10px_20px] uppercase border-[2px] border-white rounded-full w-fit cursor-pointer hover:bg-white hover:text-black transition ease-out duration-300">
      <!-- wp:paragraph -->
      <p><a href="<?php echo home_url() . '/about' ?>/contact/">Kontakt</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->

    <?php
    if (strpos($url, 'eng2') == '' && strpos($url, 'se') == '') {
    ?>
      <!-- wp:list-item -->
      <li class="lang-btn group w-[65px] h-[48px] hover:h-[130px] block p-[7px_12px] text-center uppercase font-medium border-[2px] border-[#AAAAAA] rounded-[50px] hover:rounded-[20px] cursor-pointer hover:bg-white hover:border-white hover:text-black transition-height ease-out duration-300">
        <!-- wp:paragraph -->
        <p class="block hover:text-primaryYellow group-hover:mb-[10px]">PL</p>
        <!-- /wp:paragraph -->
        <a class="block hover:text-primaryYellow group-hover:mb-[10px] opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="<?php echo home_url() . '/eng2' ?>">ENG</a>
        <a class="block hover:text-primaryYellow opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="<?php echo home_url() . '/se' ?>">SE</a>
      </li>
      <!-- /wp:list-item -->
    <?php
    } elseif (strpos($url, 'eng2') > 10) {
    ?>
      <!-- wp:list-item -->
      <li class="lang-btn group w-[65px] h-[48px] hover:h-[130px] block p-[7px_12px] text-center uppercase font-medium border-[2px] border-[#AAAAAA] rounded-[50px] hover:rounded-[20px] cursor-pointer hover:bg-white hover:border-white hover:text-black transition-height ease-out duration-300">
        <!-- wp:paragraph -->
        <p class="block hover:text-primaryYellow group-hover:mb-[10px]">ENG</p>
        <!-- /wp:paragraph -->
        <a class="block hover:text-primaryYellow group-hover:mb-[10px] opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="<?php echo rtrim($url, 'eng2'); ?>">PL</a>
        <a class="block hover:text-primaryYellow opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="<?php echo home_url() . '/se' ?>">SE</a>
      </li>
      <!-- /wp:list-item -->
    <?php
    } elseif (strpos($url, 'se') > 10) {
    ?>
      <!-- wp:list-item -->
      <li class="lang-btn group w-[65px] h-[48px] hover:h-[130px] block p-[7px_12px] text-center uppercase font-medium border-[2px] border-[#AAAAAA] rounded-[50px] hover:rounded-[20px] cursor-pointer hover:bg-white hover:border-white hover:text-black transition-height ease-out duration-300">
        <!-- wp:paragraph -->
        <p class="block hover:text-primaryYellow group-hover:mb-[10px]">SE</p>
        <!-- /wp:paragraph -->
        <a class="block hover:text-primaryYellow group-hover:mb-[10px] opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="http://mutiny.webo.design/" href="<?php echo rtrim($url, 'se'); ?>">PL</a>
        <a class="block hover:text-primaryYellow opacity-0 group-hover:opacity-100 transition ease-out duration-300" href="<?php echo rtrim($url, 'se') . 'eng2'; ?>">ENG</a>
      </li>
      <!-- /wp:list-item -->
    <?php
    };
    ?>

  </ul>
  <!-- /wp:list -->
</div>
<!-- /wp:group -->