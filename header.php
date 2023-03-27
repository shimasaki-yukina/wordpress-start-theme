<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php if(is_home()): ?>
            <title><?php bloginfo('name'); ?></title>
        <?php else: ?>
            <title><?php the_title(); ?>｜<?php bloginfo('name'); ?></title>
        <?php endif; ?>

        <!-- TODO:ページごとに説明文を切り替えてください -->
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <!-- TODO:favicon、アプリタッチアイコン -->
        <link rel="icon" href="<?= get_template_directory_uri(); ?>/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/apple-touch-icon.png">

        <!-- TODO:twitter -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@ユーザー名" />
        <meta property="og:url" content="記事のURL" />
        <?php if(is_home()): ?>
            <meta property="og:title" content="<?php bloginfo('name'); ?>" />
        <?php else: ?>
            <meta property="og:title" content="<?php the_title(); ?>" />
        <?php endif; ?>
        <meta property="og:description" content="記事の要約（ディスクリプション）" />
        <meta property="og:image" content="画像のURL" />

        <!-- TODO:facebook -->
        <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta property="og:url" content="ページのURL" />
        <meta property="og:type" content="ページの種類" /><!-- TOPページの場合は「website」、WEBサイト上の記事ページなど、TOPページ以外には「article」を指定します -->
        <meta property="og:title" content="ページのタイトル" />
        <meta property="og:description" content="ページのディスクリプション" />
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
        <meta property="og:image" content=" サムネイル画像の URL" /><!-- 推奨サイズ：1200px × 630px -->

        <?php wp_head(); ?>
    </head>

    <body>

    <header class="header">
        <p>ヘッダーの内容です。</p>
        <a href="<?= home_url('/'); ?>">HOMEへ</a>
    </header>

    <main>