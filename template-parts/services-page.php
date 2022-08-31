<?php 
	$query = new WC_Product_Query( array(
		'limit' => 10,
		'orderby' => 'date',
		'order' => 'DESC',
		// 'return' => 'names',
	) );
	$products = $query->get_products();

	$_product   = apply_filters( 'woocommerce_cart_item_product', $products[0], $products[0], 0 );
	$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->get_permalink( $products ), $products, 0 );

	$_garlic   = apply_filters( 'woocommerce_cart_item_product', $products[2], $products[2], 0 );				
	$garlic_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_garlic->get_permalink( $products ), $products, 0 );

	$_tumeric   = apply_filters( 'woocommerce_cart_item_product', $products[1], $products[1], 0 );
	$tumeric_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_tumeric->get_permalink( $products ), $products, 0 );
?>
<div class="main-services-banner container-fluid">
	<div class="banner-img">
		<img
			class="img-fluid" 
			src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/banner.png'); ?>" alt="background" 
		>
	</div>
	<div class="main-services container">
		<div class="row sheba-name">
			<span>Shebah Farms</span>
		</div>
		<div class="image-row row d-flex justify-between">
			<a class="crop-card" href="<?php echo $tumeric_permalink .'' ?>">
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
			</a>
			<a class="crop-card" href="<?php echo $garlic_permalink .'' ?>">
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
			</a>
			<a class="crop-card" href="<?php echo $product_permalink .'' ?>">
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
			</a>
		</div>
	</div>
</div>