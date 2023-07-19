<?php
/**
 * Title: blog-layout-test
 * Slug: blog-layout-test
 * Block Types: core/query, core/post-template
 * Keywords: blog
 *
 */
?>


<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude"} } -->
<div class="wp-block-query jace-blog-layout ml-[80px]">
  <!-- wp:post-template {"className":"test","max-w-[600px]} -->
    <!-- wp:group -->
    <div class="wp-block-group test2 mb-[40px]">
      <!-- wp:post-featured-image {"isLink":true} /-->
      <!-- wp:group -->
      <div class="wp-block-group test3">
      <!-- wp:post-terms {"term":"category"} /-->
      
      <!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  <!-- /wp:post-template -->

  <!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
  <!-- wp:query-pagination-previous {"label":"Previous"} /-->

  <!-- wp:query-pagination-next {"label":"Next"} /-->
  <!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
