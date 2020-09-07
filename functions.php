<?php

function sakura_theme_setup() {
    add_theme_support( 'post-thumbnails' );
}


add_action('after_setup_theme','sakura_theme_setup');
// 'どのタイミングでフックさせるか'、'フックさせる関数'


// styleとscriptを追加
function sakura_theme_scripts(){
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('pc-style', get_template_directory_uri().'/css/style_pc.css');

    wp_enqueue_script('common', get_template_directory_uri().'/js/common.js');
    

}
add_action('wp_enqueue_scripts','sakura_theme_scripts');