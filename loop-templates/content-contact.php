<?php

/**
 * Content empty partial template
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$container = get_theme_mod('bensemangat_container_type');

?>

<section class="section-element contact">
    <div class="<?php echo esc_attr($container); ?>">

        <div class="row">
            <div class="col">
                <div class="heading">
                    <h3 class="header"><?php echo $args['title']; ?></h3>
                </div>
                <p><?php echo $args['description']; ?></p>
                <ul class="social-icons-list">
                    <?php echo $args['telepon'] ? '<li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:' . $args['whatsapp'] . '"><span class="head">' . $args['telepon'] . '</span></a></li>' : ''; ?>
                    <?php echo $args['email'] ? '<li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:' . $args['whatsapp'] . '"><span class="head">' . $args['email'] . '</span></a></li>' : ''; ?>
                    <?php echo $args['address'] ? '<li><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="head">' . $args['address'] . '</span></li>' : ''; ?>
                    <?php echo $args['whatsapp'] ? '<li><i class="fa fa-whatsapp" aria-hidden="true"></i> <a href="https://wa.me/' . $args['whatsapp'] . '"><span class="head">' . $args['whatsapp'] . '</span></a></li>' : ''; ?>
                    <?php echo $args['facebook'] ? '<li><i class="fa fa-facebook-official" aria-hidden="true"></i> <a href="https://facebook.com/' . $args['facebook'] . '"><span class="head">' . $args['facebook'] . '</span></a></li>' : ''; ?>
                    <?php echo $args['twitter'] ? '<li><i class="fa fa-twitter-square" aria-hidden="true"></i> <a href="https://twitter.com/' . $args['twitter'] . '"><span class="head">' . $args['twitter'] . '</span></a></li>' : ''; ?>
                    <?php echo $args['youtube'] ? '<li><i class="fa fa-instagram" aria-hidden="true"></i> <a href="https://instagram.com/' . $args['instagram'] . '"><span class="head">' . $args['instagram'] . '</span></a></li>' : ''; ?>
                </ul>
            </div>
            <?php if (!empty($args['additional_information']['title']) && !empty($args['additional_information']['content'])) : ?>
                <div class="col">
                    <div class="heading">
                        <h3 class="header"><?php echo $args['additional_information']['title'] ? $args['additional_information']['title'] : ''; ?></h3>
                    </div>
                    <div class="content"><?php echo $args['additional_information']['content'] ? $args['additional_information']['content'] : ''; ?></div>
                </div>
            <?php endif; ?>
            <div class="col">
                <div class="form-wrapper">
                    <?php echo do_shortcode($args['shortcode']); ?>
                </div>
            </div>
        </div>


    </div>
</section>