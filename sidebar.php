<aside id="sidebar">
<section class="archive">
  <?php get_search_form(); ?>
  </section>
  <section class="author">
    <img src="<?php echo esc_url(get_theme_file_uri('img/auther.svg')); ?>" alt="作者プロフィール">
    <h3 class="side-title">作者</h3>
    <p class="profile">
      歴史が好きな有閑マダムを目指す普通の会社員です。こちらのブログは作者の<a href="https://github.com/dev-milk/sugar-design-wp">オリジナルテーマ</a>を使っています。現在、記事追加中です。</p>
  </section>
  <!-- <section class="archive">
  <?php get_search_form(); ?>
  </section> -->
 
  <section class="archive">
    <?php dynamic_sidebar('sidebar'); ?>
  </section>
</aside>
