<div class="container-fluid mx-auto contact-page">
<div class="banner-img">
		<img
			class="img-fluid" 
			src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/banner.png'); ?>" alt="background" 
		>
	</div>
	<div class="container contact-form row mx-auto">
		<div class="col-md-9">
			<?php 
				echo do_shortcode( "[wpforms id='63' title='true']" );
			?>
		</div>
		<div class="col-md-3 phone-area">
			<div class="phone-btn">
				<span>Call Us</span>
				<a href="tel:+254733334481"><i class="fa fa-phone"></i> +254733334481</a>
			</div>
		</div>
	</div>
</div>