<?php

function enjoy_wc_modify() {

    add_action( 'woocommerce_before_main_content', 'enjoy_open_container_row', 5);
    function enjoy_open_container_row() {
        echo '<div class="container shop-content"><div class="row">';
    }
    add_action( 'woocommerce_after_main_content', 'enjoy_close_container_row', 5);
    function enjoy_close_container_row() {
        echo '</div></div>';
    }

    if( is_shop() ) {

        add_action( 'woocommerce_before_main_content', 'enjoy_add_sidebar_tags', 6 );
        function enjoy_add_sidebar_tags() {
            echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
        }

        remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );
        add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );

        add_action( 'woocommerce_before_main_content', 'enjoy_close_sidebar_tags', 8 );
        function enjoy_close_sidebar_tags() {
            echo '</div>';
        }

        add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );
    }

    add_action( 'woocommerce_before_main_content', 'enjoy_add_shop_tags', 9 );
    function enjoy_add_shop_tags() {
        if( is_shop() ){
            echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
        } else {
            echo '<div class="col">';
        }
    }

    add_action( 'woocommerce_before_main_content', 'enjoy_close_shop_tags', 4 );
    function enjoy_close_shop_tags() {
        echo '</div>';
    }

    

}

add_action( 'wp', 'enjoy_wc_modify' );