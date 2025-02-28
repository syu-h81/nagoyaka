<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo get_template_directory_uri()?>/assets/images/favicon.png">
  <!-- Import Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Inter:wght@400;700&display=swap">

  <meta property="og:image" content="<?php echo get_template_directory_uri()?>/assets/images/ogp.jpg"> <!-- //ogp画像の設定 -->
  <?php wp_head(); ?>
</head>
<body class="l-body">
  <div class="l-wrapper">
    <!-- ===== header ===== -->
    <header class="header fixed">
      <div class="header-inner l-inner">
        <a href="<?php echo home_url(); ?>" class="header-logo">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/header-logo.png" alt="">
        </a>
        <div class="header-sp-menu-bar-inner">
          <div div class="header-sp-menu-bar-block">
            <div class="header-sp-menu-bar">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
        <nav class="header-nav u-pc-only">
          <ul class="header-nav__list">
            <li class="header-nav__item"><a href="<?php echo home_url(''); ?>">ホーム</a></li>
            <li class="header-nav__item"><a href="<?php echo home_url('/about'); ?>">当院について</a></li>
            <li class="header-nav__item"><a href="<?php echo home_url('/treatment'); ?>">診療内容</a></li>
            <li class="header-nav__item"><a href="<?php echo home_url('/money'); ?>">料金案内</a></li>
            <li class="header-nav__item"><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="sp-header-modal-inner">
      <div class="sp-header-modal"></div>
    </div>
    <div class="sp-header-modal-nav u-sp-only">
      <ul class="sp-header-modal-nav__list">
        <a href="<?php echo home_url(); ?>" class="sp-header-modal-nav__item"><span>ホーム</span></a>
        <a href="<?php echo home_url('/about'); ?>" class="sp-header-modal-nav__item"><span>当院について</span></a>
        <a href="<?php echo home_url('/treatment'); ?>" class="sp-header-modal-nav__item"><span>診療内容</span></a>
        <a href="<?php echo home_url('/money'); ?>" class="sp-header-modal-nav__item"><span>料金案内</span></a>
        <a href="<?php echo home_url('/contact'); ?>" class="sp-header-modal-nav__item">
          <li class="c-banner-contact-block-body__email c-email-btn sp-header-modal-nav__item__btn">
            <div class="c-banner-contact-block-body__email__img c-email-btn-img">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/email-icon.png" alt="">
            </div>
            <div class="c-email-btn-text">メールで問い合わせ</div>
          </li>
        </a>
        <li class="sp-header-modal-nav__item">
          <div class="c-info-banner__phoneNumber sp-header-modal-nav__item__phoneNumber">
            <div class="sp-header-modal-nav__item__phoneNumber__img c-info-banner__phoneNumber__img">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/phone-icon.png" alt="">
            </div>
            <div class="footer-info-body__phoneNumber__text sp-header-modal-nav__item__phoneNumber__text c-info-banner__phoneNumber__text">
              <p>お問い合わせ先：<br class="u-sp-only"><span>050-8893-2767</span></p>
              <p>(平日 9:00〜18：00)</p>
            </div>
          </div>
        </li>
      </ul>
    </div>