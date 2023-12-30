<?php get_header(); ?>

<div id="container" class="wrapper">
  <main>
    <?php
      if (have_posts()):
        get_template_part('loop');
     
      endif;
    ?>
     <?php my_paging_nav(); ?>
  </main>


  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
