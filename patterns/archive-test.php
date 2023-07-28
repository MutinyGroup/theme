<?php
/**
 * Title: archive-test
 * Slug: archive-test
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group -->
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
        <?php
          echo single_cat_title();
          echo single_term_title();

          single_cat_title();
          single_term_title();

          print_r(single_cat_title());
          print_r(single_term_title());
        ?>
        <!-- wp:term-description {"align":"full"} /-->
        <!-- wp:post-terms /-->
      </div>
      <!-- /wp:group -->
    <?php endwhile; 
  endif;
  ?>

</div>
<!-- /wp:group -->