<?php
add_action( 'wp_enqueue_scripts', 'virtue_child_enqueue_styles' );
function virtue_child_enqueue_styles() {
    // Подключаем CSS файл родительской темы
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Подключаем CSS файл дочерней темы, указывая, что он зависит от родительского
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'),
        wp_get_theme()->get('Version')
    );
}
?>