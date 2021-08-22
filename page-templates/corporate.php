<?php

/**
 * Template Name: Corporate Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();


if (have_rows('section')) :
    while (have_rows('section')) : the_row();
        if (get_row_layout() == 'corporate_tab_info') :
            get_template_part('component-templates/comp', 'our-company');
        elseif (get_row_layout() == 'hirarki_team') :
            get_template_part('component-templates/comp', 'team-detail');
        endif;
    endwhile;
endif;
get_template_part('component-templates/comp', 'footer-information');

get_footer();
