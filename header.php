<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
        <header class="main-header">
            <div class="top-header">

                <?php

                /**
                 * Hook top_header
                 *
                 * @hooked top_header_open     - 10
                 * @hooked top_header_logo     - 20
                 * @hooked top_header_nav_menu - 30
                 * @hooked top_header_close    - 40
                 */
                do_action( "top_header" );

                ?>

            </div>
            <div class="bottom-header">
                <div class="search-form-wrap">
                    <form class="search-form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
                        <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск..." class="search-form__input">
                        <button class="search-form__btn-search" type="submit" id="searchsubmit" ><i class="icon icon-search"></i></button>
                    </form>
                </div>
            </div>
        </header>
        <!-- header_end-->