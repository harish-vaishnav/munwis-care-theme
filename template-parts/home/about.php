<?php
/**
 * Template part for displaying the About section on the homepage
 */



$eyebrow = "About Munwi's Care";
$title = 'The right talent, in the right place.';
$content = '<p>Founded and led by an experienced active nurse, Munwi\'s Care understands clinic staffing workflows from the inside out. We hire, staff, and place highly qualified healthcare professionals, nursing aides, and certified assistants directly into home settings, hospital groups, and assisted living centers.</p>';
$image_id = get_post_meta( get_the_ID(), 'munwis_about_image', true );
$features = [];
$btn_text = 'Learn More';
$btn_url = '#services';
?>
<!-- ABOUT / NURSE-LED PROFILE -->
<section id="about" class="profile-section">
	<div class="container profile-grid">
		<div class="profile-image">
			<div class="frame">
				<?php if ( $image_id ) : ?>
					<?php echo wp_get_attachment_image( $image_id, 'large' ); ?>
				<?php else : ?>
					<img src="https://images.unsplash.com/photo-1594824813573-246434de83fb?auto=format&fit=crop&w=700&q=80"
						alt="Munwi's Care professional team member" loading="lazy">
				<?php endif; ?>
			</div>
		</div>
		<div class="profile-content">
			<div class="eyebrow"><?php echo esc_html( $eyebrow ); ?></div>
			<h2><?php echo esc_html( $title ); ?></h2>
			<?php echo wp_kses_post( wpautop( $content ) ); ?>
			
			<ul>
				<?php if ( ! empty( $features ) ) : ?>
					<?php foreach ( $features as $f ) : ?>
						<li><i class="fa-solid fa-circle-check"></i> <?php echo esc_html( $f['feature'] ); ?></li>
					<?php endforeach; ?>
				<?php else : ?>
					<li><i class="fa-solid fa-circle-check"></i> Rigorous credential &amp; background verification</li>
					<li><i class="fa-solid fa-circle-check"></i> Matched to your facility's exact requirements</li>
					<li><i class="fa-solid fa-circle-check"></i> Ongoing compliance &amp; ratio support</li>
				<?php endif; ?>
			</ul>
			<a href="<?php echo esc_url( $btn_url ); ?>" class="btn btn-teal" aria-label="<?php echo esc_attr( $btn_text ); ?>"><?php echo esc_html( $btn_text ); ?> <i class="fa-solid fa-angle-right"></i></a>
		</div>
	</div>
</section>
