<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Enjoy
 */

get_header(); ?>


<main>
    <!-- REMEMBER CONTAINER and ROW REMOVED - in content-page -->
    <?php 
                    while( have_posts() ): the_post(); 
                        get_template_part( 'template-parts/content', 'page');
                    endwhile; 
                ?>
    </div>
    </div>

</main>


<?php get_footer(); ?>