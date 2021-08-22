<?php

/**
 * Partial template for content in page-career.php
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


    <header class="entry-header">

        <?php the_title('<h1 class="entry-title">', '</h1>');
        ?>
        <a href="mailto:<?php the_field('email'); ?>" class="btn btn-outline-primary" data-aos="fade-up" data-aos-delay="2000">Apply Now</a>

    </header>

    <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>

    <div class="entry-content">

        <?php the_content(); ?>

    </div>

    <footer class="entry-footer">

        <a href="<?php the_field('learn_apply'); ?>" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="2000">Learn how to apply</a>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->