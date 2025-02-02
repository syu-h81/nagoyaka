//ハンバーガーボタンの実装
/*
$(function() {
  $('.header-sp-menu-bar').on('click', function() {
   $(this).toggleClass('active');
   $('.sp-header-modal').toggleClass('fadeIn');
   $('.sp-header-modal-nav').toggleClass('open');
  });

  // **背景をクリックしたら閉じる**
  $('.sp-header-modal').on('click', function(event) {
    // **クリックした要素が `.sp-header-modal` 自身だった場合のみ実行**
      $('.header-sp-menu-bar').removeClass('active');
      $('.sp-header-modal').toggleClass('fadeIn')
      $('.sp-header-modal-nav').toggleClass('open');
  });
});
*/
$(function() {
  $('.header-sp-menu-bar').on('click', function() {
    $(this).toggleClass('active');
    $('.sp-header-modal-inner').toggleClass('block');
    $('.sp-header-modal').toggleClass('fadeIn');
    $('.sp-header-modal-nav').toggleClass('open');
  });

  // **背景をクリックしたら閉じる**
  $('.sp-header-modal, .sp-header-modal-nav').on('click', function(event) {
    $('.sp-header-modal-inner').toggleClass('block');
    $('.header-sp-menu-bar').toggleClass('active');
    $('.sp-header-modal').removeClass('fadeIn');
    if ($('.sp-header-modal-nav').hasClass('open')) {
      $('.sp-header-modal-nav').removeClass('open');
    } else {
      $('.sp-header-modal-nav').addClass('open');
    }
  });
});


//swiperの設定
window.addEventListener("DOMContentLoaded", () => {
  const infiniteSlider = new Swiper(".infinite-slider", {
    loop: true,
    loopedSlides: 4,
    slidesPerView: "auto",
    spaceBetween: 50,
    speed: 4000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 2.5, // スライド数を減らす
        spaceBetween: 15, // スペースも減らす
      },
      // **768px以上** の場合（768px から上）
      768: {
      },
    },
  });
});