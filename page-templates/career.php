<?php

/**
 * Template Name: Career Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

get_template_part('component-templates/comp', 'career');
get_template_part('component-templates/comp', 'footer-information');

get_footer();
