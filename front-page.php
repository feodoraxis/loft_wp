<?php
/* Template name: Главная */
get_header();

global $wp_query;

$args = [
    'post_type' => ['post', 'news'],
];

query_posts(
    array_merge(
        $args,
        $wp_query->query
    )
);

echo '<div class="main-content">
        <div class="content-wrapper">
          <div class="content">
            <h1 class="title-page">Последние новости и акции из мира туризма</h1>';

if ( have_posts() ) :

    echo '<div class="posts-list">';

    while ( have_posts() ) :

        the_post();

        get_template_part( 'template-parts/content', 'preview' );

    endwhile;

    echo '</div>';

    wp_corenavi( );

else :

    get_template_part( 'template-parts/content', 'empty' );

endif;

echo '</div>';

get_sidebar();

echo '</div></div>';

get_footer();
