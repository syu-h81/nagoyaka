<?php 
// `page.php` をインクルードして基本レイアウトを使用
include get_template_directory() . '/page.php';
?>
<main class="p-money-main l-main">
  <section class="p-money l-section">
    <div class="p-money__inner l-inner">
      <div class="p-money-desc">
        <p>
          1ヶ月の目安の費用は以下の通りです。<br>
          医療保険が適応されるため、実際の負担は記載された金額の割引率によって異なります。
        </p>
      </div>
      <div class="p-money-cards">
        <div class="p-money-cards-card">
          <div class="p-money-cards-card__heading">
            <h3 class="c-sub-heading">対応疾患</h3>
          </div>
          <div class="p-money-cards-card__content">
            <div class="p-money-cards-card__content__box">
              <div class="p-money-cards-card__content__heading">月1回訪問の場合</div>
              <div class="p-money-cards-card__content__textBox">
                <p>1割負担：約450円前後</p>
                <p>2割負担：約900円前後</p>
                <p>3割負担：約1,350円前後</p>
              </div>
            </div>
          </div>
        </div>
        <div class="p-money-cards-card">
          <div class="p-money-cards-card__heading">
            <h3 class="c-sub-heading">内科併診をする場合</h3>
          </div>
          <div class="p-money-cards-card__content">
            <div class="p-money-cards-card__content__box">
              <div class="p-money-cards-card__content__heading">月2回訪問の場合</div>
              <div class="p-money-cards-card__content__textBox">
                <p>1割負担：約7,000円前後</p>
                <p>2割負担：約15,000円前後</p>
                <p>3割負担：約22,000円前後</p>
              </div>
            </div>
            <div class="p-money-cards-card__content__box">
              <div class="p-money-cards-card__content__heading">月1回訪問の場合</div>
              <div class="p-money-cards-card__content__textBox">
                <p>1割負担：約4,000円前後</p>
                <p>2割負担：約8,000円前後</p>
                <p>3割負担：約13,000円前後</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="p-money-caution">
        <div class="p-money-caution__heading">注意事項</div>
        <p>
          突発的な往診が必要な場合は、追加の費用がかかることがあります。お薬代は別途薬局での支払いとなります。医療証をお持ちの場合、医療費の免除や減額が適用される場合がありますので、詳細はご相談ください。
        </p>
      </div>
    </div>
  </section>
  <section class="c-banner-contact l-setion">
    <div class="c-banner-contact-inner">
      <div class="c-banner-contact-block">
        <div class="c-banner-contact-block__img">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/phone-icon.png" alt="">
        </div>
        <div class="c-banner-contact-block-body">
          <div class="c-banner-contact-block-body__img u-pc-only">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/contact-field-1.png" alt="">
          </div>
          <div class="c-banner-contact-block-body__phoneNumber">
            <p class="c-banner-contact-block-body__phoneNumber__desc">お問い合わせ・お申し込み</p>
            <p class="c-banner-contact-block-body__phoneNumber__number"><a href="tel:050-8893-2767">050-8893-2767</a></p>
            <p class="c-banner-contact-block-body__phoneNumber__text">
              当院は名古屋市内で唯一の眼科専門医による訪問診療専門クリニックです。<br class="u-pc-only">内科・精神科の診療も可能で、24時間365日、医師がすぐに対応。<br class="u-pc-only">訪問診療で通院の負担なく、眼科と内科の診療を受けられます。
            </p>
            <a href="<?php echo home_url('/contact'); ?>" class="c-banner-contact-block-body__email c-email-btn">
              <div class="c-banner-contact-block-body__email__img c-email-btn-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/email-icon.png" alt="">
              </div>
              <div class="c-email-btn-text">メールで問い合わせ</div>
            </a>
          </div>
          <div class="c-banner-contact-block-body-block-body__img u-pc-only">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/contact-field-2.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
