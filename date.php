<?php get_header(); ?>
<!--
 Template Hierarchy:
 - default page for date
 - fall back to archive.php
-->
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <h1><?php the_archive_title( ); ?></h1>

      <!-- starting the loop -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
        <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>
      
      <?php endwhile; else:  ?> 
      
        <!-- 404 page -->
        <?php get_template_part( 'template-parts/content','none' ); ?>
 
      <?php endif; ?>
      <!-- ending the loop -->
      
      <p>Template: date.php</p>
    
    </main>
  </div>
  
<?php get_sidebar( ) ?>
<?php get_footer(); ?>
