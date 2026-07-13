<?php
/**
 * The template for displaying a single service.
 *
 * @package MunwisTheme
 */

get_header();
?>

<div class="page-wrap service-page-wrap">
	<!-- Hero Section with Background -->
	<div class="service-single-hero" style="background-image: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=1600&q=80'); padding: 100px 0; background-size: cover; background-position: center; position: relative;">
        <!-- Overlay -->
        <div style="position: absolute; top:0; left:0; right:0; bottom:0; background: rgba(7, 34, 68, 0.8);"></div>
		<div class="container" style="position: relative; z-index: 2; text-align: center;">
			<h1 class="page-title" style="color: #ffffff !important; font-size: 3rem; margin-bottom: 20px;"><?php single_post_title(); ?></h1>
			<div class="service-breadcrumbs" style="color: #ffffff;">
				<style>
					.service-breadcrumbs a { color: #ffffff !important; text-decoration: underline; }
					.service-breadcrumbs a:hover { color: #e0e0e0 !important; }
				</style>
				<?php 
				if ( class_exists( 'MunwisTheme\SEO\Breadcrumbs' ) ) {
					\MunwisTheme\SEO\Breadcrumbs::render();
				}
				?>
			</div>
		</div>
	</div>

	<!-- Main Content Area -->
	<div class="container" style="padding: 60px 20px;">
		<div class="service-content" style="max-width: 800px; margin: 0 auto; background: #fff; padding: 40px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
			<?php
			while ( have_posts() ) :
				the_post();
                
                if ( has_post_thumbnail() ) {
                    echo '<div class="service-thumbnail" style="margin-bottom: 30px; text-align: center;">';
                    the_post_thumbnail('large', ['style' => 'max-width: 100%; height: auto; border-radius: 8px;']);
                    echo '</div>';
                }

                echo '<div class="service-text-content" style="font-size: 1.1rem; line-height: 1.8;">';
				the_content();
                echo '</div>';

			endwhile; // End of the loop.
			?>
            
            <div style="text-align: center; margin-top: 40px; padding-top: 30px; border-top: 1px solid #eee;">
                <h3 class="text-navy" style="margin-bottom: 15px;">Interested in this service?</h3>
                <?php 
                $service_form = get_theme_mod( 'munwis_service_form' );
                if ( ! empty( $service_form ) ) {
                    echo '<div class="cf7-container" style="text-align: left; max-width: 600px; margin: 0 auto;">';
                    echo do_shortcode( $service_form );
                    echo '</div>';
                } else {
                ?>
                    <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn btn-secondary">Request Service <i class="fa-solid fa-arrow-right"></i></a>
                <?php } ?>
            </div>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/bottom-cta' ); ?>

<?php
get_footer();
