<?php

/**
 * Title: page-blog-posts
 * Slug: page-blog-posts
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Posty" class="wp-block-group page-blog-posts mb-[80px] desktop:mb-[150px] pt-[80px] desktop:pt-0 overflow-hidden">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto relative desktop:px-0 px-[20px]">
    <!-- wp:group -->
    <div class="wp-block-group new gallery-cols relative flex justify-between desktop:pb-[150px] pb-[80px]">
      <!-- wp:paragraph -->
      <p>
        <svg class="bg-shape z-[0] absolute top-[0px] right-[0px]" xmlns="http://www.w3.org/2000/svg" width="470" height="396" viewBox="0 0 470 396" fill="none">
          <path d="M468.243 393.924L1 236.702V1.9702L468.243 159.192V393.924Z" stroke="white" stroke-width="2" />
        </svg>
      </p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <svg class="bg-shape z-[0] absolute bottom-[370px] right-[0px]" xmlns="http://www.w3.org/2000/svg" width="1020" height="610" viewBox="0 0 1020 610" fill="none">
        <path d="M1 1.96689L938.264 332.267L938.596 332.384L938.929 332.267L1406.89 167.352V413.308L938.596 578.341L234.981 330.381L233.649 329.911V331.324V608.587L1 526.6V1.96689Z" stroke="white" stroke-width="2" />
      </svg>
      <!-- /wp:paragraph -->
      <!-- wp:list -->
      <ul class="wp-block-list blog-posts-wrapper flex flex-wrap desktop:justify-center desktop:gap-x-[100px] wide:gap-x-[100px] gap-y-[40px] desktop:gap-y-[200px]">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 2,
          'paged' => $currentUrl,
          'order' => 'DESC'
        );
        $post_query = new WP_Query($args);
        $counter = 0;
        $tab = [0, 1, 1, 0, 0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 1, 0, 0, 1];
        $i = 0;

        if ($post_query->have_posts()) {
          while ($post_query->have_posts()) {
            $post_query->the_post();
            $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
            $counter++;
            if ($tab[$i] == 0) { ?>
              <!-- wp:list-item -->
              <li class="wp-block-group bigger swiper-slide relative group w-full desktop:w-[535px] wide:w-[580px] h-fit desktop:h-[545px] wide:h-[650px] <?php echo (!($counter % 2)) ? 'desktop:translate-y-[120px]' : ''; ?>">
                <a href="<?php the_permalink(); ?>">
                  <!-- wp:group -->
                  <div class="wp-block-group h-full mb-[20px]">
                    <!-- wp:group -->
                    <div class="wp-block-group h-full overflow-hidden rounded-[20px]">
                      <!-- wp:image -->
                      <figure class="wp-block-image h-full post-img clip-path-url-['#clipped-blog']">
                        <img src="<?php echo $postImageUrl[0]; ?>" alt="post-image">
                      </figure>
                      <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->
                    <!-- wp:paragraph -->
                    <p>
                      <svg x="0px" y="0px" viewBox="0 0 1374.7 1083.6" class="absolute top-0">
                        <defs>
                          <clipPath id="clipped-blog" class="scale-[0.00182] scale-x-[0.00187] desktop:scale-[0.00179] wide:scale-y-[0.00181]" clipPathUnits="objectBoundingBox">
                            <path d="M100 0H515C526.046 0 535 8.9543 535 20V480C535 491.046 526.046 500 515 500H346.951C338.934 500 331.25 503.209 325.615 508.91L293.807 541.09C288.172 546.791 280.488 550 272.471 550H20.0002C8.95446 550 0.000170086 541.046 0.000166614 530L6.28732e-06 20C2.81493e-06 8.95432 8.95431 0 20 0L100 0Z" />
                          </clipPath>
                        </defs>
                      </svg>
                    </p>
                    <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->

                  <!-- wp:paragraph -->
                  <p class="slide-date font-light flex items-center before:content-[''] before:w-[20px] before:h-[1px] before:bg-primaryYellow before:inline-block before:mr-[10px] mb-[20px]"><?php the_time('d / m / Y'); ?></p>
                  <!-- /wp:paragraph -->

                  <!-- wp:group -->
                  <div class="wp-block-group subtitle inline text-[23px] font-medium leading-[30px] border-b-[1px] border-transparent group-hover:border-primaryYellow group-hover:text-primaryYellow transition ease-out duration-[800ms]">
                    <!-- wp:paragraph -->
                    <p><?php the_title(); ?></p>
                    <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->
                </a>
              </li>
              <!-- /wp:list-item -->
            <?php
              $i++;
            } else { ?>
              <!-- wp:list-item -->
              <li class="wp-block-group smaller swiper-slide relative group w-full desktop:w-[444px] wide:w-[490px] h-fit desktop:h-[500px] <?php echo (!($counter % 2)) ? 'desktop:translate-y-[120px]' : ''; ?>">
                <a href="<?php the_permalink(); ?>">
                  <!-- wp:group -->
                  <div class="wp-block-group h-fit mb-[20px]">
                    <!-- wp:group -->
                    <div class="wp-block-group h-full desktop:h-auto overflow-hidden rounded-[20px]">
                      <!-- wp:image -->
                      <figure class="wp-block-image post-img clip-path-url-['#clipped-blog']">
                        <img src="<?php echo $postImageUrl[0]; ?>" alt="post-image">
                      </figure>
                      <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->
                    <!-- wp:paragraph -->
                    <p>
                      <svg x="0px" y="0px" viewBox="0 0 1374.7 1083.6" class="absolute top-0">
                        <defs>
                          <clipPath id="clipped-blog" class="scale-[0.00182] scale-x-[0.00187] desktop:scale-[0.00179] wide:scale-y-[0.00181]" clipPathUnits="objectBoundingBox">
                            <path d="M100 0H515C526.046 0 535 8.9543 535 20V480C535 491.046 526.046 500 515 500H346.951C338.934 500 331.25 503.209 325.615 508.91L293.807 541.09C288.172 546.791 280.488 550 272.471 550H20.0002C8.95446 550 0.000170086 541.046 0.000166614 530L6.28732e-06 20C2.81493e-06 8.95432 8.95431 0 20 0L100 0Z" />
                          </clipPath>
                        </defs>
                      </svg>
                    </p>
                    <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->

                  <!-- wp:paragraph -->
                  <p class="slide-date font-light flex items-center before:content-[''] before:w-[20px] before:h-[1px] before:bg-primaryYellow before:inline-block before:mr-[10px] mb-[20px]"><?php the_time('d / m / Y'); ?></p>
                  <!-- /wp:paragraph -->

                  <!-- wp:group -->
                  <div class="wp-block-group subtitle inline text-[23px] font-medium leading-[30px] border-b-[1px] border-transparent group-hover:border-primaryYellow group-hover:text-primaryYellow transition ease-out duration-[800ms]">
                    <!-- wp:paragraph -->
                    <p><?php the_title(); ?></p>
                    <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->
                </a>
              </li>
              <!-- /wp:list-item -->
          <?php
              $i++;
            };
          };
          wp_reset_query();
          ?>
        <?php
        };
        ?>
      </ul>
      <!-- /wp:list -->
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

    <!-- wp:buttons -->
    <div class="wp-block-buttons btn-more min-w-fit ml-[0px] p-[15px_30px] uppercase border-[2px] border-[#D5D5D5] rounded-full hover:border-primaryYellow hover:text-black transition ease-out duration-300">
      <!-- wp:paragraph -->
      <p><a href="#" class="uppercase text-[14px] font-bold">Pokaż więcej</a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:buttons -->

    <!-- wp:group -->
    <div class="wp-block-group gray-border hidden desktop:inline-block w-full h-[2px] bg-[#808080] opacity-[15%]">
      <!-- wp:paragraph -->
      <p class="hidden">gray separator</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
  <!-- wp:list -->
  <ul class="wp-block-list pagination relative z-[10]">
    <!-- wp:list-item -->
    <li>
      <?php
      echo paginate_links(array(
        'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'total'        => $post_query->max_num_pages,
        'current'      => max(1, get_query_var('paged')),
        'format'       => '?paged=%#%',
        'show_all'     => true,
        'type'         => 'plain',
        'end_size'     => 2,
        'mid_size'     => 1,
        'prev_next'    => true,
        'prev_text'    => 'prev',
        'next_text'    => 'next',
        'add_args'     => false,
        'add_fragment' => '',
      ));
      ?>
    </li>
    <!-- /wp:list-item -->
  </ul>
  <!-- /wp:list -->
  <?php
  $currentUrl = (int)substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 36, 1);
  ?>
  <!-- wp:paragraph -->
  <p><?php echo $currentUrl; ?></p>
  <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->