<?php
/**
 * Template part for displaying the bottom CTA section
 */
$contact_phone = get_theme_mod( 'munwis_contact_phone', '610-605-8035' );
?>
<section class="bottom-cta">
	<div class="container">
		<div class="bottom-cta-grid">
			<div class="bottom-cta-image">
				<img src="https://images.unsplash.com/photo-1576091160550-2173ff9e5ee5?auto=format&fit=crop&w=800&q=80" alt="Nurse smiling">
			</div>
			<div class="bottom-cta-content">
				<h2>WE'RE HERE TO HELP!</h2>
				<p>Give us a call at <?php echo esc_html( $contact_phone ); ?>, or send a message on our contact form</p>
			</div>
			<div class="bottom-cta-action">
				<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn btn-secondary">CONTACT US <i class="fa-solid fa-chevron-right"></i></a>
			</div>
		</div>
	</div>
</section>
