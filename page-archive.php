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
          <p class="text_excerpt">これまで書いてきた記事をカテゴリーごとに並べています。</p>
        <h2 class="wp-block-heading">建築美術</h2>
          <ul class="category-list">
            <li><a href="<?php echo esc_url(home_url('/article10/')); ?>">ロマネスクの魅力</a></li>
          </ul>

        <h2 class="wp-block-heading">歴史</h2>
          <ul class="category-list">
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
