<?php
/**
 * Template Name: About Us
 * 
 * @package MunwisTheme
 */

get_header(); 
?>

<div class="page-wrap about-page-wrap">
	<!-- Hero Section with Background -->
	<div class="about-hero" style="background-image: url('https://images.unsplash.com/photo-1551076805-e18690c5e451?auto=format&fit=crop&w=1600&q=80');">
		<div class="container">
			<h1 class="page-title text-navy">ABOUT US</h1>
		</div>
	</div>

	<!-- 24/7 Banner (Overlapping) -->
	<div class="container about-overlap-container">
		<div class="about-intro-box bg-white shadow-box">
			<h2 class="text-navy">We're here 24 Hours a Day / 7 Days a Week</h2>
			<p>Munwi's Care has provided staffing solutions in Healthcare in the greater Philadelphia area and its neighboring counties. Our goal is to be a leader in matching the supply and demand requirements for labor in the healthcare industry. We believe in quality, compassion and empathy in caring while helping healthcare facilities find the right person for a job.</p>
		</div>
	</div>

	<!-- Dual CTA Boxes -->
	<div class="container dual-cta-container">
		<div class="cta-grid">
			<div class="cta-box bg-secondary">
				<div class="cta-content">
					<h3 class="text-white">SIGN UP TO START GETTING MORE SHIFTS</h3>
					<p class="text-white">We'll help you find the perfect position</p>
					<a href="<?php echo esc_url( home_url( '/career' ) ); ?>" class="btn btn-primary">Apply Today</a>
				</div>
				<div class="cta-image" style="background-image: url('https://images.unsplash.com/photo-1576091160550-2173ff9e5ee5?auto=format&fit=crop&w=400&q=80');"></div>
			</div>
			
			<div class="cta-box bg-secondary">
				<div class="cta-content">
					<h3 class="text-white">LOOKING FOR STAFF, CONTACT US TODAY</h3>
					<p class="text-white">Contact us about your staffing needs</p>
					<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn btn-primary">Contact Us</a>
				</div>
				<div class="cta-image" style="background-image: url('https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=400&q=80');"></div>
			</div>
		</div>
	</div>

	<!-- Our Mission Section -->
	<div class="container mission-container bg-white shadow-box">
		<div class="mission-grid">
			<div class="mission-content">
				<h2 class="text-navy">OUR MISSION</h2>
				<p>Munwi's Care has one mission: To Provide care for individuals who need it most while forming relationships based on reliability and trust with healthcare facilities while supporting eager healthcare professionals with job opportunities in the curative, rehabilitative, and palliative parts of the healthcare industry.</p>
				<a href="#" class="btn btn-secondary">LEARN MORE <i class="fa-solid fa-chevron-right"></i></a>
			</div>
			<div class="mission-image" style="background-image: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=800&q=80');"></div>
		</div>
	</div>

	<!-- Questions Form Section -->
	<div class="container questions-container">
		<div class="cf7-container bg-white shadow-box text-center">
			<h2 class="text-navy">DO YOU HAVE QUESTIONS?</h2>
			<p>We recognize that you have a lot of options when choosing a healthcare staffing agency. Contact us today with any general inquiries you may have about our staffing services.</p>
			
			<!-- PLACEHOLDER FOR CONTACT FORM 7 -->
			<?php echo do_shortcode('[contact-form-7 id="99997" title="Questions form"]'); ?>
			
			<div class="cf7-fallback-preview text-left">
				<form>
					<div class="form-row">
						<div class="form-group half"><input type="text" placeholder="Name*"></div>
						<div class="form-group half"><input type="email" placeholder="Email*"></div>
					</div>
					<div class="form-row">
						<div class="form-group"><textarea rows="3" placeholder="Message / Comment*"></textarea></div>
					</div>
					<button type="button" class="wpcf7-submit btn btn-secondary">Send</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/bottom-cta' ); ?>

<?php
get_footer();
