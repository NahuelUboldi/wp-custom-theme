<?php get_header(); ?>
<!--
 Template Hierarchy:
 - page.php (pages), single.php (posts), attachment.php (images,videos) -> default into singular.php
 - singular.php is not needed if you have page.php,single.php and attachmet.php.
 - Also not needed if is the same as index.php
-->
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <!-- starting the loop -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
        <?php get_template_part( 'template-parts/content', 'page' ); ?>
      
      <?php endwhile; else:  ?> 
      
        <!-- 404 page -->
        <?php get_template_part( 'template-parts/content','none' ); ?>
 
      <?php endif; ?>
      <!-- ending the loop -->
    
      <p>Template: singular.php</p>
    </main>
  </div>
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>
