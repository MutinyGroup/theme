<?php

/**
 * Title: page-post-realizations-more-swiper
 * Slug: page-post-realizations-more-swiper
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Swiper" class="wp-block-group realizations-posts desktop:mb-[150px] mb-[60px]">
  <!-- wp:group -->
  <div class="wp-block-group relative ">
    <!-- wp:group -->
    <div class="wp-block-group title-wrapper relative container mx-auto desktop:px-0 px-[20px] desktop:mb-[90px] mb-[40px] flex gap-[20px]">
      <!-- wp:paragraph -->
      <p class="section-title uppercase text-primaryYellow">Realizacje</p>
      <!-- /wp:paragraph -->
      <!-- wp:group -->
      <div class="wp-block-group uslugi-title desktop:leading-[55px] leading-[30px]">
        <!-- wp:paragraph -->
        <p class="uppercase desktop:text-[50px] text-[26px]">Zobacz więcej</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p class="relative desktop:text-[50px] text-[26px] uppercase italic before:content-[''] before:inline-block desktop:before:mr-[18px] before:mr-[5px] before:bottom-0 before:left-0 desktop:before:w-[80px] before:w-[30px]  desktop:before:h-[3px] before:h-[2px] before:bg-black">Realizacji</p>
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
        <div id="blog" class="wp-block-group swiper swiperBlog relative desktop:pt-[180px] top-0 left-[20px] desktop:left-[140px]">
          <!-- wp:list -->
          <ul class="wp-block-list swiper-wrapper">
            <?php
            $args = array(
              'post_type' => 'realizacje',
              'posts_per_page' => 4,
              'order' => 'DESC'
            );
            $post_query = new WP_Query($args);
            $counter = 0;

            if ($post_query->have_posts()) {
              while ($post_query->have_posts()) {
                $post_query->the_post();
                $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
                $counter++;
                if ($counter == 1) { ?>
                  <!-- wp:list-item -->
                  <li class="wp-block-group swiper-slide desktop:mr-[80px] mr-[20px] relative group desktop:w-[535px] w-[300px] h-[500px] desktop:h-[675px] ">
                    <!-- wp:paragraph -->
                    <a href="<?php the_permalink(); ?>">
                      <!-- wp:group -->
                      <div class="wp-block-group mb-[20px]">
                        <!-- wp:group -->
                        <div class="wp-block-group h-[360px] desktop:h-[560px] overflow-hidden rounded-[20px]">
                          <!-- wp:image -->
                          <figure class="wp-block-image post-img clip-path-url-['#clipped-blog'] blog-first-img-hover h-full">
                            <img src="<?php echo $postImageUrl[0]; ?>" alt="post-image">
                          </figure>
                          <!-- /wp:image -->
                          <!-- wp:paragraph -->
                          <p>
                            <svg x="0px" y="0px" viewBox="0 0 1374.7 1083.6" class="absolute top-0">
                              <defs>
                                <clipPath id="clipped-blog" class="scale-[0.00179] desktop:scale-[0.00179] wide:scale-y-[0.00181]" clipPathUnits="objectBoundingBox">
                                  <path d="M100 0H515C526.046 0 535 8.9543 535 20V480C535 491.046 526.046 500 515 500H346.951C338.934 500 331.25 503.209 325.615 508.91L293.807 541.09C288.172 546.791 280.488 550 272.471 550H20.0002C8.95446 550 0.000170086 541.046 0.000166614 530L6.28732e-06 20C2.81493e-06 8.95432 8.95431 0 20 0L100 0Z" />
                                </clipPath>
                              </defs>
                            </svg>
                          </p>
                          <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                      </div>
                      <!-- /wp:group -->

                      <!-- wp:paragraph -->
                      <p class="slide-date font-light flex items-center before:content-[''] before:w-[20px] before:h-[1px] before:bg-primaryYellow before:inline-block before:mr-[10px] mb-[20px]"><?php the_time('d / m / Y'); ?></p>
                      <!-- /wp:paragraph -->

                      <!-- wp:paragraph -->
                      <p class="subtitle inline text-[23px] font-medium leading-[30px] border-b-[1px] border-transparent group-hover:border-primaryYellow group-hover:text-primaryYellow transition ease-out duration-[800ms]"><?php the_title(); ?></p>
                      <!-- /wp:paragraph -->
                    </a>
                    <!-- /wp:paragraph -->
                  </li>
                  <!-- /wp:list-item -->
                <?php
                } else { ?>
                  <!-- wp:list-item -->
                  <li class="wp-block-group swiper-slide desktop:mr-[80px] mr-[20px] relative group desktop:w-[444px] w-[280px] desktop:h-[675px] h-[480px]">
                    <!-- wp:paragraph -->
                    <a href="<?php the_permalink(); ?>">
                      <!-- wp:group -->
                      <div class="wp-block-group img-wrapper mb-[20px]">
                        <!-- wp:group -->
                        <div class="wp-block-group overflow-hidden h-[320px] desktop:h-[500px] wide:h-[500px] rounded-[20px]">
                          <!-- wp:image -->
                          <figure class="wp-block-image post-img h-full scale-[1.12] group-hover:scale-[1.06] transition ease-out duration-[600ms]">
                            <img src="<?php echo $postImageUrl[0]; ?>" alt="post-image">
                          </figure>
                          <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->
                      </div>
                      <!-- /wp:group -->

                      <!-- wp:paragraph -->
                      <p class="slide-date font-light flex items-center before:content-[''] before:w-[20px] before:h-[1px] before:bg-primaryYellow before:inline-block before:mr-[10px] mb-[20px]"><?php the_time('d / m / Y'); ?></p>
                      <!-- /wp:paragraph -->

                      <!-- wp:paragraph -->
                      <p class="subtitle inline text-[23px] font-medium leading-[30px] border-b-[1px] border-transparent group-hover:border-primaryYellow group-hover:text-primaryYellow transition ease-out duration-[800ms]"><?php the_title(); ?></p>
                      <!-- /wp:paragraph -->
                    </a>
                    <!-- /wp:paragraph -->
                  </li>
                  <!-- /wp:list-item -->
            <?php
                };
              };
            };
            ?>
          </ul>
          <!-- /wp:list -->

          <!-- wp:group -->
          <div id="blog-prev" class="wp-block-group group swiper-button-prev desktop:inline-block hidden w-[56px] h-[56px] absolute desktop:top-[90px] top-[35px] desktop:left-[800px] left-[190px] after:hidden">
            <!-- wp:paragraph -->
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="rotate-180 group fill-transparent group-hover:fill-primaryYellow">
              <rect x="1.5" y="1.5" width="53" height="53" rx="26.5" stroke="#AAA" stroke-width="3" class="group-hover:stroke-primaryYellow transition-stroke ease-out duration-500" />
              <path d="M28 35L35 28.0189L28.0379 21" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
              <path d="M20 28L31 28" stroke="black" stroke-width="1.5" />
            </svg>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          <!-- wp:group -->
          <div id="blog-next" class="wp-block-group group swiper-button-next desktop:inline-block hidden w-[56px] h-[56px] absolute desktop:top-[90px] top-[35px] desktop:left-[870px] left-[260px] after:hidden">
            <!-- wp:paragraph -->
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="group fill-transparent group-hover:fill-primaryYellow">
                <rect x="1.5" y="1.5" width="53" height="53" rx="26.5" stroke="#AAA" stroke-width="3" class="group-hover:stroke-primaryYellow transition-stroke ease-out duration-500" />
                <path d="M28 35L35 28.0189L28.0379 21" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
                <path d="M20 28L31 28" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
              </svg>
            </p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->