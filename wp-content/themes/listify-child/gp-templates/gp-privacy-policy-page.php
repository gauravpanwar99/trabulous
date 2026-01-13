<?php

/**
 * Template Name: Trabulous-Privacy Policy Page
 */
get_header();
?>

<main class="gp-privacy-policy-page">
    <section class="gp-contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="gp-contact-page-title">Privacy Policy</h3>
                    <div class="payment-details">
                        <?php
                        the_content();
                        ?>
                        <?php // echo do_shortcode('[ninja_form id=2]'); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>