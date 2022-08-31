<?php 
	$contacts_page_object = get_page_by_path( 'contacts' );
	$contacts_page_id = $contacts_page_object->ID;
	$contacts_permalink = get_permalink( $contacts_page_id );
?>
<footer class="footer-container py-2 mt-2 theme-bg-dark">
  <div class="row container pt-5 mx-auto">
		<div class="col-md-6 d-flex flex-column">
			<h3 class="mt-2 mb-2">Contacts</h3>
			<!-- <h1 class="mb-3">Get in Touch</h1>
			<p class="mt-1">
			We are happy to introduce our new product goes by the name “Rahami Mkaa”. Rahami Mkaa is a good source of cooking fire that is in form of Briquettes available for very cheap cost with an advantage of long burning time. It provides the best alternative to a climate-conscious world, where as they use coconut by-products and convert them into charcoal that is friendly to the environment.
			</p> -->
			<h4>LOCATION</h4>
			<span>Rumuruti, D367</span>
			<span>Old Nyahururu Rumuruti Road</span>
			<h4>PHONE</h4>
			<a class="contact-link" href="tel:+254733334481">+254733334481</a>
			<h4>EMAIL</h4>
			<a class="contact-link" href="mailto:info@shebahfarms.com">info@shebahfarms.com</a>
			<a class="mt-3 contact-btn" href="<?php echo $contacts_permalink .'' ; ?>">
				Contact Us
			</a>
		</div>
		<div class="col-md-6">
			<!-- <img
				class="img-fluid" 
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mapimg.png'); ?>" 
				alt="background" 
			> -->
			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1-XXac8Uc904ku8p6b77QsqQJoNOl5y4&ehbc=2E312F" width="450" height="700"></iframe>
		</div>
	</div>
	<div class="row container footer-menu-container py-5 mx-auto">
		<div class="col-md-5">
			<h1 class="mb-3">SHEBAH FARMS</h1>
			<p>Reliable Organic, Healthy & Fresh products</p>
			<div class="social-icons">
			<i class="fa fab fa-facebook-f"></i>
			<i class="fa fab fa-twitter"></i>
			<i class="fa fab fa-youtube"></i>
			<i class="fa fab fa-instagram"></i>
			</div>
		</div>
		<div class="col-md-3 footer-menu-cont">
			<h4>Menu</h4>
			<?php 
				wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu_class' => 'footer-menu',
					'container_class' => 'custom-menu-class',
					'walker' => new WP_Bootstrap_Navwalker(),
				) )
			?>
		</div>
		<div class="col-md-4">
			<h3>Subscribe</h3>
			<?php
				echo do_shortcode( "[wpforms id='60' title='false']" )
			?>
		</div>
	</div>
	<div class="row container mx-auto mb-5 d-flex flex-row justify-content-between footer-note">
		<div class="col-md-3"><a>2022 All Rights Reserved by Shebah Farms</a></div>
		<div class="col-md-3"><a>Privacy Policy | Terms & Cnditions</a></div>
	</div>
</footer>
</div>
<?php
		wp_footer(  );
		?>
	<script src="js/main.js"></script>

</body>
</html> 