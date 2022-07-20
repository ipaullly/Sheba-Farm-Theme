<div class="product-slider">
	<img
		class="img-fluid img-bg" 
		src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bgagricturekl.png'); ?>" 
		alt="background" 
	>
	<div class="product-slider-info row align-items-end justify-content-end mx-auto">
		<div class="title-info col-md-3 mt-5">
			<h3>What we grow</h3>
			<span>Agricultural Organic Products</span>
		</div>
		<div class="title-sub col-md-3 mt-5">
			<h3>200K</h3>
			<span>tonnes of harvest</span>
		</div>
		<div class="title-sub col-md-3 mt-5">
			<h3>500 +</h3>
			<span>happy clients</span>
		</div>
	</div>
	<?php 
		get_template_part( 'template-parts/landing/slider', '');
	?>
</div>