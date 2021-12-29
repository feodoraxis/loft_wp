<?php
if ( !defined("ABSPATH") ) {
    die();
}

add_action( 'top_header', 'top_header_open', 10 );
function top_header_open() {
    echo '<div class="top-header__wrap">';
}

add_action( 'top_header', 'top_header_logo', 20 );
function top_header_logo() {
    if ( $logo = carbon_get_theme_option( 'option-logo' ) ) {
        $logo_src = wp_get_attachment_image_url( $logo );
        get_template_part( 'template-parts/hooks/header/logo', null, ['logo' => $logo_src]);
    }
}

add_action( 'top_header', 'top_header_nav_menu', 30 );
function top_header_nav_menu() {
    wp_nav_menu( [
        'container' => 'nav',
        'container_class' => 'main-navigation',
        'menu_class' => 'nav-list',
        'theme_location' => 'main-menu',
        'walker' => new Walker_Nav_Tourist(),
    ] );
}

add_action( 'top_header', 'top_header_close', 40 );
function top_header_close() {
    echo '</div>';
}