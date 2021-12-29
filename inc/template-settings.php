<?php
if ( !defined('ABSPATH') ) {
    die();
}

add_theme_support( 'title-tag'       );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'search-form'     );
add_theme_support( 'gallery'         );
add_theme_support( 'caption'         );

register_nav_menus( Array(
    'main-menu' => esc_html__( 'Main menu' ),
) );

function _s_widgets_init() {
    register_sidebar(
        array(
            'name'          => "Сайдбар",
            'id'            => 'sidebar',
            'description'   => "Добавлять виджеты сюда",
            'before_widget' => '<div class="sidebar__sidebar-item">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="sidebar-item__title">',
            'after_title'   => '</div>',
        )
    );
}
add_action( 'widgets_init', '_s_widgets_init' );

add_image_size('preview_thumbnail', 270, 190, true );