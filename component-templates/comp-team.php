<div class="section-element section-home-4" id="<?php echo getIdFromTitle(get_sub_field('title')); ?>" data-section-name="<?php echo getIdFromTitle(get_sub_field('title')); ?>">
    <div class="container">
        <div class="text-section-4">
            <h3 class="" data-aos="fade-up" data-aos-delay="400"><?php echo get_sub_field('title'); ?></h3>
            <div class="row pt-4">
                <div class="col-md-5 col-lg-4">
                    <div class="text-content-section-4" data-aos="fade-left" data-aos-delay="700">
                        <?php echo get_sub_field('content'); ?>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8">
                    <?php if (have_rows('list')) : ?>
                        <div class="wrapper-section-team">
                            <div class="button-view-wrapper">
                                <button class="button-view rounded-circle" data-aos="fade-in" data-aos-delay="1200">View</button>
                            </div>
                            <!-- Slider main container -->
                            <div class="swiper-container team" data-aos="fade-left" data-aos-delay="1200">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <?php while (have_rows('list')) : the_row(); ?>
                                        <?php $image = get_sub_field('image'); ?>

                                        <!-- Slides -->
                                        <div class="swiper-slide" style="background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('<?php echo $image ? esc_url($image['url']) : ''; ?>');
                                        ">
                                            <div class="overlay">

                                            </div>
                                            <div class="box-content-slider">
                                                <div class="name"><?php echo get_sub_field('title'); ?></div>
                                                <div class="position"><?php echo get_sub_field('subtitle'); ?></div>
                                                <div class="caption"><?php echo get_sub_field('caption'); ?></div>
                                            </div>
                                        </div>
                                        <!-- End Slides -->
                                    <?php endwhile; ?>
                                    <div class="swiper-slide d-flex">
                                        <?php $button = get_sub_field('button'); ?>
                                        <a href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']); ?>" class="btn btn-primary align-self-center" data-aos="fade-up" data-aos-delay="2000"><?php echo esc_html($button['title']); ?></a>
                                    </div>
                                </div>

                                <!-- If we need navigation buttons -->
                                <div class="wrap-button-prev-next">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</div>