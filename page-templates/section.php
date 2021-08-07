<?php
/**
 * Template Name: Section
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
if(is_front_page()) :
    get_header('home');
else :
    get_header();
endif;
echo '<div class="wrapper-section">';
while ( have_posts() ) :
    the_post();
    if(is_front_page()) :
        get_template_part( 'component-templates/comp', 'home' );
        // get_template_part( 'loop-templates/content', 'slide' );
    else :
	    get_template_part( 'component-templates/comp', 'header' );
    endif;
    if ( have_rows( 'section' ) ): 

        $sections = get_field('section');

        foreach ($sections as $section) :

            switch ($section['acf_fc_layout']) :
            
                case 'header':
                    // var_dump($section);
                    // die();
                    get_template_part( 'loop-templates/content', 'slide', $section );
                    break;
                case 'action':
                    get_template_part( 'loop-templates/content', 'action', $section );
                    break;
                case 'about':
                    get_template_part( 'loop-templates/content', 'about', $section );
                    break;
                case 'contact':
                    get_template_part( 'loop-templates/content', 'contact', $section );
                    break;
                case 'maps':
                    get_template_part( 'loop-templates/content', 'maps', $section );
                    break;
                case 'products':
                    get_template_part( 'loop-templates/content', 'products', $section );
                    break;
                case 'section_with_background':
                    get_template_part( 'loop-templates/content', 'background', $section );
                    break;
                case 'section_with_image_background':
                    get_template_part( 'loop-templates/content', 'image', $section );
                    break;
                default:
                    # code...
                    break;
            endswitch;

        endforeach;

        get_template_part( 'loop-templates/content', 'footer', $section );

    endif;




    // get_template_part( 'component-templates/comp', 'header' );
	// get_template_part( 'loop-templates/content', 'about' );
	// get_template_part( 'loop-templates/content', 'contact' );
endwhile;
echo '</div>';
get_footer();
