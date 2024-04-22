<?php get_header(); ?>

<body>
<?php if (have_posts() ): ?>
<!-- もし、記事が1件以上あったら-->
<?php while (have_posts()):the_post(); ?>
<!-- 記事の表示条件で繰り返す（※個別投稿ページの場合は、1回）-->
<div <?php post_class("single-top"); ?>> <!-- 特別なclassを付随させる -->



     <div class="page_thumbnail">
             <span class ="bg_thumbnails" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">


                              <div class="main-top2">

                                </div>
         </span>
     </div>
</div>




    <main>


<script>
function goBack() {
  window.history.back(); // ブラウザの履歴を1つ戻る
}
</script>
        <div class="kijimain">
            <div class="inner">


<div class="single-flex">
                <div class="background-inner">
                  <button onclick="goBack()">←前へ戻る</button>
                   <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
  <?php if(function_exists('bcn_display'))
  {
     bcn_display();
  }?>
</div>

<p class="article-category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
<h2> <?php the_title(); ?></h2>
                     <div class="entry-content">


    <?php the_content( ); ?><!-- 記事の内容 -->

    <!-- 記事のタグコンマ「,」で区切る -->
  </div>
                </div>

<div class="sidebar">
        <section class="about">
                            <h2>About</h2>


              <img src="<?php echo esc_url(get_theme_file_uri('/images/icon.jpg')); ?>" alt="icon">
                            <h3>古橋 冴介</h3>
                    <ul>
                        <li>愛知県名古屋市住み</li>
                            <li>
                                <a href="https://computer.trident.ac.jp/" target=”_blank”>トライデントコンピュータ専門学校<br>Webデザイン学科
                                </a>
                            </li>

                            <li>
                                <a href="https://www.shigakukan-h.ed.jp/" target=”_blank”>至学館高等学校卒
                            </a>
                        </li>
                          <li>誕生日 2005 2/20</li>
                            <li>好きな漫画アニメ   ・ジョジョの奇妙な冒険  ・Dr.STONE  ・甲鉄城のカバネリ</li>
                            <li>こんにちは。サスケです。saskeblogを閲覧していただきありがとうございます。このBlogは私の普段の日常生活や学校での出来事などを投稿していくblogです。時が経つにつれ投稿数 投稿頻度が落ちるのは目に見えてますが、煩わしくならず継続して投稿できるように頑張ります。</li>
</ul>
                        </section>
                          <section class="past-posts">
                          <a name="blog"></a>
                            <h2 name="blog">Past Posts</h2>
                            <div class="sukuroru">
                                <ul>



  <?php
    $args = array(
      'post_type' => 'post', // 投稿タイプを指定します（'post'は通常の投稿です）
      'posts_per_page' => -1, // すべての投稿を表示する場合は-1に設定します
      'orderby' => 'date', // 日付で投稿を並べ替えます
      'order' => 'DESC', // 降順で並べ替えます（新しい投稿が先頭に表示されます）
    );

    $query = new WP_Query($args);

    // ループを使って投稿を表示します
    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        ?>
        <li>
               <span class="date"><?php the_date(); ?></span>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

          <?php if (get_option('show_post_count')) : ?>
            <span class="post-count">(<?php echo get_comments_number(); ?>件のコメント)</span>
          <?php endif; ?>
        </li>
        <?php
      }
    } else {
      echo '<li>投稿がありません。</li>';
    }

    wp_reset_postdata(); // クエリをリセットします
  ?>






                                </ul>
                            </div>
                        </section>

                        <section class="popular-posts">

                        <h2>
Popular Posts</h2>
<?php
if ( function_exists( 'wpp_get_mostpopular' ) ) :
	$popular_posts = array(
		'range'          => 'all',
		'order_by'       => 'views',
		'post_type'      => 'post',
		'stats_comments' => '0',
		'limit'          => 3,
		'stats_views'    => '0',
    'thumbnail_width' => '426', // サムネイル画像の幅
    'thumbnail_height' => '284', // サムネイル画像の高さ
		'wpp_start'      => '<ul>',
		'wpp_end'        => '</ul>',
 'post_html' => '
        <li class="popular_excerpt">
        <div class="post-thumbnail">{thumb}</div>
        <span class="post-wpp-views">{views}ビュー</span>
        <div class="new_title3">{title}</div>
        </li>
        ',
		//'post_html'      => '<li><a href="{url}"><img src="{thumb}" alt="{text_title}"><p>{text_title}</p></a></li>',
	);
	wpp_get_mostpopular( $popular_posts );
endif;
?>

</section>
<section class="coments">
                <div class="inner">


                    <div class="coment">

<!-- コメント開始 -->
<section class="comments">
  <?php comments_template(); ?>
</section>
<!-- コメント終了 -->
                    </div>

                </div>
            </section>

                        </div>
                           </div>
        </div>
        <div class="entry-content">


 </div>
 <?php endwhile; ?>
 <!-- 繰り返し終了 -->

 <?php endif; ?>
 <!-- if文終了。-->

 <!-- 前後のナビゲーション開始-->

 <!-- 前後のナビゲーション終了 -->



 <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>

</body>
