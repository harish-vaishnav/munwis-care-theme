<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package MunwisTheme
 */

get_header();
?>

<div class="container">
	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		</header><!-- .page-header -->

		<div class="posts-grid">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', get_post_type() );
			endwhile;

			the_posts_navigation();
			?>
		</div>

	<?php else : ?>

		<?php get_template_part( 'template-parts/content/content', 'none' ); ?>

	<?php endif; ?>
</div>

<?php
get_footer();
