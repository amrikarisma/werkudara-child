<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('bensemangat_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php bensemangat_body_attributes(); ?>>
    <?php if (get_theme_mod('bensemangat_preloader') === 'on') : ?>
        <div class="preloader">
            <div class="loading">
                <img class="img-fluid" src="https://www.jotconstructions.ca/wp-content/themes/jot-construction/images/loader.gif" width="400">
                <!-- <div class="text-center">Harap Tunggu</div> -->
            </div>
        </div>
    <?php endif; ?>

    <?php do_action('wp_body_open'); ?>
    <div class="site" id="page">
        <!-- ******************* The Navbar Area ******************* -->
        <div id="wrapper-navbar" class="navbar-layout-desktop inited">

            <a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'bensemangat'); ?></a>

            <nav id="main-nav" class="navbar navbar-expand-lg navbar-home" aria-labelledby="main-nav-label">

                <!--  Show this only on mobile to medium screens  -->
                <!-- Your site title as branding in the menu -->
                <?php if (!has_custom_logo()) { ?>

                    <?php if (is_front_page() && is_home()) : ?>

                        <h1 class="navbar-brand d-lg-none"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

                    <?php else : ?>

                        <a class="navbar-brand d-lg-none" rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

                    <?php endif; ?>

                <?php

                } else {
                    echo '<div class="logo-center d-lg-none">';
                    the_custom_logo();
                    echo '</div>';
                }
                ?>
                <!-- end custom logo -->
                <button class="navbar-toggler" type="button" data-trigger="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse justify-content-between" id="navbarToggle">
                    <div class="container-fluid justify-content-center">
                        <div class="offcanvas-header mt-3">
                            <button class="btn-close float-right"> &times </button>
                        </div>

                        <!-- Your site title as branding in the menu -->
                        <?php if (!has_custom_logo()) { ?>

                            <?php if (is_front_page() && is_home()) : ?>

                                <h1 class="navbar-brand d-none"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

                            <?php else : ?>

                                <a class="navbar-brand d-none" rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

                            <?php endif; ?>

                        <?php
                        } else {
                            echo '<div class="d-none">';
                            the_custom_logo();
                            echo '</div>';
                        }
                        ?>
                        <!-- end custom logo -->
                        <!-- The WordPress Menu goes here -->
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'primary',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'navbar-nav d-md-none',
                                'fallback_cb'     => '',
                                'menu_id'         => 'primary-menu',
                                'depth'           => 2,
                                'walker'          => new Bensemangat_WP_Bootstrap_Navwalker(),
                            )
                        );
                        ?>


                        <?php if ('container' === $container) : ?>
                    </div><!-- .container -->
                <?php endif; ?>
                </div>
            </nav>
            <!-- .site-navigation -->

        </div><!-- #wrapper-navbar end -->