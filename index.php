<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

?>

<?php if (is_front_page() && is_home()) : ?>
	<?php get_template_part('global-templates/hero'); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part('global-templates/left-sidebar-check'); ?>

			<main class="site-main" id="main">


				<?php
				if (have_posts()) {
					$our_title = get_the_title(get_option('page_for_posts', true));
				?>
					<header class="entry-blog-header">
						<div class="container">
							<h1 class="entry-blog-title" data-aos="fade-in" data-aos-delay="500"><?php echo $our_title; ?></h1>
						</div>
					</header><!-- .entry-header -->
					<div class="container">

						<div class="row">
							<?php
							// Start the Loop.
							$count = 1;
							while (have_posts()) {
								the_post();

								/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
								get_template_part('loop-templates/content', get_post_format(), array('count' => $count));
								$count++;
							} ?>
						</div>

						<div class='pagination' data-aos="fade-in" data-aos-delay="500">
							<?php posts_nav_link(' ', '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg>', '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
</svg>'); ?>
						</div>
					</div>
				<?php
				} else {
					get_template_part('loop-templates/content', 'none');
				}
				?>


			</main><!-- #main -->

			<!-- The pagination component -->
			<?php //bensemangat_pagination(); 
			?>


			<!-- Do the right sidebar check -->
			<?php get_template_part('global-templates/right-sidebar-check'); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_template_part('component-templates/comp', 'footer-information');

get_footer();
