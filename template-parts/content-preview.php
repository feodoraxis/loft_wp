<!-- post-mini-->
<div class="post-wrap">
    <div class="post-thumbnail"><?php

        echo get_the_post_thumbnail( get_the_ID(), 'preview_thumbnail', ['class' => 'post-thumbnail__image'] );

    ?></div>
    <div class="post-content">
        <div class="post-content__post-info">
            <div class="post-date"><?php

                echo get_the_date( "d.m.Y" );

            ?></div>
        </div>
        <div class="post-content__post-text">
            <div class="post-title"><?php the_title(); ?></div>
            <?php the_excerpt(); ?>
        </div>
        <div class="post-content__post-control"><a href="<?php the_permalink(); ?>" class="btn-read-post">Читать далее >></a></div>
    </div>
</div>
<!-- post-mini_end-->