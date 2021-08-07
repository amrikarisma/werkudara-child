<div class="wrapper-slider">
    <div class="swiper-container homepage">
        <div class="swiper-wrapper">
            <?php 
                if($args['image']) :
                    foreach ($args['image'] as $slide) : ?>
                        <div class="swiper-slide">
                            <div class="swiper-slide-cover" style="background : linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php echo esc_url($slide['url']); ?>);">
                                <div class="heading-slide">
                                    <h3><?php echo $slide['title']; ?></h3>
                                    <div class="text"><?php echo $slide['description']; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php 
                    endforeach;
                endif;
            ?>
        </div>
    </div>
</div>