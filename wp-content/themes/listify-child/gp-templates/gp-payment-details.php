<?php

/**
 * Template Name: Trabulous-Payment Details Page
 */
get_header();
?>

<main class="gp-payment-details">



    <section class="gp-contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-11 text-center">
                    <h3 class="gp-contact-page-title">Payment Details</h3>
                    <div class="payment-details">
                        <?php
                    the_content();
                    ?>
                        <?php // echo do_shortcode('[ninja_form id=2]'); ?>
                    </div>
                </div>
                <div class="col-md-1">
                    
                    <!-- <div class="gp-contact-info-box">
                        <h3>Why People Choose Us</h3>
                        <ul class="gp-contact-points">
                            <li><i class="bi bi-check-circle"></i> Curated Destinations worldwide</li>
                            <li><i class="bi bi-check-circle"></i> Verified local partners</li>
                            <li><i class="bi bi-check-circle"></i> Response within 2 hours</li>
                        </ul>
                        <div class="gp-contact-direct">
                            <p>
                                <i class="bi bi-envelope"></i> hello@trabulous.com
                            </p>
                            <p>
                                <i class="bi bi-telephone"></i> +91 7557207786
                            </p>
                        </div>

                        <div class="gp-contact-social-wrapper">

                            <h4 class="gp-contact-social-title">Connect With Us</h4>

                            <div class="gp-contact-social-links">
                                <?php
                                // gp_render_social_links(
                                //     'gp-contact-social-links',
                                //     'gp-contact-social',
                                //     false
                                // );
                                ?>
                                
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="gp-contact-map">
    <div class="container-fluid p-0">
        <img src="<?php //echo esc_url(get_stylesheet_directory_uri() . '/assets/images/contact-map.jpg'); 
                    ?>"
            alt="Global Wedding Destinations">
    </div>
</section> -->
</main>
<?php get_footer(); ?>