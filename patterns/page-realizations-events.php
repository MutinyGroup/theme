<?php

/**
 * Title: page-realizations-events
 * Slug: page-realizations-events
 * Categories: text, śnner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Eventy" class="wp-block-group page-realizations-events mb-[150px] overflow-hidden">
  <!-- wp:group -->
  <div id="realizationsContainer" class="wp-block-group container mx-auto max-h-[1820px] desktop:max-h-[1500px] relative desktop:px-0 px-[20px] overflow-y-hidden transition-height ease-in-out duration-[800ms]">
    <!-- wp:list -->
    <ul id="Kategorie" class="wp-block-list categories-all-1 mb-[60px] desktop:mb-[110px] flex flex-wrap gap-[10px]">
      <!-- wp:list-item -->
      <li class="w-fit h-[40px] px-[10px] bg-primaryYellow border-primaryYellow border-[2px] rounded-full uppercase text-[14px] font-semibold text-center leading-[20px] flex justify-center items-center transition ease-out duration-300 cursor-pointer"><a href="<?php echo get_home_url() . '/realizations'; ?>" class="flex items-center justify-center w-full h-full">
          <p>Wszystkie realizacje</p>
        </a></li>
      <!-- /wp:list-item -->
      <?php
      $currentPageID = (int)substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 44, 1) ? (int)substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 44, 1) : 1;
      $args = array(
        'taxonomy' => 'category',
        'orderby' => 'name',
        'paged' => $currentPageID,
        'order'   => 'ASC'
      );
      $cats = get_categories($args);

      foreach ($cats as $cat) {
      ?>
        <?php
        $catNoSpaces = str_replace(' ', '-', strtolower($cat->name));
        if (($cat->name) == 'glowna' || ($catNoSpaces) == 'bez-kategorii') {
          echo '';
        } else { ?>
          <!-- wp:list-item -->
          <li class="w-fit h-[40px] px-[10px] bg-[#F2F2F2] border-[#AAA] border-[2px] rounded-full uppercase text-[14px] font-semibold leading-[20px] flex justify-center items-center hover:bg-primaryYellow hover:border-primaryYellow transition ease-out duration-300 cursor-pointer">
            <a href="<?php echo get_category_link($cat->term_id) ?>" class="flex justify-center items-center w-fit h-full">
              <p><?php echo $cat->name; ?></p>
            </a>
          </li>
          <!-- /wp:list-item -->
        <?php
        }; ?>
      <?php
      };
      ?>
    </ul>
    <!-- /wp:list -->

    <!-- wp:list -->
    <ul id="EventyList" class="wp-block-list events-list mb-[150px]">
      <?php
      $args = array(
        'post_type' => 'realizacje',
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
            <li class="event-tile group mb-[50px] min-h-[400px]">
              <a href="<?php the_permalink(); ?>" class="wp-block-group tile-container h-full desktop:flex gap-[75px]" data-aos="fade-right" data-aos-duration="600" data-aos-offset="130">
                <!-- wp:group -->
                <div class="wp-block-group event-image-wrapper desktop:mb-0 mb-[20px] h-[200px] desktop:h-[400px] overflow-hidden w-full rounded-[20px]">
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
                  <p class="text-[28px] desktop:text-[35px] font-semibold leading-[32px] desktop:leading-[38px]"><?php the_title(); ?></p>
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
      wp_reset_query();
      ?>
    </ul>
    <!-- /wp:list -->

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
    <div class="wp-block-group btn-more min-w-fit flex gap-[20px] opacity-100 transition ease-out duration-300">
      <!-- wp:paragraph -->
      <p id="showMore" class="min-w-fit ml-[0px] p-[15px_30px] font-bold uppercase border-[2px] border-[#D5D5D5] rounded-full hover:border-primaryYellow hover:text-black transition ease-out duration-300 cursor-pointer text-[14px]">Pokaż Więcej</p>
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
</div>
<!-- /wp:group -->