<?php
/**
 * Enjoy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Enjoy
 */

/**
 * Register Custom Navigation Walker
 */
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Register Custom Customizer
 */
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


/**
 * Enqueue scripts and styles
*/
function enjoy_scripts() {
    // Popper
    wp_enqueue_script( 'jquery-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), 1.0, true );

    // Bootstrap JavaScript and CSS flies
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.4.1', 'all' );

    // Font Awesome
    wp_enqueue_style( 'font-awesome', '//kit.fontawesome.com/5246a66b16.js' );
    ////stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
    
    // Theme's main stylesheet
    wp_enqueue_style( 'enjoy-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );

    // Google Fonts
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Seaweed+Script|Rajdhani:400,500,600,700&display=swap');

    // Flexslider JavaScript and CSS flies
    wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
    wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all' );
    wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array( 'jquery' ), '', true );

    // onscroll.js
    //wp_enqueue_script( 'scroll', get_template_directory_uri() . '/inc/scroll.js', NULL, '', true );
}
add_action( 'wp_enqueue_scripts', 'enjoy_scripts' );

function enjoy_config() {
    register_nav_menus(
        array(
            'enjoy_main_menu' => 'Enjoy Main Menu',
            'enjoy_footer_menu' => 'Enjoy Footer Menu'
        )
    );

    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 255,
        'single_image_width' => 255,
        'product_grid' => array(
            'default_rows' => 10,
            'min_rows' => 5,
            'max_rows' => 10,
            'default_columns' => 1,
            'min_columns' => 1,
            'max_columns' => 1
        )
    ) );

    add_theme_support( 'wc-product-gallery-zoom');
    add_theme_support( 'wc-product-gallery-lightbox');
    add_theme_support( 'wc-product-gallery-slider');

    add_theme_support( 'custom-logo', array(
        'height' => 85,
        'width' => 160,
        'flex-height' => true,
        'flex-width' => true
    ) );

    add_theme_support( 'post-thumbnails' );

    add_image_size( 'enjoy-slider-image-size', 1920, 1000, array( 'center', 'center' ) );
    add_image_size( 'enjoy-blog-image-size', 960, 640, array( 'center', 'center' ) );
    add_image_size( 'enjoy-about-image-size', 468, 60, array( 'center', 'center' ) );
    
    if ( ! isset( $content_width ) ) {
        $content_width = 600;
    }

    add_theme_support( 'title-tag' );
    
}
add_action( 'after_setup_theme', 'enjoy_config', 0 );

if( class_exists( 'WooCommerce' ) ) {
    require get_template_directory() . '/inc/wc_modifications.php';
}

/**
 * Show cart contents dynamically / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'enjoy_woocommerce_header_add_to_cart_fragment' );

function enjoy_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
<span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}

add_action( 'widgets_init', 'enjoy_sidebars' );
function enjoy_sidebars() {
    register_sidebar( array(
        'name' => esc_html__('Enjoy Main Sidebar', 'enjoy' ),
        'id' => 'enjoy-sidebar-1', 
        'description' => esc_html__( 'Drag and drop your widgets here','enjoy' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ) );

    register_sidebar( array(
        'name' =>  esc_html__('Enjoy Shop Sidebar', 'enjoy' ),
        'id' => 'enjoy-sidebar-shop',
        'description' => esc_html__( 'Drag and drop your WooCommerce widgets here','enjoy' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ) );

    register_sidebar( array(
        'name' => esc_html__('Enjoy Footer Sidebar 1', 'enjoy'),
        'id' => 'enjoy-sidebar-footer1',
        'description' => esc_html__('Drag and drop your widgets here', 'enjoy'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ) );

    register_sidebar( array(
        'name' => esc_html__('Enjoy Footer Sidebar 2', 'enjoy'),
        'id' => 'enjoy-sidebar-footer2',
        'description' => esc_html__('Drag and drop your widgets here', 'enjoy'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ) );

    register_sidebar( array(
        'name' => esc_html__('Enjoy Footer Sidebar 3', 'enjoy'),
        'id' => 'enjoy-sidebar-footer3',
        'description' => esc_html__('Drag and drop your widgets here', 'enjoy'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ) );
}