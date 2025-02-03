<!-- ===== footer ===== -->
<footer class="footer p-contact-footer">
  <div class="footer-inner l-inner">
    <nav class="footer-nav">
      <ul class="footer-nav__list">
        <li class="footer-nav__item"><a href="<?php echo home_url(); ?>">トップページ</a></li>
        <span>｜</span>
        <li class="footer-nav__item"><a href="<?php echo home_url('/about'); ?>">当院について</a></li>
        <span>｜</span>
        <li class="footer-nav__item"><a href="<?php echo home_url('/treatment'); ?>">診療内容</a></li>
        <span>｜</span>
        <li class="footer-nav__item"><a href="<?php echo home_url('/money'); ?>">料金案内</a></li>
      </ul>
    </nav>
    <div class="footer-info__inner">
      <a href="<?php echo home_url() ?>" class="footer-info-logo">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/footer-logo-2.png" alt="">
        <div class="footer-info-logo__address">
          <p>〒460-0003 <br>愛知県名古屋市中区錦2-7-7P.T名古屋錦1302</p>
        </div>
      </a>
      <div class="footer-info-body">
        <div class="footer-info-body__phoneNumber c-info-banner__phoneNumber">
          <div class="footer-info-body__phoneNumber__img c-info-banner__phoneNumber__img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/phone-icon.png" alt="">
          </div>
          <div class="footer-info-body__phoneNumber__text c-info-banner__phoneNumber__text">
            <p>お問い合わせ先：<br><span>050-8893-2767</span><br class="u-sp-only"><span class="u-font">(平日 9:00〜18：00)</span></p>
            <p>（直接医師に繋がりますので、詳しく聞くことができます）</p>
          </div>
        </div>
        <a href="<?php echo home_url('/contact'); ?>" class="footer-info-body__email c-email-btn">
          <div class="footer-info-body__email__img c-email-btn-img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/email-icon.png" alt="">
          </div>
          <p class="footer-info-body__email__text c-email-btn-text">メールで問い合わせ</p>
        </a>
      </div>
    </div>
    <div class="footer-copyright">
      <small>©︎なごやか眼科内科訪問診療クリニック</small>
    </div>
  </div>
  <div class="c-page-contact u-sp-only">
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
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>