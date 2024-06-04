<?php

/**************************************************
CSSファイルの読み込み
**************************************************/
function my_enqueue_styles() {
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

/**************************************************
アイキャッチを有効化
**************************************************/
add_theme_support('post-thumbnails');


/**************************************************
ページネーション new
**************************************************/
function my_paging_nav() {
  //グローバル変数を宣言
  global $wp_query , $wp_rewrite; 

  // ページ数が2より小さかったらページネーションを表示しない
  if ( $wp_query->max_num_pages < 2 ) {
      return;
  }
  // ページがあればページ数を取得、なければ1を入れる
  $paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
  // パーマリンクの設定をしていたら、それに従い表示する。デフォルトなら「?paged=%#%」で表示する
  $format  = $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

  //ページネーションの設定
  $links = paginate_links( array(
      'base'     => get_pagenum_link() . '%_%', //URLのベース
      'format'   => $format, //ページネーションのリンクの構造
      'total'    => $wp_query->max_num_pages, //ページ数（全ページを指定）
      'current'  => $paged, //現在のページの位置
      'mid_size' => 1, //現在のページの両側に表示する数
      'prev_text' => 'Nex',
      'next_text' => 'Pre',
  ) );

  if ( $links ) :

  ?>
  <!-- 表示されるHTML -->
  <nav role="navigation">
      <ul class="page-numbers">
          <li><?php echo $links; ?></li>
      </ul>
  </nav>
  <?php endif; 
}

/**************************************************
サイドバーウィジェット
**************************************************/
if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'sidebar',
    'description' => 'サイドバーウィジェット',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="side-title">',
    'after_title' => '</h3>'
 ));
}

/**************************************************
サイト内検索の対象を「投稿」のみにする
**************************************************/
function search_filter($query) {
  if ($query -> is_search) {
    $query -> set('post_type', 'post');
  }
  return $query;
}
add_filter('pre_get_posts', 'search_filter');

/**************************************************
ログイン画面カスタマイズ
**************************************************/
function my_login_stylesheet() {
  wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

function my_login_logo_url() {
  return home_url();
  }
  add_filter( 'login_headerurl', 'my_login_logo_url' );

  /* 【管理画面】管理画面にもファビコンを表示 */
function admin_favicon() {
  echo '<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />';
 }
 add_action('admin_head', 'admin_favicon');
