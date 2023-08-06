<?php
/**
 * Title: services
 * Slug: services
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>
<!-- wp:group -->
<div id="Usługi" class="wp-block-group uslugi desktop:mb-[150px] mb-[80px]">
  <!-- wp:group -->
  <div class="wp-block-group desktop:mb-[150px] mb-[80px] relative">
    <!-- wp:group -->
    <div class="wp-block-group title-wrapper relative container mx-auto desktop:px-0 px-[20px] desktop:mb-[80px] mb-[50px] flex gap-[20px]">
      <!-- wp:group -->
      <div class="wp-block-group flash-wrapper wide:scale-[1] desktop:scale-[1] scale-[0.5] absolute top-[-350px] desktop:top-[-300px] wide:top-[-270px] right-[-90px] desktop:left-[-200px] wide:left-[-230px] z-[-1]">
        <!-- wp:paragraph -->
        <svg class="flash" xmlns="http://www.w3.org/2000/svg" width="688" height="801" viewBox="0 0 688 801" fill="none">
          <g filter="url(#filter0_f_1787_1988)">
          <circle cx="287.132" cy="400.132" r="150" transform="rotate(-45 287.132 400.132)" fill="url(#paint0_linear_1787_1988)" fill-opacity="0.5"/>
          </g>
          <defs>
          <filter id="filter0_f_1787_1988" x="-112.868" y="0.131836" width="800" height="800" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
          <feGaussianBlur stdDeviation="125" result="effect1_foregroundBlur_1787_1988"/>
          </filter>
          <linearGradient id="paint0_linear_1787_1988" x1="287.132" y1="250.132" x2="287.132" y2="550.132" gradientUnits="userSpaceOnUse">
          <stop stop-color="#FEC400" stop-opacity="0.6"/>
          <stop offset="1" stop-color="#FEC400" stop-opacity="0"/>
          </linearGradient>
          </defs>
        </svg>
        <!-- /wp:paragraph -->

        <!-- wp:image -->
        <figure class="wp-block-image flash absolute top-[0px] left-[0px]">
          <img
            src="https://mutiny.webo.design/wp-content/themes/mutiny/assets/img/bg-yellow-flash.png"
            alt="background image"
          />
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:group -->


      <!-- wp:group -->
      <div class="wp-block-group bg-shape w-[440px] h-[394px] z-[-1] opacity-[0.20] absolute top-[0px] right-[10px] bg-[url('https://mutiny.webo.design/wp-content/themes/mutiny/assets/img/front-page/services-bg-shape.png')] bg-center bg-no-repeat bg-contain">
        <!-- wp:paragraph -->
        <p class="hidden">background line shape</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph -->
      <p class="section-title uppercase text-primaryYellow">Usługi</p>
      <!-- /wp:paragraph -->
      <!-- wp:group -->
      <div class="wp-block-group uslugi-title desktop:leading-[55px] leading-[30px]">
        <!-- wp:paragraph -->
        <p class="uppercase desktop:text-[50px] text-[26px]">
          Kampanie realizujemy
        </p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p class="relative desktop:text-[50px] text-[26px] uppercase italic before:content-[''] before:inline-block desktop:before:mr-[20px] before:mr-[5px] before:bottom-0 before:left-0 desktop:before:w-[120px] before:w-[30px]  desktop:before:h-[3px] before:h-[2px] before:bg-white">Kompleksowo</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group -->
    <div class="wp-block-group circle-title desktop:w-[120px] desktop:h-[120px] w-[110px] h-[110px] mx-0 text-center leading-[50px] flex items-center justify-center flex-col rounded-full border border-[4px] border-[#D5D5D5] absolute desktop:top-[150px] top-[110px] desktop:left-[180px] left-[80px] translate-x-[-50%]">
      <!-- wp:paragraph -->
      <p class="self-center leading-[0px] desktop:text-[14px] text-[13px]">Marketing na</p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p class="uppercase mt-[20px] self-center desktop:text-[35px] text-[30px] font-extrabold leading-[15px]">100%</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    <!-- wp:paragraph -->
    <p class="desktop:leading-[30px] leading-[26px] desktop:text-[20px] text-[15px] font-light min-w-[150px] max-w-[400px] desktop:ml-[360px] ml-[150px] desktop:mb-[0px] mb-[40px]">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi est similique, sint <span class="text-primaryYellow">illum architecto</span> fugit quae beatae
    </p>
    <!-- /wp:paragraph -->
    
    <!-- wp:group -->
    <div class="wp-block-group desktop:mt-[-120px] w-full overflow-hidden">

      <!-- wp:group -->
      <div id="services" class="wp-block-group swiper swiperServices desktop:w-[calc(100%-150px)] relative desktop:pt-[180px] absolute top-0 desktop:left-[70px] left-[20px]">

        <!-- wp:group -->
        <div class="wp-block-group swiper-wrapper desktop:h-[480px] wide:h-[530px]">
          <?php
            $args = array(
              'post_type' => 'uslugi',
              'posts_per_page' => 6,
              'order' => 'DESC'
            );
            $post_query = new WP_Query($args);
            $counter = 0;

            if($post_query->have_posts() ) {
              while($post_query->have_posts() ) {
                $post_query->the_post();
                $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(),'portrait');
                $counter++;
              ?>
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-services relative z-[2] group p-[25px] wide:max-w-[420px] desktop:max-w-[354px] max-w-[310px] h-[450px] wide:h-[530px] rounded-[20px] transition ease-out duration-300 mr-[8px] cursor-default">
                  <!-- wp:group -->
                  <div class="wp-block-group img-clip-path-wrapper w-full h-full rounded-[20px] rounded-br-[20px] overflow-hidden absolute left-0 top-0 z-[-1]">
                    <!-- wp:group -->
                    <div class="wp-block-group <?php if($counter == 1) echo 'clipped-swiper-serv-1'; elseif($counter == $post_query->post_count) echo 'clipped-swiper-serv-2'; ?> gray-overlay w-full h-full bg-[#101010] absolute top-0 left-0 opacity-[50%] z-[1]">
                      <!-- wp:paragraph -->
                      <p class="hidden">gray overlay</p>
                      <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->                      
                    <!-- wp:image -->
                    <figure class="wp-block-image clip-path-img <?php if($counter == 1) echo 'clipped-swiper-serv-1'; elseif($counter == $post_query->post_count) echo 'clipped-swiper-serv-2'; ?>  h-full">
                      <img src="<?php echo $postImageUrl[0]; ?>" alt="services-background-image">
                    </figure>
                    <!-- /wp:image -->
                    <!-- wp:paragraph -->
                    <svg width="0" height="0" class="<?php if($counter == 1) echo ''; elseif($counter == $post_query->post_count) echo 'hidden'; ?>">
                      <defs>
                        <clipPath id="clipped-swiper-serv-1">
                        <path d="M0 88.2843C0 82.9799 2.10714 77.8929 5.85786 74.1421L74.1421 5.85786C77.8929 2.10713 82.9799 0 88.2843 0H334C345.046 0 354 8.95431 354 20V430C354 441.046 345.046 450 334 450H0V88.2843Z"/>
                        </clipPath>
                      </defs>
                    </svg>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph -->
                    <svg width="0" height="0" class="<?php if($counter == 1) echo 'hidden'; elseif($counter == $post_query->post_count) echo ''; ?>">
                      <defs>
                        <clipPath id="clipped-swiper-serv-1">
                        <path d="M0 20C0 8.9543 8.95431 0 20 0H80H334C345.046 0 354 8.9543 354 20V361.716C354 367.02 351.893 372.107 348.142 375.858L279.858 444.142C276.107 447.893 271.02 450 265.716 450H0V20Z"/>
                        </clipPath>
                      </defs>
                    </svg>
                    <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->

                  <!-- wp:group -->
                  <div class="wp-block-group slide-title absolute desktop:bottom-[85px] bottom-[100px] left-[25px] z-[1] group-hover:translate-y-[-80px] transition ease-out duration-500">
                    <!-- wp:paragraph -->
                    <a href="<?php the_permalink(); ?>" class="mr-[20px] text-[25px] font-semibold mb-[15px] underline-offset-[7px] group-hover:underline group-hover:decoration-primaryYellow group-hover:translate-y-[-80px] transition ease-out duration-500">
                      <?php the_title(); ?>
                    </a>
                    <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->

                  <!-- wp:buttons -->
                  <div class="wp-block-buttons btn-swiper-more group text-[14px] uppercase absolute desktop:bottom-[25px] bottom-[55px] left-[25px] transition ease-out duration-300">
                    <!-- wp:paragraph -->
                    <a href="<?php the_permalink(); ?>" class="inline-block z-[1]">
                      Dowiedz się więcej
                      <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none " class="inline-block ml-[10px] ">
                        <rect x="1" y="1" width="34" height="34" rx="18" stroke="#D5D5D5" stroke-width="2" fill="transparent" class="transition ease-out duration-300 group-hover:fill-[#FEC400] group-hover:stroke-[#FEC400]"/>
                        <path d="M19 22L23 18.0108L19.0217 14" stroke="white"/>
                        <path d="M12 18L20 18" stroke="white" />
                      </svg>
                    </a>
                    <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:buttons -->

                  <!-- wp:paragraph -->
                  <p class="hover-text w-[250px] mt-[270px] wide:mt-[350px] translate-y-[70px] opacity-[0%] group-hover:opacity-[100%] desktop:group-hover:translate-y-[10px] group-hover:translate-y-[-35px] transition-all ease-out duration-500 text-[15px] font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet in aspernatur alias ipsa, fuga ut!
                  </p>
                  <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->            
              <?php 
              };
            };
          ?>            
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div id="services-prev" class="wp-block-group group swiper-button-prev desktop:inline-block hidden w-[56px] h-[56px] absolute desktop:top-[90px] top-[35px] desktop:left-[800px] left-[190px]">
          <!-- wp:paragraph -->
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="rotate-180 group fill-transparent group-hover:fill-white">
            <rect x="1.5" y="1.5" width="53" height="53" rx="26.5" stroke="#D5D5D5" stroke-width="3" class="group-hover:stroke-white transition-stroke ease-out duration-500"/>
            <path d="M28 35L35 28.0189L28.0379 21" stroke="white" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500"/>
            <path d="M20 28L31 28" stroke="white" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500"/>
          </svg>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div id="services-next" class="wp-block-group group swiper-button-next desktop:inline-block hidden w-[56px] h-[56px] absolute desktop:top-[90px] top-[35px] desktop:left-[870px] left-[260px]">
          <!-- wp:paragraph -->
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="group fill-transparent group-hover:fill-white">
            <rect x="1.5" y="1.5" width="53" height="53" rx="26.5" stroke="#D5D5D5" stroke-width="3" class="group-hover:stroke-white transition-stroke ease-out duration-500"/>
            <path d="M28 35L35 28.0189L28.0379 21" stroke="white" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500"/>
            <path d="M20 28L31 28" stroke="white" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500"/>
          </svg>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group button-wrapper container mx-auto mt-[50px] flex items-center justify-center gap-[64px] cursor-pointer">
      <!-- wp:group -->
      <div class="wp-block-group gray-border hidden desktop:inline-block w-full h-[2px] bg-[#808080] opacity-[15%]">
        <!-- wp:paragraph -->
        <p class="hidden">gray separator</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:buttons -->
      <div class="wp-block-buttons min-w-[225px] flex justify-center items-center px-[20px] btn-more ml-[0px] p-[15px_30px] uppercase border-[2px] border-white rounded-full hover:bg-white hover:text-black transition ease-out duration-300">
        <!-- wp:paragraph -->
        <a href="<?php echo get_home_url() . '/services'; ?>" class="uppercase text-[14px] font-bold">Dowiedz się więcej</a>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->


  <!-- wp:image -->
  <figure class="wp-block-image img-separator desktop:mb-[150px] mb-[80px] desktop:ml-[80px] desktop:h-auto h-[180px] wide:pt-[100px]">
    <img src="https://mutiny.webo.design/wp-content/themes/mutiny/assets/img/front-page/section-separator.jpg" alt="image-page-separator">
  </figure>
  <!-- /wp:image -->  
</div>
<!-- /wp:group -->

