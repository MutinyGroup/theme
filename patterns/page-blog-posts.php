<?php
/**
 * Title: page-blog-posts
 * Slug: page-blog-posts
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group -->
<div class="wp-block-group page-about-services mb-[150px] overflow-hidden">
  <!-- wp:group -->
  <div
    class="wp-block-group container mx-auto relative desktop:px-0 px-[20px]"
  >    
    <!-- wp:group -->
    <div class="wp-block-group new gallery-cols relative flex justify-between pb-[150px]">
      <!-- wp:image -->
      <figure class="wp-block-image absolute top-[0px] right-[0px]">
        <img src="https://mutiny.webo.design/wp-content/themes/mutiny/assets/img/page-blog/bg-shape.png" alt="bg-shape">
      </figure>
      <!-- /wp:image -->
      <!-- wp:list -->
      <ul class="wp-block-list flex flex-wrap justify-between wide:justify-center gap-x-[60px] wide:gap-x-[120px] gap-y-[150px]">
        <?php
          $args = array(
              'post_type' => 'post',
              'posts_per_page' => 6,
              'order' => 'DESC'
          );
          $post_query = new WP_Query($args);
          $counter = 0;
          $tab=[0,1,1,0,0,1];
          $i=0;

          if($post_query->have_posts() ) {
            while($post_query->have_posts() ) {
              $post_query->the_post();
              $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(),'portrait');
              $counter++;
              if ($tab[$i] == 0){ ?>
                <!-- wp:list-item -->
                <li class="wp-block-group bigger swiper-slide relative group desktop:w-[520px] w-fit desktop:h-[675px] h-[320px] <?php if (!($counter % 2)) echo 'desktop:translate-y-[120px]'; else echo ''; ?>">
                  <!-- wp:paragraph -->
                  <a href="<?php the_permalink(); ?>">
                    <!-- wp:group -->
                    <div class="wp-block-group not_img-clip-path-rounded mb-[20px]">
                      <!-- wp:group -->
                      <div class="wp-block-group img-clip-path-blog h-[320px] desktop:h-auto overflow-hidden rounded-[20px]">
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
                </li>
                <!-- /wp:list-item -->                  
              <?php 
              $i++; 
              }else{ ?>
                <!-- wp:list-item -->
                <li class="wp-block-group smaller swiper-slide relative group desktop:w-[440px] w-fit desktop:h-[675px] h-[320px] <?php if (!($counter % 2)) echo 'desktop:translate-y-[120px]'; else echo ''; ?>">
                  <!-- wp:paragraph -->
                  <a href="<?php the_permalink(); ?>">
                    <!-- wp:group -->
                    <div class="wp-block-group img-clip-path-rounded mb-[20px]">
                      <!-- wp:group -->
                      <div class="wp-block-group img-clip-path-blog h-[320px] desktop:h-auto overflow-hidden rounded-[20px]">
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
                </li>
                <!-- /wp:list-item -->                  
              <?php
              $i++; 
              };
            };
          };
        ?>
      </ul>
      <!-- /wp:list -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div
      class="wp-block-group button-wrapper desktop:mt-[80px] mt-[40px] flex items-center justify-center gap-[64px] cursor-pointer"
    >
      <!-- wp:group -->
      <div
        class="wp-block-group gray-border hidden desktop:inline-block w-full h-[2px] bg-[#808080] opacity-[15%]"
      ></div>
      <!-- /wp:group -->

      <!-- wp:buttons -->
      <div
        class="wp-block-buttons btn-more desktop:w-[330px] ml-[0px] p-[15px_30px] uppercase border-[2px] border-[#D5D5D5] rounded-full hover:border-primaryYellow hover:text-black transition ease-out duration-300"
      >
        <!-- wp:paragraph -->
        <a
          href="#"
          class="uppercase text-[14px] font-bold"
          >Pokaż więcej</a
        >
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:buttons -->

      <!-- wp:group -->
      <div
        class="wp-block-group gray-border hidden desktop:inline-block w-full h-[2px] bg-[#808080] opacity-[15%]"
      ></div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->


  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->