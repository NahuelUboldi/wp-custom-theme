<?php 
 // Template Name: Splash Page
 // Template Post Type: post, page
?>
<?php get_header(); ?>
  <div id="primary" class="content-area extended">
    <main id="main" class="site-main" role="main">

      <!-- starting the loop -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
        <?php get_template_part( 'template-parts/content', 'page' ); ?>
      
      <?php endwhile; else:  ?> 
      
        <!-- 404 page -->
        <?php get_template_part( 'template-parts/content','none' ); ?>
 
      <?php endif; ?>
      <!-- ending the loop -->
    
      <p>Template: template-splash.php</p>
    </main>
  </div>
  
<?php get_footer(); ?>
