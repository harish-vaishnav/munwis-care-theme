<?php
/**
 * Template Name: Our Services
 * 
 * @package MunwisTheme
 */

get_header(); 

// Dynamic fields
$contact_phone = get_theme_mod( 'munwis_contact_phone', '610-605-8035' );
?>

<div class="page-wrap services-page-wrap">
	<!-- Hero Section with Background -->
	<div class="services-hero" style="background-image: url('https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=1600&q=80');">
		<div class="container">
			<h1 class="page-title text-navy">OUR SERVICES</h1>
			<p class="hero-desc">Our dedicated, certified health care professionals are licensed, bonded and insured. Their goals are to fulfill the requirements of you and your family.</p>
		</div>
	</div>

	<!-- Dual Action Boxes -->
	<div class="container services-action-container">
		<div class="action-grid">
			<div class="action-box bg-secondary text-white text-center">
				<h3>QUALITY STAFF REPLACEMENT</h3>
				<p>Let us help you connect with qualified staff</p>
				<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn btn-primary">Apply Now</a>
			</div>
			<div class="action-box bg-primary text-white text-center">
				<h3>MAKING THE RIGHT CONNECTION</h3>
				<p>We're ready to staff you at your request</p>
				<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn btn-secondary">Contact Us</a>
			</div>
		</div>
	</div>

	<!-- We're Here For You -->
	<div class="container here-for-you-container bg-white shadow-box text-center">
		<h2 class="text-navy">WE'RE HERE FOR YOU</h2>
		<p>Munwi's Care offers a wide variety of healthcare staffing options for you and your family. If you're a healthcare facility seeking to hire a caregiver, please contact us for any of your staffing needs!</p>
	</div>

	<!-- Services We Offer Grid -->
	<div class="container services-offer-container bg-white shadow-box text-center">
		<h2 class="text-navy">SERVICES WE OFFER</h2>
		<p>We provide customized healthcare solutions to our clients. In addition to these standard offerings, we also specialize in pediatric and adult private duty and supplemental staffing.</p>
		
		<div class="services-icon-grid">
			<?php
			$services_query = new WP_Query( [
				'post_type'      => 'service',
				'posts_per_page' => -1,
				'orderby'        => 'menu_order title',
				'order'          => 'ASC',
			] );

			if ( $services_query->have_posts() ) :
				while ( $services_query->have_posts() ) : $services_query->the_post();
					?>
					<div class="service-icon-box">
						<?php if ( has_post_thumbnail() ) : ?>
							<div style="margin-bottom: 15px;">
								<?php the_post_thumbnail( 'thumbnail', [ 'style' => 'max-width: 60px; height: auto; border-radius: 8px;' ] ); ?>
							</div>
						<?php else : ?>
							<i class="fa-solid fa-stethoscope text-secondary"></i>
						<?php endif; ?>
						<h4><?php the_title(); ?></h4>
						<p><?php echo wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 20 ); ?></p>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
			else :
				echo '<p>No services found. Please add services from the dashboard.</p>';
			endif;
			?>
		</div>
	</div>

	<!-- Where We Work (Full width background image) -->
	<div class="where-we-work" style="background-image: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=1600&q=80');">
		<div class="container">
			<div class="where-we-work-box bg-white">
				<h3 class="text-navy">WHERE WE WORK:</h3>
				<ul class="work-locations">
					<li><i class="fa-solid fa-location-dot text-secondary"></i> Delaware County</li>
					<li><i class="fa-solid fa-location-dot text-secondary"></i> Montgomery County</li>
					<li><i class="fa-solid fa-location-dot text-secondary"></i> Bucks County</li>
					<li><i class="fa-solid fa-location-dot text-secondary"></i> Philadelphia County</li>
					<li><i class="fa-solid fa-location-dot text-secondary"></i> Chester County</li>
					<li><i class="fa-solid fa-location-dot text-secondary"></i> New Jersey</li>
					<li><i class="fa-solid fa-location-dot text-secondary"></i> Delaware</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Let's Talk Banner -->
	<div class="lets-talk-banner bg-secondary text-white text-center">
		<div class="container">
			<h2>LET'S TALK <span style="font-weight: 300;">CONTACT US TODAY AT <br><?php echo esc_html( $contact_phone ); ?></span></h2>
		</div>
	</div>

	<!-- Why Choose Us -->
	<div class="container why-choose-container text-center">
		<h2 class="text-navy">WHY CHOOSE US FOR SPECIALIZED HEALTHCARE STAFFING?</h2>
		<p>We guarantee a smooth and seamless registration process for all clients looking to acquire our services. Below are 3 initial reasons to choose us.</p>
		
		<div class="reasons-grid">
			<div class="reason-card bg-white shadow-box">
				<img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=400&q=80" alt="Consulting">
				<div class="reason-content">
					<h4 class="text-navy">EXPERT CONSULTING</h4>
					<p>Consult with us and our staff to ensure we align exactly to your goals and expectations.</p>
				</div>
			</div>
			<div class="reason-card bg-white shadow-box">
				<img src="https://images.unsplash.com/photo-1584515933487-779824d29309?auto=format&fit=crop&w=400&q=80" alt="Staffing">
				<div class="reason-content">
					<h4 class="text-navy">FULL-TIME STAFFING</h4>
					<p>We are ready and waiting to provide you with the full-time care you desire on a consistent schedule.</p>
				</div>
			</div>
			<div class="reason-card bg-white shadow-box">
				<img src="https://images.unsplash.com/photo-1576091160550-2173ff9e5ee5?auto=format&fit=crop&w=400&q=80" alt="Interim">
				<div class="reason-content">
					<h4 class="text-navy">INTERIM & SEASONAL STAFF</h4>
					<p>Only looking for short term help? We can assist in providing care for exactly as long as you need!</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Specialized Care Banner -->
	<div class="alzheimers-banner" style="background-image: url('https://images.unsplash.com/photo-1516841273335-e39b37888115?auto=format&fit=crop&w=1600&q=80');">
		<div class="container">
			<div class="alzheimers-box bg-white">
				<h2 class="text-navy">COMPREHENSIVE CARE SERVICES</h2>
				<p>Finding the right care for yourself or a family member can be challenging. We offer a wide range of services designed to support your unique needs and ensure your comfort and safety.</p>
				<p>Our dedicated team is here to provide the compassionate support you deserve.</p>
				<div class="alz-buttons">
					<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn btn-secondary">Contact Us</a>
					<a href="#" class="btn btn-primary">Apply for Services</a>
				</div>
				<p class="small text-secondary" style="margin-top: 15px; font-weight: bold;">Download our brochure!</p>
			</div>
		</div>
	</div>

	<!-- Questions Form Section (Re-used from About) -->
	<div class="container questions-container">
		<div class="cf7-container bg-white shadow-box text-center">
			<h2 class="text-navy">DO YOU HAVE QUESTIONS?</h2>
			<p>We recognize that you have a lot of options when choosing a healthcare staffing agency. Contact us today with any general inquiries you may have about our staffing services.</p>
			
			<?php 
			$services_form = get_theme_mod( 'munwis_services_form' );
			if ( ! empty( $services_form ) ) {
				echo do_shortcode( $services_form );
			} else {
			?>
				<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn btn-secondary" style="margin-top: 20px;">Contact Us</a>
			<?php } ?>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/bottom-cta' ); ?>

<?php
get_footer();
