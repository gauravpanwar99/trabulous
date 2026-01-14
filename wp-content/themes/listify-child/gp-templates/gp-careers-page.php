<?php

/**
 * Template Name: Trabulous-Careers Page
 */
get_header();
?>

<main class="gp-career-page">
    <section class="gp-contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   
                </div>
                <div class="col-md-6">
                    <h3 class="gp-contact-page-title">Careers</h3>
                    <div class="payment-details">
                        <?php
                        the_content();
                        ?>
                        <?php // echo do_shortcode('[ninja_form id=2]'); 
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>