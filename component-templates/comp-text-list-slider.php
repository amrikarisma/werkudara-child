<div class="section-element list-content" id="<?php echo getIdFromTitle(get_sub_field('title')); ?>" data-section-name="<?php echo getIdFromTitle(get_sub_field('title')); ?>">
    <div class="container">
        <div class="category" data-aos="fade-up" data-aos-delay="200">
            <span><?php echo get_sub_field('subtitle'); ?></span>
        </div>
        <div class="title" data-aos="fade-left" data-aos-delay="500">
            <h3><?php echo get_sub_field('title'); ?></h3>
        </div>
        <div class="subtitle" data-aos="fade-left" data-aos-delay="700"><?php echo get_sub_field('title'); ?></div>
        <div class="content">
            <div class="team-career-wrapper">
                <div class="swiper-container team-career">
                    <div class="swiper-wrapper">

                        <!-- Slides -->
                        <?php if (have_rows('content')) : ?>
                            <?php while (have_rows('content')) : the_row(); ?>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="500">
                                    <div class="box-content-slider">
                                        <div class="contract"><?php the_sub_field('subcategory'); ?></div>
                                        <div class="position"><?php the_sub_field('category'); ?></div>
                                        <h3 class="title"><?php the_sub_field('title'); ?></h3>
                                        <div class="requirement">
                                            <p>Requirement : </p>
                                            <?php if (have_rows('list')) : ?>
                                                <ul>
                                                    <?php while (have_rows('list')) : the_row(); ?>
                                                        <li><?php the_sub_field('title'); ?></li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            <?php endif; ?>
                                            <?php $button = get_sub_field('button'); ?>
                                            <?php if ($button) : ?>
                                                <a class="btn btn-outline-primary" href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']); ?>" data-aos="fade-up" data-aos-delay="2000"><?php echo esc_html($button['title']); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>

                        <!-- End Slides -->

                    </div>
                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</div>