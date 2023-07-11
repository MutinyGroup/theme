<?php
/**
 * Title: page-post-more-swiper
 * Slug: page-post-more-swiper
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>
<!-- wp:group -->
<div class="wp-block-group blog desktop:mb-[150px] mb-[60px]">
  <!-- wp:group -->
  <div class="wp-block-group relative ">
    <!-- wp:group -->
    <div class="wp-block-group title-wrapper relative container mx-auto desktop:px-0 px-[20px] desktop:mb-[90px] mb-[40px] flex gap-[20px]">
      <!-- wp:paragraph -->
      <p class="section-title uppercase text-primaryYellow">Aktualności</p>
      <!-- /wp:paragraph -->
      <!-- wp:group -->
      <div class="wp-block-group uslugi-title desktop:leading-[55px] leading-[30px]">
        <!-- wp:paragraph -->
        <p class="uppercase desktop:text-[50px] text-[26px]">
        Zobacz więcej
        </p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p class="relative desktop:text-[50px] text-[26px] uppercase italic before:content-[''] before:inline-block desktop:before:mr-[18px] before:mr-[5px] before:bottom-0 before:left-0 desktop:before:w-[120px] before:w-[30px]  desktop:before:h-[3px] before:h-[2px] before:bg-black">Aktualności</p>
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
        <div id="blog" class="wp-block-group swiper swiperBlog relative desktop:pt-[180px] absolute top-0 desktop:left-[150px] left-[20px]">
          <!-- wp:group -->
          <div class="wp-block-group swiper-wrapper">
            <?php
              $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 4,
                  'order' => 'ASC'
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
                    <div class="wp-block-group swiper-slide desktop:mr-[80px] mr-[20px] relative group desktop:w-[444px] w-[300px] desktop:h-[675px] h-[400px]">
                      <!-- wp:paragraph -->
                      <a href="<?php the_permalink(); ?>">                      
                        <!-- wp:group -->
                        <div class="wp-block-group img-clip-path-rounded mb-[20px]">
                          <!-- wp:group -->
                          <div class="wp-block-group img-clip-path-blog h-[320px] desktop:h-[460px] overflow-hidden rounded-[20px]">
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
                  }else{ ?>                    
                    <!-- wp:group -->
                    <div class="wp-block-group swiper-slide desktop:mr-[80px] mr-[20px] relative group desktop:w-[444px] w-[280px] desktop:h-[675px] h-[380px]">
                      <!-- wp:paragraph -->
                      <a href="<?php the_permalink(); ?>">                        
                        <!-- wp:group -->
                        <div class="wp-block-group img-wrapper mb-[20px]">
                          <!-- wp:group -->
                          <div class="wp-block-group overflow-hidden h-[320px] desktop:h-[460px] rounded-[20px]">
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
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="rotate-180 group fill-transparent group-hover:fill-primaryYellow">
              <rect x="1.5" y="1.5" width="53" height="53" rx="26.5" stroke="#AAA" stroke-width="3" class="group-hover:stroke-primaryYellow transition-stroke ease-out duration-500"/>
              <path d="M28 35L35 28.0189L28.0379 21" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500"/>
              <path d="M20 28L31 28" stroke="black" stroke-width="1.5"/>
            </svg>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          <!-- wp:group -->
          <div id="blog-next" class="wp-block-group group swiper-button-next desktop:inline-block hidden w-[56px] h-[56px] absolute desktop:top-[90px] top-[35px] desktop:left-[870px] left-[260px]">
            <!-- wp:paragraph -->
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="group fill-transparent group-hover:fill-primaryYellow">
              <rect x="1.5" y="1.5" width="53" height="53" rx="26.5" stroke="#AAA" stroke-width="3" class="group-hover:stroke-primaryYellow transition-stroke ease-out duration-500"/>
              <path d="M28 35L35 28.0189L28.0379 21" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500"/>
              <path d="M20 28L31 28" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500"/>
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
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->