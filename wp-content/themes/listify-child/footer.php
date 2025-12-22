<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Listify-child
 */
?>
</div>

</div>

<!-- <div class="footer-wrapper">
	<?php if (! listify_is_job_manager_archive()) : ?>
		<?php get_template_part('content', 'aso'); ?>
		<?php if (is_active_sidebar('widget-area-footer-1') || is_active_sidebar('widget-area-footer-2') || is_active_sidebar('widget-area-footer-3')) : ?>
			<footer class="site-footer-widgets">
				<?php if (is_active_sidebar('widget-area-pre-footer')) : ?>
					<div class="footer-widget-column col-12 col-sm-12 col-lg-5">
						<?php dynamic_sidebar('widget-area-pre-footer'); ?>
					</div>
				<?php endif; ?>
				<div class="container">
					<div class="row">
						<div class="footer-widget-column col-12 col-sm-12 col-lg-5">
							<?php dynamic_sidebar('widget-area-footer-1'); ?>
						</div>
						<div class="footer-widget-column col-12 col-sm-6 col-lg-3 offset-lg-1">
							<?php dynamic_sidebar('widget-area-footer-2'); ?>
						</div>
						<div class="footer-widget-column col-12 col-sm-6 col-lg-3">
							<?php dynamic_sidebar('widget-area-footer-3'); ?>
						</div>
					</div>
				</div>
			</footer>
		<?php endif; ?>
	<?php endif; ?> -->
<!-- <footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-info">
				<?php echo listify_partial_copyright_text(); ?>
			</div>
			<div class="site-social">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'social',
						'menu_class'     => 'nav-menu-social',
						'fallback_cb'    => '',
						'depth'          => 1,
					)
				);
				?>
			</div>
		</div>
	</footer>
</div>
<div id="ajax-response"></div> -->


<footer class="gp-footer">
	<div class="container">
		<div class="row gp-footer-social-row align-items-center justify-content-center">
			<div class="col-md-12 text-center gp-footer-social-links">
				<?php
				gp_render_social_links(
					'gp-footer-social-links',
					'gp-footer-social',
					true
				);
				?>
				<!-- <a href="#" class="gp-footer-social">
					<i class="bi bi-facebook"></i> Facebook
				</a>

				<span class="gp-footer-separator"></span>

				<a href="#" class="gp-footer-social">
					<i class="bi bi-instagram"></i> Instagram
				</a>

				<span class="gp-footer-separator"></span>

				<a href="#" class="gp-footer-social">
					<i class="bi bi-twitter-x"></i> Twitter
				</a>

				<span class="gp-footer-separator"></span>

				<a href="#" class="gp-footer-social">
					<i class="bi bi-linkedin"></i> LinkedIn
				</a>

				<span class="gp-footer-separator"></span>

				<a href="#" class="gp-footer-social">
					<i class="bi bi-youtube"></i> YouTube
				</a>

				<span class="gp-footer-separator"></span>

				<a href="#" class="gp-footer-social">
					<i class="bi bi-tiktok"></i> TikTok
				</a>

				<span class="gp-footer-separator"></span>

				<a href="#" class="gp-footer-social">
					<i class="bi bi-pinterest"></i> Pinterest
				</a>

				<span class="gp-footer-separator"></span>

				<a href="#" class="gp-footer-social">
					<i class="bi bi-snapchat"></i> SnapChat
				</a>

				<span class="gp-footer-separator"></span>

				<a href="#" class="gp-footer-social">
					<i class="bi bi-reddit"></i> Reddit
				</a>

				<span class="gp-footer-separator"></span>
				<a href="#" class="gp-footer-social">
					<i class="bi bi-whatsapp"></i> WhatsApp
				</a> -->
			</div>
		</div>
		<div class="row py-5">
			<div class="col-md-6">
				<h2 class="gp-footer-heading">
					Can't wait to <span>celebrate</span> your wedding
				</h2>
				<div class="gp-footer-cta-buttons">
					<a href="mailto:hello@example.com" class="gp-btn-outline-wine">
						hello@idoabroad.com
					</a>
					<a href="tel:+1234567890" class="gp-btn-wine">
						+1 234 567 890
					</a>
				</div>
				<div class="gp-footer-secondary-links">
					<a href="#">Vendors</a>
					<a href="#">FAQs</a>
					<a href="#">How It Works</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<h3 class="gp-footer-menu-title">Quick Links</h3>
						<ul class="gp-footer-menu">
							<li><a href="#">Wedding by Location</a></li>
							<li><a href="#">Wedding by Style</a></li>
							<li><a href="#">Inspiration</a></li>
							<li><a href="#">Ad Listing</a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<h3 class="gp-footer-menu-title">More</h3>
						<ul class="gp-footer-menu">
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Curated Collection</a></li>
							<li><a href="#">Featured</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center gp-footer-copyright">
				© 2025 I Do. All rights reserved.
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>