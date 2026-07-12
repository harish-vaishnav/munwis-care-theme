<?php
/**
 * Displays the site footer.
 *
 * @package MunwisTheme
 */

$footer_copyright = get_theme_mod( 'munwis_footer_copyright', '&copy; ' . date('Y') . ' Munwis Care LLC. All Rights Reserved. Healthcare Staffing Solutions. "Compassion. Quality. Trust."' );
$contact_phone = get_theme_mod( 'munwis_contact_phone', '(123) 456-7890' );
$contact_email = get_theme_mod( 'munwis_contact_email', 'info@munwiscare.com' );

$logo_url = get_template_directory_uri() . '/assets/images/munwis-logo.png';
if ( has_custom_logo() ) {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo_image     = wp_get_attachment_image_src( $custom_logo_id, 'full' );
	if ( ! empty( $logo_image[0] ) ) {
		$logo_url = $logo_image[0];
	}
}
?>

<footer id="colophon">
	<div class="container">
		<div class="footer-grid">
			<!-- Brand & Description Column -->
			<div class="footer-col footer-brand-col">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">
					<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?> logo">
				</a>
				<p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
				<div class="footer-social">
					<?php if ( get_theme_mod( 'munwis_social_facebook' ) ) : ?>
						<a href="<?php echo esc_url( get_theme_mod( 'munwis_social_facebook' ) ); ?>" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'munwis_social_instagram' ) ) : ?>
						<a href="<?php echo esc_url( get_theme_mod( 'munwis_social_instagram' ) ); ?>" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'munwis_social_linkedin' ) ) : ?>
						<a href="<?php echo esc_url( get_theme_mod( 'munwis_social_linkedin' ) ); ?>" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
					<?php endif; ?>
				</div>
			</div>

			<!-- Dynamic Widget Areas -->
			<?php
			if ( is_active_sidebar( 'footer-1' ) ) {
				echo '<div class="footer-col">';
				dynamic_sidebar( 'footer-1' );
				echo '</div>';
			} else {
				// Fallback Quick Links
				echo '<div class="footer-col">';
				echo '<h4>Quick Links</h4>';
				if ( has_nav_menu( 'footer' ) ) {
					wp_nav_menu( [ 'theme_location' => 'footer', 'container' => false, 'menu_class' => 'footer-links' ] );
				} else {
					echo '<ul class="footer-links"><li><a href="#">Home</a></li><li><a href="#">About Us</a></li></ul>';
				}
				echo '</div>';
			}

			if ( is_active_sidebar( 'footer-2' ) ) {
				echo '<div class="footer-col">';
				dynamic_sidebar( 'footer-2' );
				echo '</div>';
			} else {
				// Fallback Careers
				echo '<div class="footer-col">';
				echo '<h4>Careers & Connect</h4>';
				echo '<ul class="footer-links"><li><a href="#">Apply for Shifts</a></li><li><a href="#">Privacy Policy</a></li></ul>';
				echo '</div>';
			}
			?>

			<!-- Actionable Contact Information Column -->
			<div class="footer-col">
				<h4>Contact Info</h4>
				<ul class="footer-contact-list">
					<li>
						<i class="fa-solid fa-phone"></i>
						<span><strong><?php echo esc_html( $contact_phone ); ?></strong><br>Coordinators On Call</span>
					</li>
					<li>
						<i class="fa-solid fa-envelope"></i>
						<span><?php echo esc_html( $contact_email ); ?></span>
					</li>
					<li>
						<i class="fa-solid fa-clock"></i>
						<span>24 Hours / 7 Days a Week</span>
					</li>
					<li>
						<i class="fa-solid fa-location-dot"></i>
						<span>Pennsylvania & Surrounding Counties</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="copyright-bar">
			<p><?php echo wp_kses_post( $footer_copyright ); ?></p>
		</div>
	</div>
</footer><!-- #colophon -->
