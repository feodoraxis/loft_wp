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
                    $next = get_previous_post_link( '%link', 'Сдедующая статья<i class="icon icon-angle-double-right"></i>', true );
                    echo str_replace( '<a ', '<a class="page-navigation__next-page" ', $next );
                    ?>
                </div>
            </div>
        </div>

        <?php get_sidebar(); ?>

    </div>
</div>
<?php
get_footer();