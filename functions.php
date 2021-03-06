<?php

// テーマに機能を追加
function sakura_theme_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','sakura_theme_setup');
// 'どのタイミングでフックさせるか'、'フックさせる関数'


function sakura_theme_init() {
     register_post_type( 'items',[    // itemsという投稿タイプを追加
        "labels" => [
            "name" => "商品" // 管理画面に表示される名前
        ],
        "public" => true,// 公開を許可
        "has_archive" => true, // アーカイブの作成を許可
        "hierarchical" => true, // 継承を持たせる
        "menu_position" => 15, // メニューバーに表示される場所
        "menu_icon" => "dashicons-nametag", // dashicon
        "show_in_rest" => true, // 新エディタ
    ] );
}
add_action('init','sakura_theme_init');


// 投稿アーカイブを有効にしてスラッグを指定する
function post_has_archive( $args, $post_type ) {

    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; // スラッグ名
    }
    return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );



// styleとscriptを追加
function sakura_theme_scripts(){
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('pc-style', get_template_directory_uri().'/css/style_pc.css', array(), false, 'screen and ( min-width:769px )');
    wp_enqueue_style('sp-style', get_template_directory_uri().'/css/style_sp.css', array(), false, 'screen and ( max-width:768px )');

    wp_enqueue_script('common', get_template_directory_uri().'/js/common.js');
    

}
add_action('wp_enqueue_scripts','sakura_theme_scripts');