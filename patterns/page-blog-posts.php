<?php

/**
 * Title: page-blog-posts
 * Slug: page-blog-posts
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Posty" class="wp-block-group page-blog-posts mb-[80px] desktop:mb-[150px]  pt-[80px] desktop:pt-0 overflow-hidden">
  <!-- wp:group -->
  <div id="blogContainer" class="wp-block-group container max-h-[1500px] mx-auto relative mb-[80px] desktop:mb-[180px] px-[20px] desktop:px-0 overflow-y-hidden transition-height ease-in-out duration-[800ms]">
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
        $currentPageID = (int)substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 36, 1) ? (int)substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 36, 1) : 1;

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 10,
          'paged' => $currentPageID,
          'order' => 'DESC'
        );
        $post_query = new WP_Query($args);
        $counter = 0;
        $tab = [0, 1, 1, 0, 0, 1, 0, 1, 1, 0, 0, 1];
        $i = 0;

        if ($post_query->have_posts()) {
          while ($post_query->have_posts()) {
            $post_query->the_post();
            $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
            $counter++;
            if ($tab[$i] == 0) { ?>
              <!-- wp:list-item -->
              <li class="bigger relative group w-full desktop:w-[535px] wide:w-[580px] h-fit desktop:h-[545px] wide:h-[650px] transition duration-[800ms] ease-in <?php echo (!($counter % 2)) ? 'pt-[120px]' : ''; ?>">
                <a href="<?php the_permalink(); ?>" data-aos="fade-right" data-aos-duration="600" data-aos-offset="130">
                  test
                </a>
              </li>
              <!-- /wp:list-item -->
            <?php
              $i++;
            } else {
            ?>
              <!-- wp:list-item -->
              <li class="wp-block-group smaller swiper-slide slideBlog  relative group w-full desktop:w-[444px] wide:w-[490px] h-fit desktop:h-[500px] transition duration-[800ms] ease-in <?php echo (!($counter % 2)) ? 'pt-[120px]' : ''; ?>">
                <a href="<?php the_permalink(); ?>" data-aos="fade-right" data-aos-duration="600" data-aos-offset="130">
                  test2
                </a>
              </li>
              <!-- /wp:list-item -->
          <?php
              $i++;
              array_push($tab, rand(0, 1));
              // echo '<pre>';
              // print_r($tab);
              // echo '</pre>';
            };
          };
          wp_reset_query();
          ?>
        <?php
        };
        ?>
      </ul>
      <!-- /wp:list -->



      <!-- wp:list -->
      <ul id="Eventy" class="wp-block-list events-list mb-[150px]">
        <?php
        $currentPageID = (int)substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 44, 1) ? (int)substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 44, 1) : 1;
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 10,
          'order' => 'DESC'
        );
        $post_query = new WP_Query($args);
        if ($post_query->have_posts()) {
          while ($post_query->have_posts()) {
            $post_query->the_post();
            $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
            $counter++;
            if (true) { ?>
              <!-- wp:list-item -->
              <li class="event-tile group mb-[50px] max-h-[400px]">
                <a href="<?php the_permalink(); ?>" class="wp-block-group tile-container h-full desktop:flex gap-[75px]" data-aos="fade-right" data-aos-duration="600" data-aos-offset="130">
                  <!-- wp:group -->
                  <div class="wp-block-group event-image-wrapper desktop:mb-0 mb-[20px] h-[400px] overflow-hidden w-full rounded-[20px]">
                    <!-- wp:image -->
                    <figure class="wp-block-image event-image h-full desktop:grayscale scale-[1] group-hover:scale-[1.04] desktop:group-hover:grayscale-0 transition ease-out duration-[500ms]">
                      <img src="<?php echo $postImageUrl[0]; ?>" alt="realization-post-img" />
                    </figure>
                    <!-- /wp:image -->
                  </div>
                  <!-- /wp:group -->

                  <!-- wp:group -->
                  <div class="wp-block-group content-wrapper desktop:w-[60%] flex flex-col justify-center">
                    <!-- wp:image -->
                    <figure class="wp-block-image event-logo-color w-[60px]">
                      <img src="<?php echo home_url() . '/wp-content/themes/mutiny/assets/img/page-realizations/logo-efc-color.png'; ?>" alt="event-image" />
                    </figure>
                    <!-- /wp:image -->

                    <!-- wp:list -->
                    <ul class="wp-block-list categories-under-logo my-[20px] flex flex-wrap gap-[10px]">
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
                          <li class="w-fit p-[0px_8px] flex justify-center items-center bg-[#F2F2F2] leading-[20px] border-[#D5D5D5] border-[2px] rounded-full uppercase text-[13px] font-semibold text-center">
                            <p><?php echo $category->name; ?></p>
                          </li>
                          <!-- /wp:list-item -->
                        <?php
                        };
                        ?>
                      <?php }; ?>
                    </ul>
                    <!-- /wp:list -->

                    <!-- wp:paragraph -->
                    <p class="text-[35px] font-semibold leading-[38px]"><?php the_title(); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons w-[56px] h-[56px] mt-[25px]">
                      <!-- wp:group -->
                      <div class="wp-block-group">
                        <!-- wp:paragraph -->
                        <p>
                          <!-- wp:paragraph -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="group fill-transparent group-hover:fill-primaryYellow">
                            <rect x="1.5" y="1.5" width="53" height="53" rx="26.5" stroke="#AAAAAA" stroke-width="3" class="group-hover:stroke-primaryYellow transition-stroke ease-out duration-500" />
                            <path d="M28 35L35 28.0189L28.0379 21" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
                            <path d="M20 28L31 28" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
                          </svg>
                          <!-- /wp:paragraph -->
                        </p>
                        <!-- /wp:paragraph -->
                      </div>
                      <!-- /wp:group -->
                    </div>
                    <!-- /wp:buttons -->
                  </div>
                  <!-- /wp:group -->
                </a>
              </li>
              <!-- /wp:list-item -->
        <?php
            }
          };
        };
        ?>
      </ul>
      <!-- /wp:list -->





    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group button-wrapper h-[80px] desktop:mt-[80px] mt-[40px] flex items-center justify-center gap-[64px]">
    <!-- wp:group -->
    <div class="wp-block-group gray-border hidden desktop:inline-block w-full h-[2px] bg-[#808080] opacity-[15%]">
      <!-- wp:paragraph -->
      <p class="hidden">gray separator</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group old hidden btn-more min-w-fit fflex gap-[20px]">
      <?php
      if ($currentPageID < ($post_query->max_num_pages)) {
      ?>
        <?php
        if ($currentPageID > 1) {
        ?>
          <!-- wp:paragraph -->
          <p><a href="<?php echo home_url() . '/blog/page/' . ($currentPageID - 1) ?>" class="min-w-fit ml-[0px] p-[15px_30px] font-bold uppercase border-[2px] border-[#D5D5D5] rounded-full hover:border-primaryYellow hover:text-black transition ease-out duration-300 cursor-pointer text-[14px]">Pokaż poprzednie</a></p>
          <!-- /wp:paragraph -->
        <?php
        };
        ?>

        <!-- wp:paragraph -->
        <p><a href="<?php echo home_url() . '/blog/page/' . ($currentPageID + 1) ?>" class="min-w-fit ml-[0px] p-[15px_30px] font-bold uppercase border-[2px] border-[#D5D5D5] rounded-full hover:border-primaryYellow hover:text-black transition ease-out duration-300 cursor-pointer text-[14px]">Pokaż następne</a></p>
        <!-- /wp:paragraph -->


      <?php
      } elseif ($currentPageID = $post_query->max_num_pages) {
      ?>
        <!-- wp:paragraph -->
        <p><a class="min-w-fit ml-[0px] p-[15px_30px] font-bold uppercase border-[2px] border-[#D5D5D5] rounded-full hover:border-primaryYellow hover:text-black transition ease-out duration-300 cursor-pointer" href="<?php echo home_url() . '/blog/page/' . ($currentPageID - 1) ?>" class="uppercase text-[14px] font-bold">Pokaż poprzednie</a></p>
        <!-- /wp:paragraph -->
      <?php
      };
      ?>
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group btn-more min-w-fit flex gap-[20px]">
      <!-- wp:paragraph -->
      <p id="showMorePosts" class="min-w-fit ml-[0px] p-[15px_30px] font-bold uppercase border-[2px] border-[#D5D5D5] rounded-full hover:border-primaryYellow hover:text-black transition ease-out duration-300 cursor-pointer text-[14px]">Pokaż Więcej</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->


    <!-- wp:group -->
    <div class="wp-block-group gray-border hidden desktop:inline-block w-full h-[2px] bg-[#808080] opacity-[15%]">
      <!-- wp:paragraph -->
      <p class="hidden">gray separator</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <?php
  paginate_links(array(
    'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
    'total'        => $post_query->max_num_pages,
    'current'      => $currentPageID,
    'format'       => '?paged=%#%',
    'show_all'     => false,
    'type'         => 'list',
    'end_size'     => 2,
    'mid_size'     => 1,
    'prev_next'    => true,
    'prev_text'    => '
      <!-- wp:buttons -->
      <div class="wp-block-buttons btn-more max-w-fit ml-[0px] p-[15px_30px] uppercase font-bold border-[2px] border-[#D5D5D5] rounded-full hover:border-primaryYellow hover:text-black transition ease-out duration-300 cursor-pointer">
        <!-- wp:paragraph -->
        <p>Poprzednie</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:buttons -->
    ',
    'next_text'    => '
      <!-- wp:buttons -->
      <div class="wp-block-buttons btn-more max-w-fit ml-[0px] p-[15px_30px] uppercase font-bold border-[2px] border-[#D5D5D5] rounded-full hover:border-primaryYellow hover:text-black transition ease-out duration-300 cursor-pointer">
        <!-- wp:paragraph -->
        <p>Pokaż następne</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:buttons -->
    ',
    'add_args'     => false,
    'before_page_number' => '',
    'after_page_number' => ''
  )); ?>
</div>
<!-- /wp:group -->