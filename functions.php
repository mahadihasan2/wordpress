<?php

function wordpress_learning(){
    wp_enqueue_style('main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'wordpress_learning');

?>
