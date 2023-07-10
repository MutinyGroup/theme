<?php
/**
 * Title: single-content
 * Slug: single-content
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group -->
<div class="wp-block-group single-page-post mb-[150px]">
  <!-- wp:group -->
  <div
    class="wp-block-group container mx-auto relative desktop:px-0 px-[20px]"
  >    

    <!-- wp:group -->
    <div class="wp-block-group">
      <!-- wp:paragraph -->
      <p>php loop test</p>
      <!-- /wp:paragraph -->
      <?php
        $args = array(
            'post_type' => 'post'
        );

        $post_query = new WP_Query($args);

        if($post_query->have_posts() ) {
          while($post_query->have_posts() ) {
            $post_query->the_post();
            ?>
            <!-- wp:paragraph -->
            <p><?php the_title(); ?></p>
            <!-- wp:paragraph -->
            <?php
          }
        }
      ?>
    </div>
    <!-- /wp:group -->



    <!-- wp:group -->
    <div class="wp-block-group above-img-banner mb-[50px] flex gap-[50px]">
      <!-- wp:group -->
      <div class="wp-block-group post-title w-[70%] text-[50px] leading-[55px] font-normal">
        <!-- wp:post-title /-->
      </div>
      <!-- /wp:group -->
      
      <!-- wp:group -->
      <div class="wp-block-group post-author-wrapper w-[30%]">
        <!-- wp:group -->
        <div class="wp-block-group post-date mb-[20px] flex items-center before:content-[''] before:inline-block desktop:before:mr-[10px] before:mb-[5px] desktop:before:w-[20px] desktop:before:h-[2px] before:bg-primaryYellow">
          <!-- wp:post-date /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group author-wrapper flex gap-[10px]">
          <!-- wp:group -->
          <div class="wp-block-group wp-block-post-author__avatar img author-avatar">
            <!-- wp:post-author-avatar /-->
            
            <!-- wp:avatar {"userId":5, "size":60,"isLink":true,"style":{"spacing":{"margin":{"bottom":"40px"}},"border":{"radius":"10px","width":"3px"},"color":{"duotone":["#000000","#ffe2c7"]}},"borderColor":"vivid-red"} /-->
          </div>
          <!-- /wp:group -->

          <!-- wp:group -->
          <div class="wp-block-group author-name font-semibold">
            <!-- wp:post-author-name /-->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->
    
    <!-- wp:group -->
    <div class="wp-block-group featured-image mb-[100px]">
      <!-- wp:post-featured-image /-->
    </div>
    <!-- /wp:group -->
    
    <!-- wp:group -->
    <div class="wp-block-group above-img-banner mb-[50px] flex gap-[50px]">
      <!-- wp:group -->
      <div class="wp-block-group post-content w-[70%]">
        <!-- wp:post-content /-->
      </div>
      <!-- /wp:group -->
      
      <!-- wp:group -->
      <div class="wp-block-group share-wrapper w-[30%] flex items-center gap-[20px]">
        <!-- wp:paragraph -->
        <p class="uppercase font-semibold">UDOSTĘPNIJ <br> ARTYKUŁ</p>
        <!-- /wp:paragraph -->
        <!-- wp:list -->
        <ul class="wp-block-list flex gap-[20px]">
          <!-- wp:list-item -->
          <li class="cursor-pointer">
            <!-- wp:paragraph -->
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none" class="group scale-[0.55]">
              <path d="M34.0088 31.125L34.5087 27.8674H31.383V25.7535C31.383 24.8623 31.8196 23.9936 33.2195 23.9936H34.6406V21.2201C34.6406 21.2201 33.351 21 32.1181 21C29.5439 21 27.8614 22.5602 27.8614 25.3847V27.8674H25V31.125H27.8614V39H31.383V31.125H34.0088Z" fill="black" class="group-hover:fill-primaryYellow transition-stroke ease-out duration-500"/>
              <rect x="1" y="1" width="58" height="58" rx="29" stroke="#D5D5D5" stroke-width="2" class="group-hover:stroke-primaryYellow transition-stroke ease-out duration-500"/>
            </svg>
            <!-- /wp:paragraph -->
          </li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="cursor-pointer">
            <!-- wp:paragraph -->
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none" class="group scale-[0.55]">
              <path d="M21.3484 39H24.8323V26.5125H21.3484V39ZM23.0903 21C21.929 21 21 21.9 21 23.025C21 24.15 21.929 25.05 23.0903 25.05C24.2516 25.05 25.1806 24.15 25.1806 23.025C25.1806 21.9 24.2516 21 23.0903 21ZM30.7548 28.425V26.5125H27.271V39H30.7548V32.5875C30.7548 28.9875 35.5161 28.7625 35.5161 32.5875V39H39V31.35C39 25.275 32.3806 25.5 30.7548 28.425Z" fill="black" class="group-hover:fill-primaryYellow transition-stroke ease-out duration-500"/>
              <rect x="1" y="1" width="58" height="58" rx="29" stroke="#D5D5D5" stroke-width="2" class="group-hover:stroke-primaryYellow transition-stroke ease-out duration-500"/>
            </svg>
            <!-- /wp:paragraph -->
          </li>
          <!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->



