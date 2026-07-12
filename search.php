<?php
/**
 * The template for displaying search results pages
 *
 * @package MunwisTheme
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'munwis-theme' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<div class="site-content-wrapper">
				<div class="primary-content">
					<div class="posts-grid">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content/content', 'search' );

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
