<?php

/**
 * Template Name: GP – Contact Us
 */
get_header();
?>

<main class="gp-contact-page">
    <!-- <section class="gp-contact-hero gp-section"
    style="background-image:url('<?php //echo esc_url(get_stylesheet_directory_uri() . '/assets/images/planning-tools-bg.webp'); 
                                    ?>');">
    <div class="gp-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 text-center">
                <h1 class="gp-hero-title">
                    Let’s Start Planning Something Beautiful
                </h1>
            </div>
            <div class="col-6 text-center gp-contact-page-right-side-image">
                <img src="<?php //echo esc_url(get_stylesheet_directory_uri() . '/assets/images/contact-us-banner.webp'); 
                            ?>" alt="Venue">
            </div>
        </div>
    </div>
</section> -->


    <section class="gp-contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="gp-contact-form-box">
                        <?php echo do_shortcode('[ninja_form id=2]'); ?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="gp-contact-info-box">
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
                                gp_render_social_links(
                                    'gp-contact-social-links',
                                    'gp-contact-social',
                                    false
                                );
                                ?>
                                <!-- <a href="#" class="gp-contact-social">
                                    <i class="bi bi-facebook"></i>
                                </a>

                                <a href="#" class="gp-contact-social">
                                    <i class="bi bi-instagram"></i>
                                </a>

                                <a href="#" class="gp-contact-social">
                                    <i class="bi bi-twitter-x"></i>
                                </a>

                                <a href="#" class="gp-contact-social">
                                    <i class="bi bi-linkedin"></i>
                                </a>

                                <a href="#" class="gp-contact-social">
                                    <i class="bi bi-youtube"></i>
                                </a>

                                <a href="#" class="gp-contact-social">
                                    <i class="bi bi-pinterest"></i>
                                </a>

                                <a href="#" class="gp-contact-social">
                                    <i class="bi bi-whatsapp"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>
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