<div class="section-element list-content text-expandable wrap-content">
    <div class="container">
        <div class="category" data-aos="fade-left" data-aos-delay="700">
            <span><?php echo get_sub_field('subtitle'); ?></span>
        </div>
        <div class="title" data-aos="fade-left" data-aos-delay="200">
            <h3><?php echo get_sub_field('title'); ?></h3>
        </div>
        <div class="content" data-aos="fade-in" data-aos-delay="500">
            <div class="content-list-content">
                <?php echo get_sub_field('content'); ?>
            </div>
            <?php $button = get_sub_field('button'); ?>
            <?php if ($button) : ?>
            <?php endif; ?>
            <a href="#" class="readmore"><?php echo esc_html($button['title']); ?></a>
        </div>
    </div>
</div>