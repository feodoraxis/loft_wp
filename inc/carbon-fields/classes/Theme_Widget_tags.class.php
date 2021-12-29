<?php

use Carbon_Fields\Widget;
use Carbon_Fields\Field;

class Theme_Widget_Tags extends Widget {
    function __construct() {
        $this->setup( 'theme_widget_tags', 'Мои теги', 'Displays a block with title/text', array(
            Field::make( 'text', 'title', 'Title' )->set_default_value( 'Теги') ,
        ) );
    }

    function front_end( $args, $instance ) {
        $out = $args['before_title'] . "Теги" . $args['after_title'];

        $out .= '<div class="sidebar-item__content">
            <ul class="tags-list">';

        $tags = get_terms( 'post_tag' );

        foreach ( $tags as $tag ) {
            $out .= '<li class="tags-list__item"><a href="' . get_term_link($tag) . '" class="tags-list__item__link">' . $tag->name . '</a></li>';
        }

        $out .= '</ul>
        </div>';

        echo $out;
    }
}
