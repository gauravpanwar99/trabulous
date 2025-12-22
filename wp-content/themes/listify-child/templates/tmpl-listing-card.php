<?php
/**
 * Single listing card.
 *
 * @since 2.0.3
 * @version 1.0.0
 *
 * @package Listify
 * @category Template
 * @author Astoundify
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<script id="tmpl-listingCard" type="text/template">

<?php
/**
 * Insert content before a listing.
 *
 * @since 2.0.0
 */
do_action( 'listify_listing_card_before' );

?>

<li id="listing-{{data.id}}" class="job_listing type-job_listing card-style--default style-grid {{data.styles.cardClasses}}">
	<div class="content-box">

		<?php
			/**
			 * Insert content at the start of the listing.
			 *
			 * @since Unknown
			 *
			 * @hooked Listify_Astoundify_Favorites::render_js() - 10
			 */
			do_action( 'listify_content_job_listing_before' );
		?>

		<a href="{{data.permalink}}" class="job_listing-clickbox"<# if ( data.cardDisplay.target) { #> target="_blank"<# } #>></a>

		<header class="job_listing-entry-header">

			<?php
				/**
				 * Insert content before the listing header.
				 *
				 * @since Unknown
				 */
				do_action( 'listify_content_job_listing_header_before' );
			?>

			<div class="job_listing-entry-header-wrapper cover-wrapper">				
				<?php
					/**
					 * Insert content at the start of the listing header.
					 *
					 * @since Unknown
					 */
					do_action( 'listify_content_job_listing_header_start' );
				?>				

                <div class="feature_image_card">    
                    <# if ( data.featuredImage.url ) { #>
						<img src ="{{data.featuredImage.url}}" alt="image">
					<# } #>
                </div>
				<div class="job_listing-entry-meta">
			    	<!--	<# if ( data.status.featured && 'badge' === data.styles.featuredStyle ) { #>
					    <# if ( data.cardDisplay.featured_icon ) { #>
						<div class="listing-featured-icon">
					    	<img src="{{data.featured_icon}}" alt="{{data.i18n.featured}}"/>
						</div>
						 <# } else { #> 
						<div class="listing-featured-badge">
						    {{data.i18n.featured}}
						</div>
						<# } #>
					<# } #> -->
					<# if ( data.status.featured && 'badge' === data.styles.featuredStyle ) { #>
    					<div class="listing-featured-badge">
    					    {{data.i18n.featured}}
    					</div>
	                <# } #>
					<# if ( data.cardDisplay.title ) { #> 
						<h3 class="job_listing-title">{{{data.title}}}</h3>
					<# } #>
				
					<# if ( data.location.raw ) { #>
    					<div class="job_listing-location">{{{data.location.raw}}}</div>
    				<# } #>
					
					<div class="job_listing-content">{{data.listingcontent}}</div>
    			
    				
					<?php
						/**
						 * Insert content after other meta information.
						 *
						 * @since unknown
						 */
						do_action( 'listify_content_job_listing_meta' );
					?>
				</div>

				<?php
					/**
					 * Insert content at the end of the listing header.
					 *
					 * @since Unknown
					 */
					do_action( 'listify_content_job_listing_header_end' );
				?>

			</div>

			<?php
				/**
				 * Insert content after the listing header.
				 *
				 * @since Unknown
				 */
				do_action( 'listify_content_job_listing_header_after' );
			?>
		</header>
		
		<# if ( data.cardDisplay.rating || data.cardDisplay.secondaryImage || data.cardDisplay.claimed ) { #>

		<footer class="job_listing-entry-footer">

			<?php
				/**
				 * Insert content at the start of the listing footer.
				 *
				 * @since Unknown
				 */
				do_action( 'listify_content_job_listing_footer' );
			?>
		

			<# if ( data.cardDisplay.secondaryImage && data.secondaryImage.url ) { #>
				<div class="listing-entry-company-image listing-entry-company-image--card listing-entry-company-image--type-{{data.secondaryImage.type}} listing-entry-company-image--style-{{data.secondaryImage.style}}">
					<# if ( data.secondaryImage.permalink ) { #><a href="{{data.secondaryImage.permalink}}"><# } #>
						<img class="listing-entry-company-image__img listing-entry-company-image__img--type-logo listing-entry-company-image__img--style-{{data.secondaryImage.style}}" src="{{{data.secondaryImage.url}}}" alt="{{data.title}}" />
					<# if ( data.secondaryImage.permalink ) { #></a><# } #>
				</div>
			<# } #>

			<# if ( data.cardDisplay.claimed && data.status.claimed ) { #>
				<span class="claimed-ribbon">
					<span class="ion-checkmark-circled"></span>
				</span>
			<# } #>

		</footer>

		<# } #>

		<?php
			/**
			 * Insert content at the end of the listing.
			 *
			 * @since Unknown
			 */
			do_action( 'listify_content_job_listing_after' );
		?>

	</div>
</li>
    
<?php
/**
 * Insert content after a listing.
 *
 * @since 2.0.0
 */
do_action( 'listify_listing_card_after' );
?>

</script>
