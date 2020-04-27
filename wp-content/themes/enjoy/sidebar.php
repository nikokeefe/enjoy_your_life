<?php 
/**
 *  The template for the sidebar containging the main widget area
 * 
 * @package Enjoy
 */

?>

<?php 
    if( is_active_sidebar( 'enjoy-sidebar-1' ) ): ?>
<aside class="col-lg-3 col-md-4 col-12 h-100">
    <?php dynamic_sidebar( 'enjoy-sidebar-1' ); ?>
</aside>

<?php
endif;