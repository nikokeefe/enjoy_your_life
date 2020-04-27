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

                <nav class="navbar navbar-expand-md navbar-light" id="navbar">

                    <div class="brand mx-auto" id="logo">
                        <a href="<?php echo home_url( '/' ); ?>">
                            <?php if( has_custom_logo() ): ?>
                            <?php the_custom_logo(); ?>
                            <?php else : ?>
                            <p class="site-title"><?php bloginfo( 'title' ); ?></p>
                            <span><?php bloginfo( 'description' ); ?></span>
                            <?php endif; ?>
                        </a>
                    </div>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'enjoy_main_menu',
                            'depth'             => 3,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'navbarCollapse',
                            'menu_class'        => 'nav navbar-nav mx-auto',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
                    <?php if( class_exists( 'WooCommerce' ) ) : ?>
                    <div class="col-md-2 col-12">
                        <div class="navbar-expand-md">
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
                                        <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
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
                </nav>

    </div>
    </div>
    </section>
    </header>