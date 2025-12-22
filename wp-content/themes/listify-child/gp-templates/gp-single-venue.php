<?php

/**
 * Template Name: GP – Single Venue
 * Template Post Type: venues
 */

if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="gp-single-venue">

    <!-- =========================
         VENUE BANNER
    ========================== -->
    <section class="gp-venue-banner">
        <div class="gp-venue-banner-inner">

            <div class="gp-venue-banner-content">
                <h1 class="gp-venue-title"><?php the_title(); ?></h1>

                <div class="gp-venue-cta">
                    <a href="#gp-venue-enquiry" class="gp-cta-button">
                        Enquire Now
                    </a>
                </div>
            </div>

            <div class="gp-venue-banner-form" id="gp-venue-enquiry">
                <!-- Form plugin shortcode goes here -->
                <?php
                // echo do_shortcode('[ninja_form id="1"]');
                ?>
            </div>

        </div>
    </section>

    <!-- =========================
         VENUE CONTENT
    ========================== -->
    <section class="gp-venue-content">
        <div class="gp-container">

            <div class="gp-venue-description">
                <?php the_content(); ?>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>