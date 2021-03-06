<?php
/**
 * Template part for displaying posts.
 *
 * Used for both single and index/archive/search.

 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fashify
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- begin .featured-image -->
    <div class="featured-image">

        <?php if ( has_post_thumbnail() ) : ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('fashify-thumb-default'); ?></a><?php endif; ?>

    </div>
    <!-- end .featured-image -->

    <div class="entry-info">
            <!-- begin .entry-header -->
            <div class="entry-header">

                <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

                <div class="entry-meta">

                    <?php fashify_posted_on_default(); ?>

                </div>

            </div>
            <!-- end .entry-header -->

            <div class="entry-content">
                <?php  the_excerpt(); ?>
            </div><!-- .entry-content -->
    </div>
</article><!-- #post-## -->
