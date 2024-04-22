<?php get_header(); ?>

<body>
<?php if (have_posts() ): ?>
<!-- もし、記事が1件以上あったら-->
<?php while (have_posts()):the_post(); ?>
<!-- 記事の表示条件で繰り返す（※個別投稿ページの場合は、1回）-->
<div <?php post_class("single-top"); ?>> <!-- 特別なclassを付随させる -->
   <div class="main-top2">
    <h1 class="entry-title kijifont"><a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
    </a></h1>
</div>
  <div class="entry-meta">
    <ul>
      <li><?php the_time('F jS, Y ');?> <!-- 記事の投稿日 --></li>
      <span class="meta-sep">&bull;</span>
      <li><?php the_category( ',' ); ?> <!-- 記事のカテゴリー --></li>
      <span class="meta-sep">&bull;</span>
      <li><?php the_author(); ?> <!-- 記事の投稿者 --></li>
    </ul>
  </div>
</div>




    <main>
        <div class="kijimain">
            <div class="inner">
                <div class="background-inner">
                     <div class="entry-content">


    <?php the_content( ); ?><!-- 記事の内容 -->
  </div>
  <div class="entry-footer"> <span class="comments-link"><a href="#">1件のコメント</a></span>
    <?php the_tags( '<span class="tag-links">', ', ', '</span>' ); ?>
    <!-- 記事のタグコンマ「,」で区切る -->
  </div>
                </div>
            </section>
        </div>
        <div class="entry-content">
<section class="coments">
                <div class="inner">

                    <div class="coment">

<!-- コメント開始 -->
<section class="comments">
  <?php comments_template(); ?>
</section>
<!-- コメント終了 -->
                    </div>
                    <div class="sns">

                        <ul>
                            <li><a class="btn-twitter"
                                    href="https://twitter.com/share?url=https://sasukef.fem.jp/myblog/single.html&text="
                                    rel="nofollow" target="_blank"><img src="./images/2021 Twitter logo - black.png"
                                        alt=""></a>
                            </li>
                            <li> <a class="btn-facebook"
                                    href="https://www.facebook.com/share.php?u=https://sasukef.fem.jp/myblog/single.html"
                                    rel="nofollow" target="_blank"><img src="./images/f_logo_RGB-Black_100.png"
                                        alt=""></a>
                            </li>
                            <li> <a href=""><img src="./images/Instagram_Glyph_Black.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>


 </div>
 <?php endwhile; ?>
 <!-- 繰り返し終了 -->

 <?php endif; ?>
 <!-- if文終了。-->

 <!-- 前後のナビゲーション開始-->
 <?php the_post_navigation(); ?>
 <!-- 前後のナビゲーション終了 -->



 <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>

</body>

</html>