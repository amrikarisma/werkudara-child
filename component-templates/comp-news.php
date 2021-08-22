<div class="section-element section-home-8" id="<?php echo getIdFromTitle(get_sub_field('title')); ?>" data-section-name="<?php echo getIdFromTitle(get_sub_field('title')); ?>">
    <div class="container">
        <div class="text-section-8">
            <h3 data-aos="fade-left" data-aos-delay="300"><?php echo get_sub_field('title'); ?></h3>
            <div class="text-content-section-8" data-aos="fade-up" data-aos-delay="500">
                <?php echo get_sub_field('subtitle'); ?>
            </div>

            <div class="list-news-section-8">
                <?php
                $args = array(
                    'numberposts' => 10,
                    'category'         => get_sub_field('category'),
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'meta_key' => '_thumbnail_id'
                );

                $newses = get_posts($args);

                ?>
                <div class="grid">
                    <div class="grid-sizer"></div>
                    <?php foreach ($newses as $post) :
                        setup_postdata($post);

                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full"); ?>
                        <div class="grid-item" data-aos="fade-up" data-aos-delay="200">
                            <a class="news-item-link" href="<?php the_permalink(); ?>">
                                <div class="news-overlay"></div>
                                <img src="<?php echo $image[0]; ?>" />
                                <div class="wrap-news-title">
                                    <h2 class="news-title"><?php the_title(); ?></h2>
                                </div>
                            </a>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata();
                    ?>

                </div>

            </div>
        </div>
    </div>
</div>