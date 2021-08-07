<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$container = get_theme_mod( 'bensemangat_container_type' );

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
        <div class="<?php echo esc_attr( $container ); ?>">

            <?php
            the_title(
                sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
                '</a></h2>'
            );
            ?>

            <?php if ( 'post' === get_post_type() ) : ?>

                <div class="entry-meta">
                    <?php bensemangat_posted_on(); ?>
                </div><!-- .entry-meta -->

            <?php endif; ?>
        </div>
	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
        <div class="<?php echo esc_attr( $container ); ?>">

            <?php the_excerpt(); ?>

            <?php
            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'bensemangat' ),
                    'after'  => '</div>',
                )
            );
            ?>

        </div>

	</div><!-- .entry-content -->

    <footer class="entry-footer">
        <div class="<?php echo esc_attr( $container ); ?>">
            <?php bensemangat_entry_footer(); ?>
        </div>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
