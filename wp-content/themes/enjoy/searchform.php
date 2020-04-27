<?php
/**
 * Template for displaying search forms in Enjoy
 *
 * @package Enjoy
 */
?>

<form role="search" method="get" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" class="form-control mr-sm-2"
        placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'enjoy' ); ?>"
        value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="btn btn-outline-success my-2 my-sm-0"><span
            class="screen-reader-text"><?php echo _x( '', 'submit button', 'enjoy' ); ?></span></button>
    <?php if( class_exists( 'WooCommerce' )): ?>
    <input type="hidden" value="product" name="post_type" id="post_type">
    <?php endif; ?>
</form>