<?php
/**
 * Title: page-realizations-events
 * Slug: page-realizations-events
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group -->
<div class="wp-block-group page-realizations-events my-[150px] overflow-hidden">
  <!-- wp:group -->
  <div
    class="wp-block-group container mx-auto relative desktop:px-0 px-[20px]"
  >
    <!-- wp:list -->
    <ul class="wp-block-list categories-all-1 mb-[108px] flex flex-wrap gap-[10px]">
      <?php
        $args = array(
                    'taxonomy' => 'category',
                    'orderby' => 'name',
                    'order'   => 'ASC'
                );
        $cats = get_categories($args);

        foreach($cats as $cat) {
      ?>
        <!-- wp:list-item -->
        <li
          class="w-fit h-[40px] px-[10px] bg-[#F2F2F2] border border-[#AAA] border-[2px] rounded-full uppercase text-[14px] font-semibold leading-[20px] flex justify-center items-center hover:bg-primaryYellow hover:border-primaryYellow transition ease-out duration-300 cursor-pointer"
        >
          <!-- wp:paragraph -->
          <a href="<?php echo get_category_link( $cat->term_id ) ?>">
            <?php echo $cat->name; ?>
          </a>
          <!-- /wp:paragraph -->
        </li>
        <!-- /wp:list-item -->            
      <?php
        };
      ?>
    </ul>
    <!-- /wp:list -->

    <!-- wp:list -->
    <ul class="wp-block-list events-list mb-[150px]">
      <?php
        $args = array(
            'post_type' => 'realizacje',
            'posts_per_page' => 6,
            'order' => 'DESC'
        );
        $post_query = new WP_Query($args);
        if($post_query->have_posts() ) {
          while($post_query->have_posts() ) {
            $post_query->the_post();
            $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(),'portrait');
            $counter++;
            if (true){ ?>
              <!-- wp:list-item -->
              <li class="event-tile group desktop:flex gap-[75px] mb-[50px]">
                <!-- wp:group -->
                <div
                  class="wp-block-group event-image-wrapper desktop:mb-0 mb-[20px] w-[40%] max-h-[400px] overflow-hidden w-full rounded-[20px]"
                >
                  <!-- wp:image -->
                  <figure
                    class="wp-block-image event-image grayscale scale-[1] group-hover:scale-[1.04] group-hover:grayscale-0 transition ease-out duration-[500ms]"
                  >
                    <img
                      src="<?php echo $postImageUrl[0]; ?>"
                      alt="realization-post-img"
                    />
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                
                <!-- wp:group -->
                <div class="wp-block-group content-wrapper desktop:w-[60%]">
                  <!-- wp:image -->
                  <figure
                    class="wp-block-image event-logo-color mb-[25px] w-[60px]"
                  >
                    <img
                      src="https://mutiny.webo.design/wp-content/themes/mutiny/assets/img/page-realizations/logo-efc-color.png"
                      alt=""
                    />
                  </figure>
                  <!-- /wp:image -->

                  <!-- wp:list -->
                  <ul
                    class="wp-block-list hidden categories-under-logo mb-[20px] flex gap-[10px]"
                  >

                    <?php
                      $args = array(
                                  'taxonomy' => 'dining-category',
                                  'orderby' => 'name',
                                  'order'   => 'ASC'
                              );

                      $cats = get_categories($args);

                      foreach($cats as $cat) {
                    ?>
                          <a href="<?php echo get_category_link( $cat->term_id ) ?>">
                              <?php echo $cat->name; ?>
                          </a>
                    <?php
                      }
                    ?>

                    <!-- wp:list-item -->
                    <li
                      class="w-fit p-[0px_8px] flex justify-center items-center bg-[#F2F2F2] leading-[20px] border border-[#D5D5D5] border-[2px] rounded-full uppercase text-[13px] font-semibold hover:bg-primaryYellow hover:border-primaryYellow transition ease-out duration-300 cursor-pointer"
                    >
                      <!-- wp:paragraph -->
                      <a href="#">eventy</a>
                      <!-- /wp:paragraph -->
                    </li>
                    <!-- /wp:list-item -->
                    <!-- wp:list-item -->
                    <li
                      class="w-fit p-[0px_8px] flex justify-center items-center bg-[#F2F2F2] leading-[20px] border border-[#D5D5D5] border-[2px] rounded-full uppercase text-[13px] font-semibold hover:bg-primaryYellow hover:border-primaryYellow transition ease-out duration-300 cursor-pointer"
                    >
                      <!-- wp:paragraph -->
                      <a href="#">scenografia</a>
                      <!-- /wp:paragraph -->
                    </li>
                    <!-- /wp:list-item -->
                  </ul>
                  <!-- /wp:list -->

                  <!-- wp-list -->
                  <ul class="wp-block-list categories-under-logo mb-[20px] flex gap-[10px]">
                    <?php 
                      $categoriesArray = get_the_category();
                      print_r($categoriesArray);
                      foreach ($categoriesArray as $category) {
                      $category_link = get_category_link($category->term_id);
                      print_r($categoriesArray);
                      ?>
                      <li class="w-fit p-[0px_8px] flex justify-center items-center bg-[#F2F2F2] leading-[20px] border border-[#D5D5D5] border-[2px] rounded-full uppercase text-[13px] font-semibold hover:bg-primaryYellow hover:border-primaryYellow transition ease-out duration-300 cursor-pointer">
                        <a href="<?php echo esc_url($category_link); ?>"><?php echo $category->name; ?></a>
                      </li>
                    <?php }; ?>
                  </ul>
                  <!-- /wp-list -->

                  <!-- wp:list -->
                  <ul class="wp-block-list categories-all-1 mb-[108px] flex flex-wrap gap-[10px]">
                    <?php
                      $args = array(
                                  'taxonomy' => 'category',
                                  'orderby' => 'name',
                                  'order'   => 'ASC'
                              );
                      $cats = get_categories($args);

                      $cats2 = get_categories();

                      print_r($cats2);

                      $terms = get_the_terms();
                      print_r($terms);

                      foreach($cats as $cat) {
                    ?>
                      <!-- wp:list-item -->
                      <li
                        class="w-fit h-[40px] px-[10px] bg-[#F2F2F2] border border-[#AAA] border-[2px] rounded-full uppercase text-[14px] font-semibold leading-[20px] flex justify-center items-center hover:bg-primaryYellow hover:border-primaryYellow transition ease-out duration-300 cursor-pointer"
                      >
                        <!-- wp:paragraph -->
                        <a href="<?php echo get_category_link( $cat->term_id ) ?>">
                          <?php echo $cat->name; ?>
                        </a>
                        <!-- /wp:paragraph -->
                      </li>
                      <!-- /wp:list-item -->            
                    <?php
                      };
                    ?>
                  </ul>
                  <!-- /wp:list --> 

                  

                  

                  <!-- wp:title -->
                  <h2 class="mb-[50px] text-[35px] font-semibold leading-[42px]">
                    <?php the_title(); ?>
                  </h2>
                  <!-- /wp:title -->
                  <!-- wp:group -->
                  <div
                    id="opinions-next"
                    class="wp-block-group w-[56px] h-[56px]"
                  >
                    <!-- wp:paragraph -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="56"
                      height="56"
                      viewBox="0 0 56 56"
                      fill="none"
                      class="group fill-transparent group-hover:fill-primaryYellow"
                    >
                      <rect
                        x="1.5"
                        y="1.5"
                        width="53"
                        height="53"
                        rx="26.5"
                        stroke="#AAAAAA"
                        stroke-width="3"
                        class="group-hover:stroke-primaryYellow transition-stroke ease-out duration-500"
                      />
                      <path
                        d="M28 35L35 28.0189L28.0379 21"
                        stroke="black"
                        stroke-width="1.5"
                        class="group-hover:stroke-black transition-stroke ease-out duration-500"
                      />
                      <path
                        d="M20 28L31 28"
                        stroke="black"
                        stroke-width="1.5"
                        class="group-hover:stroke-black transition-stroke ease-out duration-500"
                      />
                    </svg>
                    <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
              </li>
              <!-- /wp:list-item -->               
            <?php 
            }
          };
        };
      ?>
    </ul>
    <!-- /wp:list -->

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
        class="wp-block-buttons btn-more desktop:w-[330px] w-fit ml-[0px] p-[15px_30px] uppercase border-[2px] border-[#D5D5D5] rounded-full hover:border-primaryYellow hover:text-black transition ease-out duration-300"
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