//ハンバーガーボタンの実装
$(function() {
  $('.header-sp-menu-bar').on('click', function() {
   $(this).toggleClass('active');
   $('.sp-header-modal').toggleClass('fadeIn');
  });
});

const swiper = new Swiper('.swiper', {
  loop: true, // ループ
  speed: 2500, // スライド速度
  slidesPerView: 5, // 画面幅に応じた枚数
  spaceBetween: 50,
  initialSlide: 1,
  centeredSlides: true, // アクティブスライドを中央に
  autoplay: {
    delay: 2000, // 1秒後に次のスライド
    disableOnInteraction: false, // ユーザー操作後も自動再生
  },
  breakpoints: {
    0: {
      slidesPerView: 2.5, // スライド数を減らす
      spaceBetween: 15, // スペースも減らす
      initialSlide: 1
    },
    // **768px以上** の場合（768px から上）
    768: {
      slidesPerView: 4, // 画面幅に応じた枚数
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 5, // 画面幅に応じた枚数
      spaceBetween: 50,
    }
  },
});
/*
// 画面リサイズ時に `slidesPerView` を更新
window.addEventListener("resize", function () {
  swiper.params.slidesPerView = updateSlidesPerView();
  swiper.update();
});

// スライド枚数の計算関数
function updateSlidesPerView() {
  return Math.max(1.2, 1 + (window.innerWidth - 1000) / 1000);
}
*/