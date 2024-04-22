    <div class="inner">

        </div>

   <footer>

        <p>

                Copyright@2023 furuhashi sasuke blog

        </p>
    </footer>
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    <!-- jQueryを使うのであれば、最初に読み込む -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        let mainImageArray = [
                document.querySelector('.posts article:nth-child(3)'),
                document.querySelector('.posts article:nth-child(4)'),
                document.querySelector('.posts article:nth-child(7)'),
                document.querySelector('.posts article:nth-child(8)'),
                document.querySelector('.posts article:nth-child(11)'),
                document.querySelector('.posts article:nth-child(12)'),
                document.querySelector('.posts article:nth-child(15)'),
                document.querySelector('.posts article:nth-child(16)'),
            ];
        ScrollReveal({
            reset: false,
            distance: "30px",
            duration: 2000, //2sかけてアニメーション
            delay: 200 /* 0.2s後に発動 */,
        });
        ScrollReveal().reveal(".about1,.past-posts1,.arcv,  .section-title,.cate", {
            delay: 200,
            origin: "bottom",
        });
        ScrollReveal().reveal(".posts,.image, .info", {
            delay: 600,
            origin: "right",
        });
        ScrollReveal().reveal( mainImageArray , {
            delay: 700,
            origin: "left",
        });
        ScrollReveal().reveal(" , .media-icons i", {
            delay: 500,
            origin: "bottom",
            interval: 200,
        });
        ScrollReveal().reveal(",.sec-02 .image, .sec-03 .image", {
            delay: 500,
            origin: "top",
        });
        ScrollReveal().reveal(".media-info li", {
            delay: 500,
            origin: "left",
            interval: 200,
        });


</script>


<script>
      $('.slider').slick({
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    autoplaySpeed: 3000,//次のスライドに切り替わる待ち時間
    speed:1000,//スライドの動きのスピード。初期値は300。
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
$('.slider').on('touchmove', function(event, slick, currentSlide, nextSlide){
    $('.slider').slick('slickPlay');
});
</script>



<script>
    let nav = document.querySelector("#navArea");
let btn = document.querySelector(".toggle-btn");
let mask = document.querySelector("#mask");

btn.onclick = () => {
    nav.classList.toggle("open");
};

mask.onclick = () => {
    nav.classList.toggle("open");
};
    </script>
    <!-- jsファイルはここに読み込む -->
    <?php wp_footer(); ?>
