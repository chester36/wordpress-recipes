<?php
function recipes_custom_post(){
    $food_label = array(
        'name' => __('food Post', 'textdomain'),
        'singular_name' => __('food Post', 'textdomain'),
        'add_new' => __('Add food Post', 'textdomain'),
        'add_new_item' => __('Add New food Post', 'textdomain'),
        'edit_item' => __('Edit food Post', 'textdomain'),
        'all items' => __('food Post', 'textdomain'),
    );

    

    $foodPost_args = array(
        'labels' => $food_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('foodPost', $foodPost_args);

    $food_label = array(
        'name'          => __('Foods', 'textdomain'),
        'singular_name' => __('Food', 'textdomain'),
        'add_new'       => __('Add Food', 'textdomain'),
        'edit_item'     => __('Edit Food', 'textdomain'),
        'add_new_item'  => __('Add New Food', 'textdomain'),
        'all_items'     => __('Foods', 'textdomain'),
    );
    $foods_args = array(
        'labels' => $food_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'thumbnail')
    );
    register_post_type('foods', $foods_args);

}   

add_action('init', 'recipes_custom_post');


