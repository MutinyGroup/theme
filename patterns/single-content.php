<?php
/**
 * Title: single-content
 * Slug: single-content
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
    <?php
      while ( have_posts() ) :
        the_post(); 
        $avatarUrl = get_avatar_url(get_the_author_id());
    ?>
    <!-- wp:group -->
    <div class="wp-block-group content">
      <!-- wp:post-content /-->
      <?php the_content(); ?>
    </div>
    <!-- /wp:group -->
      
    <?php
      endwhile;
    ?>
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->



