<?php

/**
 * Title: single-post-content
 * Slug: single-post-content
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Wpis" class="wp-block-group single-page-post mb-[150px] ooverflow-hidden">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto relative desktop:px-0 px-[20px] pt-[60px]">
    <!-- wp:paragraph -->
    <a href="/blog/" class="group mt-[60px] mb-[40px] w-fit font-semibold flex items-center gap-[8px]">
      <!-- wp:group -->
      <div class="wp-block-group group w-[56px] h-[56px]">
        <!-- wp:paragraph -->
        <p>
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="rotate-180 scale-[0.65] fill-transparent group-hover:fill-[#FEC400]">
            <rect x="1.5" y="1.5" width="53" height="53" rx="26.5" stroke="#AAAAAA" stroke-width="3" class="group-hover:fill-[#FEC400] group-hover:stroke-primaryYellow transition-stroke ease-out duration-500" />
            <path d="M28 35L35 28.0189L28.0379 21" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
            <path d="M20 28L31 28" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
          </svg>
        </p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph -->
      <p class="uppercase text-[14px]">WRÓĆ DO LISTY</p>
      <!-- /wp:paragraph -->
    </a>
    <!-- /wp:paragraph -->

    <!-- wp:group -->
    <div class="wp-block-group above-img-banner desktop:flex gap-[50px]">
      <!-- wp:group -->
      <div class="wp-block-group post-title mb-[30px] desktop:w-[70%] text-[50px] leading-[50px] font-normal">
        <!-- wp:post-title /-->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group post-author-wrapper desktop:w-[30%]">
        <!-- wp:group -->
        <div class="wp-block-group post-date mb-[10px] flex items-center before:content-[''] before:inline-block desktop:before:mr-[10px] before:mb-[5px] desktop:before:w-[20px] desktop:before:h-[2px] before:bg-primaryYellow">
          <!-- wp:post-date {"format":"d / m / Y"} /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group author-wrapper flex items-center gap-[10px]">
          <!-- wp:group -->
          <div class="wp-block-group wp-block-post-author__avatar img author-avatar h-[60px]">
            <!-- wp:post-author-avatar /-->

            <!-- wp:avatar {"userId":5, "size":60,"isLink":true,"style":{"spacing":{"margin":{"bottom":"40px"}},"border":{"radius":"10px","width":"3px"},"color":{"duotone":["#000000","#ffe2c7"]}},"borderColor":"vivid-red"} /-->
          </div>
          <!-- /wp:group -->

          <!-- wp:group -->
          <div class="wp-block-group author-name-wrapper leading-[20px]">
            <!-- wp:group -->
            <div class="wp-block-group author-name font-semibold">
              <!-- wp:post-author-name /-->
            </div>
            <!-- /wp:group -->
            <!-- wp:group -->
            <div class="wp-block-group author-bio text-[13px] font-light">
              <!-- wp:post-author-biography /-->
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

    <!-- wp:group -->
    <div class="wp-block-group layout-two-cols mb-[50px] desktop:flex gap-[50px]">
      <!-- wp:group -->
      <div class="wp-block-group post-content desktop:w-[70%]">
        <!-- wp:post-content /-->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group share-wrapper ppt-[550px] desktop:w-[30%] h-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group share-border w-fit pt-[25px] border-[#D5D5D5] border-t-[2px] flex gap-[20px]">
          <!-- wp:paragraph -->
          <p class="uppercase text-right font-semibold leading-[19px]">UDOSTĘPNIJ <br> ARTYKUŁ</p>
          <!-- /wp:paragraph -->
          <!-- wp:list -->
          <ul class="wp-block-list flex gap-[20px]">
            <!-- wp:list-item -->
            <li class="cursor-pointer group">
              <!-- wp:paragraph -->
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none" class="group">
                <path d="M24.0088 21.125L24.5087 17.8674H21.383V15.7535C21.383 14.8623 21.8196 13.9936 23.2195 13.9936H24.6406V11.2201C24.6406 11.2201 23.351 11 22.1181 11C19.5439 11 17.8614 12.5602 17.8614 15.3847V17.8674H15V21.125H17.8614V29H21.383V21.125H24.0088Z" fill="black" />
                <rect x="1" y="1" width="38" height="38" rx="19" stroke="#D5D5D5" stroke-width="2" class="group-hover:stroke-primaryYellow transition-stroke ease-out duration-500" />
              </svg>
              <!-- /wp:paragraph -->
            </li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="cursor-pointer group">
              <!-- wp:paragraph -->
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none" class="group">
                <path d="M11.3484 29H14.8323V16.5125H11.3484V29ZM13.0903 11C11.929 11 11 11.9 11 13.025C11 14.15 11.929 15.05 13.0903 15.05C14.2516 15.05 15.1806 14.15 15.1806 13.025C15.1806 11.9 14.2516 11 13.0903 11ZM20.7548 18.425V16.5125H17.271V29H20.7548V22.5875C20.7548 18.9875 25.5161 18.7625 25.5161 22.5875V29H29V21.35C29 15.275 22.3806 15.5 20.7548 18.425Z" fill="black" />
                <rect x="1" y="1" width="38" height="38" rx="19" stroke="#D5D5D5" stroke-width="2" class="group-hover:stroke-primaryYellow transition-stroke ease-out duration-500" />
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

    <!-- wp:group -->
    <div class="wp-block-group border-wrapper pt-[20px] border-opacity-[40%] border-[#D5D5D5] border-t-[2px]">
      <!-- wp:paragraph -->
      <a href="/blog/" class="group w-fit font-semibold flex items-center gap-[8px]">
        <!-- wp:group -->
        <div class="wp-block-group group w-[56px] h-[56px]">
          <!-- wp:paragraph -->
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="rotate-180 scale-[0.65] fill-transparent group-hover:fill-[#FEC400]">
            <rect x="1.5" y="1.5" width="53" height="53" rx="26.5" stroke="#AAAAAA" stroke-width="3" class="group-hover:fill-[#FEC400] group-hover:stroke-primaryYellow transition-stroke ease-out duration-500" />
            <path d="M28 35L35 28.0189L28.0379 21" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
            <path d="M20 28L31 28" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
          </svg>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:paragraph -->
        <p class="uppercase text-[14px]">WRÓĆ DO LISTY</p>
        <!-- /wp:paragraph -->
      </a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->