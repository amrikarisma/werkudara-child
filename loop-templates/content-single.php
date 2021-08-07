<?php
/**
 * Single post partial template
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

            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <div class="entry-meta">

                <?php bensemangat_posted_on(); ?>

            </div><!-- .entry-meta -->
        </div>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
        <div class="<?php echo esc_attr( $container ); ?>">

            <?php the_content(); ?>

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
