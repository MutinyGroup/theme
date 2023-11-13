<?php

/**
 * Title: footer
 * Slug: footer
 * Categories: footer
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Footer" class="wp-block-group footer">
  <!-- wp:group -->
  <div class="wp-block-group footer1 container mx-auto desktop:px-0 px-[20px] border-b border-[#80808099]">
    <!-- wp:group -->
    <div class="wp-block-group cols-wrapper desktop:flex justify-between">
      <!-- wp:group -->
      <div class="wp-block-group col1 footer-info">
        <!-- wp:group -->
        <div class="wp-block-group company-info desktop:mb-[120px] mb-[40px] flex gap-[15px]">
          <!-- wp:image -->
          <figure class="wp-block-image self-center w-[80px]">
            <img src="<?php echo home_url() . '/wp-content/themes/mutiny/assets/img/front-page/logo-mutiny.png'; ?>" alt="logo" />
          </figure>
          <!-- /wp:image -->
          <!-- wp:group -->
          <div class="wp-block-group title-wrapper">
            <!-- wp:paragraph -->
            <p class="text-[20px] font-semibold">Mutiny Group Sp. z o.o.</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p class="text-[16px] font-extralight">Jaśkowa Dolina 11A/1A, 80-252 Gdańsk</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group contact-info-wrapper desktop:mb-[150px] mb-[40px] flex flex-col gap-y-[18px] desktop:leading-[32px] leading-[24px]">
          <!-- wp:paragraph -->
          <p><a href="mailto:kontakt@mutiny.pl" class="w-fit desktop:text-[35px] text-[26px] inline font-medium border-b-[1px] border-white hover:border-primaryYellow hover:text-primaryYellow transition-stroke ease-out duration-300 cursor-pointer">kontakt@mutiny.pl</a></p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p><a href="tel:+48795123584" class="w-fit desktop:text-[25px] text-[26px] inline font-medium border-b-[1px] border-white hover:border-primaryYellow hover:text-primaryYellow transition-stroke ease-out duration-300 cursor-pointer">+48 795 123 584</a></p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group col2 footer-menu">
        <!-- wp:list -->
        <ul class="wp-block-list footer-menu text-[20px] font-medium">
          <!-- wp:list-item -->
          <li class="cursor-pointer w-fit leading-[15px] desktop:mb-[40px] mb-[30px] border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA] transition ease-out duration-300">
            <a href="/about/">O nas</a>
          </li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="cursor-pointer w-fit leading-[15px] desktop:mb-[40px] mb-[30px] border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA] transition ease-out duration-300">
            <a href="/services/">Usługi</a>
          </li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="cursor-pointer w-fit leading-[15px] desktop:mb-[40px] mb-[30px] border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA] transition ease-out duration-300">
            <a href="/realizations/">Realizacje</a>
          </li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="cursor-pointer w-fit leading-[15px] desktop:mb-[40px] mb-[30px] border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA] transition ease-out duration-300">
            <a href="/blog/">Aktualności</a>
          </li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="cursor-pointer w-fit leading-[15px] desktop:mb-[40px] mb-[30px] border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA] transition ease-out duration-300">
            <a href="/contact/">Kontakt</a>
          </li>
          <!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group col3 footer socials flex gap-[20px] desktop:mb-0 mb-[25px]">
        <!-- wp:list -->
        <ul class="wp-block-list h-fit flex items-center desktop:gap-[15px]">
          <!-- wp:list-item -->
          <li class="cursor-pointer font-medium mr-[10px]">OBSERWUJ NAS</li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="cursor-pointer">
            <a href="https://www.facebook.com/mutinypl/">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none" class="group scale-[0.8] desktop:scale-[1]">
                <path d="M34.0088 31.125L34.5087 27.8674H31.383V25.7535C31.383 24.8623 31.8196 23.9936 33.2195 23.9936H34.6406V21.2201C34.6406 21.2201 33.351 21 32.1181 21C29.5439 21 27.8614 22.5602 27.8614 25.3847V27.8674H25V31.125H27.8614V39H31.383V31.125H34.0088Z" fill="#D5D5D5" />
                <rect x="1" y="1" width="58" height="58" rx="29" stroke="#F2F2F2" stroke-width="2" class="group-hover:stroke-primaryYellow transition-stroke ease-out duration-500" />
              </svg>
            </a>
          </li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="cursor-pointer">
            <a href="https://www.linkedin.com/in/karolanusiewicz/">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none" class="group scale-[0.8] desktop:scale-[1]">
                <path d="M21.3484 39H24.8323V26.5125H21.3484V39ZM23.0903 21C21.929 21 21 21.9 21 23.025C21 24.15 21.929 25.05 23.0903 25.05C24.2516 25.05 25.1806 24.15 25.1806 23.025C25.1806 21.9 24.2516 21 23.0903 21ZM30.7548 28.425V26.5125H27.271V39H30.7548V32.5875C30.7548 28.9875 35.5161 28.7625 35.5161 32.5875V39H39V31.35C39 25.275 32.3806 25.5 30.7548 28.425Z" fill="#D5D5D5" />
                <rect x="1" y="1" width="58" height="58" rx="29" stroke="#F2F2F2" stroke-width="2" class="group-hover:stroke-primaryYellow transition-stroke ease-out duration-500" />
              </svg>
            </a>
          </li>
          <!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group relative footer2 container mx-auto desktop:px-0 px-[20px] desktop:py-[36px] py-[20px] flex desktop:flex-row flex-col justify-between items-center text-[14px] font-extralight overflow-hidden">
    <!-- wp:group -->
    <div class="wp-block-group flash-wrapper wide:scale-[1] desktop:scale-[1] scale-[0.5] absolute top-[-195px] desktop:top-[-30px] left-[calc(50%-316px)] z-[0]">
      <!-- wp:paragraph -->
      <p>
        <svg class="flash" xmlns="http://www.w3.org/2000/svg" width="688" height="801" viewBox="0 0 688 801" fill="none">
          <g filter="url(#filter0_f_1787_1988)">
            <circle cx="287.132" cy="400.132" r="150" transform="rotate(-45 287.132 400.132)" fill="url(#paint0_linear_1787_1988)" fill-opacity="0.5" />
          </g>
          <defs>
            <filter id="filter0_f_1787_1988" x="-112.868" y="0.131836" width="800" height="800" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
              <feGaussianBlur stdDeviation="125" result="effect1_foregroundBlur_1787_1988" />
            </filter>
            <linearGradient id="paint0_linear_1787_1988" x1="287.132" y1="250.132" x2="287.132" y2="550.132" gradientUnits="userSpaceOnUse">
              <stop stop-color="#FEC400" stop-opacity="0.6" />
              <stop offset="1" stop-color="#FEC400" stop-opacity="0" />
            </linearGradient>
          </defs>
        </svg>
      </p>
      <!-- /wp:paragraph -->

      <!-- wp:image -->
      <figure class="wp-block-image flash absolute top-[0px] left-[0px]">
        <img src="<?php echo home_url() . '/wp-content/themes/mutiny/assets/img/bg-yellow-flash.png'; ?>" alt="background image" />
      </figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:group -->

    <!-- wp:list -->
    <ul class="wp-block-list w-full flex desktop:flex-row flex-col justify-between items-center z-[1]">
      <!-- wp:list-item -->
      <li class="hover:text-primaryYellow transition ease-out duration-300 cursor-pointer">
        <a href="/polityka-prywatnosci/">Polityka prywatności</a>
      </li>
      <!-- /wp:list-item -->
      <!-- wp:list-item -->
      <li class="wp-block-list flex justify-between items-center gap-[10px]">
        <!-- wp:paragraph -->
        <p class="italic text-[#808080] w-fit mt-[4px]">Delivered by</p>
        <!-- /wp:paragraph -->
        <!-- wp:image -->
        <figure class="wp-block-image w-[50px]">
          <img src="<?php echo home_url() . '/wp-content/themes/mutiny/assets/img/front-page/logo-webo.png'; ?>" alt="webo-logo" />
        </figure>
        <!-- /wp:image -->
      </li>
      <!-- /wp:list-item -->
    </ul>
    <!-- /wp:list -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->