<?php
if ( !defined('ABSPATH') ) {
    die();
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Настройки темы' )
    ->add_tab( 'Общие настройки', [
        Field::make( 'image', 'option-logo', 'Логотип' ),
        Field::make( 'textarea', 'option-copyright', 'Copyright' ),
    ] );
//    ->add_tab( 'Соглашение об обработке персональных данных', array(
//        Field::make( "rich_text", "option-confirm", "Условия обработки персональных данных" )
//    ) );
