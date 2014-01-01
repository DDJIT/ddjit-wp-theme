<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <?php the_post_thumbnail('medium', array('class' => 'alignleft')); ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
      <p class="byline author vcard"><?php echo __('By', 'roots'); ?> <?php echo coauthors_posts_links(); ?></p>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
