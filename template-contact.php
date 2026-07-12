<?php
/**
 * Template Name: Contact Us
 * 
 * @package MunwisTheme
 */

get_header(); 

// Dynamic fields
$contact_phone = get_theme_mod( 'munwis_contact_phone', '610-605-8035' );
$contact_email = get_theme_mod( 'munwis_contact_email', 'info@example.com' );
?>

<div class="page-wrap contact-page-wrap">
	<!-- Hero Section with Background -->
	<div class="contact-hero" style="background-image: url('https://images.unsplash.com/photo-1584515933487-779824d29309?auto=format&fit=crop&w=1600&q=80');">
		<div class="container">
			<h1 class="page-title text-navy">CONTACT US</h1>
		</div>
	</div>

	<!-- Main Content Area (Overlapping) -->
	<div class="container contact-overlap-container">
		<div class="contact-grid">
			
			<!-- Left Column: CEO / Contact Info -->
			<div class="contact-info-col">
				<div class="ceo-profile">
					<img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=300&q=80" alt="CEO Profile" class="ceo-img">
					<h3 class="ceo-name text-navy">CONTACT US</h3>
					<p class="ceo-sub text-teal">AVAILABLE VIA EMAIL OR OVER THE PHONE 24/7</p>
					
					<ul class="contact-details-list">
						<li>
							<i class="fa-solid fa-phone text-teal"></i>
							<span><?php echo esc_html( $contact_phone ); ?></span>
						</li>
						<li>
							<i class="fa-solid fa-building text-teal"></i>
							<span>Address</span>
						</li>
						<li>
							<i class="fa-solid fa-envelope text-teal"></i>
							<span><?php echo esc_html( $contact_email ); ?></span>
						</li>
					</ul>
				</div>
			</div>

			<!-- Right Column: Contact Form 7 -->
			<div class="contact-form-col">
				<div class="cf7-container bg-white shadow-box">
					<?php echo do_shortcode('[contact-form-7 id="f68a113" title="Contact Form"]'); ?>
				</div>
			</div>

		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/bottom-cta' ); ?>

<?php
get_footer();
