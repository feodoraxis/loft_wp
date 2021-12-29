<?php
if ( !defined('ABSPATH') ) {
    die();
}

use Carbon_Fields\Widget;
use Carbon_Fields\Field;

add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type( 'news', [
        'label'  => null,
        'labels' => [
            'name'               => 'Новости', // основное название для типа записи
            'singular_name'      => 'Новость', // название для одной записи этого типа
            'add_new'            => 'Добавить новость', // для добавления новой записи
            'add_new_item'       => 'Добавление новости', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование новости', // для редактирования типа записи
            'new_item'           => 'Новая новость', // текст новой записи
            'view_item'          => 'Смотреть новость', // для просмотра записи этого типа.
            'search_items'       => 'Искать новость', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
//            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Новости', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 10,
        'menu_icon'           => 'dashicons-list-view',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}

add_action('widgets_init', 'load_widgets');
function load_widgets() {
    register_widget( 'Theme_Widget_Tags' );
    register_widget( 'Theme_Widget_Category' );
}

