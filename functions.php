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

function prefix_modify_nav_menu_args( $args ) {
	return array_merge( $args, array(
			'walker' => new WP_Bootstrap_Navwalker(),
	) );
}
add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );

function register_navwalker(){
	if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
		// File does not exist... return an error.
		return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
	} else {
		// File exists... require it.
		require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	}
}
add_action( 'after_setup_theme', 'register_navwalker' );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

add_shortcode('woo_reviews', 'get_random_woo_reviews');

function get_random_woo_reviews( $atts ){
    // Shortcode Attributes
    $atts = shortcode_atts( array(
        'limit' => '5', // <== Set to 5 reviews by default
    ), $atts, 'woo_reviews' );

    global $wpdb;

    // The SQL random query on product reviews
    $comments = $wpdb->get_results( $wpdb->prepare("
        SELECT *
        FROM  {$wpdb->prefix}comments c
        INNER JOIN {$wpdb->prefix}posts p ON c.comment_post_ID = p.ID
        WHERE c.comment_type = 'review' AND p.post_status = 'publish'
        ORDER BY RAND() LIMIT %d
    ", intval( esc_attr($atts['limit']) ) ) );

    ob_start(); // Start buffering

    ## CSS applied styles
    ?>
    <style>
			ul.product-reviews, ul.product-reviews li { 
				list-style: none; 
				margin:0;
				padding:0; 
				line-height: normal;
			}
			ul.product-reviews li { 
				display:block; 
				max-width: 20vw;
				padding: 10px; 
				display:inline-block; 
				vertical-align: text-top;
			}
			ul.product-reviews li .title {
				font-size: 1.5rem;
			}
			ul.product-reviews li .content {
				max-width: 180px; 
				font-size: 1.1rem; 
				margin-bottom: 6px;
			}
			ul.product-reviews li .author, ul.product-reviews li .date  {
				display: block; 
				font-size: 0.9rem;
			}
    </style>
    <?php

    ## HTML structure
    ?>
    <ul class="product-reviews"><?php

    foreach ( $comments as $comment ) {
        ?>
        <li>
            <h4 class="title"><?php echo get_the_title( $comment->comment_post_ID ); ?></h4>
            <div class="content"><?php echo $comment->comment_content; ?></div>
            <span class="author"><?php printf( __("Posted By %s") . ' ', '<strong>' . $comment->comment_author . '</strong>' ); ?></span>
            <span class="date"><?php printf( __("On %s"), '<strong>' . date_i18n( 'l jS \of F Y', strtotime( $comment->comment_date) ) . '</strong>' ); ?></span>

        </li>
        <?php
    }
    ?></ul><?php

    return ob_get_clean(); // Return the buffered output
}

add_action ( "woocommerce_before_account_navigation", "before_navigation", 9 );
add_action ( "woocommerce_before_shop_loop_item", "before_navigation");
add_action('woocommerce_before_lost_password_form', 'before_navigation');
add_action( 'woocommerce_before_lost_password_confirmation_message','before_navigation' );

add_action( 'woocommerce_before_checkout_form', "before_navigation", 1);
function before_navigation () {
    echo "<div class='banner-img'></div>";
}
add_action ( "woocommerce_before_customer_login_form", "before_navigation");
add_action( "woocommerce_before_customer_login_form", "before_login" );
add_action( "woocommerce_after_customer_login_form", "after_login" );
function before_login () {
	echo "<div class='login-container container'>";
}
function after_login () {
	echo "</div>";
}
add_action('woocommerce_before_lost_password_form', 'before_lost');
add_action('woocommerce_after_lost_password_form', 'after_lost');
add_action( 'woocommerce_before_lost_password_confirmation_message','before_lost' );
add_action( 'woocommerce_after_lost_password_confirmation_message','after_lost' );
function before_lost () {
	echo "<div class='lost-container container h-100'>";
}
function after_lost () {
	echo "</div>";
}

// add_action ("woocommerce_before_shop_loop_item", "before_shop");
// add_action ("woocommerce_after_shop_loop_item", "after_shop");

// function before_shop () {
// 	echo "<div class='shop-container container'>";
// }
// function after_shop () {
// 	echo "</div>";
// }
