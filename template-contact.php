<?php
/**
 * Template Name: Contact Us
 * 
 * @package MunwisTheme
 */

get_header(); 

// Dynamic fields
$contact_phone = get_theme_mod( 'munwis_contact_phone', '610-605-8035' );
$contact_email = get_theme_mod( 'munwis_contact_email', 'Info@bizzyhealthservices.com' );
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
					<h3 class="ceo-name text-navy">CONTACT AMINATA CONTEH RN, BSN, CEO</h3>
					<p class="ceo-sub text-teal">AVAILABLE VIA EMAIL OR OVER THE PHONE 24/7</p>
					
					<ul class="contact-details-list">
						<li>
							<i class="fa-solid fa-phone text-teal"></i>
							<span><?php echo esc_html( $contact_phone ); ?></span>
						</li>
						<li>
							<i class="fa-solid fa-building text-teal"></i>
							<span>150 Wayne Ave., Collingdale PA 19023</span>
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
					<!-- PLACEHOLDER FOR CONTACT FORM 7 -->
					<!-- You can replace this with: do_shortcode('[contact-form-7 id="123" title="Contact Us Form"]') -->
					<?php echo do_shortcode('[contact-form-7 id="99999" title="Contact form 1"]'); ?>
					
					<!-- Fallback form if shortcode doesn't exist yet -->
					<div class="cf7-fallback-preview">
						<p class="small text-muted" style="margin-bottom:20px;"><em>(Contact Form 7 Shortcode Placeholder)</em></p>
						<form>
							<div class="form-row">
								<div class="form-group half">
									<label>Name <span class="required">*</span></label>
									<input type="text" placeholder="First">
								</div>
								<div class="form-group half">
									<label>&nbsp;</label>
									<input type="text" placeholder="Last">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group half">
									<label>Email Address <span class="required">*</span></label>
									<input type="email">
								</div>
								<div class="form-group half">
									<label>Phone Number <span class="required">*</span></label>
									<input type="tel">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group half">
									<label>Are you with a company? <span class="required">*</span></label>
									<div class="radio-group">
										<label><input type="radio" name="company"> Yes</label>
										<label><input type="radio" name="company"> No</label>
									</div>
								</div>
								<div class="form-group half">
									<label>Best way to respond <span class="required">*</span></label>
									<div class="radio-group">
										<label><input type="radio" name="respond"> Phone</label>
										<label><input type="radio" name="respond"> Email</label>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Message <span class="required">*</span></label>
									<textarea rows="4"></textarea>
								</div>
							</div>
							<button type="button" class="wpcf7-submit btn btn-secondary">Send</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/bottom-cta' ); ?>

<?php
get_footer();
