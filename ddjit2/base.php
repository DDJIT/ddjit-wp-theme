<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>

    <!--[if lt IE 8]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
      </div>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300,200' rel='stylesheet' type='text/css'>
    <?php
      do_action('get_header');
      if (current_theme_supports('bootstrap-top-navbar')) {
        get_template_part('templates/header-top-navbar');
      } else {
        get_template_part('templates/header');
      }
    ?>
    <div class="wrap" role="document">
      <div class="content row">
        <?php if (roots_display_sidebar()) : ?>
          <aside class="sidebar hidden-xs s-left <?php echo roots_sidebar_class(); ?>" role="complementary">
            <div class="sidebarcontent">
              <?php dynamic_sidebar('sidebar-primary'); ?>
            </div>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
        <div class="main <?php echo roots_main_class(); ?>" role="main">
          <?php include roots_template_path(); ?>
        </div><!-- /.main -->
        <?php if (roots_display_sidebar()) : ?>
          <aside class="sidebar hidden-xs s-right <?php echo roots_sidebar_class(); ?>" role="complementary">
            <?php dynamic_sidebar('sidebar-right'); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php get_template_part('templates/footer'); ?>
</body>
</html>
