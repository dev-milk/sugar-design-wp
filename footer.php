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
      <a href="<?php echo esc_url(home_url()); ?>"><p><span>-Articles-</span>歴史記事</p></a>
      <a href="<?php echo esc_url(home_url('/archive/')); ?>"><p><span>-Archive-</span>カテゴリー別記事</p></a>
      <a href="<?php echo esc_url(home_url('/chronology/')); ?>"><p><span>-Chronology-</span>歴史年表</p></a>
      <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>"><p><span>-Privacy Policy-</span>プライバシーポリシー</p></a>
      <a href="https://devsugar.biz/portfolio/index.html"><p><span>-Portfolio-</span>ポートフォリオ</p></a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>"><p><span>-Contact-</span>お問い合わせ</p></a>
    </section>
    <section class="item">
      <div class="footer-banner">
      <a href="<?php echo esc_url(home_url('/contact/')); ?>">
        <img src="<?php echo get_theme_file_uri('img/mail.png'); ?>" alt="メール" />
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
