<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Enjoy
 */

get_header(); ?>

<div id="primary" class="content-area">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <?php
                    // Load the posts
                    while( have_posts() ): the_post();
                    
                        get_template_part( 'template-parts/content', 'single' );

                        // If comments are open or we have at least one comment, load up the comment template
                        if( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    endwhile;
                ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

</div>


<?php get_footer(); ?>