<?php 

	$services_page_object = get_page_by_path( 'services' );
	$services_page_id = $services_page_object->ID;
	$services_permalink = get_permalink( $services_page_id );
?>

<div class="organic-product container row mx-auto">
	<div class="col-md-6 mt-5">
		<h3 class="mt-2 mb-2">Organic Products</h3>
		<h1 class="mb-3">Shebah Farms</h1>
		<p class="mt-1">
		Shebah Farms specializes in production of organic Farm fresh healthy foods. These products include Turmeric, Garlic and Asparagus for the export market. We also produce onions, Cabbages, Soya and Lima beans for the local market. As the Farm expands in the coming year, we plan to work closely with small scale farmer to train them in growing organic foods and also help with the market.  
		</p>
		<a class="mt-3" href="<?php echo $services_permalink .'' ; ?>">
			Explore More
		</a>
	</div>
	<div class="year-banner col-md-6 mt-5">
		<!-- <div class="years text-center">
			<h3 class="mt-1 mb-1">7</h3>
			<span>Years of experiences</span>
		</div> -->
		<div>
			<img
				class="img-fluid" 
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/new_product.png'); ?>" 
				alt="background" 
			>
		</div>
	</div>
</div>