<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Enjoy
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header>

            <section class="top-bar">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-12">
                            <a href="<?php echo home_url( '/' ); ?>">
                                <?php if( has_custom_logo() ): ?>
                                <?php the_custom_logo(); ?>
                                <?php else : ?>
                                <p class="site-title"><?php bloginfo( 'title' ); ?></p>
                                <span><?php bloginfo( 'description' ); ?></span>
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="">
                                <nav class="main-menu navbar navbar-expand-md navbar-light " role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1"
                                        aria-controls="bs-example-navbar-collapse-1" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <?php
                                                wp_nav_menu( array(
                                                    'theme_location'    => 'enjoy_main_menu',
                                                    'depth'             => 3,
                                                    'container'         => 'div',
                                                    'container_class'   => 'collapse navbar-collapse',
                                                    'container_id'      => 'bs-example-navbar-collapse-1',
                                                    'menu_class'        => 'nav navbar-nav navbar-fixed-top',
                                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                                    'walker'            => new WP_Bootstrap_Navwalker(),
                                                ) );
                                                ?>
                                </nav>
                            </div>
                        </div>
                        <?php if( class_exists( 'WooCommerce' ) ) : ?>
                        <div class="col-md-2 col-12">
                            <div class="navbar-expand">
                                <ul class="navbar-nav float-right">
                                    <?php if( is_user_logged_in() ) : ?>
                                    <?php $user_info = get_userdata(1);
                                            $username = $user_info->user_login;
                                            $first_name = $user_info->first_name;
                                            $last_name = $user_info->last_name; 
                                    ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>"
                                            class="nav-link"><?php echo "Kia ora, $username.";?>
                                        </a>
                                    </li>
                                    <?php 
                                        $cate = get_queried_object();
                                        if ( is_shop() || is_product() || is_product_category() ): ?>
                                    <li>
                                        <div class="cart text-right">
                                            <a href="<?php echo wc_get_cart_url(); ?>"><span class="cart-icon"></span>
                                            </a>
                                            <span
                                                class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                        </div>
                                    </li>
                                    <?php endif; 
                                        ?>
                                    <?php else : ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>"
                                            class="nav-link">Login/Register</a>
                                    </li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </header>



        <!-- <section class="search">
                <div class="container">
                    <div class="text-center d-md-flex align-items-center">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </section> -->