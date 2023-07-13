<?php

function recipes_assets(){
    wp_enqueue_style('recipes-style', get_template_directory_uri() . "./css/style.css", microtime());
    wp_enqueue_style('recipes-icons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", 1.0);
    wp_enqueue_style('recipes-slider-style', "https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css", 1.0);


    wp_enqueue_script('recipes-slider-js', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js', 1.0, [],true );
    wp_enqueue_script('recipes-script', get_template_directory_uri() . "./script/script.js", microtime(), [],true );

    if(is_front_page()){
        wp_enqueue_script('recipes-slider', get_template_directory_uri() . "./script/slider.js", microtime(), [],true );
    }
}   
add_action('wp_enqueue_scripts', 'recipes_assets');