<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?>｜エンジニアになるために魂を賭ける漢のブログ</title>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/newcss/style.css">

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    <!-- jQueryを使うのであれば、最初に読み込む -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <?php wp_head(); ?>
</head>






<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">

        <ul class="header__list">
            <li class="header__item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
             <li class="header__item"><a href="https://sasukef.fem.jp/portfolio/" target="blank">Portfolio</a></li>
        </ul>

    </header>

    <?php wp_head(); ?>