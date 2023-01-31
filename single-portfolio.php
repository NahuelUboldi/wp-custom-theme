<?php get_header(); ?>
<!--
 Template Hierarchy:
 - it controls a single blog post
 - defaults into singular.php and into index.php
-->
  <div id="primary" class="content-area extended">
    <main id="main" class="site-main" role="main">

      <!-- starting the loop -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
       <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">

         <?php the_title('<h1>','</h1>'); ?> <!--this can be wrapped in h1 tags also, but this way is better because you can change the tags programmatically -->
         
         
        </header>
        <div class="entry-content">
         
         <?php the_post_thumbnail( 'full' ); ?> 
         
         <?php the_content(); ?>

         <p>
          Skills:
          <?php the_terms( $post->ID, 'skills' ); ?>
         </p>

         <p>
          <a class="button" href="<?php the_field( 'url' ); ?>" target="_blank"><?php esc_html_e( 'Visit the project', 'wphierarchy' )?></a>
         </p>

        </div>
       </article>
      
      <?php endwhile; endif; ?>
      <!-- ending the loop -->
    
      <p>Template: single-portfolio.php</p>
    </main>
  </div>
  
<?php get_footer(); ?>