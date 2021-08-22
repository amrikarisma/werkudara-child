<div class="section-element list-content text-list-hover" id="<?php echo getIdFromTitle(get_sub_field('title')); ?>" data-section-name="<?php echo getIdFromTitle(get_sub_field('title')); ?>">
    <div class="container">
        <div class="category" data-aos="fade-up" data-aos-delay="200">
            <span><?php echo get_sub_field('subtitle'); ?></span>
        </div>
        <!-- <div class="title">
            <h4 data-aos="fade-left" data-aos-delay="400"><?php //echo get_sub_field('title'); 
                                                            ?></h4>
        </div> -->
        <?php if (have_rows('content')) : ?>
            <div class="content">
                <div class="wrap-item-list">
                    <?php $itemNumber = 1; ?>
                    <?php while (have_rows('content')) : the_row(); ?>
                        <div class="item-wrapper-list" id="item-wrapper-list_<?php echo $itemNumber; ?>">
                            <div class="title">
                                <h4 data-aos="fade-left" data-aos-delay="400"><?php the_sub_field('title'); ?></h4>
                            </div>
                            <div class="item-list" data-aos="fade-up" data-aos-delay="<?php echo 300 * $itemNumber; ?>">
                                <span class="item-number"><?php echo '0' . $itemNumber; ?></span>
                                <span class="item-content"><?php the_sub_field('title'); ?></span>
                            </div>
                            <?php $image = get_sub_field('image'); ?>
                            <?php if ($image) : ?>
                                <img data-aos="fade-in" data-aos-delay="<?php echo 800 * $itemNumber; ?>" data-aos-duration="3000" class="img-fluid image-list-content" width="400" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            <?php endif; ?>
                        </div>
                        <?php $itemNumber++; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>


    </div>
</div>