<?php

/**
 * Post rendering content according to caller of get_template_part
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$container = get_theme_mod('bensemangat_container_type');
$customCol = isset($args['count']) && $args['count'] == 1 ? 'col-md-10' : 'col-md-6';
?>

<article <?php post_class($customCol); ?> id="post-<?php the_ID(); ?>">
    <div class="wrap-featured-image thumbnail" data-aos="fade-in" data-aos-delay="900">
        <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>

    </div>
    <header class="entry-header">
        <?php if ('post' === get_post_type()) : ?>

            <div class="entry-meta" data-aos="fade-in" data-aos-delay="500">
                <?php echo get_the_category_list(esc_html__(', ', 'bensemangat'));

                ?>
            </div><!-- .entry-meta -->

        <?php endif; ?>
        <?php
        the_title(
            sprintf('<h2 class="entry-title" data-aos="fade-in" data-aos-delay="800"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
            '</a></h2>'
        );
        ?>
        <?php if (isset($args['count']) && $args['count'] == 1) : ?>
            <div class="entry-excerpt" data-aos="fade-in" data-aos-delay="1200">
                <?php the_excerpt();
                ?>
            </div>
        <?php endif; ?>


    </header><!-- .entry-header -->


    <div class="entry-content">
        <div class="<?php echo esc_attr($container); ?>">

            <?php
            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . __('Pages:', 'bensemangat'),
                    'after'  => '</div>',
                )
            );
            ?>

        </div>

    </div><!-- .entry-content -->

</article><!-- #post-## -->

<?php if (isset($args['count']) && $args['count'] == 1) : ?>
    <div class="wrap-category col-md-2" data-aos="fade-in" data-aos-delay="1200">
        <h4>Categories</h4>
        <ul class="all-category-list">
            <?php
            $categories = get_categories();
            foreach ($categories as $category) {
                echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
            }
            ?>
        </ul>
    </div>
<?php endif; ?>