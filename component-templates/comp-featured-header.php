<?php if (have_rows('background')) : ?>
    <?php $url = array(); ?>
    <?php while (have_rows('background')) : the_row(); ?>
        <?php if (get_row_layout() == 'background') : ?>
            <?php if (get_sub_field('image')) : ?>
                <?php
                $url[] = get_sub_field('image');
                ?>
            <?php endif ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php // no layouts found 
    ?>
<?php endif; ?>
<div class="section-featured-home" id="home_featured_section" style="
    background-image: url('<?php echo $url[0]; ?>'), 
    url('<?php echo $url[1] ?? ''; ?>'), 
    url('<?php echo $url[2] ?? ''; ?>'),
    url('<?php echo $url[3] ?? ''; ?>'),
    url('<?php echo $url[4] ?? ''; ?>'),
    url('<?php echo $url[5] ?? ''; ?>');
    ">
    <div class="section-element section-home-1" id="<?php echo getIdFromTitle(get_sub_field('title')); ?>">
        <div class="text-featured-header-float">
            <h3 data-aos="fade-in" data-aos-delay="1200" data-aos-duration="3000"><?php echo get_sub_field('title'); ?></h3>
            <div class="line"></div>
            <h4 data-aos="fade-in" data-aos-delay="2000" data-aos-duration="4000" data-aos-offset="-200"><?php echo get_sub_field('subtitle'); ?></h4>
        </div>
    </div>