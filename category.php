<?php
get_header();

echo '<div class="main-content">
        <div class="content-wrapper">
          <div class="content">
            <h1 class="title-page"><?php single_cat_title(); ?></h1>';

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
