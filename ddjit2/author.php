

<div id="content" class="narrowcolumn">

<!-- This sets the $curauth variable -->

    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>

    <h2>About: <?php echo $curauth->display_name; ?></h2>
    <?php echo get_avatar($author_id = $curauth->ID); ?>
    <dl style="padding-left: 105px;">
        <dt>Website</dt>
        <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
        <dt>Profile</dt>
        <dd><?php echo $curauth->user_description; ?></dd>
    </dl>

    <h2>Posts by <?php echo $curauth->display_name; ?>:</h2>

    <ul>
<!-- The Loop -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
		    <header>
		        <?php the_post_thumbnail('medium', array('class' => 'alignright')); ?>
		        <a href="<?php echo get_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
		        <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
		        <p class="byline author vcard"><?php echo __('By', 'roots'); ?> <?php if ( function_exists( 'coauthors' ) ) { coauthors_posts_links(); } else { the_author_link(); } ?></p>
		      
			    <div class="entry-content">
			      <?php the_excerpt(); ?>
			    </div>

		    </header>
		    <footer>
		      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
		    </footer>
		    <?php comments_template('/templates/comments.php'); ?>

		  </article>
    <?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>

<!-- End Loop -->

    </ul>
</div>