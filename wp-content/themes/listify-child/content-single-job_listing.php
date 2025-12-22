<?php if (!defined('ABSPATH')) exit; ?>

<?php

$classes = array(
	'listing-cover',
	'content-single-job_listing-hero',
	'listing-cover--' . get_theme_mod('listing-single-hero-overlay-style', 'gradient'),
	'listing-cover--size-' . get_theme_mod('listing-single-hero-size', 'default'),
	'listing-hero--' . (get_theme_mod('single-listing-secondary-image-display', false) ? 'company-logo' : 'no-company-logo'),
);
?>

<div <?php echo apply_filters('listify_job_listing_data', '', false); ?>>

	<div
		<?php
		echo apply_filters(
			'listify_cover',
			implode(' ', $classes),
			array(
				'size' => 'full',
			)
		);
		?>>

		<?php do_action('listify_single_job_listing_cover_start'); ?>

		<div class="content-single-job_listing-hero-wrapper cover-wrapper container">

			<div class="content-single-job_listing-hero-inner row">

				<div class="content-single-job_listing-hero-company col-md-7 col-sm-12">
					<?php

					do_action('listify_single_job_listing_meta');
					?>
				</div>

				<div class="content-single-job_listing-hero-actions col-md-5 col-sm-12">
					<?php

					do_action('listify_single_job_listing_actions');
					?>
				</div>

			</div>

		</div>

		<?php do_action('listify_single_job_listing_cover_end'); ?>

	</div>

	<div id="primary" class="container gp-single-job-listing-container">


		<!-- <div class="row content-area">

			<?php if (get_option('job_manager_hide_expired_content', 1) && 'expired' === get_post()->post_status) :
			?>

				<div class="woocommerce-message"><?php esc_html_e('This listing is expired.', 'listify');
													?>
				</div>

			<?php else :
			?>

				<?php if ('left' === esc_attr(listify_theme_mod('listing-single-sidebar-position', 'right'))) :
				?>
					<?php get_sidebar('single-job_listing');
					?>
				<?php endif;
				?>

				<main id="main" class="site-main col-12 <?php echo esc_attr('none' !== esc_attr(listify_theme_mod('listing-single-sidebar-position', 'right')) ? 'col-sm-7 col-md-8' : null);
														?>" role="main">

					<?php //if ( listify_has_integration( 'woocommerce' ) && function_exists('wc_print_notices') ) : 
					?>
					<?php //wc_print_notices(); 
					?>
					<?php //endif; 
					?>

					<?php
					// do_action( 'single_job_listing_start' ); 
					?>

					<?php
					// if ( ! dynamic_sidebar( 'single-job_listing-widget-area' ) ) {
					// 	$defaults = array(
					// 		'before_widget' => '<aside class="widget widget-job_listing">',
					// 		'after_widget'  => '</aside>',
					// 		'before_title'  => '<h3 class="widget-title widget-title-job_listing %s">',
					// 		'after_title'   => '</h3>',
					// 		'widget_id'     => '',
					// 	);

					// 	the_widget(
					// 		'Listify_Widget_Listing_Map',
					// 		array(
					// 			'title'      => __( 'Listing Location', 'listify' ),
					// 			'icon'       => 'compass',
					// 			'map'        => 1,
					// 			'address'    => 1,
					// 			'phone'      => 1,
					// 			'web'        => 1,
					// 			'email'      => 1,
					// 			'directions' => 1,
					// 		),
					// 		wp_parse_args(
					// 			array(
					// 				'before_widget' => '<aside class="widget widget-job_listing listify_widget_panel_listing_map">',
					// 			),
					// 			$defaults
					// 		)
					// 	);

					// 	the_widget(
					// 		'Listify_Widget_Listing_Video',
					// 		array(
					// 			'title' => __( 'Video', 'listify' ),
					// 			'icon'  => 'ios-film-outline',
					// 		),
					// 		wp_parse_args(
					// 			array(
					// 				'before_widget' => '<aside class="widget widget-job_listing
					// 			listify_widget_panel_listing_video">',
					// 			),
					// 			$defaults
					// 		)
					// 	);

					// 	the_widget(
					// 		'Listify_Widget_Listing_Content',
					// 		array(
					// 			'title' => __( 'Listing Description', 'listify' ),
					// 			'icon'  => 'clipboard',
					// 		),
					// 		wp_parse_args(
					// 			array(
					// 				'before_widget' => '<aside class="widget widget-job_listing listify_widget_panel_listing_content">',
					// 			),
					// 			$defaults
					// 		)
					// 	);

					// 	the_widget(
					// 		'Listify_Widget_Listing_Comments',
					// 		array(
					// 			'title' => '',
					// 		),
					// 		$defaults
					// 	);
					// }

					// if ( class_exists( 'Extensify' ) && ! dynamic_sidebar( 'single-job_listing-bottom' ) ) {
					// 	dynamic_sidebar( 'single-job_listing-bottom' );
					// }
					?>

					<?php //do_action( 'single_job_listing_end' ); 
					?>

				</main>

				<?php //if ('right' === esc_attr(listify_theme_mod('listing-single-sidebar-position', 'right'))) : 
				?>
				<?php // get_sidebar('single-job_listing'); 
				?>
				<?php //endif; 
				?>

			<?php endif;
			?>
		</div> -->





		<section class="gp-venue-body gp-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 gp-venue-main">
						<div class="gp-sidebar-card">
							<!-- DESCRIPTION -->
							<?php
							$content = get_post_field('post_content', get_the_ID());

							if ($content) {
								echo wpautop($content);
							}
							?>
						</div>


						<!-- TAXONOMIES -->
						<div class="gp-venue-taxonomies">

							<?php
							$taxonomies = [
								'listing_region',
								'listing_category',
								'listing_label',
								'venue-amenity',
								'venue_theme'
							];

							foreach ($taxonomies as $taxonomy) :
								// var_dump($taxonomy);
								$terms = get_the_terms(get_the_ID(), $taxonomy);
								if ($terms && !is_wp_error($terms)) :
									// var_dump($terms);
									// $taxonomy_name = get_taxonomy($taxonomy)->labels->singular_name;
									$taxonomy_titles = [
										'venue-amenity' => 'Available Amenities',
										'venue_theme'   => 'Venue Theme',
									];

									$taxonomy_name = $taxonomy_titles[$taxonomy] ?? ucwords(str_replace('_', ' ', $taxonomy));

									// print_r($taxonomy_name);
							?>
									<div class="gp-tax-group gp-sidebar-card">
										<h5 class="gp-tax-title">
											<?php echo esc_html($taxonomy_name); ?>
										</h5>

										<div class="pills-container gp-tax-list">
											<?php foreach ($terms as $term) : ?>
												<span class="gp-tax-pill">
													<i class="bi <?php echo esc_attr(gp_get_term_icon($term)); ?>"></i>
													<?php echo esc_html($term->name); ?>
												</span>
											<?php endforeach; ?>
										</div>
									</div>


							<?php
								endif;
							endforeach;
							?>

						</div>

					</div>
					<div class="col-md-4 gp-venue-sidebar">



						<!-- CONTACT CARD -->
						<div class="gp-sidebar-card">

							<h4>Get In Touch</h4>

							<!-- <?php if (get_the_job_application_method()) : ?>
								<a href="#gp-pricing-form" class="gp-btn gp-btn-primary w-100">
									Request Pricing
								</a>
							<?php endif; ?> -->

							<div class="gp-venue-contact">

								<?php if ($phone = get_post_meta(get_the_ID(), '_phone', true)) : ?>
									<p><i class="bi bi-telephone"></i> <?php echo esc_html($phone); ?></p>
								<?php endif; ?>

								<?php if ($email = get_post_meta(get_the_ID(), '_application', true)) : ?>
									<p><i class="bi bi-envelope"></i> <?php echo esc_html($email); ?></p>
								<?php endif; ?>

								<?php if ($email = get_post_meta(get_the_ID(), '_company_website', true)) : ?>
									<p><i class="bi bi-link"></i> <?php echo esc_html($email); ?></p>
								<?php endif; ?>

							</div>

						</div>

						<!-- SOCIAL LINKS -->
						<!-- <div class="gp-sidebar-card">

							<h4>Follow Venue</h4>

							<div class="gp-venue-socials">

								<?php
								$socials = [
									'_company_facebook' => 'facebook',
									'_company_instagram' => 'instagram',
									'_company_twitter' => 'twitter',
									'_company_linkedin' => 'linkedin',
									'_company_website' => 'globe'
								];

								foreach ($socials as $meta_key => $icon) :
									$url = get_post_meta(get_the_ID(), $meta_key, true);
									if ($url) :
								?>
										<a href="<?php echo esc_url($url); ?>" target="_blank">
											<i class="bi bi-<?php echo esc_attr($icon); ?>"></i>
										</a>
								<?php
									endif;
								endforeach;
								?>

							</div>

						</div> -->


						<?php if ('right' === esc_attr(listify_theme_mod('listing-single-sidebar-position', 'right'))) : ?>
							<?php get_sidebar('single-job_listing'); ?>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</section>



	</div>
</div>