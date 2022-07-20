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
</head> 
<body>

<div class="main-wrapper">
	<header class="d-flex justify-content-between align-items-center py-1">
	<img
		class="img-fluid mx-3"
		width="180"
		src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="background" 
	>
		<!-- <a class="site-title pl-2" href="index.html"><?php echo get_bloginfo('name')?></a> -->
		<nav class="container-fluid navbar d-flex flex-xs-row w-100">  
			<div class="menu-toggle">

				<?php 
					wp_nav_menu( 
						array(
							'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul class="w-100 navbar-nav">%3$s</ul>',
							'walker' => new header_menu_walker()
						)
					);
				?>
			</div>
			<!-- <div class="ml-xs-auto ml-lg-0 book-now">
				<button class="btn-primary" href="#">Book Now</button>
			</div> -->
			<!-- <div class="shopping-icon">
				<i class="fa-solid fas fa-bag-shopping"></i>
			</div> -->
		</nav>
	</header>