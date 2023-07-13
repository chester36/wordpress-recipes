<?php 
function recipes_register_blocks() {
    if ( function_exists( 'acf_register_block' ) ) {
        
       acf_register_block( array(
            'name'          => 'two-columns',
            'title'         => __( 'Two Columns'),
            'render_template'   => 'blocks/two-cols.php',
            'category'      => 'recipes-blocks',
            'icon'          => 'format-image',
            'mode'          => 'edit',
            'keywords'      => array( 'grid', 'columns')
      ));

      acf_register_block( array(
        'name'          => 'menu-slider',
        'title'         => __( 'Menu Slider'),
        'render_template'   => 'blocks/menu-slider.php',
        'category'      => 'recipes-blocks',
        'icon'          => 'slides',
        'mode'          => 'edit',
        'keywords'      => array( 'slider', 'menu')
  ));
    } 
} 

add_action('acf/init', 'recipes_register_blocks' );

