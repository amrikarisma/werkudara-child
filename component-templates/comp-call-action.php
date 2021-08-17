<div class="section-element section-home-10" id="<?php echo getIdFromTitle(get_sub_field('title')); ?>">
    <div class="container">
        <div class="text-section-10">
            <h3 data-aos="slide-up" data-aos-delay="500"><?php echo get_sub_field('title'); ?></h3>
            <div class="text-content-section-10">
                <p data-aos="slide-up" data-aos-delay="900"><?php echo get_sub_field('subtitle'); ?></p>
                <div class="wrap-button-footer">
                    <?php if (have_rows('content')) : ?>
                        <?php while (have_rows('content')) : the_row(); ?>
                            <?php $button = get_sub_field('button'); ?>
                            <?php if ($button) : ?>
                                <a data-aos="slide-up" data-aos-delay="1200" class="btn btn-primary" href="<?php echo esc_url($button['url']); ?>"><?php echo esc_html($button['title']); ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                                    </svg></a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // no rows found 
                        ?>
                    <?php endif; ?>


                </div>
            </div>
            <hr>

        </div>
    </div>
</div>