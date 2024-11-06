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
          <p class="text_excerpt">当初はフランス語とフランス史をテーマにしたブログを書く予定でしたが、歴史を紐解くうちに新しい発見が続き、「もっと深く知りたい！」という探求心に駆られるようになりました。そこで、これまで書いてきた初期のフランス史を継承しつつ、個人的に気になる歴史上の人物に焦点を当て、史実を組み入れながら彼らの生涯を書くことにしました。また美術史にも興味がありますので、記事の進捗に合わせてその時代の美術・建築についても書いて行きます。歴史ファンみなさまの心に刺されば幸いです。</p>
        <h2 class="wp-block-heading">記事リスト</h2>
        <p class="text_excerpt">このブログの説明とカテゴリーごとに並べた記事リストになります。</p>

        <h3 class="wp-block-heading">歴史</h3>
          <ul class="category-list">
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
