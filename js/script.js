
ScrollReveal({
    reset: false,
    distance: "60px",
    duration: 2000, //2sかけてアニメーション
    delay: 200 /* 0.2s後に発動 */,
});
ScrollReveal().reveal(".main-title", {
    delay: 200,
    origin: "left",
});
ScrollReveal().reveal(".archive .image, .info", {
    delay: 600,
    origin: "bottom",
});
ScrollReveal().reveal(".", {
    delay: 700,
    origin: "right",
});
ScrollReveal().reveal(".", {
    delay: 500,
    origin: "bottom",
    interval: 200,
});
ScrollReveal().reveal("", {
    delay: 500,
    origin: "top",
});
ScrollReveal().reveal("", {
    delay: 500,
    origin: "left",
    interval: 200,
});



$('.slider').slick({
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    autoplaySpeed: 3000,//次のスライドに切り替わる待ち時間
    speed: 1000,//スライドの動きのスピード。初期値は300。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    slidesToShow: 1,//スライドを画面に3枚見せる
    slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
    arrows: true,//左右の矢印あり
    prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
    dots: true,//下部ドットナビゲーションの表示
    pauseOnFocus: false,//フォーカスで一時停止を無効
    pauseOnHover: false,//マウスホバーで一時停止を無効
    pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
});

//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$('.slider').on('touchmove', function (event, slick, currentSlide, nextSlide) {
    $('.slider').slick('slickPlay');
});
