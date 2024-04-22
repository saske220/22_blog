<div id="comments" class="comments">
  <?php if( have_comments() ): //コメントがあったらコメントリストを表示する ?>
  <h3 class="widget_title">コメント</h3>
<div class=comment-flex>
  <ol class="commets-list">
    <?php wp_list_comments( 'avatar_size=80' ); ?>
  </ol>
<?php endif; ?>
  </div>
  <?php $args = array(
    'title_reply' => 'コメントをする',
    'label_submit' => '送信'
  );
  comment_form( $args ); ?>
</div>