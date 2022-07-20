<?php
get_header();
?>

<div class="container-fluid woocommerce-banner">
		<div class="banner-img">
			<img
				class="img-fluid" 
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/banner.png'); ?>" alt="background" 
			>
		</div>
		<div class="container" id="shop-container">
			<?php woocommerce_content(); ?>
		</div>
</div>
<?php
	get_footer();?>