<?php get_header(); ?>
<!--
 Template Hierarchy:
 - falls back into index.php
-->
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <!-- no need for the loop -->

        <?php get_template_part( 'template-parts/content','none' ); ?>
     
      <p>Template: 404.php</p>
    </main>
  </div>
  
<?php get_sidebar( 'page' ); ?>
<?php get_footer(); ?>
