<?php
/**
 * Template part for displaying the callout bar
 *
 * @package MunwisTheme
 */

$contact_phone = get_theme_mod( 'munwis_contact_phone', '(123) 456-7890' );
?>
<!-- CALLOUT BAR -->
<section class="callout-bar">
	<div class="container callout-bar-content">
		<h2>Let's Talk About Your Staffing Needs</h2>
		<a href="#contact" class="btn">Call <?php echo esc_html( $contact_phone ); ?> <i class="fa-solid fa-angle-right"></i></a>
	</div>
</section>
