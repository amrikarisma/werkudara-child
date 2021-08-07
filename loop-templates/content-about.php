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

<section class="template-about">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="subheading"><?php echo $args['subheading']; ?></div>
        <h3 class="heading"><?php echo $args['heading']; ?></h3>
        <div class="header-text"><?php echo $args['heading']; ?></div>
        <div class="text-desc"><?php echo $args['description']; ?></div>
        <div class="wrap-list-about">
            <div class="row">
            
                <?php foreach ($args['item'] as $item) {
                    $img = $item['icon'] ? $item['icon'] : '';
                    echo '<div class="col-6 col-md-4 col-lg-2">';
                    echo '<div class="wraper-item">';
                    echo '<div class="wrap-image">';
                    echo $img ? '<img class="img-fluid" src="'.$img['url'].'" alt="'.$img['alt'].'" />' : '';
                    echo '</div>';
                    echo '<div class="wrap-content">';
                    echo $item['title'] ? '<h6 class="header">'.$item['title'].'</h6>' : '';
                    echo $item['description'] ? '<p>'.$item['description'].'</p>' : '';
                    if (isset($item['item_list']) && !empty($item['item_list']))  {
                        foreach ($item['item_list'] as $item_list) {
                            echo '<p>'.$item_list['name'].'</p>';
                            echo '<hr />';
                        }
                    }
                    echo '</div>';
                    echo '<div class="wrap-button">';
                    echo '<a href="'.$item['button']['url'].'" class="btn btn-primary">'.$item['button']['text'].'</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';

                } ?>

            </div>
        </div>
        <?php if($args['button']) : ?>
        <div class="btn-wrap text-center">
            <a href="<?php echo $args['text_button']['url']; ?>" class="btn btn-black color-hover-default align-center"><?php echo $args['text_button']['text']; ?></a>
        </div>
        <?php endif; ?>
    </div>
</section>