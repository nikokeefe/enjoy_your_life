<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Enjoy
 */
?>
<div class="hero-image"></div>


<!-- <article class="col"> -->
<!---- fixed image ---->
<!-- <div class="margin"></div> -->
<!-- <section class="">
    <div class="">
        <?php if( has_post_thumbnail() ) : 
            the_post_thumbnail( 'enjoy-about-image-size', array( 'class' => 'hero-image' ) ); ?>

        <?php endif; ?>
    </div>
</section> -->
<div class="container">
    <div class="row mt-5 mb-5">
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
        <?php 
    if( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
    ?>
    </div>
</div>
<!-- </article> -->