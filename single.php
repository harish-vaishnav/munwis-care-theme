<?php
/**
 * The template for displaying all single posts
 *
 * @package MunwisTheme
 */

get_header();
?>

<main id="primary" class="site-main">
	<header class="page-header-banner">
		<div class="container">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
			<?php 
			if ( class_exists( 'MunwisTheme\SEO\Breadcrumbs' ) ) {
				\MunwisTheme\SEO\Breadcrumbs::render();
			}
			?>
		</div>
	</header>
	<div class="container">
		<div class="site-content-wrapper">
			<div class="primary-content">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content/content', 'single' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
			
			<?php get_sidebar(); ?>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
