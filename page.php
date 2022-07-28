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
	if ( is_page('contacts') ) {
		get_template_part( 'template-parts/contact', 'page');
	}

	get_footer();
