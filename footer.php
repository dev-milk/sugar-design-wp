<div id="re-top">
  <a href="#top" class="gotop">TOP</a>
</div>
<footer id="footer">
  <div class="content">
    <section class="item">
      <a href="index.php">
        <img class="footer-logo" src="<?php echo get_theme_file_uri('img/footer-logo.svg'); ?>" alt="フッターロゴ" />
      </a>
    </section>
    <section class="item">
      <h3 class="footer-title">Contents</h3>
      <a href="<?php echo esc_url(home_url()); ?>"><p><span>-Articles-</span>歴史記事</p></a>
      <a href="<?php echo esc_url(home_url('/archive/')); ?>"><p><span>-Archive-</span>カテゴリー別記事</p></a>
      <a href="<?php echo esc_url(home_url('/chronology/')); ?>"><p><span>-Chronology-</span>歴史年表</p></a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>"><p><span>-Contact-</span>お問い合わせ</p></a>
    </section>
    <section class="item">
      <h3 class="footer-title">About</h3>
      <p>
        世界史は範囲が広いため、まずはフランス史を中心に西洋史のブログを書いていきます。史実を追いながら個人的に気になる歴史上の出来事や人物について掘り下げて記事を書いています。
      </p>
      <div class="footer-banner">
      <a href="https://devsugar.biz/portfolio/">
        <img src="<?php echo get_theme_file_uri('img/folio.jpg'); ?>" alt="ポートフォリオ" />
      </a>
      </div>     
    </section>
  </div>
  <div class="bottom-area">
  <div class="copyright">© devsugar.biz</a></div>
  </div>
</footer>
</body>

</html>
<?php wp_footer(); ?>
