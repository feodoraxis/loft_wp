<?php
if ( ! is_active_sidebar( 'sidebar' ) ) {
    return;
}
?><!-- sidebar-->
<div class="sidebar">
    <?php dynamic_sidebar( 'sidebar' ); ?>
</div>