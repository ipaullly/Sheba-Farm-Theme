<?php
	get_header();
?>

<?php
	if ( have_posts() && !is_page('about') && !is_page('services')) {
		the_content();
	} 
	if ( is_page('about') ) {
		get_template_part( 'template-parts/about', 'page');
	}
	if ( is_page('services') ) {
		get_template_part( 'template-parts/services', 'page');
	} 
	// if ( is_page( 'about' ) ) {
	// 	get_template_part( 'template-parts/about', 'page');
	// } elseif ( is_page( 'contacts' ) ) {
	// 	get_template_part( 'template-parts/contact', 'page');
	// } elseif ( is_page( 'shop' ) ) {
	// 	get_template_part( 'template-parts/shop', 'page');
	// } 
	// 	elseif ( is_page( 'cart' ) ) {
	// 	get_template_part( 'template-parts/cart', 'page');
	// } elseif ( is_page( 'checkout' ) ) {
	// 	get_template_part( 'template-parts/checkout', 'page');
	// }
	// else {
	// 	get_template_part( 'template-parts/not', 'found');
	// }

	get_footer();
