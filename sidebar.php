<aside id="sidebar">
  <section class="author">
    <img src="<?php echo esc_url(get_theme_file_uri('img/auther.svg')); ?>" alt="作者プロフィール">
    <h3 class="side-title">作者</h3>
    <p class="profile">
      フランスと歴史が好きな有閑マダムを目指す普通の会社員です。こちらのブログはサンプルです。続きは「歴史から文化と言葉を学ぶ」でご覧ください。</p>
  </section>
  <section class="archive">
  <?php get_search_form(); ?>
  </section>
 
  <section class="archive">
    <?php dynamic_sidebar('sidebar'); ?>
  </section>
</aside>
