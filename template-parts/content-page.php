<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <header class="entry-header">

  <?php the_title('<h1>','</h1>'); ?><!-- this can be wrapped in h1 tags also, but this way is better because you can change the tags programmatically -->

 </header>
 <div class="entry-content">

  <?php the_content(); ?>

 </div>
</article>