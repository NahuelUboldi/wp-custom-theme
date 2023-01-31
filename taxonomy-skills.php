<?php get_header(); ?>
<!--
 Template Hierarchy:
 - page for listing the custom taxonomies
-->
  <div id="primary" class="content-area extended">
    <main id="main" class="site-main" role="main">

      <h1><?php the_archive_title( ); ?></h1>

      <!-- starting the loop -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
        <?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
      
      <?php endwhile; else:  ?> 
      
        <!-- 404 page -->
        <?php get_template_part( 'template-parts/content','none' ); ?>
 
      <?php endif; ?>
      <!-- ending the loop -->
      
      
      <p>Template: taxonomy-skills.php</p>
     </main>
  </div>
  
<?php get_footer(); ?>
