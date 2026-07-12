<?php
/**
 * The template for displaying archive pages
 *
 * @package MunwisTheme
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="site-content-wrapper">
				<div class="primary-content">
					<div class="posts-grid">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content/content', get_post_type() );
						endwhile;
						?>
					</div>
					
					<?php the_posts_navigation(); ?>
				</div>

				<?php get_sidebar(); ?>
			</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content/content', 'none' ); ?>

		<?php endif; ?>
	</div>
</main><!-- #main -->

<?php
get_footer();
