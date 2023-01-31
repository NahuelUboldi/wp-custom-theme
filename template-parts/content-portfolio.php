<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <header class="entry-header">

  <?php the_title('<h2><a href="' . get_the_permalink() . '">','</a></h2>'); ?> <!--this can be wrapped in h1 tags also, but this way is better because you can change the tags programmatically -->
  
  <a href="<?php the_permalink(); ?>">
   <?php the_post_thumbnail( 'full' ); ?> 
  </a>

 </header>
 <div class="entry-content">

  <?php the_excerpt(); ?>

 </div>
</article>