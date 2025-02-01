<?php

get_header();
?>
<div class="c-page-head">
  <div class="c-page-head-inner">
    <div class="c-page-head-block">
      <h1 class="c-page-head__heading"><?php the_title(); ?></h1>
      <?php if (is_page('about')): ?>
        <div class="c-page-head__heading__text__block">
          <div class="c-page-head__heading__text__img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/furigana-icon.png" alt="">
          </div>
          <p class="c-page-head__heading__text">ABOUT</p>
        </div>
      <?php endif; ?>
      <?php if (is_page('treatment')): ?>
        <div class="c-page-head__heading__text__block">
          <div class="c-page-head__heading__text__img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/furigana-icon.png" alt="">
          </div>
          <p class="c-page-head__heading__text">TREATMENT</p>
        </div>
      <?php endif; ?>
      <?php if (is_page('money')): ?>
        <div class="c-page-head__heading__text__block">
          <div class="c-page-head__heading__text__img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/furigana-icon.png" alt="">
          </div>
          <p class="c-page-head__heading__text">MONEY</p>
        </div>
      <?php endif; ?>
      <?php if (is_page('contact')): ?>
        <div class="c-page-head__heading__text__block">
          <div class="c-page-head__heading__text__img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/furigana-icon.png" alt="">
          </div>
          <p class="c-page-head__heading__text">CONTACT</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php if(is_page('money')): ?>
  <div class="content">
    <?php 
      if (have_posts()) : 
        while (have_posts()) : the_post(); 
          the_content();
        endwhile; 
      endif; 
    ?>
  </div>
<?php endif; ?>

<div class="c-page-contact">
  <a href="tel:050-8893-2767" class="c-page-contact-inner">
    <div class="c-page-contact__img">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/phone-icon-white.png" alt="">
    </div>
    <div class="c-page-contact__body">
      <p>
        <span class="c-page-contact__body__text">050-8893-2767</span><br>
        <span class="c-page-contact__body__text">（受付時間：平日 9:00〜18:00）</span>
      </p>
    </div>
  </a>
</div>
