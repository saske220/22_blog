<?php
function add_my_scripts() {

    //オリジナルJavaScriptを</body>前に読み込み
    wp_enqueue_script('prism',get_theme_file_uri( '/js/prism.js' ),
    array(),'',true);
    wp_enqueue_script('slick',get_theme_file_uri( '/js/slick.min.js' ),
    array(),'',true);
    wp_enqueue_script('myscript',get_theme_file_uri( '/js/script.js' ),
    array(),'',true);
}
add_action('wp_enqueue_scripts', 'add_my_scripts');



//このBlogのオリジナル設定
function my_theme_setup() {
  //アイキャッチ画像を有効化
  add_theme_support('post-thumbnails');

  //追記
  //heade内にフィードリンクを出力
  add_theme_support('automatic-feed-links');

    //自動でtitleタグ挿入
  add_theme_support('title-tag');


    // 固定ページで「抜粋」を有効化
  add_post_type_support('page', 'excerpt');

  // カテゴリーとタグのmeta descriptionからpタグを除去
  remove_filter('term_description','wpautop');

}
add_action( 'after_setup_theme', 'my_theme_setup');



function my_widgets_init() {
	$args  = [
		// ウィジェットエリアの表示名を指定
		'name' => 'ウィジェット01',
		// ウィジェットエリアのIDを指定
		'id' => 'widget-01',
		// 管理画面で表示されるウィジェットエリアの説明を指定。
        'description' => 'ウィジェット01のエリアとなります。',
		// ウィジェットの直前に表示するHTML
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		// ウィジェットの直後に表示するHTML
		'after_widget'  => '</div>',
		// ウィジェット内のタイトルの直前に表示するHTML
		'before_title'  => '<h2 class="widget-title">',
		// ウィジェット内のタイトルの直後に表示するHTML
		'after_title'   => '</h2>',
    ];
	register_sidebar( $args  );
}
add_action( 'widgets_init', 'my_widgets_init' );





function motoki_comment_field_custom( $fields ) {
  $comment_field = '<label for="comment"><span class="required"></span></label><textarea id="comment" name="comment" cols="45" rows="8" width="100px" maxlength="65525" required="" placeholder="コメントを記入する"></textarea>';
  unset( $fields['comment'] );
  $fields['comment'] = $comment_field;
  $fields['author'] = '<p class="comment-form-author"><label for="author">お名前</label><input id="author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name" placeholder="ハンドルネームでも可"></p>';

  return $fields;
}
add_filter( 'comment_form_fields', 'motoki_comment_field_custom');

// 「メールアドレスが公開されることはありません。 * が付いている欄は必須項目です」の文言を削除
add_filter( "comment_form_defaults", "my_comment_notes_before"); function my_comment_notes_before( $defaults){ $defaults['comment_notes_before'] = ''; return $defaults; }


function custom_wpp_update_postviews($postid) {
    // Accuracy:
    //   10  = 1 in 10 visits will update view count. (Recommended for high traffic sites.)
    //   30  = 30% of visits. (Medium traffic websites.)
    //   100 = Every visit. Creates many db write operations every request.

    $accuracy = 50;

    if ( function_exists('wpp_get_views') && (mt_rand(0,100) < $accuracy) ) {
        update_post_meta(
            $postid,
            'my_views_monthly',
            wpp_get_views($postid, 'monthly', false)
        );
    }
}
add_action('wpp_post_update_views', 'custom_wpp_update_postviews');