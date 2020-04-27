<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Enjoy
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta">
            <p><?php esc_html_e( 'Published by', 'enjoy'); ?> <?php the_author_posts_link(); ?> on
                <?php echo get_the_date(); ?><br />
                <?php esc_html_e( 'Categories', 'enjoy'); ?>: <span><?php the_category( ' ' ); ?><br />
                    <?php if(has_tag()): ?>
                    <?php esc_html_e( 'Tags', 'enjoy'); ?>: <span><?php the_tags( '', ', '); ?></span>
                    <?php endif; ?>
            </p>
        </div>
        <div class="post-thumbnail">
            <?php 
                if( has_post_thumbnail() ): 
                    the_post_thumbnail( 'enjoy-blog-image-size', array( 'class' => 'img-fluid') );
                endif;
                ?>
        </div>
    </header>
    <div class="content">
        <?php wp_link_pages( array(
            'before' => '<p class="inner-pagination">' . esc_html__( 'Pages', 'enjoy'),
            'after' => '</p>'
        ) ); ?>
        <?php the_content(); ?>
        <?php wp_link_pages( array(
            'before' => '<p class="inner-pagination">' . esc_html__( 'Pages', 'enjoy'),
            'after' => '</p>'
        ) ); ?>
    </div>
</article>