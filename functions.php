<?php
//アイキャッチ画像を利用する場合
add_theme_support('post-thumbnails');

//js, cssの読み込み
add_action( 'wp_enqueue_scripts', 'add_js_css' );

function add_js_css() {
    wp_enqueue_style( 'first-style', get_stylesheet_uri(), [], '1.0' );
    wp_enqueue_style( 'common-style', get_theme_file_uri('css/style.css'), ['first-style'], '1.0' );

    wp_enqueue_script('common-js', get_theme_file_uri('js/common.js'), ['jquery'], '1.0', true);
}

//カスタム投稿タイプの作成
add_action( 'init', 'create_post_type' );

function create_post_type() {
    $labels = [
        'name' => 'ニュース'
    ];

    register_post_type( 'news',
        [
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'menu_icon'   => 'dashicons-info', //管理画面のアイコンが変えられます
            'show_in_rest'  => true, //REST APIを使いたいとき
            'supports' => [
                'title',
                'editor',
            ],
            'menu_position' => 5,
        ]
    );
}

//ログ出力
if(!function_exists('_log')){
    function _log($message) {
        if (WP_DEBUG === true) {
            if (is_array($message) || is_object($message)) {
                error_log(print_r($message, true));
            } else {
                error_log($message);
            }
        }
    }
}