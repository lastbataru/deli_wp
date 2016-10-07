<?php
add_image_size ( "news", 320, 320, true );
/*
 * カスタムメニューの登録
 */
register_nav_menus();
/*
 * Home
 */
// メインイメージ
add_theme_support ( "custom-header", array (
    "width" => "640",
    "height" => "400",
) );
register_post_type ( "home", array (
    "label" => "home",
    "public" => true,
    "supports" => array (
        "title",
        "editor",
        "thumbnail"
    )
) );
/*
 * Cart
 */
/*
 * Menu
 */
/*
 * News
 */
/*
 * User
 */
?>