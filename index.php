<?php get_header(); ?>

<main class="main">
    <div class="main__inner">
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

                    <article id="post-<?php the_ID(); ?>" class="postCard">
                        <a href="<?php the_permalink(); ?>">
                            <div class="postCard__imgBox imgBox">

                                <?php if(has_post_thumbnail()): ?> <!-- もしアイキャッチ画像があるのであれば、 -->
                                    <?php the_post_thumbnail('full'); ?>
                                <?php else: ?> <!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                                    <img  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像"class="imgBox__img" /></p>
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
<section class="archiveArea">

                <div class="archiveArea__inner">
                    <h2 class="archiveArea__title">Archive</h2>


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
    </div>
    </div>
</main>