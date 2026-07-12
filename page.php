<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content/content', 'page' );
		endwhile; // End of the loop.
		?>
	</div>
</main><!-- #main -->

<?php
get_footer();
