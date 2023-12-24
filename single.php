<?php get_header(); ?>

<div id="container" class="wrapper">
  <main>
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
      <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
      ?>
      <article>
        <h1 class="article-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        <ul class="meta">
          <li><?php the_time('Y/m/d'); ?></li>
          <li><?php echo $catname; ?></li>
        </ul>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="text"><?php the_content(); ?></div>
      </article>
    <?php endwhile;endif; ?>

    <ul class="post-pager">
      <li><?php previous_post_link('%link', '< Pre'); ?>
    </li>
      <li><?php next_post_link('%link', 'Next >'); ?></li>
    </ul>

  </main>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
