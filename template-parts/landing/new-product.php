<?php 
	$query = new WC_Product_Query( array(
		'limit' => 10,
		'orderby' => 'date',
		'order' => 'DESC',
	) );
	$products = $query->get_products();
	$_product   = apply_filters( 'woocommerce_cart_item_product', $products[0], $products[0], 0 );
	$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->get_permalink( $products ), $products, 0 );
?>
<div class="new-product">
	<img
		class="img-fluid img-bg" 
		src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bgfourth.png'); ?>" 
		alt="background" 
		data-aos="fade-up"
	>
	<div class="new-product-info container row mx-auto mt-3">
		<div class="col-md-6 mt-5">
			<img
				class="img-fluid" 
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product03.jpg'); ?>" 
				alt="background" 
				data-aos="fade-up"
			>
		</div>
		<div class="info-col col-md-6 mt-3">
			<h3 class="mt-2 mb-1">New Product</h3>
			<h1 class="mb-2">Asparagus</h1>
			<p class="mt-1 lead">
			We are happy to introduce our new product – Asparagus. The product will be ready for commercial sale in 2024.  Asparagus is low in calories and a great source of nutrients, including fiber, folate and vitamins A, C, E and K, phosphorous, Potassium and Foliate. Additionally, eating asparagus has a number of potential health benefits, including weight loss, improved digestion, anti-cancer, anti-inflammatory, healthy pregnancy outcomes and lower blood pressure.
			</p>
			<a class="my-2" href="<?php echo $product_permalink .'' ; ?>">
				Explore More
			</a>
		</div>
	</div>
</div>