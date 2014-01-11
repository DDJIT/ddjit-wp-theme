<footer class="content-info" role="contentinfo">
	<div class="row">
		<div class="col-lg-offset-2 col-lg-8">
			<div class="col-lg-12">
				<?php dynamic_sidebar('footertop'); ?>
			</div>
		</div>
	</div>
  <div class="row">
    <div class="col-lg-offset-2 col-lg-8">
		<div class="col-lg-4">
			<?php dynamic_sidebar('sidebarfooterl'); ?>
		</div>
		<div class="col-lg-4">
			<?php dynamic_sidebar('sidebarfooterc'); ?>
		</div>
		<div class="col-lg-4">
			<?php dynamic_sidebar('sidebarfooterr'); ?>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-offset-2 col-lg-8">
		<center>
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </center>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
