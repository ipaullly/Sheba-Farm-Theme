<?php
get_header();
?>
<div class="main-content hx-full container-fluid">
	<img
		class="img-fluid" 
		src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/banner-img.jpg'); ?>" alt="background" 
	>
	<code class="container">
	<?php 
			$query = new WC_Product_Query( array(
				'limit' => 10,
				'orderby' => 'date',
				'order' => 'DESC',
				// 'return' => 'names',
			) );
			$products = $query->get_products();
			$file = 'people.txt';
			// Open the file to get existing content
			// Write the contents back to the file
			$i = 0;
			

				$_product   = apply_filters( 'woocommerce_cart_item_product', $products[0], $products[0], 0 );
				
				$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->get_permalink( $products ), $products, 0 );

				var_dump($product_permalink);

		?>
	</code>
	<div class="modal-content d-flex flex-col align-items-center">
		<h1 class="text-white">Your Reliable</h1>
		<p>Freshly Organic Grown Turmeric & Garlic Supplier</p>
		<p><strong>Coming soon</strong>  Fresh Asparagus </p>
		<!-- <button class="btn-primary"><a href="<?php echo $product_permalink .'' ?>">Order Now</a></button> -->
		<button class="btn-primary"><a href="
		<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">Order Now</a></button>
	</div>
</div>
<div class="main-about container row mx-auto">
	<div class="col-md-6 mt-5">
		<h3 class="mt-2 mb-5">Awesome Words About Us</h3>
		<h1 class="mb-5">Sheba Farms Ltd is an agribusiness company</h1>
		<button class="">
			Explore More
		</button>
	</div>
	<div class="col-md-6 mt-5">
		<p class="mt-2">Shebah Farms Ltd is an Agribusiness company that specializes in production of Turmeric, Garlic and Asparagus. Asparagus is our newest crop and will be ready for large scale supply in 2024.</p>
		<p class="mt-2">
		We provide healthy high-value, horticultural produce using agricultural best practices and climate smart technology.
		</p><p class="mt-2">
		We seek to employ good Agricultural practices to protect environment and ensure its sustainability. To realize this objective, the company has engaged specialists in all its specific products lines for finest quality production. 
		</p><p class="mt-2">
		The Farm is along the equator making it possible to produce throughout the year! 
		</p>
	</div>
</div>
<div class="main-crops-banner container-fluid">
	<div class="main-crops container">
		<div class="row sheba-name">
			<span>Sheba Farms</span>
		</div>
		<div class="image-row row d-flex justify-between">
			<div class="crop-card">
				<span class="header-title">
					Turmeric
				</span>
				<img
					class="img-fluid" 
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product01.jpg'); ?>" alt="background" 
				>
				<span class="header-footer" data-aos="fade-up" data-aos-delay="100">
					Turmeric
				</span>
			</div>
			<div class="crop-card">
				<span class="header-title">
					Garlic
				</span>
				<img
					class="img-fluid" 
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product02.jpg'); ?>" alt="background" 
				>
				<span class="header-footer" data-aos="fade-up" data-aos-delay="100">
					Garlic
				</span>
			</div>
			<div class="crop-card">
				<span class="header-title">
					Asparagus
				</span>
				<img
					class="img-fluid" 
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product03.jpg'); ?>" alt="background" 
				>
				<span class="header-footer" data-aos="fade-up" data-aos-delay="100">
					Asparagus
				</span>
			</div>
		</div>
	</div>
	<div class="wheat-banner">
		<img
			class="img-fluid img-banner" 
			src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/wheat_banner.png'); ?>" alt="background" 
		>
	</div>
</div>

<?php
	get_template_part( 'template-parts/landing/new', 'product');
	get_template_part( 'template-parts/landing/organic', 'product');
	get_template_part( 'template-parts/landing/product', 'slider');
	get_template_part( 'template-parts/landing/testimonial', '');
	get_footer();?>