<!--
 Template Hierarchy:
 - page for an unique category
 - fall back to archive.php
-->

<?php get_header( ); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

     <h1>
      <?php the_archive_title( ); ?>
      <?php esc_html_e( ' Posts Only! ', 'wphierarchy'); ?>
     </h1>
      <p><?php echo category_description(); ?></p>

      <hr>

      <!-- starting the loop -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
        <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>
      
      <?php endwhile; else:  ?> 
      
        <!-- 404 page -->
        <?php get_template_part( 'template-parts/content','none' ); ?>
 
      <?php endif; ?>
      <!-- ending the loop -->
      
      <p>Template: category-3.php</p>
    
    </main>
  </div>
  
<?php get_sidebar( ) ?>
<?php get_footer( ); ?>
