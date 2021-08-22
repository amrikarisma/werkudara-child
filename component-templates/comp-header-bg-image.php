<div class="section-element section-header-career" id="<?php echo getIdFromTitle(get_sub_field('title')); ?>" data-section-name="<?php echo getIdFromTitle(get_sub_field('title')); ?>">
    <div class="container">
        <div class="header-featured-image" style="background-image: url('<?php echo get_sub_field('background')['url']; ?>');">
            <div class="wrapper-text-header-featured">
                <h2 data-aos="fade-left" data-aos-delay="200"><?php echo get_sub_field('title'); ?></h2>
                <?php $button = get_sub_field('button'); ?>
                <?php if ($button) : ?>
                    <a href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']); ?>" class="btn btn-primary" data-aos="fade-up" data-aos-delay="500"><?php echo esc_html($button['title']); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>