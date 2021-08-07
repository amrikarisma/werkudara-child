<?php
/**
 * Content empty partial template
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$container = get_theme_mod( 'bensemangat_container_type' );
?>

<section class="template-products">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="subheading"><?php echo $args['subheading']; ?></div>
        <h3 class="heading"><?php echo $args['heading']; ?></h3>
        <div class="header-text"><?php echo $args['heading']; ?></div>
        <div class="text-desc"><?php echo $args['description']; ?></div>
        <?php 
        // echo '<pre>';
        // print_r($images);die();
        if( $args['item'] ): ?>
        <!-- Slider main container -->
        <div class="swiper-container products">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper" data-count="<?php echo count($args['item']); ?>">
            <?php foreach ( $args['item'] as $post ) : ?>
                <?php setup_postdata( $post );
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                $caption = wp_get_attachment_caption($post->ID); 
                ?>
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="box-content-slider">
                        <div class="wrap-image">
                            <img class="img-fluid" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/>
                        </div>
                        <div class="descr">
                            <h5 class="title"><?php the_title(); ?></h5>
                            <div class="caption"><?php echo the_excerpt(); ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <?php if($args['button']) : ?>
        <div class="btn-wrap text-center">
            <a href="<?php echo $args['text_button']['url']; ?>" class="btn btn-black color-hover-default align-center"><?php echo $args['text_button']['text']; ?></a>
        </div>
        <?php endif; ?>
    </div>
</section>