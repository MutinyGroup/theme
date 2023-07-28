<?php
/**
 * Title: archive-test
 * Slug: archive-test
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:grour -->
<div id="content" class="narrowcolumn">

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="post">
    <h2 id="post-<?php the_ID(); ?>">
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <small><?php the_time('F jS, Y') ?></small>
    </div>
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