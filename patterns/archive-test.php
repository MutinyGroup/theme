<?php
/**
 * Title: archive-test
 * Slug: archive-test
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:grour -->
<div id="content" class="wp-block-group narrowcolumn">

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <!-- wp:group -->
    <div class="wp-block-group post">
      <!-- wp:paragraph -->
      <p id="post-<?php the_ID(); ?>">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      <p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  <?php endwhile; ?>
</div>
<!-- /wp:group -->



<!-- wp:group -->
<div class="wp-block-group archive-test desktop:mb-[150px]">
  <!-- wp:group -->
  <div
    class="wp-block-group container relative mx-auto desktop:px-0 px-[20px]"
  >
  <p>test</p>
  <h1 class="page-title"><?php
    printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
?></h1>
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