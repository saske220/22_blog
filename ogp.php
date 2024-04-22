<!-- OGP -->
<meta property="og:title" content="<?php echo wp_get_document_title(); ?>" />
<meta property="og:type" content="website" />

<!-- パーマリンクが入ります。-->
<?php if( is_home() || is_front_page() ): ?>
<meta property="og:url" content="<?php echo home_url(); ?>" />
<?php elseif( is_singular() || is_page() || is_category() ): ?>
<meta property="og:url" content="<?php echo get_permalink(); ?>" />
<?php endif; ?>

<!-- ここは、descriptionのnameを書き換えるだけです。 -->
<?php if( is_home() || is_front_page()): ?>
<meta name="og:description" content="<?php bloginfo('description'); ?>">
<?php elseif( is_category() ): ?>
<meta name="og:description" content="<?php echo category_description(); ?>">
<?php elseif( is_tag() ): ?>
<meta name="og:description" content="<?php echo tag_description(); ?>">
<?php elseif( is_singular() ): ?>
<meta name="og:description" content="<?php echo get_the_excerpt(); ?>">
<?php endif; ?>

<!-- OGP画像へのパスを書きます。-->
<?php if (has_post_thumbnail()) : ?>
<meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
<?php else: ?>
<meta property="og:image" content="<?php echo esc_url(get_theme_file_uri()); ?>/images/webdeblog_ogp.jpg" />
<?php endif; ?>

<!-- ファビコンを設定する場合は、favicon.ico をルートディレクトリ置くだけで設定できます。 -->
<link rel="icon" href="<?php echo esc_url(get_theme_file_uri()); ?>/images/favicon.ico" />

<!-- Twitter cardを設定しても構いません -->
<meta name="twitter:card" content="summary">