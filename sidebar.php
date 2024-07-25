<aside id="sidebar">
  <section class="author">
    <img src="<?php echo esc_url(get_theme_file_uri('img/auther.svg')); ?>" alt="作者プロフィール">
    <h3 class="side-title">Auther</h3>
    <p class="profile">
      歴史が好きな有閑マダムを目指す普通の会社員です。こちらのブログは作者のオリジナルテーマ（ポートフォリオにて紹介）を採用しています</p>
  </section>
  <section class="archive">
  <?php get_search_form(); ?>
  </section>
 
  <section class="archive">
    <?php dynamic_sidebar('sidebar'); ?>
  </section>
</aside>
