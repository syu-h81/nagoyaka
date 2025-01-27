<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <!-- OGP -->
  <meta property="og:url" content="<?php echo get_permalink(); ?>"> <!-- //ページのURLを設定 -->
  <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>"> <!-- ページのタイトル -->
  <meta property="og:description" content="<?php echo esc_attr(get_the_excerpt()); ?>"> <!-- ページのディスクリプション -->
  <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>"> <!-- サイトの名前 -->
  <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>"> <!-- OGP画像 -->
  <meta property="og:locale" content="ja_JP"> <!-- ページの国コード -->
  <!-- Import Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body class="l-body">
  <div class="l-wrapper">
    <!-- ===== header ===== -->
    <header class="header l-section">
      <div class="header-inner l-inner">
        <div class="header-logo">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/header-logo.png" alt="">
        </div>
        <nav class="header-nav">
          <ul class="header-nav__list">
            <li class="header-nav__item"><a href="<?php home_url(); ?>">トップページ</a></li>
            <li class="header-nav__item"><a href="<?php home_url('/about'); ?>">当院について</a></li>
            <li class="header-nav__item"><a href="<?php home_url('/treatment'); ?>">診療内容</a></li>
            <li class="header-nav__item"><a href="<?php home_url('/money'); ?>">料金案内</a></li>
            <li class="header-nav__item"><a href="<?php home_url('/contact'); ?>">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
    </header>