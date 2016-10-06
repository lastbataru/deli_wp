<?php
add_image_size ( "news", 320, 320, true );

/*
 * Home
 */
register_post_type ( "home", array (
    "label" => "home",
    "public" => true,
    "supports" => array ("title","editor","thumbnail")
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