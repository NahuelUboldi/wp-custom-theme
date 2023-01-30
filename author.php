<!--
 Template Hierarchy:
 - page for the author
 - fall back to archive.php
-->

<?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

     <div class="author-bio">
      <h1><?php the_archive_title( ); ?></h1>
      <p>
       <?php echo the_author_meta( 'description', $post->post_author ); ?>
      </p>
     </div>


      <!-- starting the loop -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
        <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>
      
      <?php endwhile; else:  ?> 
      
        <!-- 404 page -->
        <?php get_template_part( 'template-parts/content','none' ); ?>
 
      <?php endif; ?>
      <!-- ending the loop -->
      
      <p>Template: archive.php</p>
    
    </main>
  </div>
  
<?php get_sidebar( ) ?>
<?php get_footer(); ?>
