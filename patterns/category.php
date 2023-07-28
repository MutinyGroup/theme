<?php
/**
 * Title: category
 * Slug: category
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group -->
<div class="wp-block-group category desktop:mb-[150px]">
  <!-- wp:group -->
  <div
    class="wp-block-group container relative mx-auto desktop:px-0 px-[20px]"
  >
  <?php
   echo single_cat_title();
   echo single_term_title();

    single_cat_title();
    single_term_title();

    print_r(single_cat_title());
    print_r(single_term_title());
  ?>
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->