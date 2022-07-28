<div class="testimonial my-5">
	<img
		class="img-fluid img-bg" 
		src="<?php echo esc_url( get_template_directory_uri() . '/assets/images//bgtesti-1.png'); ?>" 
		alt="background" 
	>
	<div class="row align-items-center justify-content-center">
		<div class="col-md-3"></div>
		<div class="col-md-8">
			<h1 class="mt-2 mb-2">Testimonials</h1>
			<h2 class="mb-3">Our Standout Commendations</h2>
		</div>
	</div>
	<div class="testimonial-info container mx-auto align-items-center row mt-4">
		<?php echo do_shortcode( "[woo_reviews]" ); ?>
	</div>
</div>