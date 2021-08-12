<div class="section-element section-home-2" id="<?php echo getIdFromTitle(get_sub_field('title')); ?>">
    <div class="container">
        <div class="text-section-2">
            <h3 class="" data-aos="fade-up" data-aos-delay="500"><?php echo get_sub_field('title'); ?></h3>
            <div class="text-content-section-2" data-aos="fade-left" data-aos-delay="800">
                <p><?php echo get_sub_field('subtitle'); ?></p>
            </div>
            <?php $button = get_sub_field('button'); ?>
            <?php if ($button) : ?>
                <a href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']); ?>" class="btn btn-primary" data-aos="fade-up" data-aos-delay="1000"><?php echo esc_html($button['title']); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>