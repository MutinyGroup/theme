<?php

/**
 * Title: realizations
 * Slug: realizations
 * Categories: Kafelki
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Realizacje" class="wp-block-group realizacje relative desktop:pt-[220px] pt-[180px] desktop:mb-[200px] mb-[60px] overflow-visible">
  <!-- wp:paragraph -->
  <p>
    <svg class="bg-shape z-[0] opacity-[0.16] absolute top-[130px] right-0" xmlns="http://www.w3.org/2000/svg" width="1051" height="816" viewBox="0 0 1051 816" fill="none">
      <g style="mix-blend-mode:color-dodge">
        <path d="M1 1.96689L938.264 332.267L938.596 332.384L938.929 332.267L1406.89 167.352V413.308L938.596 578.341L234.981 330.381L233.649 329.911V331.324V814.048L1 732.06V1.96689Z" stroke="#808080" stroke-width="2" />
      </g>
    </svg>
  </p>
  <!-- /wp:paragraph -->

  <!-- wp:group -->
  <div class="wp-block-group container relative mx-auto desktop:px-0 px-[20px]">
    <!-- wp:group -->
    <div class="wp-block-group title-wrapper relative desktop:mb-[150px] mb-[50px] desktop:flex gap-[20px]">
      <!-- wp:group -->
      <div class="wp-block-group flash-wrapper wide:scale-[1] desktop:scale-[1] scale-[0.5] absolute top-[-340px] desktop:top-[-300px] wide:top-[-270px] left-[-240px] desktop:left-[-200px] wide:left-[-260px] z-[0]">
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

      <!-- wp:group -->
      <div class="wp-block-group h-fit overflow-hidden">
        <!-- wp:paragraph -->
        <p data-aos="fade-up" data-aos-duration="600" data-aos-offset="130" class="section-title uppercase text-primaryYellow">Realizacje</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->



      <!-- wp:group -->
      <div class="wp-block-group realizations-title z-[1] relative">
        <!-- wp:group -->
        <div class="wp-block-group overflow-hidden">
          <!-- wp:paragraph -->
          <p data-aos="fade-up" data-aos-duration="600" data-aos-offset="130" class="uppercase desktop:text-[50px] text-[24px] desktop:leading-[55px] leading-[30px]">Zobacz efekty</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group overflow-hidden">
          <!-- wp:paragraph {"templateLock":"contentOnly"} -->
          <p data-aos="fade-up" data-aos-duration="600" data-aos-offset="85" class="relative ml-[12px] desktop:text-[50px] text-[24px] desktop:leading-[55px] leading-[30px] inline-block uppercase italic before:content-[''] before:inline-block desktop:before:mr-[18px] before:mr-[8px] before:bottom-0 before:left-0 desktop:before:w-[90px] before:w-[30px] desktop:before:h-[3px] before:h-[2px] before:bg-white">naszej pracy</p>
          <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- wp:paragraph -->
    <p class="sub-title mb-[50px] desktop:mb-0 desktop:max-w-[400px] max-w-full desktop:text-[20px] text-[16px] font-light desktop:leading-[30px] leading-[26px] desktop:absolute desktop:left-[65%] desktop:top-[40px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore <span class="text-primaryYellow">et dolore magna aliqua. </span></p>
    <!-- /wp:paragraph -->
    <!-- wp:group -->
    <div class="wp-block-group circle-title hidden w-[120px] h-[120px] mx-0 leading-[20px] desktop:flex items-center justify-center flex-col rounded-full border-[4px] border-[#D5D5D5] absolute desktop:top-[130px] top-[80px] desktop:left-[60%] left-[75px] translate-x-[-50%]">
      <!-- wp:paragraph -->
      <p class="leading-[28px] uppercase text-[25px] font-extrabold">CASE</p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p class="">Study</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->


    <!-- wp:group -->
    <div class="wp-block-group gallery-cols wide:max-w-[1260px] mx-auto relative pb-[30px]">
      <!-- wp:group -->
      <div class="wp-block-group w-[100%] desktop:flex flex-wrap justify-center gap-x-[8px] gap-y-[30px]">
        <?php
        $args = array(
          'post_type' => 'realizacje',
          'posts_per_page' => 2,
          'order' => 'DESC',
          'category_name' => 'glowna'
        );
        $post_query = new WP_Query($args);

        if ($post_query->have_posts()) {
          $counter = 0;
          while ($post_query->have_posts()) {
            $post_query->the_post();
            $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
            $counter++;
            if (true) { ?>
              <!-- wp:paragraph -->
              <a href="<?php the_permalink(); ?>" data-aos="fade-right" data-aos-duration="600" data-aos-offset="130" class="tile-realizacje mb-[30px] desktop:w-[545px] wide:w-[600px] h-[480px] desktop:h-[700px] wide:h-[780px] relative group transition ease-in-out duration-[400ms] group hover:before:opacity-100 before:content-[''] before:opacity-0 before:absolute before:top-0 before:left-0 before:z-[1] before:w-full before:h-full before:bg-gradient-to-t before:from-black before:via-[rgba(0,0,0,0)] before:bg-center before:bg-cover before:transition before:duration-[300ms] before:ease-out <?php echo (($counter % 2)) ? "tile-realizacje-1 clip-path-url-['#clipped-realizations-1']" : "tile-realizacje-2 clip-path-url-['#clipped-realizations-2'] desktop:translate-y-[70px]"; ?>">
                <!-- wp:group -->
                <div class="wp-block-group w-full h-full">
                  <!-- wp:group -->
                  <div class="wp-block-group <?php echo ($counter == 1) ? "clip-path-url-['#clipped-realizations-1']" : (($counter == $post_query->post_count) ? "clip-path-url-['#clipped-realizations-2']" : ''); ?> gray-overlay w-full h-full bg-[#101010] z-[1] absolute top-0 left-0 opacity-[60%]">
                    <!-- wp:paragraph -->
                    <p class="hidden">gray overlay</p>
                    <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->
                  <!-- wp:group -->
                  <div class="wp-block-group img-clip-path-wrapper w-full h-full overflow-hidden absolute left-0 top-0">
                    <!-- wp:image -->
                    <figure class="wp-block-image <?php echo ($counter == 1) ? "clip-path-url-['#clipped-realizations-1']" : (($counter == $post_query->post_count) ? "clip-path-url-['#clipped-realizations-2']" : ''); ?> h-full group-hover:grayscale transition ease-in-out duration-[400ms]">
                      <img src="<?php echo $postImageUrl[0]; ?>" alt="realizations-backgroun-image">
                    </figure>
                    <!-- /wp:image -->
                    <!-- wp:paragraph -->
                    <p>
                      <svg x="0px" y="0px" viewBox="0 0 1374.7 1083.6" class="absolute top-0">
                        <defs>
                          <?php
                          if ($counter == 1) {
                            echo '
                              <clipPath id="clipped-realizations-1" class="scale-[0.00187]" clipPathUnits="objectBoundingBox">
                                <path d="M94.1421 5.85786C97.8929 2.10713 102.98 0 108.284 0H515C526.046 0 535 8.95431 535 20V670C535 686.569 521.569 700 505 700H20.0002C8.95451 700 0.000199138 691.046 0.000195955 680L3.12042e-05 108.284C2.96756e-05 102.98 2.10717 97.8929 5.85789 94.1421L94.1421 5.85786Z"/>
                              </clipPath>
                              ';
                          } elseif ($counter == $post_query->post_count) {
                            echo '
                              <clipPath id="clipped-realizations-2" class="scale-[0.00142] scale-x-[0.00187]" clipPathUnits="objectBoundingBox">
                                <path d="M99.9999 0H515C526.046 0 535 8.95431 535 20V630C535 641.046 526.046 650 515 650H346.951C338.934 650 331.25 653.209 325.615 658.91L293.807 691.09C288.172 696.791 280.488 700 272.471 700H20.0001C8.9544 700 0.000110665 691.046 0.000107937 680L-5.50846e-05 20C-5.78129e-05 8.9543 8.95425 0 19.9999 0L99.9999 0Z"/>
                              </clipPath>
                              ';
                          }
                          ?>

                        </defs>
                      </svg>
                    </p>
                    <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->
                  <!-- wp:group -->
                  <div class="wp-block-group tile-title z-[1] absolute bottom-[50px] desktop:left-[50px] left-[20px]pr-[20px]">
                    <!-- wp:paragraph -->
                    <p class="w-fit desktop:text-[35px] text-[30px] desktop:mb-[20px] mb-[10px] leading-[42px] font-semibold desktop:group-hover:translate-y-[-50px] group-hover:translate-y-[-70px] transition ease-in-out duration-[400ms] cursor-pointer"><?php the_title(); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:list -->
                    <ul class="wp-block-list categories-wrapper mb-[20px] flex flex-wrap gap-[10px] desktop:group-hover:translate-y-[-50px] group-hover:translate-y-[-70px] transition ease-in-out duration-[400ms]">
                      <?php
                      $categoriesArray = get_the_category();
                      foreach ($categoriesArray as $category) {
                        $category_link = get_category_link($category->term_id);
                      ?>
                        <?php
                        if (($category->name) == 'glowna') {
                          echo '';
                        } else { ?>
                          <!-- wp:list-item -->
                          <li class="uppercase p-[5px_10px] inline-block text-[12px] text-black font-semibold text-center bg-[#D5D5D5] rounded-full">
                            <p><?php echo $category->name ?></p>
                          </li>
                          <!-- /wp:list-item -->
                        <?php
                        };
                        ?>
                      <?php }; ?>
                    </ul>
                    <!-- /wp:list -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons group uppercase text-[14px] font-semibold group-hover:translate-y-[25px] transition ease-in-out duration-[400ms]">
                      <!-- wp:paragraph -->
                      <p class="wp-block-link inline-block">Czytaj więcej<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none " class="inline-block ml-[10px] ">
                          <rect x="1" y="1" width="34" height="34" rx="18" stroke="#D5D5D5" stroke-width="2" fill="transparent" class="transition ease-in-out duration-[400ms] group-hover:fill-[#FEC400] group-hover:stroke-[#FEC400]" />
                          <path d="M19 22L23 18.0108L19.0217 14" stroke="white" />
                          <path d="M12 18L20 18" stroke="white" />
                        </svg></p>
                      <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:buttons -->
                  </div>
                  <!-- /wp:group -->
                  <!-- wp:paragraph -->
                  <p class="on-hover-desc pr-[40px] font-light leading-[22px] z-[1] absolute bottom-[90px] desktop:left-[50px] left-[20px] translate-y-[70px] opacity-[0%] group-hover:opacity-[100%] group-hover:translate-y-[8px] transition-all ease-in-out duration-[400ms]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                  <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
              </a>
              <!-- /wp:paragraph -->
        <?php
            }
          };
        };
        ?>
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group button-wrapper desktop:mt-[80px] mt-[40px] flex items-center justify-center gap-[64px] cursor-pointer">
      <!-- wp:group -->
      <div class="wp-block-group gray-border hidden desktop:inline-block w-full h-[2px] bg-[#808080] opacity-[15%]">
        <!-- wp:paragraph -->
        <p class="hidden">gray separator</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:list -->
      <ul class="wp-block-list min-w-fit">
        <!-- wp:list-item -->
        <li class="wp-block-group">
          <a href="<?php echo get_home_url() . '/realizations'; ?>" class="uppercase group bg-black text-white text-[14px] font-bold min-w-fit flex justify-center items-center px-[20px] btn-more ml-[0px] p-[15px_30px] border-[2px] rounded-full hover:bg-white hover:text-black">
            <!-- wp:group -->
            <div class="wp-block-group overflow-hidden h-[18px]">
              <!-- wp:group -->
              <div class="wp-block-group overflow-hidden">
                <!-- wp:paragraph -->
                <p class="translate-y-0 group-hover:translate-y-[-22px] transition ease duration-[300ms]">Zobacz wszystkie realizacje</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph -->
                <p class="translate-y-0 group-hover:translate-y-[-22px] transition ease duration-[300ms]">Zobacz wszystkie realizacje</p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
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