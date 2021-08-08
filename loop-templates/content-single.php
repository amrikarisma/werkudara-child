<?php

/**
 * Single post partial template
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$container = get_theme_mod('bensemangat_container_type');
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <header class="entry-header">
        <div class="<?php echo esc_attr($container); ?>">
            <div class="wrapper-title d-flex">
                <?php
                $prev_post = get_adjacent_post(false, '', true);
                $next_post = get_adjacent_post(false, '', false);
                ?>
                <?php if (!empty($prev_post)) : ?>
                    <a href="<?php echo get_permalink($prev_post->ID); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                            <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </a>
                <?php else : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                    </svg>
                <?php endif; ?>
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                <?php if (!empty($next_post)) : ?>
                    <a href="<?php echo get_permalink($next_post->ID); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                            <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a>
                <?php else : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                        <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                <?php endif; ?>

            </div>
            <div class="entry-meta">

                <?php bensemangat_posted_on(); ?>

            </div><!-- .entry-meta -->
        </div>

    </header><!-- .entry-header -->
    <div class="wrap-featured-image">
        <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
    </div>

    <div class="entry-content">
        <div class="<?php echo esc_attr($container); ?>">

            <?php the_content(); ?>


        </div>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <div class="<?php echo esc_attr($container); ?>">

            <?php bensemangat_entry_footer(); ?>
        </div>
    </footer><!-- .entry-footer -->

</article><!-- #post-## -->