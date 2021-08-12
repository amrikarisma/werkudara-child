<div class="section-element recruitment-process">
    <h3 data-aos="fade-up" data-aos-delay="200"><?php echo get_sub_field('subtitle'); ?></h3>
    <div class="container">
        <div class="wrapper-content-recruitment">
            <ul class="nav nav-pills tab-box-recruitment" id="pills-tab" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <?php if (have_rows('content')) : ?>
                    <?php
                    $countTabTitle = 1;
                    ?>
                    <?php while (have_rows('content')) : the_row(); ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $countTabTitle == 1 ? 'active' : ''; ?>" id="pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>-tab" data-toggle="pill" href="#pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>" role="tab" aria-controls="pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>" aria-selected="true">
                                <div class="title-recruitment-tab">
                                    <?php the_sub_field('title'); ?>
                                </div>
                            </a>
                        </li>
                        <?php $countTabTitle++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>


            </ul>
            <div class="tab-content" id="pills-tabContent" data-aos="fade-in" data-aos-delay="800">
                <?php if (have_rows('content')) : ?>
                    <?php
                    $countContentTab = 1;
                    ?>
                    <?php while (have_rows('content')) : the_row(); ?>
                        <div class="tab-pane fade <?php echo $countContentTab == 1 ? 'show active' : ''; ?>" id="pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>" role="tabpanel" aria-labelledby="pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>-tab">
                            <div class="content-recruitment-tab d-flex">
                                <div class="nav flex-column nav-pills tab-content-title-recruitment" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <?php if (have_rows('list')) : ?>
                                        <?php
                                        $countVerticalTabTitle = 1;
                                        ?>
                                        <?php while (have_rows('list')) : the_row(); ?>
                                            <a class="nav-link <?php echo $countVerticalTabTitle == 1 ? 'active' : ''; ?>" id="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>-tab" data-toggle="pill" href="#v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>" role="tab" aria-controls="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>" aria-selected="true">
                                                <div class="count"><?php echo $countVerticalTabTitle; ?></div>
                                                <div class="wrap-title-subtitle-content-tab">
                                                    <div class="title-content-tab-recruitment"><?php the_sub_field('title'); ?></div>
                                                    <div class="subtitle-content-tab-recruitment"><?php the_sub_field('subtitle'); ?></div>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                </svg>
                                            </a>
                                            <?php $countVerticalTabTitle++; ?>
                                        <?php endwhile; ?>

                                    <?php endif; ?>
                                </div>
                                <div class="tab-content tab-content-content-recruitment" id="v-pills-tabContent">
                                    <?php if (have_rows('list')) : ?>
                                        <?php
                                        $countVerticalTabTitle = 1;
                                        ?>
                                        <?php while (have_rows('list')) : the_row(); ?>
                                            <div class="tab-pane fade <?php echo $countVerticalTabTitle == 1 ? 'show active' : ''; ?>" id="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo getIdFromTitle(get_sub_field('title')); ?>-tab">
                                                <button class="btn-close float-right"> &times </button>
                                                <?php the_sub_field('content'); ?>
                                            </div>
                                            <?php $countVerticalTabTitle++; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php $countContentTab++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>