<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">
  <?php wp_head(); ?>
</head>


<body id="top">
  <header>
    <section class="blog-header">
    </section>
    <div class="main-menu">
      <div class="pc-menu">
        <ul>
          <li>
            <a href="<?php echo esc_url(home_url()); ?>">
            <i class="fa-solid fa-bars mr-8"></i>Home</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/archive/')); ?>"><i class="fa-regular fa-folder-open mr-8"></i>Archive</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/timeline/')); ?>"><i class="fa-solid fa-clock mr-8"></i>Timeline</a>
          </li>
          <li>
          <a href="https://devmilk.biz/portfolio/form/" target="_blank"><i class="fa-regular fa-envelope mr-8"></i>Contact</a>
          </li>
        </ul>
      </div>
      <div class="sp-menu">
        <input type="checkbox" id="sp-menu__check">
        <label for="sp-menu__check" class="sp-menu__box">
          <span></span>
        </label>
        <div class="sp-menu__content">
          <ul class="sp-menu__list">
            <li class="sp-menu__item">
              <a class="sp-menu__link" href="<?php echo esc_url(home_url()); ?>"><i class="fa-solid fa-bars mr-8"></i>Home</a>
            </li>
            <li class="sp-menu__item">
              <a class="sp-menu__link" href="<?php echo esc_url(home_url('/archive/')); ?>"><i class="fa-regular fa-folder-open mr-8"></i>Archive</a></a>
            </li>
            <li class="sp-menu__item">
              <a class="sp-menu__link" href="<?php echo esc_url(home_url('/timeline/')); ?>"><i class="fa-solid fa-clock mr-8"></i>Timeline</a>
            </li>
            <li class="sp-menu__item">
              <a class="sp-menu__link" href="https://devmilk.biz/portfolio/form/"><i class="fa-regular fa-envelope mr-8"></i>Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>   
  </header> 
