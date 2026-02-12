<?php

/**
 * Template Name: Trabulous – Landing Page
 */

if (!defined('ABSPATH')) exit;

get_header();
// 
?>

<main class="gp-landing-page">
    <section class="gp-hero-banner">
        <?php echo do_shortcode('[rev_slider alias="slider-1"][/rev_slider]'); ?>
    </section>



    <section class="recetly-added-itineraries my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 recent-itineraries">
                    <h4 class="fw-bold mb-4">Recently Added Itineraries</h4>
                </div>
            </div>
            <div class="row justify-content-center g-3">
                <?php
                $args = [
                    'post_type'      => 'itinerary',
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                ];

                $query = new WP_Query($args);
                if ($query->have_posts()) :

                    while ($query->have_posts()) : $query->the_post();
                        $title    = get_the_title();
                        $link     = get_permalink();
                        $image    = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        $subtitle = get_field('subtitle'); // ACF field

                        // Get location taxonomy
                        $terms = get_the_terms(get_the_ID(), 'location');

                        $location_link = '#';
                        $location_name = '';

                        if (!empty($terms) && !is_wp_error($terms)) {
                            $term = $terms[0]; // first location
                            $location_link = get_term_link($term);
                            $location_name = $term->name;
                        }

                        $original_price = get_field('original_price'); // ACF field
                        $deal_price = get_field('deal_price'); // ACF field
                        $night_per_person = get_field('night_per_person'); // ACF field
                        $cta_text = get_field('cta_text'); // ACF field
                ?>

                        <div class="col-12 col-sm-10 col-md-6 col-lg-4 d-flex">
                            <div class="card itinerary-card" style="transform: translateY(0px); box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;">
                                <div style="position:relative;height:200px;overflow:hidden"><img alt="Couple Holiday: 4 Nights In Bangkok And Phuket" loading="lazy" decoding="async" data-nimg="fill" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: cover; color: transparent; transition: transform 0.4s; transform: scale(1);" src="<?php echo $image ?>"></div>
                                <div class="card-body p-3 bg-white">
                                    <h6 class="fw-bold mb-2"><?php echo $title ?></h6>
                                    <div class="card-meta small mb-3 d-flex align-items-center gap-1">
                                        <i class="bi bi-geo-alt me-1 geo-icon phone-icon"></i>
                                        <?php echo $subtitle ?>
                                    </div>

                                </div>
                                <hr class="m-0">
                                <div class="card-footer d-flex justify-content-between align-items-center px-3 py-3" style="background:#F0F8FF">
                                    <div class="pricing-info">
                                        <div class="fw-bold" style="font-size:14px"><s>₹<?php echo $original_price ?></s></div>
                                        <div class="fw-bold" style="font-size:22px">₹<?php echo $deal_price ?></div>
                                        <div class="small"><?php echo $night_per_person; ?></div>
                                    </div>
                                    <div class="user-actions">
                                        <i class="bi bi-telephone phone-icon"></i>

                                        <?php
                                        $contactPage = get_page_by_path('contact-us');
                                        ?>
                                        <a class="btn btn-coral open-pop-up-one" href="<?php echo get_permalink($contactPage->ID) ?>">BOOK NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

                <!-- <div class="col-12 col-sm-10 col-md-6 col-lg-4 d-flex">
                    <div class="card itinerary-card" style="transform: translateY(0px); box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;">
                        <div style="position:relative;height:200px;overflow:hidden"><img alt="Couple Holiday: 4 Nights In Bangkok And Phuket" loading="lazy" decoding="async" data-nimg="fill" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: cover; color: transparent; transition: transform 0.4s; transform: scale(1);" src="<?php echo get_stylesheet_directory_uri() ?>/assets/itineraries/1couple.jpg"></div>
                        <div class="card-body p-3 bg-white">
                            <h6 class="fw-bold mb-2">Couple/Friends Holiday: 4 Nights In Bali</h6>
                            <div class="card-meta small mb-3 d-flex align-items-center gap-1">
                                <i class="bi bi-geo-alt me-1 geo-icon phone-icon"></i>
                                Kuta, Seminyak, Many more
                            </div>

                        </div>
                        <hr class="m-0">
                        <div class="card-footer d-flex justify-content-between align-items-center px-3 py-3" style="background:#F0F8FF">
                            <div class="pricing-info">
                                <div class="fw-bold" style="font-size:14px"><s>₹49,999</s></div>
                                <div class="fw-bold" style="font-size:22px">₹39,051</div>
                                <div class="small">2 Nights/Person</div>
                            </div>
                            <div class="user-actions">
                                <i class="bi bi-telephone phone-icon"></i>

                                <?php
                                $contactPage = get_page_by_path('contact-us');
                                ?>
                                <a class="btn btn-coral open-pop-up-one" href="<?php echo get_permalink($contactPage->ID) ?>">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-12 col-sm-10 col-md-6 col-lg-4 d-flex">
                    <div class="card itinerary-card" style="transform: translateY(0px); box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;">
                        <div style="position:relative;height:200px;overflow:hidden"><img alt="Friends Retreat: 4 Nights In Bangkok And Pattaya" loading="lazy" decoding="async" data-nimg="fill" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: cover; color: transparent; transition: transform 0.4s; transform: scale(1);" src="<?php echo get_stylesheet_directory_uri() ?>/assets/itineraries/2.jpg"></div>
                        <div class="card-body p-3 bg-white">
                            <h6 class="fw-bold mb-2">Friends Retreat: 4 Nights In Bangkok And Pattaya</h6>
                            <div class="card-meta small mb-3 d-flex align-items-center gap-1">
                                <i class="bi bi-geo-alt me-1 geo-icon phone-icon"></i>

                                Pattaya (3 Nights,4 Days) +1 more
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-footer d-flex justify-content-between align-items-center px-3 py-3" style="background:#F0F8FF">
                            <div class="pricing-info">
                                <div class="fw-bold" style="font-size:14px"><s>₹47,000</s></div>
                                <div class="fw-bold" style="font-size:22px">₹42,000</div>
                                <div class="small">3 Nights/Person</div>
                            </div>
                            <div class="user-actions">
                                <i class="bi bi-telephone phone-icon"></i>

                                <a class="btn btn-coral open-pop-up-one" href="<?php echo get_permalink($contactPage->ID) ?>">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-lg-4 d-flex">
                    <div class="card itinerary-card" style="transform: translateY(0px); box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;">
                        <div style="position:relative;height:200px;overflow:hidden"><img alt="Family Getaway: 11 Nights In Vietnam" loading="lazy" decoding="async" data-nimg="fill" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: cover; color: transparent; transition: transform 0.4s; transform: scale(1);" src="<?php echo get_stylesheet_directory_uri() ?>/assets/itineraries/vitenam.jpg"></div>
                        <div class="card-body p-3 bg-white">
                            <h6 class="fw-bold mb-2">Family Getaway: 11 Nights In Vietnam</h6>
                            <div class="card-meta small mb-3 d-flex align-items-center gap-1">
                                <i class="bi bi-geo-alt me-1 geo-icon phone-icon"></i>
                                Hanoi (5 Nights, 6 Days) +3 more
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="card-footer d-flex justify-content-between align-items-center px-3 py-3" style="background:#F0F8FF">
                            <div class="pricing-info">
                                <div class="fw-bold" style="font-size:14px"><s>₹75,000</s></div>
                                <div class="fw-bold" style="font-size:22px">₹67,800</div>
                                <div class="small">5 Nights/Person</div>
                            </div>
                            <div class="user-actions">
                                <i class="bi bi-telephone phone-icon"></i>

                                <a class="btn btn-coral open-pop-up-one" href="<?php echo get_permalink($contactPage->ID) ?>">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>



    <!-- <section class="cta-wrapper">
        <div class="container">
            <div class="row cta-container">
                <div class="col-12">
                    <div class="cta-content">
                        <h2>Bigger Group? Get Special Offers up to 50% Off</h2>
                        <p>
                            We create unforgettable travel experiences, customised specially
                            for your group trips.
                        </p>
                        <div class="cta-actions">
                            <button type="button" class="cta-button">Get a Callback</button>
                            <button type="button" class="cta-button cta-button-secondary">See Upcoming Itineraries</button>
                            <a href="https://wa.me" target="_blank">
                                <i class="bi bi-whatsapp cta-button"></i>
                            </a>

                        </div>
                    </div>
                    <div class="cta-decor">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/group.png" alt="Group of travelers" class="cta-decor-image" />

                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <section class="testimonials py-5 my-5">

        <div class="container-fluid">

            <div class="testimonial-wrapper">
                <div class="row g-4">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 overflow-hidden testimonial-card">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/reviews.webp" alt="Decor Top Right" class="testimonial-decor-top-right">
                            <p class="text-center">Based on <strong>1,200+ </strong>reviews</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 border-0 overflow-hidden testimonial-card">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-3 d-flex gap-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fa642dff" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fa642dff" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fa642dff" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fa642dff" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fa642dff" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg></div>
                                <p class="mb-4 testimonial-content">"<!-- -->Vietnam trip exceeded expectations. Hotels and transport were excellent.<!-- -->"</p>
                                <div class="testimonial-meta">
                                    <div class="testimonial-name">- <!-- -->Rachit</div>
                                    <!-- <div class="testimonial-role">Adventure Seeker</div> -->
                                </div>
                                <div class="testimonial-user"><img alt="Mark T." loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="testimonial-user-img" style="color:transparent" src="<?php echo get_stylesheet_directory_uri() ?>/assets/testimonials/mark.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 border-0 overflow-hidden testimonial-card">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-3 d-flex gap-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fa642dff" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fa642dff" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fa642dff" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fa642dff" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#E0FFFF" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg></div>
                                <p class="mb-4 testimonial-content">"<!-- -->Smooth booking process and very responsive support team.<!-- -->"</p>
                                <div class="testimonial-meta">
                                    <div class="testimonial-name">- <!-- -->Anita</div>

                                </div>
                                <div class="testimonial-user"><img alt="Sophie L." loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="testimonial-user-img" style="color:transparent" src="<?php echo get_stylesheet_directory_uri() ?>/assets/testimonials/sophie.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 border-0 overflow-hidden testimonial-card">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-3 d-flex gap-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fa642dff" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fa642dff" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fa642dff" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fa642dff" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fa642dff" class="bi bi-star-fill testimonial-star">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg></div>
                                <p class="mb-4 testimonial-content">"<!-- -->Highly professional service. Will book our next trip again!<!-- -->"</p>
                                <div class="testimonial-meta">
                                    <div class="testimonial-name">- <!-- -->Kumar</div>

                                </div>
                                <div class="testimonial-user"><img alt="James K." loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="testimonial-user-img" style="color:transparent" src="<?php echo get_stylesheet_directory_uri() ?>/assets/testimonials/james.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="cta-wrapper">
        <?php
        //echo do_shortcode('[rev_slider alias="slider-2-1"][/rev_slider]');
        ?>
    </section> -->
</main>

<?php get_footer(); ?>