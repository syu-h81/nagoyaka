<?php 
// `page.php` をインクルードして基本レイアウトを使用
include get_template_directory() . '/page.php';
?>
<style>
  .footer {
    padding-top: 0px!important;
  }
  @media(max-width: 768px) {
    .footer {
      padding-bottom: 0;
    }
    .c-page-contact {
      position: relative;
    }
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
          <p>お問い合わせ先：<span><br><a href="tel:050-8893-2767">050-8893-2767</a></span><br class="u-sp-only">(平日 9:00〜18：00)</p>
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
        
        <p class="p-contact__heading__desc">下記フォームに必要事項をご記入の上、「送信する」ボタンをクリックしてください。</p>
      </div>
      <div class="p-contact-form">
        <?php echo do_shortcode('[contact-form-7 id="99453bf" title="コンタクトフォーム 1"]'); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>