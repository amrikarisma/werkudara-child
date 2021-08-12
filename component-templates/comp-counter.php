<div class="section-element section-home-7" id="counter">
    <div class="container">
        <div class="wrapper-carousel-section-7">
            <?php $gallery_images = get_sub_field('gallery'); ?>
            <?php if ($gallery_images) :  ?>
                <div class="carousel-image-section-7">
                    <?php
                    $delay = 300;
                    $galery_id = 1;
                    ?>
                    <?php foreach ($gallery_images as $gallery_image) : ?>
                        <img data-aos="fade-in" data-aos-delay="<?php echo $delay; ?>" class="img-fluid image-<?php echo $galery_id; ?>" src="<?php echo esc_url($gallery_image['url']); ?>" alt="<?php echo esc_attr($gallery_image['alt']); ?>">
                        <?php
                        $delay = (int)$delay + 300;
                        $galery_id++;
                        ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
        <div class="wrapper-counting">

            <?php if (have_rows('counter')) : ?>
                <?php
                $delay = 300;
                $counter_id = 1;
                ?>
                <?php while (have_rows('counter')) : the_row(); ?>
                    <div data-aos="fade-in" data-aos-delay="<?php echo $delay; ?>" class=" counting-number" id="count-<?php echo $counter_id; ?>">
                        +<div class="counter" data-target="<?php the_sub_field('number'); ?>">0</div>
                        <span><?php the_sub_field('title'); ?></span>
                    </div>
                    <?php
                    $delay = (int)$delay + 300;
                    $counter_id++;
                    ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>