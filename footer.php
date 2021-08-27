<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('bensemangat_container_type');
?>

<footer class="site-footer" id="colophon">
    <?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>
    <?php get_template_part('sidebar-templates/sidebar', 'hiddenwidget'); ?>

    <div class="wrapper copyright-wrap" id="wrapper-footer">

        <div class="<?php echo esc_attr($container); ?>">
            <div class="all-footer-menu-wrapper">
                <div class="menu-footer-wrapper">
                    <ul class="navbar-nav">
                        <li class="menu-item"><a class="nav-link" href="#">Download Company Profile</a></li>
                    </ul>
                    <ul class="navbar-nav right">
                        <li class="menu-item"><a class="nav-link" href="#">Terms of Use</a></li>
                        <li class="menu-item"><a class="nav-link" href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="menu-bottom-footer-wrapper">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'navbar-nav',
                            'fallback_cb'     => '',
                            'menu_id'         => 'primary-menu',
                            'depth'           => 1,
                        )
                    );
                    ?>
                </div>
            </div>

            <div class="row">

                <div class="col-md-12">
                    <div class="copyright">
                        Copyright <?php the_date('Y'); ?> PT. Werkudara Nirwana Sakti. All rights reserved.
                    </div>

                </div>
                <!--col end -->


            </div><!-- row end -->

        </div><!-- container end -->

    </div><!-- wrapper end -->

</footer><!-- #colophon -->

</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>
</body>

</html>