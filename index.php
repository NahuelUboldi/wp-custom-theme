<!--
 Template Hierarchy:
 - is the default page if there is no other
 - must have it in your theme
-->

<?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <!-- starting the loop -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
      
      <?php endwhile; else:  ?> 
      
        <!-- 404 page -->
        <?php get_template_part( 'template-parts/content','none' ); ?>
 
      <?php endif; ?>
      <!-- ending the loop -->

      <p>Template: index.php</p>
    
    </main>
  </div>
  
<?php get_sidebar( ) ?>
<?php get_footer(); ?>
