<div class="section-home-5">
    <div class="container">
        <div class="text-section-5">
            <h3 data-aos="fade-left" data-aos-delay="300"><?php echo get_sub_field('title'); ?></h3>
            <div class="text-content-section-5" data-aos="fade-up" data-aos-delay="700">
                <?php echo get_sub_field('subtitle'); ?>
            </div>
            <?php if (have_rows('tab_list')) : ?>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist" data-aos="fade-left" data-aos-delay="1000">
                        <?php $tablistid = 0; ?>
                        <?php while (have_rows('tab_list')) : the_row(); ?>
                            <?php if (have_rows('tab')) : ?>
                                <?php while (have_rows('tab')) : the_row(); ?>
                                    <a class="nav-item nav-link<?php echo $tablistid == 0 ? ' active' : ''; ?>" id=" nav-<?php echo $tablistid ?>-tab" data-toggle="tab" href="#nav-<?php echo $tablistid ?>" role="tab" aria-controls="nav-<?php echo $tablistid ?>" aria-selected="true"><?php echo get_sub_field('title'); ?></a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php $tablistid++; ?>
                        <?php endwhile; ?>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent" data-aos="fade-up" data-aos-delay="1200">
                    <?php $tablistid = 0; ?>
                    <?php while (have_rows('tab_list')) : the_row(); ?>
                        <?php if (have_rows('tab')) : ?>
                            <?php while (have_rows('tab')) : the_row(); ?>
                                <div class="tab-pane fade<?php echo $tablistid == 0 ? ' show active' : ''; ?>" id="nav-<?php echo $tablistid ?>" role="tabpanel" aria-labelledby="nav-<?php echo $tablistid ?>-tab">
                                    <div class="content-tab-wrapper">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <?php echo get_sub_field('content'); ?>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="list-client-logo">
                                                    <div class="swiper-container swiper-client-logo">
                                                        <div class="swiper-wrapper">
                                                            <?php $list_client_images = get_sub_field('list_client'); ?>
                                                            <?php if ($list_client_images) :  ?>
                                                                <?php foreach ($list_client_images as $list_client_image) : ?>
                                                                    <div class="swiper-slide">
                                                                        <div class="d-flex justify-content-center align-items-center box-client-logo">
                                                                            <a href="<?php echo esc_url($list_client_image['url']); ?>">
                                                                                <img class="img-fluid" src="<?php echo esc_url($list_client_image['url']); ?>" alt="<?php echo esc_attr($list_client_image['alt']); ?>">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="swiper-button-next"></div>
                                                        <div class="swiper-button-prev"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php $tablistid++; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>