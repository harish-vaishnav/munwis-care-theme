<?php
/**
 * Template Name: Careers
 * 
 * @package MunwisTheme
 */

get_header(); 
?>

<div class="page-wrap careers-page-wrap">
	<!-- Hero Section with Background -->
	<div class="careers-hero" style="background-image: url('https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1600&q=80');">
		<div class="container">
			<h1 class="page-title text-navy">CAREERS</h1>
		</div>
	</div>

	<!-- Main Content Area (Overlapping) -->
	<div class="container careers-overlap-container">
		<div class="careers-grid">
			
			<!-- Left Column: Text -->
			<div class="careers-text-col">
				<h3 class="text-navy" style="margin-bottom: 20px;">Do you want to work for Munwi's Care? Start Here!</h3>
				<p>Start your application using the form below. It'll take you just a few minutes to complete. Please include your resume and any additional documentation.</p>
			</div>

			<!-- Right Column: Contact Form 7 -->
			<div class="careers-form-col">
				<div class="cf7-container bg-white shadow-box">
					<!-- PLACEHOLDER FOR CONTACT FORM 7 -->
					<?php echo do_shortcode('[contact-form-7 id="99998" title="Careers form"]'); ?>
					
					<!-- Fallback form if shortcode doesn't exist yet -->
					<div class="cf7-fallback-preview">
						<p class="small text-muted" style="margin-bottom:20px;"><em>(Careers Form 7 Shortcode Placeholder)</em></p>
						<form>
							<div class="form-row">
								<div class="form-group half">
									<label>Name <span class="required">*</span></label>
									<input type="text" placeholder="First">
								</div>
								<div class="form-group half">
									<label>&nbsp;</label>
									<input type="text" placeholder="Last">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group half">
									<label>Email Address <span class="required">*</span></label>
									<input type="email">
								</div>
								<div class="form-group half">
									<label>Phone Number <span class="required">*</span></label>
									<input type="tel">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group half">
									<label>Date of Birth <span class="required">*</span></label>
									<input type="date">
								</div>
								<div class="form-group half">
									<label>Certification <span class="required">*</span></label>
									<select>
										<option>RN</option>
										<option>LPN</option>
										<option>CNA</option>
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Current Address <span class="required">*</span></label>
									<input type="text" placeholder="Street Address" style="margin-bottom:10px;">
									<input type="text" placeholder="Address Line 2" style="margin-bottom:10px;">
									<div class="form-row">
										<div class="form-group half" style="margin-bottom:0;"><input type="text" placeholder="City"></div>
										<div class="form-group half" style="margin-bottom:0;"><input type="text" placeholder="State"></div>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Upload Your Documentation <span class="required">*</span></label>
									<p class="small text-muted" style="margin-bottom:10px;">Upload your Resume, Criminal Background Check, Professional License(s), Your Driver's License, Your CPR Card, Any Certificates You May Have, and Your Flu / Covid-19 Vaccination Card (Front & Back)</p>
									<div class="file-upload-box">
										<p>Drop files here or</p>
										<button type="button" class="btn btn-secondary">Select files</button>
									</div>
									<p class="small text-muted" style="margin-top:10px;">Accepted file types: jpg, gif, png, pdf, doc, Max. file size: 20 MB, Max. files: 5.</p>
								</div>
							</div>
							<button type="button" class="wpcf7-submit btn btn-secondary">Send</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/bottom-cta' ); ?>

<?php
get_footer();
