<?php
get_header();
the_post();
?>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <h1 class="title-page"><?php the_title(); ?></h1>

                <?php the_content(); ?>

                <div class="page-navigation">
                    <div class="page-navigation-wrap">
                        <?php
                        $prev = get_previous_post_link( '%link', '<i class="icon icon-angle-double-left"></i>Предыдущая статья', true );
                        echo str_replace( '<a ', '<a class="page-navigation__prev-page" ', $prev );
                        ?>
                    </div>
                    <div class="page-navigation-wrap">
                        <?php
                        $next = get_next_post_link( '%link', 'Сдедующая статья<i class="icon icon-angle-double-right"></i>', true );
                        echo str_replace( '<a ', '<a class="page-navigation__next-page" ', $next );
                        ?>
                    </div>
                </div>

                <div class="article-title title-page"><?php the_title(); ?></div>
                <div class="article-image"><?php

                    echo get_the_post_thumbnail( get_the_ID(), 'full' );

                ?></div>
                <div class="article-info">
                    <div class="post-date"><?php

                        echo get_the_date( "d.m.Y" );

                    ?></div>
                </div>
                <div class="article-text"><?php the_content(); ?></div>

                <div class="article-pagination">


                    <?php

                    $prev = '<div class="article-pagination__block pagination-prev-left">
                        <a href="#" class="article-pagination__link"><i class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                        <div class="wrap-pagination-preview pagination-prev-left">
                            <div class="preview-article__img"><img src="img/1.jpg" class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="#" class="post-date">23.07.2016</a></div>
                                <div class="preview-article__text">%title</div>
                            </div>
                        </div>
                    </div>';

                    $next = '<div class="article-pagination__block pagination-prev-right"><a href="#" class="article-pagination__link">Сдедующая статья<i class="icon icon-angle-double-right"></i></a>
                        <div class="wrap-pagination-preview pagination-prev-right">
                            <div class="preview-article__img"><img src="img/2.jpg" class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="#" class="post-date">23.07.2016</a></div>
                                <div class="preview-article__text">%title</div>
                            </div>
                        </div>
                    </div>';

                    the_post_navigation(
                        array(
                            'prev_text' => '<p class="meta-nav">' . $twentytwentyone_prev . $twentytwentyone_previous_label . '</p><p class="post-title">%title</p>',
                            'next_text' => '<p class="meta-nav">' . $twentytwentyone_next_label . $twentytwentyone_next . '</p><p class="post-title">%title</p>',
                        )
                    );
                    ?>
                </div>

            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
<?php
get_footer();