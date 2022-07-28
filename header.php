<!DOCTYPE html>
<html lang="en"> 
<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sheba Farm">
  <meta name="author" content="https://github.com/ipaullly">    
  <link rel="shortcut icon" href="/foliage/wp-content/themes/sheba-theme/assets/images/logo.png"> 
	<?php 
	  wp_head();
	?>
	<style>
		.woocommerce .banner-img {
			background-image: url("<?php echo esc_url( get_template_directory_uri() . '/assets/images/banner.png');?>");
			background-repeat: no-repeat;
			/* background-attachment: fixed; */
			height: 360px;
			width: 100%;
			margin: 2vh 0 6vh 0;
			/* object-fit: cover; */
			background-position: center;
		}
	</style>
</head> 
<body>

<div class="main-wrapper">
	<nav class="navbar navbar-expand-md navbar-light bg-white" role="navigation">
  	<div class="container d-flex flex-row justify-md-content-start">
			<a class="navbar-brand" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'home' ) ) ); ?>">
				<img
					class="img-fluid mx-3"
					width="180"
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="background" 
				>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="nav-menu-list" id="navbar-content">
				<?php
					wp_nav_menu( 
						array(
							'theme_location'  => 'primary',
							'menu_id'        => 'primary',
							'menu' => 'primary',
							'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'bs-example-navbar-collapse-1',
							'menu_class'      => 'navbar-nav menu-list',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						) 
					);
				?>
			</div>
				</div>
		</nav>