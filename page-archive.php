<?php
/**
 * Template Name: アーカイブ
 */
?>


<?php get_header(); ?>

<div id="container" class="wrapper">
  <main>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <article>
        <h1 class="article-title"><?php the_title(); ?></h1>
        <h2 class="wp-block-heading">このブログについて</h2>
          <p class="text_excerpt">私がこのブログを始めたきっかけは、インスタグラムでした。
          フランス語学習忘備録とフランス史のポイントをインスタ投稿していたので、インスタで伝えきれなかった内容をブログに書き残すというのが最初の目的でした。
         （残念ながらフランス語熱は途中で冷めてしまって、記事はもうありませんが、インスタには残しています。）<br>
          <br>ブログを書いていくうちに、歴史の面白さと奥深さに魅せられ、「もっと深く知りたい！」という探求心に駆られるようになりました。そこで、範囲をフランス史から欧州史に広げ、個人的に気になる歴史上の出来事や人物、そして時代とともに変貌する美術・建築に焦点を当てて書くようになりました。<br>
          歴史はドラマのように面白い！この面白さをブログを通して伝えたい！そんな気持ちで記事を書いております。
         歴史ファンみなさまの心に刺されば幸いです。
        </p>
        <h2 class="wp-block-heading">記事リスト</h2>
        <p class="text_excerpt">このブログの説明とカテゴリーごとに並べた記事リストになります。</p>

        <h3 class="wp-block-heading">歴史</h3>
          <ul class="category-list">
           <li><a href="<?php echo esc_url(home_url('/article14/')); ?>">中世を騒がせた王妃アリエノール・ダキテーヌ④</a></li>
            <li><a href="<?php echo esc_url(home_url('/article13/')); ?>">中世を騒がせた王妃アリエノール・ダキテーヌ③</a></li>
            <li><a href="<?php echo esc_url(home_url('/article12/')); ?>">中世を騒がせた王妃アリエノール・ダキテーヌ②</a></li>
            <li><a href="<?php echo esc_url(home_url('/article11/')); ?>">中世を騒がせた王妃アリエノール・ダキテーヌ①</a></li>
            <li><a href="<?php echo esc_url(home_url('/article09/')); ?>">ノルマン＝コンクエスト</a></li>
            <li><a href="<?php echo esc_url(home_url('/article08/')); ?>">カペー朝の始まりと十字軍遠征</a></li>
            <li><a href="<?php echo esc_url(home_url('/article07/')); ?>">フランク王国の終焉とノルマン人の南下</a></li>
            <li><a href="<?php echo esc_url(home_url('/article06/')); ?>">ピピン３世とカール大帝の時代</a></li>
            <li><a href="<?php echo esc_url(home_url('/article05/')); ?>">華麗なる宮宰一族カロリング家</a></li>
            <li><a href="<?php echo esc_url(home_url('/article04/')); ?>">メロヴィング朝の迷走</a></li>
            <li><a href="<?php echo esc_url(home_url('/article03/')); ?>">ゲルマン民族大移動とメロヴィング朝の始まり</a></li>
            <li><a href="<?php echo esc_url(home_url('/article02/')); ?>">ガロ・ローマ 豊かな属州時代</a></li>
            <li><a href="<?php echo esc_url(home_url('/article01/')); ?>">カエサルのガリア遠征</a></li>
          </ul>
          
          <h3 class="wp-block-heading">建築・美術</h3>
          <ul class="category-list">
            <li><a href="<?php echo esc_url(home_url('/article10/')); ?>">ロマネスクの魅力</a></li>
          </ul>
      </article>

    <?php endwhile;
    endif; ?>

    <!-- 前の記事　次の記事 -->
    <div class="navigation">
      <ul class="page-numbers">
        <li class="navileft"><?php next_post_link('« %link', 'Nex', TRUE, ''); ?></li>
        <li class="naviright"><?php previous_post_link('%link »', 'Pre', TRUE, ''); ?></li>
      </ul>
    </div>

  </main>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
