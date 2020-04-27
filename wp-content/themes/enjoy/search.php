<?php
/**
 * The template for displaying search results pages
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Enjoy
 */

get_header(); ?>

<div class="content-area">
    <main>
        <div class="container">
            <div class="row">

                <h1><?php esc_html_e( 'Search results for', 'enjoy' ); ?>: <?php echo get_search_query(); ?></h1>
                <?php

                get_search_form();
                
                // If there are any posts
                    if( have_posts() ):
                        // Load the posts
                        while( have_posts() ): the_post();
                            get_template_part( 'template-parts/content', 'search' );
                        endwhile;
                        // Posts Pagination
                        the_posts_pagination( array(
                            'prev_text' => esc_html__( 'Previous', 'enjoy' ),
                            'next_text' => esc_html__( 'Next', 'enjoy' ),
                        ));
                    else:
                ?>
                <p><?php esc_html_e( 'There are no results for', 'enjoy' ); ?> <?php echo get_search_query(); ?>
                </p>
                <?php 
                    endif;
                ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>