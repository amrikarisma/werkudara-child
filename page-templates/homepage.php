<?php

/**
 * Template Name: Homepage Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header('home');

if (have_rows('section')) : ?>
    <?php while (have_rows('section')) : the_row(); ?>
        <?php if (get_row_layout() == 'featured_header') : ?>
            <?php get_template_part('component-templates/comp', 'featured-header'); ?>
		<?php elseif (get_row_layout() == 'text_with_button') : ?>
            <?php get_template_part('component-templates/comp', 'text-button'); ?>
		<?php elseif (get_row_layout() == 'business') : ?>
            <?php get_template_part('component-templates/comp', 'business'); ?>
		<?php elseif (get_row_layout() == 'team') : ?>
            <?php get_template_part('component-templates/comp', 'team'); ?>
		<?php elseif (get_row_layout() == 'client') : ?>
            <?php get_template_part('component-templates/comp', 'client'); ?>
		<?php elseif (get_row_layout() == 'text_background') : ?>
            <?php get_template_part('component-templates/comp', 'text-background'); ?>
		<?php elseif (get_row_layout() == 'counter') : ?>
            <?php get_template_part('component-templates/comp', 'counter'); ?>
		<?php elseif (get_row_layout() == 'news') : ?>
            <?php get_template_part('component-templates/comp', 'news'); ?>
		<?php elseif (get_row_layout() == 'footer_section') : ?>
            <?php get_template_part('component-templates/comp', 'footer-section'); ?>
		<?php elseif (get_row_layout() == 'call_action') : ?>
            <?php get_template_part('component-templates/comp', 'call-action'); ?>
        <?php endif; ?>

    <?php endwhile; ?>
    <?php get_template_part('component-templates/comp', 'footer-information'); ?>

    <?php while (have_rows('section')) : the_row(); ?>
    <?php if (get_row_layout() == 'featured_header') : ?>
        <?php echo '</div> <!-- Close -->'; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php // no layouts found 
      ?>
<?php endif;
get_footer();
