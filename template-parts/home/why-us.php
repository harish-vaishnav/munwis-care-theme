<?php
/**
 * Template part for displaying the Why Choose Us section on the homepage
 */



$eyebrow = 'Why facilities choose us';
$title = 'Service you can always depend on.';
$cards = [];
?>
<!-- WHY TRUST US (CARDS FORMAT) -->
<section class="why-section">
	<div class="container">
		<div class="section-head">
			<div class="eyebrow" style="color:var(--leaf);"><?php echo esc_html( $eyebrow ); ?></div>
			<h2><?php echo esc_html( $title ); ?></h2>
		</div>
		<div class="why-grid">
			<?php if ( ! empty( $cards ) ) : ?>
				<?php foreach ( $cards as $card ) : ?>
					<div class="why-card">
						<i class="<?php echo esc_attr( $card['icon'] ); ?>"></i>
						<h3><?php echo esc_html( $card['title'] ); ?></h3>
						<p><?php echo wp_kses_post( $card['desc'] ); ?></p>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<!-- Static Fallback -->
				<div class="why-card">
					<i class="fa-solid fa-clock"></i>
					<h3>24 Hour Service</h3>
					<p>On-call and online around the clock, keeping placement pipelines moving the moment a vacancy opens.</p>
				</div>
				<div class="why-card">
					<i class="fa-solid fa-heart"></i>
					<h3>Caring Staff</h3>
					<p>Candidates who pair strong medical expertise with direct, patient-focused bedside empathy.</p>
				</div>
				<div class="why-card">
					<i class="fa-solid fa-shield-halved"></i>
					<h3>Quality Personnel</h3>
					<p>Every candidate matches credential checks, state registry updates, and regulatory safety benchmarks.</p>
				</div>
				<div class="why-card">
					<i class="fa-solid fa-handshake"></i>
					<h3>Direct Partnership</h3>
					<p>We work hand-in-hand with facility administrators to help maintain compliant staffing ratios.</p>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
