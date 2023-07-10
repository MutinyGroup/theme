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
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="my-[40px] text-[36px] leading-[50px]"><?php the_title(); ?></h1>
        <div class="post-author-wrapper mb-[20px] flex gap-[10px] items-center [&>img]:rounded-full [&>img]:w-[55px] [&>img]:h-[55px]">
          <img src="<?php echo $avatarUrl; ?>" alt="avatar-image">
          <span class="mb-0">Autor: <?php the_author(); ?>,</span>
          <span class="mb-0 text-neutral-500"><?php the_time('j F Y'); ?></span>
        </div>
        <?php the_content(); ?>
      </article>
      <?php
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      endwhile;
    ?>
  </div>
</div>


