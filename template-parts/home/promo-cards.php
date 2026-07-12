<?php
/**
 * Template part for displaying the Promo Cards section on the homepage
 */



$cards = [];
?>
<section class="promo-section">
	<div class="container promo-grid">
		<?php if ( ! empty( $cards ) ) : ?>
			<?php foreach ( $cards as $card ) : ?>
				<div class="promo-card <?php echo esc_attr( $card['color'] ); ?>">
					<i class="<?php echo esc_attr( $card['icon_class'] ); ?> bg-icon"></i>
					<div>
						<h3><?php echo esc_html( $card['title'] ); ?></h3>
						<p><?php echo wp_kses_post( $card['description'] ); ?></p>
					</div>
					<a href="<?php echo esc_url( $card['btn_url'] ); ?>" class="btn" aria-label="<?php echo esc_attr( $card['btn_text'] ); ?>"><?php echo esc_html( $card['btn_text'] ); ?> <i class="fa-solid fa-angle-right"></i></a>
				</div>
			<?php endforeach; ?>
		<?php else : ?>
			<!-- Static Fallback -->
			<div class="promo-card leaf">
				<i class="fa-solid fa-user-nurse bg-icon"></i>
				<div>
					<h3>Sign up to start getting more shifts</h3>
					<p>We'll help you find the perfect position in a clinical environment suited to your specialties.</p>
				</div>
				<a href="careers.html" class="btn" aria-label="Apply Today">Apply Today <i class="fa-solid fa-angle-right"></i></a>
			</div>
			<div class="promo-card teal">
				<i class="fa-solid fa-hospital bg-icon"></i>
				<div>
					<h3>Looking for staff? Contact us today</h3>
					<p>Secure screened, compliant, and dedicated temporary or permanent care personnel — fast.</p>
				</div>
				<a href="#contact" class="btn" aria-label="Contact Us">Contact Us <i class="fa-solid fa-angle-right"></i></a>
			</div>
		<?php endif; ?>
	</div>
</section>
