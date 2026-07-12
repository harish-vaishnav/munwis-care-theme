<?php
/**
 * Template Name: Careers
 * 
 * @package MunwisTheme
 */

get_header(); 
?>

<div class="page-wrap careers-page-wrap">
	<!-- Hero Section with Background -->
	<div class="careers-hero" style="background-image: url('https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1600&q=80');">
		<div class="container">
			<h1 class="page-title text-navy">CAREERS</h1>
		</div>
	</div>

	<!-- Main Content Area (Overlapping) -->
	<div class="container careers-overlap-container">
		<div class="careers-grid">
			
			<!-- Left Column: Text -->
			<div class="careers-text-col">
				<h3 class="text-navy" style="margin-bottom: 20px;">Do you want to work for Munwi's Care? Start Here!</h3>
				<p>Start your application using the form below. It'll take you just a few minutes to complete. Please include your resume and any additional documentation.</p>
			</div>

			<!-- Right Column: Contact Form 7 -->
			<div class="careers-form-col">
				<div class="cf7-container bg-white shadow-box">
					<?php echo do_shortcode('[contact-form-7 id="a1bda34" title="Career Form"]'); ?>
				</div>
			</div>

		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/bottom-cta' ); ?>

<?php
get_footer();
