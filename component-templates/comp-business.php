<div class="section-element section-home-3" id="<?php echo getIdFromTitle(get_sub_field('title')); ?>" data-section-name="<?php echo getIdFromTitle(get_sub_field('title')); ?>">
    <div class="container">
        <div class="text-section-3">
            <h3 class="" data-aos="fade-left" data-aos-delay="600"><?php echo get_sub_field('title'); ?></h3>
            <div class="text-content-section-3" data-aos="fade-up" data-aos-delay="1000">
                <p><?php echo get_sub_field('subtitle'); ?></p>
            </div>
            <?php if (have_rows('list')) : ?>
                <div class="list-feature-section-3">
                    <div class="row">
                        <?php $bussinessCount = 225; ?>
                        <?php while (have_rows('list')) : the_row(); ?>
                            <div class="col-6 col-md align-self-end item-featured">
                                <?php $link = get_sub_field('link'); ?>
                                <?php if ($link) : ?>
                                    <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>" data-aos="fade-up" data-aos-delay="<?php echo $bussinessCount; ?>">
                                        <?php $image = get_sub_field('image'); ?>
                                        <?php if ($image) : ?>
                                            <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                        <?php endif; ?>
                                        <div class="animation-title" data-aos="fade-up" data-aos-delay="<?php echo $bussinessCount; ?>">
                                            <h4><?php the_sub_field('title'); ?></h4>
                                        </div>
                                    </a>
                                <?php else : ?>
                                    <?php $image = get_sub_field('image'); ?>
                                    <?php if ($image) : ?>
                                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" data-aos="fade-up" data-aos-delay="<?php echo $bussinessCount; ?>">
                                    <?php endif; ?>
                                    <div class="animation-title" data-aos="fade-up" data-aos-delay="<?php echo $bussinessCount; ?>">
                                        <h4><?php the_sub_field('title'); ?></h4>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php $bussinessCount = $bussinessCount * 2; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php else : ?>
                <?php // no rows found 
                ?>
            <?php endif; ?>

        </div>
    </div>
</div>