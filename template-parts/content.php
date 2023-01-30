<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">

  <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>

   

   <?php the_title('<h1>','</h1>'); ?><!-- this can be wrapped in h1 tags also, but this way is better because you can change the tags programmatically -->

   <div class="byline">
    <?php esc_html_e( 'Author:'); ?> <?php the_author(); ?>
   </div>

  </header>
  <div class="entry-content">
   <?php the_content(); ?>
  </div>
  
  <?php if( comments_open() ) : ?>
   <?php comments_template( ); ?>
  <?php endif; ?>

</article>