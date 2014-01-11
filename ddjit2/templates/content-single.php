<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <div class="row">
        <?php the_post_thumbnail('wide_page', array('class' => 'alignleft col-sm-12')); ?>
        <?php the_tags('<ul class="post_tags alignright"><li class="tag"><span>','</span></li><li class="tag"><span>','</span></li></ul>'); ?>
      </div>
      <div class="row">
        <div class="col-sm-12">
        <a href="<?php echo get_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
        <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
        <p class="byline author vcard"><?php echo __('By', 'roots'); ?> <?php if ( function_exists( 'coauthors' ) ) { coauthors_posts_links(); } else { the_author_link(); } ?></p>
      </div>
      </div>
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
