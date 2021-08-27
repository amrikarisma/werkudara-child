<div class="our-company-1" id="corporate_tab_info">
    <div class="container">
        <div class="wrap-company-list-tab" data-aos="fade-in" data-aos-delay="500">
            <div class="nav flex-column nav-pills company-list-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <?php if (have_rows('list_item')) : ?>
                    <?php $compCount = 1; ?>
                    <?php while (have_rows('list_item')) : the_row(); ?>
                        <a class="nav-link <?php echo $compCount == 1 ? 'active' : ''; ?>" id="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>-tab" data-toggle="pill" href="#v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>" role="tab" aria-controls="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>" aria-selected="true"><?php the_sub_field('title'); ?></a>
                        <?php $compCount++; ?>
                    <?php endwhile; ?>
                    <!-- <a class="nav-link" href="#list-team" role="tab" aria-controls="list-team" aria-selected="false">Our <span>Team</span></a> -->
                <?php endif; ?>
            </div>
            <div class="tab-content company-content-tab" id="v-pills-tabContent" data-aos="fade-in" data-aos-delay="1000">
                <?php if (have_rows('list_item')) : ?>
                    <?php $compCount = 1; ?>
                    <?php while (have_rows('list_item')) : the_row(); ?>
                        <?php if (get_row_layout() == 'our_company') : ?>
                            <div class="tab-pane fade <?php echo $compCount == 1 ? 'show active' : ''; ?>" id="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>-tab">
                                <h3 class="heading">
                                    <?php the_sub_field('title'); ?>
                                </h3>
                                <div class="content-tab-pane">
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        <?php elseif (get_row_layout() == 'what_we_belive') : ?>

                            <div class="tab-pane fade" id="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>-tab">
                                <h3 class="heading">
                                    <?php the_sub_field('title'); ?>
                                </h3>
                                <div class="content-tab-pane">
                                    <div class="row">
                                        <div class="col">
                                            <div class="wrap-image">
                                                <?php $image = get_sub_field('image'); ?>
                                                <?php if ($image) : ?>
                                                    <img class="img-fluid" width="150" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div id="accordion">
                                                <?php if (have_rows('list')) : ?>
                                                    <?php while (have_rows('list')) : the_row(); ?>
                                                        <div class="card">
                                                            <div class="card-header" id="heading<?php echo getIdFromTitle(get_sub_field('title')); ?>">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#<?php echo getIdFromTitle(get_sub_field('title')); ?>" aria-expanded="true" aria-controls="<?php echo getIdFromTitle(get_sub_field('title')); ?>">
                                                                        <?php the_sub_field('title'); ?>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-right" viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd" d="M14 13.5a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1 0-1h4.793L2.146 2.854a.5.5 0 1 1 .708-.708L13 12.293V7.5a.5.5 0 0 1 1 0v6z" />
                                                                        </svg>
                                                                    </button>
                                                                </h5>
                                                            </div>

                                                            <div id="<?php echo getIdFromTitle(get_sub_field('title')); ?>" class="collapse" aria-labelledby="heading<?php echo getIdFromTitle(get_sub_field('title')); ?>" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <?php the_sub_field('content'); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php elseif (get_row_layout() == 'what_we_do') : ?>

                            <div class="tab-pane what-we-do-tab-pane fade" id="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>-tab">
                                <h3 class="heading">
                                    <?php the_sub_field('title'); ?>
                                </h3>
                                <div class="content-tab-pane" style="background-color: transparent; border-left: none;">
                                    <div class="corporate-tab-slider">
                                        <div class="swiper-container what-we-do">
                                            <div class="swiper-wrapper">
                                                <?php if (have_rows('list')) : ?>
                                                    <?php while (have_rows('list')) : the_row(); ?>
                                                        <div class="swiper-slide">
                                                            <div class="card">
                                                                <div class="wrapper-plus">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                                    </svg>
                                                                </div>
                                                                <?php $image = get_sub_field('image'); ?>
                                                                <?php if ($image) : ?>
                                                                    <img class="card-img-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                                <?php endif; ?>
                                                                <div class="card-body">
                                                                    <h3><?php the_sub_field('title'); ?></h3>
                                                                    <p>
                                                                        <?php the_sub_field('content'); ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        <?php elseif (get_row_layout() == 'core_value') : ?>

                            <div class="tab-pane fade" id="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>-tab">
                                <h3 class="heading">
                                    <?php the_sub_field('title'); ?>
                                </h3>
                                <div class="content-tab-pane">
                                    <div class="wrapper-core-value">
                                        <?php if (have_rows('list')) : ?>
                                            <?php while (have_rows('list')) : the_row(); ?>
                                                <div class="item-core-value">
                                                    <?php $image = get_sub_field('image'); ?>
                                                    <?php if ($image) : ?>
                                                        <img class="img-fluid" width="300" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                                        <circle cx="8" cy="8" r="8" />
                                                    </svg>
                                                    <div class="text-desc">
                                                        <?php the_sub_field('title'); ?>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php elseif (get_row_layout() == 'legal_entities') : ?>

                            <div class="tab-pane fade" id="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>-tab">
                                <h3 class="heading">
                                    <?php the_sub_field('title'); ?>
                                </h3>
                                <div class="content-tab-pane">
                                    <div class="legal">
                                        <?php the_sub_field('content'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>