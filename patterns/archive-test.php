<?php
/**
 * Title: archive-test
 * Slug: archive-test
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group -->
<div id="content" class="wp-block-group">
  <!-- wp:paragraph -->
  <?php
    $category = get_the_category();
    $link = get_category_link( $category[0]->term_id );
    print_r($category);
    echo '<br>';
    $title = $category[0]->slug;
    echo $title;
    $term_name = get_taxonomies();
    print_r($term_name);
    echo '<br>';


    $desc = term_description();
    echo $desc;
    echo '<br>';

    echo get_permalink( get_the_ID() );
    echo '<br>';
    echo get_category_link( get_query_var( 'cat' ) );
    echo '<br>';
    // get current URL 
    $current_url = get_permalink( get_the_ID() );
    if( is_category() ) $current_url = get_category_link( get_query_var( 'cat' ) );
    echo $current_url;

  ?>
  <!-- /wp:paragraph -->
  <!-- wp:list -->
  <ul class="wp-block-list events-list mb-[150px]">
    <?php
      $args = array(
        'post_type' => 'realizacje',
        'posts_per_page' => 6,
        'order' => 'DESC',
        'category_name' => ''
      );
      $post_query = new WP_Query($args);
      if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
          $post_query->the_post();
          $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(),'portrait');
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
                <ul class="wp-block-list categories-under-logo mb-[20px] flex flex-wrap gap-[10px]">
                  <?php 
                    $categoriesArray = get_the_category();
                    foreach ($categoriesArray as $category) {
                    $category_link = get_category_link($category->term_id);
                    ?>
                    <?php
                      if (($category->name) == 'glowna'){
                        echo '';
                      }else{ ?>
                        <!-- wp:list-item -->
                        <li class="w-fit p-[0px_8px] flex justify-center items-center bg-[#F2F2F2] leading-[20px] border border-[#D5D5D5] border-[2px] rounded-full uppercase text-[13px] font-semibold hover:bg-primaryYellow hover:border-primaryYellow transition ease-out duration-300 cursor-pointer">
                          <p>
                            <?php echo $category->name ?>
                          </p>
                        </li>
                        <!-- /wp:list-item -->
                      <?php
                      };
                    ?>

                  <?php }; ?>
                </ul>
                <!-- /wp:list -->

                <!-- wp:title -->
                <h2 class="mb-[50px] text-[35px] font-semibold leading-[42px]">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h2>
                <!-- /wp:title -->
                <!-- wp:buttons -->
                <div
                  class="wp-block-buttons w-[56px] h-[56px]"
                >
                <!-- wp:paragraph -->
                  <a href="<?php the_permalink(); ?>">
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
                  </a>
                  <!-- /wp:paragraph -->
                </div>
                <!-- /wp:buttons -->
              </div>
              <!-- /wp:group -->
            </li>
            <!-- /wp:list-item -->               
          <?php 
          };
        };
      };
    ?>
  </ul>
  <!-- /wp:list -->

</div>
<!-- /wp:group -->