<?php
/**
 * Template part for displaying the Hero section on the homepage
 */



$kicker = get_theme_mod( 'munwis_hero_kicker', 'On-Call 24 Hours a Day, 7 Days a Week' );
$title_main = get_theme_mod( 'munwis_hero_title_main', 'Compassion. Quality. ' );
$title_accent = get_theme_mod( 'munwis_hero_title_accent', 'Trust.' );
$title = $title_main . '<span class="script-accent" style="color:var(--teal);">' . $title_accent . '</span>';
$desc = get_theme_mod( 'munwis_hero_lead', "Munwi's Care connects certified, reliable clinical professionals with hospitals, nursing environments, and private residential communities — whenever the need arises." );
$btn1_text = 'Apply Today';
$btn1_url = 'careers.html';
$btn2_text = 'Looking for Staff';
$btn2_url = '#contact';
$stats = [];
$image_id = get_post_meta( get_the_ID(), 'munwis_hero_image', true );
?>
<!-- HERO SECTION -->
<section class="hero">
	<div class="container hero-grid">
		<div class="hero-content">
			<div class="hero-kicker"><i class="fa-solid fa-circle"></i> <?php echo esc_html( $kicker ); ?></div>
			<h1><?php echo wp_kses_post( $title ); ?></h1>
			<p class="lead"><?php echo wp_kses_post( $desc ); ?></p>
			<div class="hero-ctas">
				<a href="<?php echo esc_url( $btn1_url ); ?>" class="btn btn-primary" aria-label="<?php echo esc_attr( $btn1_text ); ?>"><?php echo esc_html( $btn1_text ); ?> <i class="fa-solid fa-arrow-right"></i></a>
				<a href="<?php echo esc_url( $btn2_url ); ?>" class="btn btn-ghost" aria-label="<?php echo esc_attr( $btn2_text ); ?>"><?php echo esc_html( $btn2_text ); ?> <i class="fa-solid fa-arrow-right"></i></a>
			</div>
			
			<?php if ( ! empty( $stats ) ) : ?>
			<div class="hero-stats">
				<?php foreach ( $stats as $stat ) : ?>
				<div class="hero-stat"><b><?php echo esc_html( $stat['number'] ); ?></b><span><?php echo esc_html( $stat['label'] ); ?></span></div>
				<?php endforeach; ?>
			</div>
			<?php else : ?>
			<div class="hero-stats">
				<div class="hero-stat"><b>24/7</b><span>Live coverage</span></div>
				<div class="hero-stat"><b>100%</b><span>Credential-checked</span></div>
				<div class="hero-stat"><b>PA</b><span>& surrounding counties</span></div>
			</div>
			<?php endif; ?>
		</div>
		<div class="hero-visual">
			<div class="frame">
				<?php if ( $image_id ) : ?>
					<?php echo wp_get_attachment_image( $image_id, 'large' ); ?>
				<?php else : ?>
					<img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=800&q=80"
						alt="Munwi's Care healthcare professional team" loading="lazy">
				<?php endif; ?>
			</div>
			
		</div>
	</div>
</section>
