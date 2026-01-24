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
                <div class="col-12 col-sm-10 col-md-6 col-lg-4 d-flex">
                    <div class="card itinerary-card" style="transform: translateY(0px); box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;">
                        <div style="position:relative;height:200px;overflow:hidden"><img alt="Couple Holiday: 4 Nights In Bangkok And Phuket" loading="lazy" decoding="async" data-nimg="fill" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: cover; color: transparent; transition: transform 0.4s; transform: scale(1);" src="<?php echo get_stylesheet_directory_uri() ?>/assets/itineraries/1couple.jpg"></div>
                        <div class="card-body p-3 bg-white">
                            <h6 class="fw-bold mb-2">Couple/Friends Holiday: 4 Nights In Bali</h6>
                            <div class="card-meta small mb-3 d-flex align-items-center gap-1">
                                <i class="bi bi-geo-alt me-1 geo-icon phone-icon"></i>
                                Kuta, Seminyak, Many more
                            </div>
                            <!-- <div class="card-meta-badges">
                                <span class="card-meta-badge">COUPLE FRIENDLY</span>
                        </div> -->
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
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-lg-4 d-flex">
                    <div class="card itinerary-card" style="transform: translateY(0px); box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;">
                        <div style="position:relative;height:200px;overflow:hidden"><img alt="Friends Retreat: 4 Nights In Bangkok And Pattaya" loading="lazy" decoding="async" data-nimg="fill" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: cover; color: transparent; transition: transform 0.4s; transform: scale(1);" src="<?php echo get_stylesheet_directory_uri() ?>/assets/itineraries/2.jpg"></div>
                        <div class="card-body p-3 bg-white">
                            <h6 class="fw-bold mb-2">Friends Retreat: 4 Nights In Bangkok And Pattaya</h6>
                            <div class="card-meta small mb-3 d-flex align-items-center gap-1">
                                <i class="bi bi-geo-alt me-1 geo-icon phone-icon"></i>

                                Pattaya (3 Nights,4 Days) +1 more
                            </div>
                            <!-- <div class="card-meta-badges">
                                <span class="card-meta-badge">FRIENDS</span><span class="card-meta-badge">FAMILY</span>
                            </div> -->
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
                            <!-- <div class="card-meta-badges">
                                <span class="card-meta-badge">FAMILY</span>
                            </div> -->
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
                </div>
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
        <!-- <div class="testimonials-decor"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" class="bi bi-chat-quote-fill chat-quote-decor">
                <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M7.194 6.766a1.7 1.7 0 0 0-.227-.272 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.5 2.5 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.5 2.5 0 0 0-.228-.4 1.7 1.7 0 0 0-.227-.273 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"></path>
            </svg></div> -->
        <div class="container-fluid">
            <!-- <div class="text-center mb-5">
                <h2 class="fw-bold title"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" class="bi bi-quote quote-inline">
                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"></path>
                    </svg> What Our Travelers Say</h2>
                <p class="sub-title text-muted mt-2">Trusted by thousands of happy travelers</p>
            </div> -->
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
                                    <!-- <div class="testimonial-role">Solo Traveler</div> -->
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
                                    <!-- <div class="testimonial-role">Business Traveler</div> -->
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
        // echo do_shortcode('[rev_slider alias="slider-2"][/rev_slider]');
        ?>
    </section> -->
    <section class="cta-wrapper">
        <?php
        echo do_shortcode('[rev_slider alias="slider-2-1"][/rev_slider]');
        ?>
    </section>
</main>

<?php get_footer(); ?>