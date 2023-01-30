  </div><!-- #content -->
   <footer id="colophon" class="site-footer" role="contentinfo">

   <!-- widget sidebar area -->
    <?php if(is_active_sidebar( 'footer' )): ?>

         <aside id="footer-sidebar" class="widget-area" role="complementary">
            <?php dynamic_sidebar( "footer" ) ?>
          </aside>

    <?php endif; ?>
   <!-- end widget sidebar area -->
   
    <a href="<?php echo esc_url( __('https://wordpress.org/', 'wphierarchy' ) ); ?>" target="_blanck">
    <?php printf( esc_html__('Proudly powered by %s', 'wphierarchy'), 'WordPress'); ?>
   </a>

   </footer>
  </div><!-- #page -->
  <?php wp_footer(); ?>
</body>
</html> 