<?php

/**
 * Title: page-services-services
 * Slug: page-services-services
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Kafelki" class="wp-block-group page-about-services desktop:mt-[150px] pt-[80px] desktop:pt-[80px]">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto relative desktop:px-0 px-[20px]">
    <!-- wp:group -->
    <div class="wp-block-group title-wrapper relative container mx-auto desktop:mb-[100px] mb-[60px] desktop:flex z-[1]">
      <!-- wp:paragraph -->
      <p>
        <svg class="flash desktop:scale-[1] scale-[0.4] absolute desktop:top-[-330px] top-[-360px] desktop:left-[-140px] right-[-100px] z-[-1]" xmlns="http://www.w3.org/2000/svg" width="688" height="801" viewBox="0 0 688 801" fill="none">
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
      <!-- wp:paragraph -->
      <p>
        <svg class="shape scale-[0.6] desktop:scale-[1] z-[-1] absolute top-0 desktop:right-[-100px] right-auto left-[-40px] desktop:left-auto" xmlns="http://www.w3.org/2000/svg" width="470" height="396" viewBox="0 0 470 396" fill="none">
          <path d="M468.243 393.924L1 236.702V1.9702L468.243 159.192V393.924Z" stroke="#FFFFFF" stroke-width="2" />
        </svg>
      </p>
      <!-- /wp:paragraph -->

      <!-- wp:group -->
      <div class="wp-block-group h-fit overflow-hidden">
        <!-- wp:paragraph -->
        <span data-aos="fade-up" data-aos-duration="600" data-aos-offset="30" class="section-title block desktop:basis-auto desktop:w-[175px] pt-[4px] desktop:text-right uppercase text-primaryYellow pr-[20px]">Marketing robimy kompleksowo</span>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group uslugi-title desktop:text-[50px] text-[24px] desktop:leading-[55px] leading-[30px]">
        <!-- wp:group -->
        <div class="wp-block-group overflow-hidden">
          <!-- wp:paragraph -->
          <span data-aos="fade-up" data-aos-duration="600" data-aos-offset="30" class="block company-title overflow-hidden"><span class="block uppercase">Wybierz usługę którą</span></span>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group overflow-hidden">
          <!-- wp:paragraph -->
          <span data-aos="fade-up" data-aos-duration="600" data-aos-offset="30" class="uppercase test01 inline-block ">JESTEŚ<span class="relative ml-[12px] inline-block uppercase italic before:content-[''] before:inline-block desktop:before:mr-[18px] before:mr-[8px] before:bottom-0 before:left-0 desktop:before:w-[90px] before:w-[30px] desktop:before:h-[3px] before:h-[2px] before:bg-black">ZAINTERESOWANY</span></span>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p class="hidden uppercase desktop:text-[50px] text-[24px] desktop:leading-[55px] leading-[30px]">Wybierz usługę którą <br />jesteś<span class="relative desktop:text-[50px] text-[24px] uppercase italic before:content-[''] before:inline-block desktop:before:mr-[8px] before:mr-[4px] before:bottom-0 before:left-0 desktop:before:w-[90px] before:w-[30px] desktop:before:h-[3px] before:h-[2px] before:bg-black">zainteresowany</span></p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group paragrapth-wrapper desktop:max-w-[1115px] mb-[100px] mx-auto z-[1] relative">
      <!-- wp:paragraph -->
      <span data-aos="fade-right" data-aos-duration="600" data-aos-offset="85" class="block text ml-auto mr-0 text-[20px] leading-[30px] max-w-[625px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group gallery-cols relative pb-[150px]">
      <!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"ulugi"},"isLink":true} -->
      <!-- wp:post-template -->
      <!-- wp:group -->
      <div class="container mx-auto">
        <!-- wp:post-title {"isLink":true} /-->

      </div>
      <!-- wp:group -->
      <!-- /wp:post-template -->
      <!-- /wp:query -->
      <!-- wp:list -->
      <ul class="wp-block-list w-[100%] wide:max-w-[1100px] mx-auto flex flex-wrap justify-center gap-x-[8px] gap-y-[30px]">
        <?php
        $args = array(
          'post_type' => 'uslugi',
          'posts_per_page' => 6,
          'order' => 'DESC'
        );
        $post_query = new WP_Query($args);

        if ($post_query->have_posts()) {
          $counter = 0;
          while ($post_query->have_posts()) {
            $post_query->the_post();
            $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
            $counter++;
            if (true) { ?>
              <!-- wp:list-item -->
              <li class="wp-block-group swiper-slide servicesTile relative group desktop:w-[510px] w-[100%] desktop:h-[600px] h-[320px] transition duration-[800ms] ease-in <?php echo (($counter % 2)) ? "" : 'desktop:translate-y-[50px]'; ?>">
                <!-- wp:group -->
                <div class="wp-block-group h-full w-full">
                  <!-- wp:group -->
                  <div class="wp-block-group group relative gallery-tile w-full before:content-[''] before:opacity-100 before:absolute before:top-0 before:left-0 before:z-[0] before:w-full before:h-full before:bg-cover before:transition before:duration-[300ms] before:ease-out <?php echo ($counter == 1) ? "clip-path-url-['#clipped-realizations-1'] tile-services-1" : (($counter == $post_query->post_count) ? "clip-path-url-['#clipped-realizations-2'] tile-services-2" : ''); ?>  z-[1] group desktop:p-[25px] desktop:h-[600px] h-[320px] overflow-hidden rounded-[20px] transition ease-out duration-300 mr-[8px] mb-[30px]">
                    <!-- wp:group -->
                    <div class="wp-block-group img-clip-path-wrapper w-full h-full rounded-tr-[20px] rounded-br-[20px] overflow-hidden absolute left-0 top-0 z-[-1]">
                      <!-- wp:image -->
                      <figure class="wp-block-image h-full group-hover:grayscale transition ease-in-out duration-[400ms] <?php echo ($counter == 1) ? "clip-path-url-['#clipped-realizations-1']" : (($counter == $post_query->post_count) ? "clip-path-url-['#clipped-realizations-2']" : ''); ?>">
                        <img src="<?php echo $postImageUrl[0]; ?>" alt="services-backgroun-image" />
                      </figure>
                      <!-- /wp:image -->

                      <!-- wp:paragraph -->
                      <p>
                        <svg x="0px" y="0px" viewBox="0 0 1374.7 1083.6" class="absolute top-0">
                          <defs>
                            <?php
                            if ($counter == 1) {
                              echo '
                                <clipPath id="clipped-realizations-1" class="scale-[0.002]" clipPathUnits="objectBoundingBox">
                                  <path d="M94.1421 5.85786C97.8929 2.10713 102.98 0 108.284 0H515C526.046 0 535 8.95431 535 20V670C535 686.569 521.569 700 505 700H20.0002C8.95451 700 0.000199138 691.046 0.000195955 680L3.12042e-05 108.284C2.96756e-05 102.98 2.10717 97.8929 5.85789 94.1421L94.1421 5.85786Z"/>
                                </clipPath>
                                ';
                            } elseif ($counter == $post_query->post_count) {
                              echo '
                                <clipPath id="clipped-realizations-2" class="scale-[0.00143] scale-x-[0.00188]" clipPathUnits="objectBoundingBox">
                                  <path d="M99.9999 0H515C526.046 0 535 8.95431 535 20V630C535 641.046 526.046 650 515 650H346.951C338.934 650 331.25 653.209 325.615 658.91L293.807 691.09C288.172 696.791 280.488 700 272.471 700H20.0001C8.9544 700 0.000110665 691.046 0.000107937 680L-5.50846e-05 20C-5.78129e-05 8.9543 8.95425 0 19.9999 0L99.9999 0Z"/>
                                </clipPath>
                              ';
                            };
                            ?>

                          </defs>
                        </svg>
                      </p>
                      <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                    <!-- wp:group -->
                    <div class="wp-block-group slide-title absolute desktop:bottom-[0px] bottom-[55px] desktop:left-[25px] left-[20px] translate-y-[130px] desktop:translate-y-[-15px] group-hover:translate-y-[-20px] desktop:group-hover:translate-y-[-150px] transition ease-out duration-[400ms]">
                      <!-- wp:paragraph -->
                      <p class="mr-[20px] desktop:text-[35px] text-[26px] font-semibold mb-[15px] underline-offset-[9px] group-hover:underline group-hover:decoration-primaryYellow"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
                      <!-- /wp:paragraph -->
                      <!-- wp:list -->
                      <ul class="wp-block-list mt-[20px] hover-text desktop:block opacity-[0%] group-hover:opacity-[100%] text-[15px] leading-[32px] font-semibold uppercase transition ease-out duration-500">
                        <!-- wp:list-item -->
                        <li class="mb-[6px] text-[15px] relative">
                          <!-- wp:group -->
                          <div class="wp-block-group wrapper-test flex gap-[10px]">
                            <!-- wp:group -->
                            <div class="wp-block-group separator mt-[8px] w-[20px] h-[2px] bg-primaryYellow">
                              <!-- wp:paragraph -->
                              <p class="hidden">separator</p>
                              <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:paragraph -->
                            <p class="leading-[20px]">Opracowanie strategii marketingowych</p>
                            <!-- /wp:paragraph -->
                          </div>
                          <!-- /wp:group -->
                        </li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li class="mb-[6px] text-[15px] relative">
                          <!-- wp:group -->
                          <div class="wp-block-group wrapper-test flex gap-[10px]">
                            <!-- wp:group -->
                            <div class="wp-block-group separator mt-[8px] w-[20px] h-[2px] bg-primaryYellow">
                              <!-- wp:paragraph -->
                              <p class="hidden">separator</p>
                              <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:paragraph -->
                            <p class="leading-[20px]">Content marketing</p>
                            <!-- /wp:paragraph -->
                          </div>
                          <!-- /wp:group -->
                        </li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li class="mb-[6px] text-[15px] relative">
                          <!-- wp:group -->
                          <div class="wp-block-group wrapper-test flex gap-[10px]">
                            <!-- wp:group -->
                            <div class="wp-block-group separator mt-[8px] w-[20px] h-[2px] bg-primaryYellow">
                              <!-- wp:paragraph -->
                              <p class="hidden">separator</p>
                              <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:paragraph -->
                            <p class="leading-[20px]">Kreowanie tosamości marki</p>
                            <!-- /wp:paragraph -->
                          </div>
                          <!-- /wp:group -->
                        </li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li class="mb-[6px] text-[15px] relative">
                          <!-- wp:group -->
                          <div class="wp-block-group wrapper-test flex gap-[10px]">
                            <!-- wp:group -->
                            <div class="wp-block-group separator mt-[8px] w-[20px] h-[2px] bg-primaryYellow">
                              <!-- wp:paragraph -->
                              <p class="hidden">separator</p>
                              <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:paragraph -->
                            <p class="leading-[20px]">Dobór kanałów i narzędzie komunikacji</p>
                            <!-- /wp:paragraph -->
                          </div>
                          <!-- /wp:group -->
                        </li>
                        <!-- /wp:list-item -->
                      </ul>
                      <!-- /wp:list -->
                    </div>
                    <!-- /wp:group -->
                  </div>
                  <!-- /wp:group -->

                  <!-- wp:paragraph -->
                  <p class="btn-swiper-more group z-[2] pr-[20px] desktop:pr-0 text-[14px] font-semibold uppercase absolute  desktop:bottom-[75px] bottom-[20px] desktop:left-[25px] left-[20px] transition ease-out duration-300"><a href="<?php echo get_permalink(); ?>">Dowiedz się więcej</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none " class="inline-block ml-[10px]">
                      <rect x="1" y="1" width="34" height="34" rx="18" stroke="#AAAAAA" stroke-width="2" fill="transparent" class="transition ease-out duration-300 group-hover:fill-[#FEC400] group-hover:stroke-[#FEC400]" />
                      <path d="M19 22L23 18.0108L19.0217 14" stroke="black" />
                      <path d="M12 18L20 18" stroke="black" />
                    </svg>
                  </p>
                  <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
              </li>
              <!-- /wp:list-item -->
        <?php
            }
          };
        };
        wp_reset_query();
        ?>
      </ul>
      <!-- /wp:list -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->