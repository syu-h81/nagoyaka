//ハンバーガーボタンの実装
$(function() {
  $('.header-sp-menu-bar').on('click', function() {
   $(this).toggleClass('active');
   $('.sp-header-modal').toggleClass('fadeIn');
   $('.sp-header-modal-nav').toggleClass('fadeIn'); // ナビゲーションもスライドイン
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