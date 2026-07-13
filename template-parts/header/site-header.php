<?php
/**
 * Displays the site header.
 *
 * @package MunwisTheme
 */

$primary_color = get_theme_mod( 'munwis_primary_color', '#00818a' );
$contact_phone = get_theme_mod( 'munwis_contact_phone', '(123) 456-7890' );
$contact_email = get_theme_mod( 'munwis_contact_email', 'info@munwiscare.com' );
$location_short = get_theme_mod( 'munwis_contact_location_short', 'Local & surrounding counties' );

$logo_url = get_template_directory_uri() . '/assets/images/munwis-logo.png';
$header_logo = get_theme_mod( 'munwis_header_logo' );
if ( ! empty( $header_logo ) ) {
	$logo_url = $header_logo;
} elseif ( has_custom_logo() ) {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo_image     = wp_get_attachment_image_src( $custom_logo_id, 'full' );
	if ( ! empty( $logo_image[0] ) ) {
		$logo_url = $logo_image[0];
	}
}
?>

<!-- TOP INFO BAR -->
<div class="top-bar">
	<div class="container">
		<div class="top-bar-left">
			<i class="fa-solid fa-location-dot"></i>
			<span class="short"><?php echo esc_html( $location_short ); ?></span>
		</div>
		<div class="top-bar-right">
			<?php if ( $contact_email ) : ?>
				<a href="mailto:<?php echo esc_attr( $contact_email ); ?>"><i class="fa-solid fa-envelope"></i> <?php echo esc_html( $contact_email ); ?></a>
			<?php endif; ?>
			<?php if ( $contact_phone ) : ?>
				<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $contact_phone ) ); ?>"><i class="fa-solid fa-phone"></i> <?php echo esc_html( $contact_phone ); ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>

<!-- SPLIT HEADER & CENTRALIZED LOGO NAVIGATION -->
<header id="masthead">
	<div class="container nav-wrapper">
		<!-- Brand (Mobile Fallback) -->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand mobile-only-brand">
			<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?> logo">
		</a>

		<!-- Navigation Menu (Containing split layout with logo centered) -->
		<nav class="nav-menu">
			
			<?php 
			if ( has_nav_menu( 'primary-left' ) ) {
				wp_nav_menu( [
					'theme_location' => 'primary-left',
					'container'      => 'div',
					'container_class'=> 'nav-col left',
					'items_wrap'     => '%3$s', // Remove ul wrap for this specific design
					'fallback_cb'    => false,
				] );
			} else {
				echo '<div class="nav-col left"></div>';
			}
			?>

			<!-- Logo Centered for Desktop Navigations -->
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand desktop-only-brand">
				<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?> logo">
			</a>

			<?php 
			if ( has_nav_menu( 'primary-right' ) ) {
				wp_nav_menu( [
					'theme_location' => 'primary-right',
					'container'      => 'div',
					'container_class'=> 'nav-col right',
					'items_wrap'     => '%3$s', // Remove ul wrap for this specific design
					'fallback_cb'    => false,
				] );
			} else {
				echo '<div class="nav-col right"></div>';
			}
			?>
		</nav>

		<!-- Desktop Call Actions -->
		<div class="nav-actions">
			<!-- Empty by design based on your HTML -->
		</div>

		<!-- Mobile menu toggle -->
		<button class="burger" id="burger" aria-label="Toggle menu" aria-expanded="false">
			<span></span><span></span><span></span>
		</button>
	</div>

	<!-- Mobile Drawer Menu Overlay -->
	<div class="mobile-drawer" id="drawer">
		<?php 
		// For the mobile drawer, we combine both left and right menus
		if ( has_nav_menu( 'primary-left' ) ) {
			wp_nav_menu( [
				'theme_location' => 'primary-left',
				'container'      => false,
				'items_wrap'     => '%3$s',
				'fallback_cb'    => false,
			] );
		}
		if ( has_nav_menu( 'primary-right' ) ) {
			wp_nav_menu( [
				'theme_location' => 'primary-right',
				'container'      => false,
				'items_wrap'     => '%3$s',
				'fallback_cb'    => false,
			] );
		}
		?>
		<?php if ( $contact_phone ) : ?>
			<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $contact_phone ) ); ?>" class="nav-phone"><i class="fa-solid fa-phone"></i> <?php echo esc_html( $contact_phone ); ?></a>
		<?php endif; ?>
		<a href="<?php echo esc_url( home_url( '/careers' ) ); ?>" class="btn btn-primary">Apply Today</a>
	</div>
</header>
