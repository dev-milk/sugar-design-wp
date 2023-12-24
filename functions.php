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
ページネーション
**************************************************/
function pagination($pages = '', $range = 2) {
  $showitems = ($range * 2) + 1;

  global $paged;
  if(empty($paged)) {
    $paged = 1;
  }

  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages) {
      $pages = 1;
    }
  }

  if(1 != $pages) {
    echo '<div class="pagination">';
    echo '<ul>';
    if($paged > 1) {
      echo '<li class="prev"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">previous</a></li>';
    }

    for ($i=1; $i <= $pages; $i++) {
      if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
        if ($paged == $i) {
          echo '<li class="active">' .$i. '</li>';
        } else {
          echo '<li><a href="' . esc_url(get_pagenum_link($i)) . '">' .$i. '</a></li>';
        }
      }
    }

    if ($paged < $pages) {
      echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">next</a></li>';
    }
    echo '</ul>';
    echo '</div>';
  }
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
