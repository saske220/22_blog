<?php get_header(); ?>

<main class="main">
    <div class="main__inner">
         <h1 class="main__title">エンジニアになるために魂を賭ける漢のブログ V2</h1>
        <div class="main__flex">
 <section class="newPosts">
    <div class="newPosts__inner">
        <h2 class="newPosts__title">New Posts</h2>
            <div class="newPosts__grid">
        <?php
        if (have_posts()): //もし1件以上記事があったら
            while (have_posts()): //記事がある間は繰り返す
                the_post(); //次の記事のデータをセットする
        ?>
                <!--1記事め開始-->

                    <article data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" id="post-<?php the_ID(); ?>" class="postCard">
                        <a href="<?php the_permalink(); ?>">
                            <div class="postCard__imgBox imgBox">
<p class="imgBox__category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
                                <?php if(has_post_thumbnail()): ?> <!-- もしアイキャッチ画像があるのであれば、 -->
                                    <?php the_post_thumbnail('full'); ?>
                                <?php else: ?> <!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                                    <img  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像"class="imgBox__img" />

                                <?php endif; ?>
                            </div>
                            <div class="postCard__text">
                                <p class="postCard__time">
                                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                                </p>
                                <h3 class="postCard__title"><?php echo wp_trim_words( get_the_title(), 25, '…' ); ?></h3>
                            </div>

                        </a>
                    </article>
                <!--1記事め終了-->
        <?php
            endwhile; //ループ終了
        else: //もし、表示すべき記事がなかったら
        ?>
            <p>まだ記事はありません。</p>
        <?php
        endif; //条件分岐終了
        ?>
    </div>
</section>
<div class="arcvCate">
<section class="archiveArea">
 <h2 class="archiveArea__title">Archive</h2>
                <div class="archiveArea__inner">



                          <ul class="archiveArea__list">
  <?php
    wp_get_archives( array(
      'type' => 'monthly',
      'limit' => '',
      'show_post_count' => true,
    )); ?>
</ul>

                </div>
            </section>
             <section class="cate">
                <h2 class="cate__title">Category</h2>
                <div class="cate__inner">

<ul class="cate__flex">
    <?php
    $args = array(
        'title_li' => ''
    );
    wp_list_categories($args);
    ?>
</ul>

                </div>
                </div>
            </section>
            </div>
    </div>

    <div class="pastAboutFlex">

   <section class="pastPosts">
    <h2 class="pastPosts__title">Past Posts</h2>
    <div class="pastPosts__inner">
        <ul class="pastPosts__list">
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
        <li data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" class="pastPosts__item item">

          <a href="<?php the_permalink(); ?>">
             <div class="item__flex">


                <div class="item__text">
                   <p class="item__category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
                   <span class="item__time"><?php the_date(); ?></span>
                   <h3 class="item__title"><?php the_title();?></h3>
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

           <section class="about">
                            <h2 class="about__title">About</h2>
              <img class="about__img" src="<?php echo esc_url(get_theme_file_uri('/images/icon.jpg')); ?>" alt="icon">
                            <h3 class="about__name">古橋 冴介</h3>
                    <ul class="about__list">
                        <li class="about__item">愛知県名古屋市住み</li>
                            <li class="about__item">
                                <a href="https://computer.trident.ac.jp/" target=”_blank”>トライデントコンピュータ専門学校<br>Webデザイン学科
                                </a>
                            </li>

                            <li class="about__item">
                                <a href="https://www.shigakukan-h.ed.jp/" target=”_blank”>至学館高等学校卒
                            </a>
                        </li>
                          <li class="about__item">誕生日 2005 2/20</li>
                            <li class="about__item">好きな漫画アニメ   ・ジョジョの奇妙な冒険  ・Dr.STONE  ・甲鉄城のカバネリ</li>
                            <li class="about__item">こんにちは。サスケです。saskeblogを閲覧していただきありがとうございます。このBlogは私の普段の日常生活や学校での出来事などを投稿していくblogです。時が経つにつれ投稿数 投稿頻度が落ちるのは目に見えてますが、煩わしくならず継続して投稿できるように頑張ります。</li>
</ul>
                        </section>

        </div>


    </div>
</main>
<?php get_footer(); ?>