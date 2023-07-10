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
    <div class="wp-block-group old hidden gallery-cols relative flex justify-between pb-[150px]">
      <!-- wp:group -->
      <div class="wp-block-group col1 w-[50%]">
        <!-- wp:group -->
        <div class="wp-block-group swiper-slide relative group desktop:min-w-[500px] w-[280px] desktop:h-[675px] h-[520px]">
          <!-- wp:group -->
          <div class="wp-block-group img-clip-path-rounded mb-[20px]">
            <!-- wp:group -->
            <div class="wp-block-group img-clip-path-blog overflow-hidden rounded-[20px]">
              <!-- wp:image -->
              <figure class="wp-block-image post-img scale-[1.12] group-hover:scale-[1.06] transition ease-out duration-[700ms]">
                <img src="https://mutiny.webo.design/wp-content/themes/mutiny/assets/img/front-page/blog-post-img/blog-post-img1.png" alt="blog-post-img">
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
          <p class="slide-date font-light flex items-center before:content-[''] before:w-[20px] before:h-[1px] before:bg-primaryYellow before:inline-block before:mr-[10px] mb-[20px]">10 / 03 / 2023</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph -->
          <p class="subtitle inline text-[23px] font-medium leading-[30px] border-b-[1px] border-transparent group-hover:border-primaryYellow group-hover:text-primaryYellow transition ease-out duration-[800ms]">
            5 urodziny Galerii Navigator - zajrzyjmy na backstage
          </p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
      
      <!-- wp:group -->
      <div class="wp-block-group hidden col2 w-[50%] absolute top-[100px] right-0">
        <!-- wp:group -->
        <div class="wp-block-group swiper-slide relative group desktop:min-w-[500px] w-[280px] desktop:h-[675px] h-[520px]">
          <!-- wp:group -->
          <div class="wp-block-group img-clip-path-rounded mb-[20px]">
            <!-- wp:group -->
            <div class="wp-block-group img-clip-path-blog overflow-hidden rounded-[20px]">
              <!-- wp:image -->
              <figure class="wp-block-image post-img scale-[1.12] group-hover:scale-[1.06] transition ease-out duration-[700ms]">
                <img src="https://mutiny.webo.design/wp-content/themes/mutiny/assets/img/front-page/blog-post-img/blog-post-img2.png" alt="blog-post-img">
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
          <p class="slide-date font-light flex items-center before:content-[''] before:w-[20px] before:h-[1px] before:bg-primaryYellow before:inline-block before:mr-[10px] mb-[20px]">10 / 03 / 2023</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph -->
          <p class="subtitle inline text-[23px] font-medium leading-[30px] border-b-[1px] border-transparent group-hover:border-primaryYellow group-hover:text-primaryYellow transition ease-out duration-[800ms]">
            5 urodziny Galerii Navigator - zajrzyjmy na backstage
          </p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->


    <!-- wp:group -->
    <div class="wp-block-group new gallery-cols relative flex justify-between pb-[150px]">
      <!-- wp:group -->
      <div class="wp-block-group">
        <!-- wp:list -->
        <ul class="wp-block-list flex gap-[80px] flex-wrap">
          <?php
            $args = array(
                'post_type' => 'post'
            );

            $post_query = new WP_Query($args);

            if($post_query->have_posts() ) {
              while($post_query->have_posts() ) {
                $post_query->the_post();
                $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(),'portrait');
                ?>
                <!-- wp:list-item -->
                <li class="w-[250px]">
                  <!-- wp:image -->
                  <figure class="wp-block-image ">
                    <img src="<?php echo $postImageUrl[0]; ?>" alt="post-image">
                  </figure>
                  <!-- /wp:image -->

                  <!-- wp:paragraph -->
                  <p><?php the_time('m/d/Y'); ?></p>
                  <!-- /wp:paragraph -->

                  <!-- wp:paragraph -->
                  <p><?php the_title(); ?></p>
                  <!-- /wp:paragraph -->
                </li>
                <!-- /wp:list-item -->
                <?php
              }
            }
          ?>
        </ul>
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->


  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->