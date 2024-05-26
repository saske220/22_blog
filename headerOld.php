<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <?php if( is_home() || is_front_page() ): ?>
      <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php elseif( is_category() ): ?>
      <meta name="description" content="<?php echo category_description(); ?>"> <?php elseif( is_tag() ): ?>
      <meta name="description" content="<?php echo tag_description(); ?>">
    <?php elseif( is_singular() ): ?>
      <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <?php endif; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title><?php if(is_front_page() || is_home()) {
      echo get_bloginfo('name'); } else { echo wp_title(''); } ?></title>

<?php get_template_part('ogp') ?>
    <!-- ファビコンを設定する場合は、favicon.ico をルートディレクトリ置くだけで設定できます。 -->

    <!-- Twitter cardを設定しても構いません -->

    <!-- リセットCSSを設定 -->
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-1-1/css/6-1-1.css">


    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/css/style.css">



    <?php wp_head(); ?>
</head>






<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="header-back">

            <div class="inner">

                <div class="nomal">

                    <nav>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/index.php')); ?>">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#about">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li>                        <?php get_search_form(); ?></li>


                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner">
                <div id="navArea" class="navout">
                    <nav>
                        <div class="navin">
                            <ul>
                                <li><a href="<?php echo esc_url(home_url('/index.php')); ?>">HOME</a></li>
                                <li><a href="#about">ABOUT</a></li>
                                <li><a href="#blog">BLOG</a></li>
                                <li><a href="#">CONTACT</a></li>
                                <li>                        <?php get_search_form(); ?></li>


                            </ul>
                        </div>
                    </nav>

                    <div class="toggle-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>


                </div>

            </div>
        </div>
    </header>
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    <!-- jQueryを使うのであれば、最初に読み込む -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <?php wp_head(); ?>