<aside id="sidebar">
  <section class="author">
    <img src="<?php echo esc_url(get_theme_file_uri('img/auther.svg')); ?>" alt="作者プロフィール">
    <h3 class="side-title">Auther</h3>
    <p class="profile">
      歴史が好きな有閑マダムを目指す普通の会社員です。歴史記事を書きながらWEBデザイン・コーディングもやっています。</p>
      <p>
      <a href="https://www.pinterest.jp/devsugar_biz/">
      <img src="<?php echo get_theme_file_uri('img/pinterest-btn.png'); ?>" alt="ピンタレスト">
     </a>
     <a href="https://www.instagram.com/devsugar_biz/">
      <img src="<?php echo get_theme_file_uri('img/insta-btn.png'); ?>" alt="インスタ">
    </a>
    <a href="https://www.youtube.com/@devmilksugar4645">
      <img src="<?php echo get_theme_file_uri('img/youtube-btn.png'); ?>" alt="Youtube">
     </a>
      </p>
  </section>

  <section class="archive">
  <?php get_search_form(); ?>
  </section>

  <section class="archive">
    <?php dynamic_sidebar('sidebar'); ?>
  </section>

  <section class="archive">
  <h3 class="side-title">Privacy Policy</h3>
  <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">
      プライバシーポリシー
     </a>
  </section>
</aside>


