<?php get_header(); ?>


    <main>

        <!-- <h2 class="archive-title"><?php the_archive_title(); ?></h2> -->
       <div class="main-top">
           <div class="wrapper">
               <div class="main-top2">
                      <h1><a href="<?php echo esc_url(home_url('/index.php')); ?>">Saskeblog</a></h1>
                     <ul class="slider">



	                                           <?php
		                              $args = array(
		                              	'post_type' => 'attachment',
		                              	'posts_per_page' => 7,
		                              	'orderby' => 'rand',
		                              	'post_mime_type' => 'image',
	                              	);
	                              	$gallery_post = get_posts($args);
	                              if(have_posts()):
	                              	foreach($gallery_post as $post):
	                              ?>
	                                <li class=".slider-item01">  <div class="mujinaru"><img src="<?php echo wp_get_attachment_url($post->ID); ?>"></div>
	                              <?php
	                              	endforeach;
	                              endif;
	                              ?>

                            </li>




                      </ul>
                 </div>
           </div>
     </div>

        <section class="fist">
          <h1>エンジニアになるために魂を賭ける漢のブログ</h1>
        </section>

        <section class="background-newposts">

            <div class="inner">
                <h2 class="main-title">New Posts</h2>

             </div>

                <div class="newposts">
                  <div class="inner">

                    <section class="posts">
                        <?php if (have_posts()): //もし1件以上記事があったら ?>


                             <?php while (have_posts()): //記事がある間は繰り返す
                             the_post(); //次の記事のデータをセットする?>
                             <!--1記事め開始-->
                        <article id="post-<?php the_ID(); ?>" <?php post_class("box"); ?> href="<?php the_permalink(); ?>">
                            <a href="<?php the_permalink(); ?>">
                               <?php if(has_post_thumbnail()): ?> <!-- もしアイキャッチ画像があるのであれば、 -->
                                 <?php the_post_thumbnail('full'); ?>
                             <?php else: ?> <!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                                 <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_obattabetta.jpeg" alt="デフォルトのアイキャッチ画像" /></p>
                             <?php endif; ?>




                                <div class="time">
                                    <p><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                    </p>
                                    <h3><?php echo wp_trim_words( get_the_title(), 30, '…' ); ?></h3>
  <p class="category-tag"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
                                </div>
                            </a>
                        </article>


                        <!--1記事め終了-->
                        <?php endwhile; //ループ終了?>
                        <?php else: //もし、表示すべき記事がなかったら ?>
                        <p>まだ記事はありません。</p>
                        <?php endif; //条件分岐終了 ?>



                    </section>

              </div>
            </div>



            <section class="arcv">
                <div class="inner">
                    <h2 class="main-title">Archive</h2>

                    <nav>
                          <ul>
  <?php
    wp_get_archives( array(
      'type' => 'monthly',
      'limit' => '',
      'show_post_count' => true,
    )); ?>
</ul>
                    </nav>
                </div>
            </section>






            <div id="#about" class=" background-yoko">
                <div class="inner">
                    <div class="yoko">
                    <section class="past-posts past-posts1">
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

          <a href="<?php the_permalink(); ?>">
             <div class="post-flex">


                <div class="post-text">
                   <p class="category-tag"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
                   <span class="date"><?php the_date(); ?></span>
                   <h3><?php the_title();?></h3>



                </div>


                <?php if(has_post_thumbnail()): ?> <!-- もしアイキャッチ画像があるのであれば、 -->
                <?php the_post_thumbnail('full'); ?>
                <?php else: ?> <!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_obattabetta.jpeg" alt="デフォルトのアイキャッチ画像" /></p>
                <?php endif; ?>

           </div>
          </a>
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


                        <div class="flex-sidebar">
                        <section class="about about1">
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
                                    <section class="cate">
                <h2>Category</h2>
                <div class="footer-flex">
<ul>
    <?php
    $args = array(
        'title_li' => ''
    );
    wp_list_categories($args);
    ?>
</ul>

                </div>
            </section>
            </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_sidebar(); ?>
    </main>
<?php get_footer(); ?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-1-1/js/6-1-1.js"></script>
</body>


</html>