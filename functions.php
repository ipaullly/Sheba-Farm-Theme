<?php

	function sheba_theme_support(){
		//add dynamic title tag
		add_theme_support( 'title-tag');
	}

	add_action('after_setup_theme', 'sheba_theme_support');
	
	function sheba_add_woocommerce_support()
	{
		add_theme_support('woocommerce');
	}

	add_action('after_setup_theme', "sheba_add_woocommerce_support");

	function sheba_menus(){
		$locations = array(
			'primary' => "Desktop Primary Top Nav",
			'footer' => "Footer Menu Items",
		);
		register_nav_menus( $locations);
	}

	add_action('init', 'sheba_menus');

	function sheba_register_styles(){
		$version = wp_get_theme()->get('Version');
		wp_enqueue_style('sheba-style', get_template_directory_uri() . "/style.css", array('sheba-bootstrap'), rand(111,9999), 'all');
		wp_enqueue_style('sheba-bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css", array(), '5.1.3', 'all');
		wp_enqueue_style('sheba-swiper', "https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.0/swiper-bundle.css", array(), '8.3.0', 'all');
		wp_enqueue_style('sheba-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css", array(), '6.1.1', 'all');
		wp_enqueue_style('sheba-aot', "https://unpkg.com/aos@next/dist/aos.css", array(), '', 'all');
	}
	function sheba_register_scripts(){ 
    wp_enqueue_script('sheba-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('sheba-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('sheba-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js', array(), '', true);
		wp_enqueue_script('sheba-aotjs', 'https://unpkg.com/aos@next/dist/aos.js', array(), '', true);
		wp_enqueue_script('sheba-swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.0/swiper-bundle.min.js', array(), '8.3.0', true);
    wp_enqueue_script('sheba-main', get_template_directory_uri() ."/assets/js/main.js", array(), '3.4.1', true);
  }
	add_action('wp_enqueue_scripts', 'sheba_register_styles');
	add_action('wp_enqueue_scripts', 'sheba_register_scripts');

	remove_action( 'woocommerce_archive_description', 10 );
	add_filter( 'woocommerce_cart_needs_shipping_address', '__return_false');

	// Billing and shipping addresses fields
	add_filter( 'woocommerce_default_address_fields' , 'filter_default_address_fields', 20, 1 );
	function filter_default_address_fields( $address_fields ) {
		// Only on checkout page
		if( ! is_checkout() ) return $address_fields;

		// All field keys in this array
		$key_fields = array('country','first_name','last_name','company','address_1','address_2','city','state','postcode');

		// Loop through each address fields (billing and shipping)
		foreach( $key_fields as $key_field )
				$address_fields[$key_field]['required'] = false;

		return $address_fields;
	}

	require get_template_directory() . '/template-parts/walker.php';