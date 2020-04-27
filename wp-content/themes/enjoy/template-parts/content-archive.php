<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Enjoy
 */

?>

<article <?php post_class(); ?>>
    <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php 
                if( has_post_thumbnail() ):
                    the_post_thumbnail( 'enjoy-blog-image-size', array( 'class' => 'img-fluid' ) );
                endif;
                ?>
        </a>
    </div>
    <div class="meta">
        <p><?php esc_html_e( 'Published by', 'enjoy' ); ?> <?php the_author_posts_link(); ?>
            <?php esc_html_e( 'on', 'enjoy' ); ?> <?php echo esc_html(get_the_date() ); ?>
            <br />
            <?php if( has_category() ): ?>
            <?php esc_html_e( 'Categories', 'enjoy'); ?>: <span><?php the_category( ' ' ); ?></span>
            <?php endif; ?>
            <br />
            <?php if( has_tag() ): ?>
            <?php esc_html_e( 'Tags', 'enjoy'); ?>: <span><?php the_tags( '', ', ' ); ?></span>
            <?php endif; ?>
        </p>
    </div>
    <div><?php the_excerpt(); ?></div>
</article>