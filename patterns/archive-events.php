<?php

/**
 * Title: archive-events
 * Slug: archive-events
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Wpisy" class="wp-block-group archive-events mb-[150px] mt-[80px] desktop:mt-[150px] overflow-hidden">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto relative desktop:px-0 px-[20px]">
    <!-- wp:list -->
    <ul class="wp-block-list categories-all-1 mb-[108px] flex flex-wrap gap-[10px]">
      <!-- wp:list-item -->
      <li class="w-fit h-[40px] px-[10px] bg-[#F2F2F2] border-[#AAA] border-[2px] rounded-full uppercase text-[14px] font-semibold leading-[20px] flex justify-center items-center hover:bg-primaryYellow hover:border-primaryYellow transition ease-out duration-300 cursor-pointer">
        <!-- wp:paragraph -->
        <p><a href="<?php echo get_home_url() . '/realizations'; ?>" class="flex items-center w-full h-full">Wszystkie realizacje</a></p>
        <!-- /wp:paragraph -->
      </li>
      <!-- /wp:list-item -->
      <?php
      $args = array(
        'taxonomy' => 'category',
        'orderby' => 'name',
        'order'   => 'ASC'
      );
      $cats = get_categories($args);
      $currentCategory2 = str_replace('/', '', substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 35, 30));

      foreach ($cats as $cat) {
      ?>
        <?php
        $catNoSpaces = str_replace(' ', '-', strtolower($cat->name));
        if (($cat->name) == 'glowna' || ($catNoSpaces) == 'bez-kategorii') {
          echo '';
        } else { ?>
          <!-- wp:list-item -->
          <li class="w-fit h-[40px] px-[10px] bg-[#F2F2F2] border-[#AAA] border-[2px] rounded-full uppercase text-[14px] font-semibold leading-[20px] flex justify-center items-center hover:bg-primaryYellow hover:border-primaryYellow transition ease-out duration-300 cursor-pointer <?php if ($catNoSpaces == $currentCategory2) echo 'bg-primaryYellow border-primaryYellow'; ?>">
            <!-- wp:paragraph -->
            <p><a href="<?php echo get_category_link($cat->term_id) ?>" class="flex items-center w-full h-full"><?php echo $cat->name; ?></a></p>
            <!-- /wp:paragraph -->
          </li>
          <!-- /wp:list-item -->
        <?php
        }; ?>
      <?php
      };
      ?>
    </ul>
    <!-- /wp:list -->



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
      <div class="wp-block-buttons btn-more desktop:w-[330px] w-fit ml-[0px] p-[15px_30px] uppercase border-[2px] border-[#D5D5D5] rounded-full hover:border-primaryYellow hover:text-black transition ease-out duration-300">
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
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->