<?php 
// `page.php` をインクルードして基本レイアウトを使用
include get_template_directory() . '/page.php';
?>
<style>
  .footer {
    padding-top: 0px!important;
  }
</style>
<main class="p-contact-main l-main">
  <div class="p-contact-body">
    <div class="p-contact-body-inner l-inner">
      <div class="p-contact-body__heading">
        <h3>訪問診療のご相談は<br class="u-sp-only">お電話にて承っております。</h3>
      </div>
      <div class="p-contact-body__phoneNumber">
        <div class="p-contact-body__phoneNumber__img">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/phone-icon.png" alt="">
        </div>
        <div class="p-contact-body__phoneNumber__text">
          <p>お問い合わせ先：<span><br class="u-sp-only"><a href="tel:050-8893-2767">050-8893-2767</a></span></p>
          <p>(平日 9:00〜18：00)</p>
        </div>
      </div>
      <div class="p-contact-body__content">
        <div class="p-contact-body__content__img">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/contact-body.png" alt="">
        </div>
        <div class="p-contact-body__content__textBox">
          <div class="p-contact-body__content__textBox__heading">事前にお知らせいただきたい情報</div>
          <p>
            ①現在の生活状況<br>
            ②お名前、生年月日、住所、連絡先<br>
            ③現在の病気に関する情報（病名や状態、使用している医療機器など）<br>
            ④通院している医療機関の情報
          </p>
        </div>
      </div>
    </div>
  </div>
  <section class="p-contact l-section">
    <div class="p-contact__inner l-inner">
      <div class="p-contact__bubble">
        <p>メールでもお問い合わせを承ります。</p>
      </div>
      <div class="p-contact__heading c-heading-block">
        <div class="c-page-head__heading__text__block">
          <div class="c-page-head__heading__text__img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/furigana-icon.png" alt="">
          </div>
          <p class="c-page-head__heading__text">CONTACT</p>
        </div>
        <h2 class="c-heading">お問い合わせ</h2>
        <p class="p-contact__heading__desc">下記フォームに必要事項をご記入の上、「確認画面へ」「送信する」ボタンをクリックしてください。</p>
      </div>
      <div class="p-contact-form">
        <?php echo do_shortcode('[contact-form-7 id="ff2e4b2" title="お問い合わせフォーム"]'); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>