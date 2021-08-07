<?php
/**
 * Content empty partial template
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$container = get_theme_mod( 'bensemangat_container_type' );
$bgImgFull = $args['styling']['background_image'] ? 'style="background-image: url('.$args['styling']['background_image'].');"' : '';
$bgImgPosX = $args['styling']['potition_image'] ? 'background-position-x: '.$args['styling']['potition_image'].'%;' : 'background-position-x: 140%;';
$bgImg = $args['styling']['image'] ? 'style="background-image: url('.$args['styling']['image'].');'.$bgImgPosX.' background-position-y: 40%;background-repeat: no-repeat;"' : '';
$color1 = $args['styling']['font_color_1'] ? 'style="color:'.$args['styling']['font_color_1'].'"' : '';
$color2 = $args['styling']['font_color_2'] ? 'style="color:'.$args['styling']['font_color_2'].'"' : '';

?>

<section class="template-with-background-image" <?php echo $bgImgFull; ?>>
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading" <?php echo $color1; ?>><?php echo $args['heading'] ? $args['heading'] : ''; ?></h3>
                <div class="subheading" <?php echo $color2; ?>><?php echo $args['subheading'] ? $args['subheading'] : ''; ?></div>
                <div class="videoWrapper">
                    <?php echo $args['youtube_video']; ?>
                </div>
                <div class="wrap-list">
                    <div class="row no-gutters">
                        <?php 
                        if($args['item']) {
                            foreach ($args['item'] as $item) {
                                // var_dump($item['icon']); die();
                                echo '<div class="col">';
                                echo '<div class="wrap-block-icon">';
                                echo '<div class="block-icon">';
                                echo '<img src="'.$item['image'].'" class="img-fluid"/>';
                                echo '</div>';
                                echo '<div class="block-right" '.$color1.'>';
                                echo '<h6 class="header">' .$item['name'] .'</h6>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php if($args['button_action']['enable_button']) : ?>
                <div class="btn-wrap">
                    <a href="<?php echo $args['button_action']['url']; ?>" class="btn btn-black color-hover-white align-center"><?php echo $args['button_action']['button_text']; ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>