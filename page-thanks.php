<?php get_header(); ?>
<main class="p-thanks-main l-main">
  <section class="p-thanks">
    <div class="p-thanks__inner l-inner">
      <div class="p-thanks__block">
        <div class="p-thanks__heading">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="p-thanks__body">
          <p>
            この度は、お問い合わせいただき、誠にありがとうございました。<br class="u-pc-only">
            お送りいただきました内容を確認の上、担当者より折り返しご連絡させていただきます。<br class="u-pc-only">
            お急ぎの場合はお電話にてご連絡ください。<br><br>
            また、ご記入いただきましたメールアドレスへ、自動返信の確認メールを送付しています。<br class="u-pc-only">
            自動返メールが届かない場合、入力いただいたメールアドレスに誤りがあった可能性がございます。<br class="u-pc-only">
            メールアドレスをご確認の上、もう一度フォームよりお問合せください。
          </p>
          <div class="p-thanks__phoneNumber p-contact-body__phoneNumber">
            <div class="p-contact-body__phoneNumber__img">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/phone-icon.png" alt="">
            </div>
            <div class="p-contact-body__phoneNumber__text">
              <p>お問い合わせ先：<span><br><a href="tel:050-8893-2767">050-8893-2767</a></span><br class="u-sp-only">(平日 9:00〜18：00)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>