<?php

use Carbon_Fields\Widget;
use Carbon_Fields\Field;

class Theme_Widget_Category extends Widget {
    function __construct() {
        $this->setup( 'theme_widget_categoryes', 'Мои категории', 'Displays a block with title/text', array(
            Field::make( 'text', 'title', 'Title' )->set_default_value( 'Категории') ,
        ) );
    }

    function front_end( $args, $instance ) {
        echo $args['before_title'] . "Категории" . $args['after_title'];

        $category = get_terms([ 'exclude' => 1, 'taxonomy' => 'category', 'hide_empty' => false ]);
        $categoryes = [];

        foreach ($category as $item) {
            if ( $item->parent > 0 ) {
                $categoryes[ $item->parent ]['child'][] = $item;
            } else {
                $categoryes[ $item->term_id ]['element'] = $item;
            }
        }
        ?>
        <div class="sidebar-item__content">
            <?php if ( is_array($categoryes) && !empty($categoryes) ) : ?>

                <ul class="category-list">

                    <?php foreach ( $categoryes as $key => $item ) : ?>

                        <li class="category-list__item">
                            <a href="<?php echo get_term_link($item['element']); ?>" class="category-list__item__link"><?php echo $item['element']->name; ?></a>

                            <?php if ( isset($item['child']) && !empty($item['child']) ) : ?>

                                <ul class="category-list__inner">

                                    <?php foreach ( $item['child'] as $child ) : ?>

                                        <li class="category-list__item"><a href="<?php echo get_term_link($child); ?>" class="category-list__item__link"><?php echo $child->name; ?></a></li>

                                    <?php endforeach; ?>

                                </ul>

                            <?php endif; ?>

                        </li>

                    <?php endforeach; ?>

                </ul>

            <?php endif; ?>
        </div>
        <?php
    }
}
