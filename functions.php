<?php

function sakura_theme_setup() {
    add_theme_support( 'post-thumbnails' );
}


add_action('after_setup_theme','sakura_theme_setup');
// 'どのタイミングでフックさせるか'、'フックさせる関数'