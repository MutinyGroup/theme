<?php
/**
 * Title: blog
 * Slug: blog
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>
<!-- wp:group -->
<div id="Blog" class="wp-block-group blog desktop:pt-[100px] pt-0 desktop:mb-[150px] mb-[60px]">
  <!-- wp:group -->
  <div class="wp-block-group relative ">
    <!-- wp:group -->
    <div class="wp-block-group title-wrapper relative container mx-auto desktop:px-0 px-[20px] desktop:mb-[0px] mb-[40px] flex gap-[20px]">
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

      <!-- wp:image -->
      <figure class="wp-block-image bg-shape desktop:w-[234px] w-[125px] z-[-1] opacity-[0.3] absolute desktop:top-[-130px] top-[-60px] desktop:left-[-10px] left-[-10px] mb-[20px] desktop:max-w-[444px] max-h-[450px]">
        <img src="https://mutiny.webo.design/wp-content/themes/mutiny/assets/img/front-page/blog-bg-shape.png" alt="background-shape">
      </figure>
      <!-- /wp:image -->
      <!-- wp:image -->
      <figure class="wp-block-image bg-shape hidden desktop:block desktop:w-[470px] w-[180px] z-[-1] opacity-[0.2] absolute top-[-280px] right-[100px] mb-[20px] desktop:max-w-[444px] max-h-[450px]">
        <img src="https://mutiny.webo.design/wp-content/themes/mutiny/assets/img/front-page/blog-bg-shape2.png" alt="background-shape">
      </figure>
      <!-- /wp:image -->
      <!-- wp:paragraph -->
      <p class="section-title uppercase text-primaryYellow">Aktualności</p>
      <!-- /wp:paragraph -->
      <!-- wp:group -->
      <div class="wp-block-group uslugi-title desktop:leading-[55px] leading-[30px]">
        <!-- wp:paragraph -->
        <p class="uppercase desktop:text-[50px] text-[26px]">
          Aktualności i wydarzenia
        </p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p class="relative desktop:text-[50px] text-[26px] uppercase italic before:content-[''] before:inline-block desktop:before:mr-[18px] before:mr-[5px] before:bottom-0 before:left-0 desktop:before:w-[120px] before:w-[30px]  desktop:before:h-[3px] before:h-[3px] before:bg-white">z Mutiny Group</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    

    <!-- wp:group -->
    <div class="wp-block-group relative">
      <!-- wp:group -->
      <div class="wp-block-group desktop:mt-[-120px] w-full overflow-hidden">
        <!-- wp:group -->
        <div id="blog" class="wp-block-group swiper swiperBlog desktop:w-[calc(100%-150px)] relative desktop:pt-[180px] absolute top-0 desktop:left-[150px] left-[20px]">
          <!-- wp:group -->
          <div class="wp-block-group swiper-wrapper">
            <?php
              $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 4,
                  'order' => 'DESC'
              );
              $post_query = new WP_Query($args);
              $counter = 0;

              if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                  $post_query->the_post();
                  $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(),'portrait');
                  $counter++;
                  if ($counter == 1){ ?>
                    <!-- wp:group -->
                    <div class="wp-block-group swiper-slide desktop:mr-[80px] mr-[20px] relative group desktop:w-[535px] w-[300px] desktop:h-[675px] h-[500px]">
                      <!-- wp:paragraph -->
                      <a href="<?php the_permalink(); ?>">                      
                        <!-- wp:group -->
                        <div class="wp-block-group mb-[20px]">
                          <!-- wp:group -->
                          <div class="wp-block-group h-[335px] desktop:h-[550px] overflow-hidden rounded-[20px]">
                            <!-- wp:image -->
                            <figure class="wp-block-image post-img clipped-blog">
                              <img src="<?php echo $postImageUrl[0]; ?>" alt="post-image">
                            </figure>
                            <!-- /wp:image -->
                            <!-- wp:paragraph -->
                            <svg x="0px" y="0px" viewBox="0 0 1374.7 1083.6" class="absolute top-0" >
                              <defs>
                                <clipPath id="clipped-blog" class="scale-[0.00177] desktop:scale-y-[0.0018] wide:scale-y-[0.001725]" clipPathUnits="objectBoundingBox">
                                  <path d="M100 0H515C526.046 0 535 8.9543 535 20V480C535 491.046 526.046 500 515 500H346.951C338.934 500 331.25 503.209 325.615 508.91L293.807 541.09C288.172 546.791 280.488 550 272.471 550H20.0002C8.95446 550 0.000170086 541.046 0.000166614 530L6.28732e-06 20C2.81493e-06 8.95432 8.95431 0 20 0L100 0Z"/>
                                </clipPath>
                              </defs>
                            </svg>
                            <!-- /wp:paragraph -->
                          </div>
                          <!-- /wp:group -->

                        </div>
                        <!-- /wp:group -->

                        <!-- wp:paragraph -->
                        <p class="slide-date font-light flex items-center before:content-[''] before:w-[20px] before:h-[1px] before:bg-primaryYellow before:inline-block before:mr-[10px] mb-[20px]"><?php the_time('d / m / Y'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p class="subtitle inline text-[23px] font-medium leading-[30px] border-b-[1px] border-transparent group-hover:border-primaryYellow group-hover:text-primaryYellow transition ease-out duration-[800ms]">
                          <?php the_title(); ?>
                        </p>
                        <!-- /wp:paragraph -->
                      </a>
                      <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->                
                  <?php 
                  }else{ ?>                    
                    <!-- wp:group -->
                    <div class="wp-block-group swiper-slide desktop:mr-[80px] mr-[20px] relative group desktop:w-[444px] w-[280px] desktop:h-[675px] h-[480px]">
                      <!-- wp:paragraph -->
                      <a href="<?php the_permalink(); ?>">                        
                        <!-- wp:group -->
                        <div class="wp-block-group img-wrapper mb-[20px]">
                          <!-- wp:group -->
                          <div class="wp-block-group overflow-hidden h-[300px] desktop:h-[500px] rounded-[20px]">
                            <!-- wp:image -->
                            <figure class="wp-block-image post-img scale-[1.12] group-hover:scale-[1.06] transition ease-out duration-[700ms]">
                              <img src="<?php echo $postImageUrl[0]; ?>" alt="post-image">
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

                        <!-- wp:paragraph -->
                        <p class="slide-date font-light flex items-center before:content-[''] before:w-[20px] before:h-[1px] before:bg-primaryYellow before:inline-block before:mr-[10px] mb-[20px]"><?php the_time('d / m / Y'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p class="subtitle inline text-[23px] font-medium leading-[30px] border-b-[1px] border-transparent group-hover:border-primaryYellow group-hover:text-primaryYellow transition ease-out duration-[800ms]">
                          <?php the_title(); ?>
                        </p>
                        <!-- /wp:paragraph -->
                      </a>
                      <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->                      
                  <?php
                  };
                };
              };
            ?>             
          </div>
          <!-- /wp:group -->

          <!-- wp:group -->
          <div id="blog-prev" class="wp-block-group group swiper-button-prev desktop:inline-block hidden w-[56px] h-[56px] absolute desktop:top-[90px] top-[35px] desktop:left-[800px] left-[190px]">
            <!-- wp:paragraph -->
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="group rotate-180 fill-transparent group-hover:fill-white">
              <rect x="1.5" y="1.5" width="53" height="53" rx="26.5" stroke="#D5D5D5" stroke-width="3" class="group-hover:stroke-white transition-stroke ease-out duration-500"/>
              <path d="M28 35L35 28.0189L28.0379 21" stroke="white" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500"/>
              <path d="M20 28L31 28" stroke="white" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500"/>
            </svg>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          <!-- wp:group -->
          <div id="blog-next" class="wp-block-group group swiper-button-next desktop:inline-block hidden w-[56px] h-[56px] absolute desktop:top-[90px] top-[35px] desktop:left-[870px] left-[260px]">
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
    </div>
    <!-- /wp:group --> 



    <!-- wp:group -->
    <div class="wp-block-group button-wrapper container mx-auto px-[20px] desktop:px-0 flex items-center justify-center desktop:gap-[80px] gap-[20px] cursor-pointer">
      <!-- wp:group -->
      <div class="wp-block-group gray-border w-full h-[2px] bg-[#808080] opacity-[25%]"></div>
      <!-- /wp:group -->
      <!-- wp:buttons -->
      <div class="wp-block-buttons btn-more text-center ml-[0px] p-[15px_30px] uppercase border-[2px] border-white rounded-full hover:bg-white hover:text-black transition ease-out duration-300">
        <!-- wp:paragraph -->
        <a href="<?php echo get_home_url() . '/blog'; ?>" class="uppercase w-[220px] text-[14px] font-bold">Zobacz wszystkie newsy</a>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->