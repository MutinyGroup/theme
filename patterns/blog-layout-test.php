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
<div class="wp-block-query alignwide jace-blog-layout">
  <!-- wp:post-template -->
    <!-- wp:group -->
    <div class="wp-block-group has-background" style="background-color:#f2f2f203;border-radius:4px">
      <!-- wp:post-featured-image {"isLink":true"} /-->
      <!-- wp:group -->
      <div class="wp-block-group post-meta">
      <!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->
      <!-- wp:post-title {"isLink":true} /-->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  <!-- /wp:post-template -->

  <!-- wp:query-pagination -->
  <!-- wp:query-pagination-previous {"label":"Previous"} /-->

  <!-- wp:query-pagination-next {"label":"Next"} /-->
  <!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
