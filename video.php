<?php get_header(); ?>
<!--
 Template Hierarchy:
 - it controls the images
 - defaults into attachment.php
-->
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <!-- starting the loop -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
       <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         <header class="entry-header">
          <?php the_title('<h1>','</h1>'); ?><!-- this can be wrapped in h1 tags also, but this way is better because you can change the tags programmatically -->
         </header>

         <div class="entry-content">
          
         <video src="<?php echo esc_url( $post->guid ); ?>" controls></video>
          

          <?php the_content(); ?>
         </div>
         
         <?php if( comments_open() ) : ?>
          <?php comments_template( ); ?>
         <?php endif; ?>

       </article>
      
      <?php endwhile; else:  ?> 
      
        <!-- 404 page -->
        <?php get_template_part( 'template-parts/content','none' ); ?>
 
      <?php endif; ?>
      <!-- ending the loop -->
    
      <p>Template: video.php</p>
    </main>
  </div>
  
<?php get_sidebar( ) ?>
<?php get_footer(); ?>