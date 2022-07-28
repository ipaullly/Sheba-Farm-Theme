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
<div class="product-slider">
	<img
		class="img-bg" 
		src="<?php echo get_template_directory_uri() . '/assets/images/bgagricturekl.png'; ?>" 
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
		<div class="carou-cont row justify-content-end mt-2">
			<div class="all-prod-btn col-md-2 justify-content-center">
				<a class="mt-3 ml-2" href="
				<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
					All Products
				</a>
			</div>
			<div id="carouselExampleIndicators" class="carousel .carousel-dark carousel-fade slide col-md-4 d-flex flex-column" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product01.jpg'); ?>" class="d-block w-100" alt="house">
						<div class="carousel-caption d-none d-md-block">
							<h5>Turmeric</h5>
							<p>Turmeric is a common spice that comes from the root of Curcuma longa. It is commonly used as a food flavor. The turmeric root is also used to make alternative medicine. </p>
							<a class="mt-3" href="<?php echo $tumeric_permalink .'' ?>">
								Shop Now
							</a>
						</div>
					</div>
					<div class="carousel-item">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product02.jpg'); ?>" class="d-block w-100" alt=".al.">
						<div class="carousel-caption d-none d-md-block">
							<h5>Garlic</h5>
							<p>Garlic is a herb that is a commonly used food and flavoring agent. It can be used in alternative medicine as a possibly effective aid in treating high blood pressure, coronary artery disease, stomach cancer, colon cancer or rectal and cancer. </p>
							<a class="mt-3"  href="<?php echo $garlic_permalink .'' ?>">
								Shop Now
							</a>
						</div>
					</div>
					<div class="carousel-item">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product03.jpg'); ?>" class="d-block w-100" alt="l..">
						<div class="carousel-caption d-none d-md-block">
							<h5>Asparagus</h5>
							<p>Asparagus is low in calories and a great source of nutrients, including fiber, folate and vitamins A, C, E and K, phosphorous, Potassium and Foliate. Additionally, eating asparagus has a number of potential health benefits, including weight loss, improved digestion, anti-cancer, anti-inflammatory, healthy pregnancy outcomes and lower blood pressure. </p>
							<a class="mt-3"  href="<?php echo $product_permalink .'' ?>">
								Shop Now
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
</div>