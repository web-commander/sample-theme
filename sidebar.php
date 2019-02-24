    <!-- サイドバー -->
    <div class="col-md-4 blog-side">
      <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	  <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
         <?php dynamic_sidebar( 'sidebar-1' ); ?>
	  </div><!-- #primary-sidebar -->
      <?php endif; ?>
    </div><!-- /.blog-sidebar -->