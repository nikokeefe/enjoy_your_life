<?php

/**
 * Template Name: Home Page
 */


get_header(); ?>

<div class="content-area">
    <main>
        <div class="bg-image">
            <!---- fixed image ---->
            <!-- <div class="margin"></div>
            <section class="parallax">
                <div class="parallax-inner">
                    <h1>Enjoy Your Life!</h1>
                </div>
            </section> -->

            <!------- slider section ------->
            <section class="slider">

                <div class="flexslider">
                    <ul class="slides">
                        <?php 
                    // Getting data from the Customizer to display the Slider section
                    for ($i=1; $i < 4; $i++) :
                        $slider_page[$i] = get_theme_mod( 'set_slider_page' . $i );
                        $slider_button_text[$i] = get_theme_mod( 'set_slider_button_text' . $i );
                        $slider_button_url[$i] = get_theme_mod( 'set_slider_button_url' . $i );
                    endfor;

                    $args = array(
                        'post_type' => 'page',
                        'posts_per_page' => 3,
                        'post__in' => $slider_page,
                        'orderby' => 'post__in'
                    );

                    $slider_loop = new WP_Query( $args );
                    $j = 1;
                    if(  $slider_loop->have_posts() ):
                        while( $slider_loop->have_posts() ):
                            $slider_loop->the_post();                    
                    ?>
                        <li>
                            <?php the_post_thumbnail( 'enjoy-slider-image-size', array( 'class' => 'img-fluid') ); ?>
                            <div class="container">
                                <div class="slider-details-container">
                                    <div class="slider-title">
                                        <h1><?php the_title(); ?></h1>
                                    </div>
                                    <div class="slider-description">
                                        <div class="subtitle"><?php the_content(); ?></div>
                                        <a href="<?php echo esc_url( $slider_button_url[$j] ); ?>" class="link">
                                            <?php echo esc_html( $slider_button_text[$j] ); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php 
                        $j++;
                        endwhile; 
                        wp_reset_postdata();
                        endif; 
                    ?>
                    </ul>
                </div>
            </section>
            <!------- slider section ends ------->
            <div class="container">
                <!-- <div class="row"> -->
                <!------- ABOUT ------>
                <?php 
            
            $args = array(
                'post_type' => 'page',
                'pagename' => 'About'
            );

            $about = new WP_Query( $args );

            if( $about->have_posts() ): while( $about->have_posts() ): $about->the_post(); ?>

                <section class="about">

                    <div class="about__post">
                        <a href="<?php echo site_url( 'about' ); ?>">
                            <div class="about__img">
                                <?php if( has_post_thumbnail() ) : 
                            the_post_thumbnail( 'enjoy-about-image-size', array( 'class' => 'img-fluid' ) ); ?>

                                <?php endif; ?>
                            </div>
                        </a>
                        <div class="about__info">
                            <h2 class="about__title"><?php the_title(); ?></h2>
                            <div class="about__text"><?php the_excerpt(); ?></div>
                            <a href="<?php echo site_url( 'about' ); ?>" class="about__cta">Find out more</a>
                        </div>


                    </div>


                </section>
                <?php endwhile;
                endif;
            wp_reset_postdata();
            ?>
                <!-- </div> -->
                <!------- about ends ------>
                <section class="enjoy-blog">
                    <!------- blog section begins ------->

                    <div class="section-title">
                        <h2><?php echo get_theme_mod( 'set_blog_title', 'Thoughts' ); ?></h2>
                    </div>
                    <div class="row">
                        <?php 

                        $args = array(
                            'post-type' => 'post',
                            'posts_per_page' => 2,
                        );

                        $blog_posts = new WP_Query( $args );

                        if( $blog_posts->have_posts() ): 
                            while( $blog_posts->have_posts() ): $blog_posts->the_post(); ?>
                        <article class="col-12 col-md-6">
                            <div class="card-container">
                                <div class="card shadow-lg">
                                    <div class="inner">
                                        <a class="card-link" href="<?php the_permalink(); ?>">

                                            <?php 
                                                if( has_post_thumbnail() ):
                                                    the_post_thumbnail( 'enjoy-blog-image-size', array( 'class' => 'img-fluid card-img-top inner' ) );
                                                endif;
                                            ?>

                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="card-text"><?php the_excerpt(); ?></div>
                                    </div>
                                    <a class="card-link btn" href="<?php the_permalink(); ?>">Read
                                        More...</a>
                                </div>

                            </div>
                        </article>
                        <?php
                                endwhile;
                                wp_reset_postdata();
                            else: 
                        ?>
                        <p>Thoughts...</p>
                        <?php endif; ?>
                    </div>
            </div>
            </section>
            <!------- blog section ends ------->

            <?php if( class_exists( 'WooCommerce' ) ): ?>

            <!-- <section class="popular-products">
                <?php 
                        $popular_limit = get_theme_mod( 'set_popular_max_num', 4 );
                        $popular_col = get_theme_mod( 'set_popular_max_col', 4 );
                        $arrivals_limit = get_theme_mod( 'set_new_arrivals_max_num', 4 );
                        $arrivals_col = get_theme_mod( 'set_new_arrivals_max_col', 4 );
                    ?>
                <div class="container">
                    <div class="section-title">
                        <h2><?php echo esc_html( get_theme_mod( 'set_popular_title', __( 'Popular products', 'enjoy' ) ) ); ?>
                        </h2>
                    </div>
                    <?php echo do_shortcode( '[products limit=" ' . esc_attr( $popular_limit ) . ' " columns=" ' . esc_attr( $popular_col ). ' " orderby="popularity"] '); ?>
                </div>
            </section>
            <section class="new-arrivals">
                <div class="container">
                    <div class="section-title">
                        <h2><?php echo esc_html( get_theme_mod( 'set_new_arrivals_title', __( 'New Arrivals', 'enjoy' ) ) ); ?>
                        </h2>
                    </div>
                    <?php echo do_shortcode( '[products limit=" ' . esc_attr( $arrivals_limit ) . ' "  columns=" ' . esc_attr( $arrivals_col ) . ' " orderby="date"] '); ?>
                </div>
            </section>
            <?php 
                    $showdeal = get_theme_mod( 'set_deal_show', 0 );
                    $deal = get_theme_mod( 'set_deal' );
                    $currency = get_woocommerce_currency_symbol();
                    $regular = get_post_meta( $deal, '_regular_price', true );
                    $sale = get_post_meta( $deal, '_sale_price', true );

                    
                    if( $showdeal == 1 && ( !empty( $deal ) ) ) :
                        
                        
                ?>
            <section class="deal-of-the-week">
                <div class="container">
                    <div class="section-title">
                        <h2><?php echo esc_html( get_theme_mod( 'set_deal_title', __( 'Deal of the Week', 'enjoy' ) ) ); ?>
                        </h2>
                    </div>
                    <div class="row d-flex align-items-center">
                        <div class="deal-img col-md-6 col-12 ml-auto text-center">
                            <?php echo get_the_post_thumbnail( $deal, 'large', array( 'class' => 'img-fluid' ) ); ?>
                        </div>
                        <div class="deal-desc col-md-4 col-12 mr-auto text-center">
                            <?php if( !empty( $sale ) ) : 
                            $discount_percentage = absint( 100 - ( ( $sale/$regular ) * 100 ) ); ?>
                            <span class="discount">
                                <?php echo esc_html( $discount_percentage ) . esc_html__('% OFF!', 'enjoy' ); ?>
                            </span>
                            <?php endif; ?>
                            <h3>
                                <a
                                    href="<?php echo esc_url( get_permalink( $deal ) ); ?>"><?php echo esc_html( get_the_title( $deal ) ); ?></a>
                            </h3>
                            <p><?php echo esc_html( get_the_excerpt( $deal ) ); ?></p>
                            <div class="prices">
                                <?php // if on sale display regular w/strikethrough and sale price
                                    if( !empty( $sale ) ) : 
                                ?>
                                <span class="regular">
                                    <?php 
                                            echo sprintf( get_woocommerce_price_format(), esc_html( $currency ), esc_html( $regular ) );
                                        ?>
                                </span>
                                <span class="sale">
                                    <?php 
                                            echo sprintf( get_woocommerce_price_format(), esc_html( $currency ), esc_html( $sale ) );
                                        ?>
                                </span>
                                <?php // if no sale price just display regular price with sale class for the bold font
                                    else :  
                                ?>
                                <span class="sale">
                                    <?php 
                                                echo sprintf( get_woocommerce_price_format(), esc_html( $currency ), esc_html( $deal ) );
                                            ?>
                                </span>
                                <?php endif; ?>
                            </div>
                            <a href="<?php echo esc_url( '?add-to-cart=' . $deal); ?>"
                                class="add-to-cart"><?php esc_html_e( 'Add to cart', 'enjoy' ); ?></a>
                        </div>
                    </div>
                </div>
            </section>
            <?php 
                    endif;
                ?>
            <?php 
                endif;
            ?>
            </section> -->

        </div>

    </main>
</div>

<?php get_footer(); ?>