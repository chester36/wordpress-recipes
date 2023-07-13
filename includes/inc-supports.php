<?php
function blog_support(){
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('title');
    add_theme_support('custom-logo');

    add_image_size('banner-sm', 220, 150, true );

    register_nav_menus(
        array(
            'header_menu' => __('Header menu', 'text_domain'),
            'footer_menu' => __('Footer menu', 'text_domain'),
        )
    );
}

add_action('after_setup_theme', 'blog_support');