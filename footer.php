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

            <div class="row">

                <div class="col-md-12">
                    <div class="copyright">
                        Copyright 2019 PT. Werkudara Nirwana Sakti. All rights reserved.
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