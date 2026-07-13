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

<!-- Embedded Custom Styles for a modern and precise layout -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap');

/* Namespace wrapper to prevent theme style bleeding */
.services-page-wrap {
    --munwis-navy: #0b2c56;
    --munwis-teal: #00a5b5;
    --munwis-violet: #5c3b9e;
    --munwis-light-gray: #f8fafc;
    --munwis-gray-text: #64748b;
    --munwis-dark-text: #1e293b;
    --munwis-border: rgba(225, 232, 237, 0.7);
    --munwis-shadow-soft: 0 4px 20px rgba(11, 44, 86, 0.04);
    --munwis-shadow-medium: 0 10px 30px rgba(11, 44, 86, 0.06);

    font-family: 'Plus Jakarta Sans', sans-serif;
    color: var(--munwis-dark-text);
    background-color: var(--munwis-light-gray);
    line-height: 1.65;
    overflow-x: hidden;
}

/* Typography styles inside the page wrap */
.services-page-wrap h1,
.services-page-wrap h2,
.services-page-wrap h3,
.services-page-wrap h4 {
    font-family: 'Playfair Display', Georgia, serif;
    color: var(--munwis-navy);
    font-weight: 700;
    margin-top: 0;
}

/* Container spacing helper */
.services-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 24px;
}

/* Hero Section */
.services-hero {
    position: relative;
    padding: 120px 0;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
}
.services-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(90deg, rgba(255, 255, 255, 0.95) 0%, rgba(255, 255, 255, 0.88) 50%, rgba(255, 255, 255, 0.4) 100%);
    z-index: 1;
}
.services-hero .hero-content-wrapper {
    position: relative;
    z-index: 2;
    max-width: 700px;
}
.services-hero h1 {
    font-size: 3.2rem;
    margin-bottom: 15px;
    letter-spacing: -0.5px;
}
.services-hero p {
    font-size: 1.15rem;
    color: var(--munwis-gray-text);
    margin: 0;
    line-height: 1.7;
}

/* Dual Action Column Layout */
.action-section {
    padding: 70px 0 40px 0;
}
.action-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}
.action-column {
    text-align: center;
}
.action-column h3 {
    font-size: 1.5rem;
    margin-bottom: 12px;
    letter-spacing: -0.2px;
}
.action-column p {
    color: var(--munwis-gray-text);
    font-size: 1.05rem;
    margin-bottom: 25px;
}
.btn-navy {
    display: inline-block;
    background-color: var(--munwis-navy);
    color: #fff !important;
    padding: 12px 32px;
    border-radius: 4px;
    font-weight: 600;
    text-decoration: none;
    font-size: 0.95rem;
    transition: background-color 0.2s, transform 0.2s;
    box-shadow: 0 4px 12px rgba(11, 44, 86, 0.15);
}
.btn-navy:hover {
    background-color: #06192d;
    transform: translateY(-1px);
}
.link-violet {
    display: inline-block;
    color: var(--munwis-violet) !important;
    font-weight: 600;
    text-decoration: none;
    font-size: 1.05rem;
    transition: color 0.2s;
    position: relative;
}
.link-violet:hover {
    color: #3b1d7d;
}
.link-violet::after {
    content: '';
    display: block;
    width: 100%;
    height: 1px;
    background-color: currentColor;
    position: absolute;
    bottom: -2px;
    left: 0;
    opacity: 0.7;
}

/* Info Cards Block (We're Here For You & Services Grid) */
.cards-section {
    padding: 20px 0 60px 0;
}
.info-card {
    background-color: #fff;
    border-radius: 12px;
    padding: 60px;
    margin-bottom: 40px;
    text-align: center;
    box-shadow: var(--munwis-shadow-soft);
    border: 1px solid rgba(225, 232, 237, 0.5);
}
.info-card h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    letter-spacing: -0.3px;
}
.info-card p {
    font-size: 1.05rem;
    color: var(--munwis-gray-text);
    line-height: 1.7;
    margin: 0 auto;
    max-width: 820px;
}
.services-offer-card {
    padding-bottom: 70px;
}
.services-offer-card .section-intro {
    margin-bottom: 50px;
}
.services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px 30px;
}
.service-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    transition: transform 0.3s;
}
.service-item:hover {
    transform: translateY(-3px);
}
.service-icon-wrapper {
    margin-bottom: 20px;
}
.service-thumb {
    width: 65px;
    height: 65px;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: var(--munwis-shadow-soft);
}
.fallback-icon-box {
    width: 65px;
    height: 65px;
    background-color: rgba(0, 165, 181, 0.08);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.fallback-icon-box i {
    font-size: 1.8rem;
    color: var(--munwis-teal);
}
.service-item h4 {
    font-size: 1.15rem;
    margin-bottom: 12px;
    letter-spacing: -0.2px;
}
.service-item p {
    font-size: 0.95rem;
    color: var(--munwis-gray-text);
    line-height: 1.6;
    margin: 0;
}

/* Where We Work Area */
.where-we-work-section {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 120px 0;
    position: relative;
    display: flex;
    align-items: center;
}
.where-we-work-card {
    background-color: rgba(255, 255, 255, 0.96);
    backdrop-filter: blur(4px);
    border-radius: 12px;
    padding: 50px;
    max-width: 480px;
    box-shadow: var(--munwis-shadow-medium);
}
.where-we-work-card h3 {
    font-size: 1.6rem;
    margin-bottom: 25px;
    letter-spacing: -0.2px;
}
.locations-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px 12px;
}
.locations-list li {
    font-size: 0.95rem;
    font-weight: 500;
    color: var(--munwis-dark-text);
    display: flex;
    align-items: center;
}
.locations-list li i {
    color: var(--munwis-teal);
    margin-right: 10px;
    font-size: 1.05rem;
}

/* Let's Talk Banner */
.lets-talk-section {
    background-color: #fff;
    padding: 50px 24px;
    text-align: center;
    border-top: 1px solid var(--munwis-border);
    border-bottom: 1px solid var(--munwis-border);
}
.lets-talk-section h2 {
    font-size: 1.8rem;
    font-weight: 700;
    letter-spacing: 0.5px;
    margin: 0;
    color: var(--munwis-navy);
}
.lets-talk-section .light-text {
    font-weight: 400;
    color: var(--munwis-gray-text);
}
.lets-talk-section .highlight-text {
    color: var(--munwis-violet);
    font-weight: 700;
    white-space: nowrap;
}

/* Why Choose Us Cards */
.why-choose-section {
    padding: 80px 0;
}
.why-choose-container {
    text-align: center;
}
.why-choose-container h2 {
    font-size: 2.1rem;
    margin-bottom: 20px;
    letter-spacing: -0.3px;
}
.why-choose-container .section-intro {
    font-size: 1.05rem;
    color: var(--munwis-gray-text);
    max-width: 800px;
    margin: 0 auto 50px auto;
    line-height: 1.7;
}
.reasons-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}
.reason-card {
    background-color: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--munwis-shadow-soft);
    border: 1px solid rgba(225, 232, 237, 0.4);
    text-align: left;
    transition: transform 0.3s, box-shadow 0.3s;
}
.reason-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--munwis-shadow-medium);
}
.reason-img-wrapper {
    width: 100%;
    height: 200px;
    overflow: hidden;
}
.reason-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s;
}
.reason-card:hover img {
    transform: scale(1.05);
}
.reason-content {
    padding: 30px;
}
.reason-content h4 {
    font-size: 1.2rem;
    margin-bottom: 12px;
    letter-spacing: -0.2px;
}
.reason-content p {
    font-size: 0.95rem;
    color: var(--munwis-gray-text);
    line-height: 1.6;
    margin: 0;
}

/* Comprehensive Care Banner Section */
.comprehensive-care-section {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 120px 0;
    position: relative;
    display: flex;
    align-items: center;
}
.comprehensive-care-card {
    background-color: rgba(255, 255, 255, 0.96);
    backdrop-filter: blur(4px);
    border-radius: 12px;
    padding: 60px;
    max-width: 550px;
    box-shadow: var(--munwis-shadow-medium);
}
.comprehensive-care-card h2 {
    font-size: 1.8rem;
    margin-bottom: 20px;
    letter-spacing: -0.3px;
}
.comprehensive-care-card p {
    font-size: 1rem;
    color: var(--munwis-gray-text);
    line-height: 1.65;
    margin-bottom: 20px;
}
.comprehensive-care-card p:last-of-type {
    margin-bottom: 30px;
}
.comp-buttons {
    display: flex;
    gap: 16px;
    margin-bottom: 25px;
}
.btn-purple-outline {
    display: inline-block;
    padding: 12px 28px;
    border: 2px solid var(--munwis-violet);
    color: var(--munwis-violet) !important;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    border-radius: 4px;
    text-align: center;
    transition: background-color 0.2s, color 0.2s;
}
.btn-purple-outline:hover {
    background-color: var(--munwis-violet);
    color: #fff !important;
}
.btn-navy-solid {
    display: inline-block;
    padding: 14px 28px;
    background-color: var(--munwis-navy);
    color: #fff !important;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    border-radius: 4px;
    text-align: center;
    transition: background-color 0.2s;
}
.btn-navy-solid:hover {
    background-color: #06192d;
}
.brochure-download-link {
    display: inline-block;
    font-weight: 700;
    color: var(--munwis-violet) !important;
    text-decoration: none;
    font-size: 0.95rem;
    transition: opacity 0.2s;
}
.brochure-download-link:hover {
    opacity: 0.8;
    text-decoration: underline;
}

/* Contact Questions Form Card */
.questions-section {
    padding: 80px 0;
}
.questions-container {
    max-width: 840px;
    margin: 0 auto;
    padding: 0 24px;
}
.questions-card {
    background-color: #fff;
    border-radius: 12px;
    padding: 60px;
    text-align: center;
}
.questions-card h2 {
    font-size: 2rem;
    margin-bottom: 12px;
    letter-spacing: -0.3px;
}
.accent-line {
    width: 60px;
    height: 3px;
    background-color: var(--munwis-teal);
    margin: 0 auto 24px auto;
}
.questions-card p {
    font-size: 1.05rem;
    color: var(--munwis-gray-text);
    line-height: 1.7;
    margin: 0 auto 40px auto;
    max-width: 680px;
}
.form-wrapper {
    text-align: left;
}
.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 20px;
}
.fallback-form input[type="text"],
.fallback-form input[type="email"],
.fallback-form textarea,
.wpcf7-form input[type="text"],
.wpcf7-form input[type="email"],
.wpcf7-form textarea {
    width: 100%;
    padding: 14px 18px;
    border: 1px solid rgba(225, 232, 237, 0.8);
    border-radius: 6px;
    background-color: #fafbfc;
    font-family: inherit;
    font-size: 0.95rem;
    color: var(--munwis-dark-text);
    box-sizing: border-box;
    transition: border-color 0.2s, background-color 0.2s;
}
.fallback-form input[type="text"]:focus,
.fallback-form input[type="email"]:focus,
.fallback-form textarea:focus,
.wpcf7-form input[type="text"]:focus,
.wpcf7-form input[type="email"]:focus,
.wpcf7-form textarea:focus {
    border-color: var(--munwis-teal);
    background-color: #fff;
    outline: none;
}
.fallback-form textarea,
.wpcf7-form textarea {
    margin-bottom: 25px;
    resize: vertical;
}
.form-submit-row {
    text-align: left;
}
.fallback-form .btn-send,
.wpcf7-form input[type="submit"] {
    background-color: #f1f3f5;
    color: #495057;
    padding: 12px 45px;
    border: none;
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
    font-size: 0.95rem;
    transition: background-color 0.2s, color 0.2s;
}
.fallback-form .btn-send:hover,
.wpcf7-form input[type="submit"]:hover {
    background-color: #e2e6ea;
    color: #212529;
}

/* Ensure Contact Form 7 structural styling defaults behave */
.wpcf7-form p {
    margin-bottom: 0;
}
.wpcf7-form .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 20px;
}

/* Bottom CTA Design Styling (WE'RE HERE TO HELP Section) */
.bottom-cta-override {
    background-color: var(--munwis-teal) !important;
    color: #fff !important;
    position: relative;
    overflow: hidden;
}
.bottom-cta-inner {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 24px;
    display: flex;
    justify-content: space-between;
    align-items: stretch;
}
.bottom-cta-image-col {
    width: 32%;
    display: flex;
    align-items: flex-end;
}
.bottom-cta-image-col img {
    max-width: 110%;
    height: auto;
    display: block;
    margin-bottom: -10px;
    z-index: 1;
}
.bottom-cta-content-col {
    width: 64%;
    padding: 70px 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.bottom-cta-content-col h2 {
    font-size: 2.3rem;
    font-weight: 700;
    color: #fff !important;
    margin-bottom: 15px;
    letter-spacing: -0.5px;
}
.bottom-cta-content-col p {
    font-size: 1.1rem;
    color: rgba(255, 255, 255, 0.95) !important;
    line-height: 1.65;
    margin-bottom: 30px;
    max-width: 650px;
}
.bottom-cta-buttons-row {
    display: flex;
    gap: 15px;
}
.bottom-cta-buttons-row .btn-outline {
    border: 2px solid #fff;
    color: #fff !important;
    padding: 12px 28px;
    font-weight: 600;
    font-size: 0.95rem;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.2s, color 0.2s;
    display: inline-block;
    text-align: center;
}
.bottom-cta-buttons-row .btn-outline:hover {
    background-color: #fff;
    color: var(--munwis-teal) !important;
}
.bottom-cta-buttons-row .btn-solid {
    background-color: #fff;
    color: var(--munwis-teal) !important;
    padding: 14px 28px;
    font-weight: 600;
    font-size: 0.95rem;
    border-radius: 4px;
    text-decoration: none;
    transition: opacity 0.2s;
    display: inline-block;
    text-align: center;
}
.bottom-cta-buttons-row .btn-solid:hover {
    opacity: 0.95;
}

/* Responsiveness Adaptations */
@media (max-width: 900px) {
    .reasons-grid {
        grid-template-columns: 1fr;
        gap: 35px;
    }
}
@media (max-width: 768px) {
    .services-hero {
        padding: 80px 0;
    }
    .services-hero h1 {
        font-size: 2.4rem;
    }
    .action-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    .info-card {
        padding: 40px 24px;
    }
    .services-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    .where-we-work-section, .comprehensive-care-section {
        padding: 60px 0;
    }
    .where-we-work-card, .comprehensive-care-card {
        max-width: 100%;
        padding: 40px 24px;
    }
    .locations-list {
        grid-template-columns: 1fr;
    }
    .lets-talk-section h2 {
        font-size: 1.4rem;
        line-height: 1.5;
    }
    .why-choose-container h2, .questions-card h2 {
        font-size: 1.7rem;
    }
    .wpcf7-form .form-row, .form-row {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    .bottom-cta-inner {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .bottom-cta-image-col {
        display: none;
    }
    .bottom-cta-content-col {
        width: 100%;
        padding: 50px 0;
    }
    .bottom-cta-buttons-row {
        justify-content: center;
        flex-direction: column;
        gap: 12px;
    }
}
</style>

<div class="page-wrap services-page-wrap">
	
	<!-- Hero Section with Background -->
	<div class="services-hero" style="background-image: url('https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=1600&q=80');">
		<div class="services-container">
			<div class="hero-content-wrapper">
				<h1>OUR SERVICES</h1>
				<p>Our dedicated, certified health care professionals are licensed, bonded and insured. Their goals are to fulfill the requirements of you and your family.</p>
			</div>
		</div>
	</div>

	<!-- Dual Action Grid -->
	<div class="action-section">
		<div class="services-container">
			<div class="action-grid">
				<div class="action-column">
					<h3>QUALITY STAFF REPLACEMENT</h3>
					<p>Let us help you connect with qualified staff</p>
					<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn-navy">Apply Now</a>
				</div>
				<div class="action-column">
					<h3>MAKING THE RIGHT CONNECTION</h3>
					<p>We're ready to staff you at your request</p>
					<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="link-violet">Contact Us</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Cards Section -->
	<div class="cards-section">
		<div class="services-container">
			
			<!-- We're Here For You Card -->
			<div class="info-card">
				<h2>WE'RE HERE FOR YOU</h2>
				<p>Munwi's Care offers a wide variety of healthcare staffing options for you and your family. If you're a healthcare facility seeking to hire a caregiver, please contact us for any of your staffing needs!</p>
			</div>

			<!-- Services We Offer Card -->
			<div class="info-card services-offer-card">
				<h2>SERVICES WE OFFER</h2>
				<p class="section-intro">We provide customized healthcare solutions to our clients. In addition to these standard offerings, we also specialize in pediatric and adult private duty and supplemental staffing.</p>
				
				<div class="services-grid">
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
							<div class="service-item">
								<div class="service-icon-wrapper">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'thumbnail', [ 'class' => 'service-thumb' ] ); ?>
									<?php else : ?>
										<div class="fallback-icon-box">
											<i class="fa-solid fa-stethoscope"></i>
										</div>
									<?php endif; ?>
								</div>
								<h4><?php the_title(); ?></h4>
								<p><?php echo wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 20 ); ?></p>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
					else :
						echo '<p class="service-item">No services found. Please add services from the dashboard.</p>';
					endif;
					?>
				</div>
			</div>

		</div>
	</div>

	<!-- Where We Work (Full width background image with Left Aligned Card) -->
	<div class="where-we-work-section" style="background-image: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=1600&q=80');">
		<div class="services-container">
			<div class="where-we-work-card">
				<h3>WHERE WE WORK:</h3>
				<ul class="locations-list">
					<li><i class="fa-solid fa-location-dot"></i> Delaware County</li>
					<li><i class="fa-solid fa-location-dot"></i> Montgomery County</li>
					<li><i class="fa-solid fa-location-dot"></i> Bucks County</li>
					<li><i class="fa-solid fa-location-dot"></i> Philadelphia County</li>
					<li><i class="fa-solid fa-location-dot"></i> Chester County</li>
					<li><i class="fa-solid fa-location-dot"></i> New Jersey</li>
					<li><i class="fa-solid fa-location-dot"></i> Delaware</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Let's Talk Elegant Banner -->
	<?php get_template_part( 'template-parts/callout-bar' ); ?>


	<!-- Why Choose Us Grid -->
	<div class="why-choose-section">
		<div class="services-container why-choose-container">
			<h2>WHY CHOOSE US FOR SPECIALIZED HEALTHCARE STAFFING?</h2>
			<p class="section-intro">We guarantee a smooth and seamless registration process for all clients looking to acquire our services. Below are 3 initial reasons to choose us.</p>
			
			<div class="reasons-grid">
				<div class="reason-card">
					<div class="reason-img-wrapper">
						<img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=400&q=80" alt="Expert Consulting">
					</div>
					<div class="reason-content">
						<h4>EXPERT CONSULTING</h4>
						<p>Consult with us and our staff to ensure we align exactly to your goals and expectations.</p>
					</div>
				</div>
				<div class="reason-card">
					<div class="reason-img-wrapper">
						<img src="https://images.unsplash.com/photo-1584515933487-779824d29309?auto=format&fit=crop&w=400&q=80" alt="Full-Time Staffing">
					</div>
					<div class="reason-content">
						<h4>FULL-TIME STAFFING</h4>
						<p>We are ready and waiting to provide you with the full-time care you desire on a consistent schedule.</p>
					</div>
				</div>
				<div class="reason-card">
					<div class="reason-img-wrapper">
						<img src="https://images.unsplash.com/photo-1576091160550-2173ff9e5ee5?auto=format&fit=crop&w=400&q=80" alt="Interim & Seasonal Staff">
					</div>
					<div class="reason-content">
						<h4>INTERIM & SEASONAL STAFF</h4>
						<p>Only looking for short term help? We can assist in providing care for exactly as long as you need!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Comprehensive Care Banner -->
	<div class="comprehensive-care-section" style="background-image: url('https://images.unsplash.com/photo-1516841273335-e39b37888115?auto=format&fit=crop&w=1600&q=80');">
		<div class="services-container">
			<div class="comprehensive-care-card">
				<h2>COMPREHENSIVE CARE SERVICES</h2>
				<p>Finding the right care for yourself or a family member can be challenging. We offer a wide range of services designed to support your unique needs and ensure your comfort and safety.</p>
				<p>Our dedicated team is here to provide the compassionate support you deserve.</p>
				<div class="comp-buttons">
					<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn-purple-outline">Contact Us</a>
					<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn-navy-solid">Apply for Services</a>
				</div>
				
			</div>
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
