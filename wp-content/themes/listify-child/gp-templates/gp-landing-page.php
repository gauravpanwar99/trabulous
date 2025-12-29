<?php

/**
 * Template Name: Trabulous – Landing Page
 */

if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="gp-landing-page">
    <section class="gp-hero-banner">
        <?php echo do_shortcode('[rev_slider alias="slider-1"][/rev_slider]'); ?>
        <?php //echo do_shortcode('[layerslider id="1"]'); 
        ?>

    </section>


    <!-- <section class="gp-hero-banner"
        style="background-image: url('<?php //echo esc_url(get_stylesheet_directory_uri() . '/assets/images/2.jpeg'); 
                                        ?>');">
        <div class="gp-hero-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 gp-hero-content text-center">
                    <h1 class="gp-hero-title">
                        The World’s Most Beautiful Places to Say “I Do” <br>
                        <span>— Curated for You</span>
                    </h1>
                    <p class="gp-hero-subtitle">
                        Curated destinations for unforgettable experiences
                    </p>
                    <div class="gp-hero-banner-form">
                        <form class="gp-hero-search-form">
                            <div class="gp-hero-form-field">
                                <select>
                                    <option value="">Search Country</option>
                                    <option>Bali (12)</option>
                                    <option>Dubai (8)</option>
                                    <option>Kenya (5)</option>
                                </select>
                            </div>
                            <div class="gp-hero-form-field">
                                <select>
                                    <option value="">Theme</option>
                                    <option>Luxury (159)</option>
                                    <option>Private Island (28)</option>
                                    <option>Palaces (112)</option>
                                    <option>Fairytale (12)</option>
                                </select>
                            </div>
                            <div class="gp-hero-form-field">
                                <input type="date" placeholder="Select Date" />
                            </div>
                            <div class="gp-hero-form-submit">
                                <button type="submit">
                                    <i class="bi bi-search"></i>
                                    Search Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- <section class="gp-calltoaction-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 text-center text-md-start">
                    <div class="gp-cta-offer-badge">
                        <p class="gp-cta-offer-text">
                            <strong>
                                <del>£199</del> <span class="gp-cta-price">£99</span>
                            </strong>
                        </p>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="gp-cta-title">
                                The Absolutely Essential Guide to Help You Save (££)
                            </h4>

                            <p class="gp-cta-subtitle">
                                Developed by industry experts to help you plan for all aspects of your big day
                                with guides, tools, and budgets.
                            </p>
                        </div>
                        <div class="col-md-4 text-md-end text-center">
                            <h6>Buy The Pro Toolkit Now</h6>
                            <a href="<?php //echo esc_url(wc_get_page_permalink('shop')); 
                                        ?>"
                                class="gp-btn gp-btn-wine gp-cta-button">
                                Online Purchases
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- <section class="gp-featured-venues-section gp-section">
        <div class="container">
            <div class="row align-items-center gp-featured-header-row">
                <div class="col-md-8">
                    <h2 class="gp-featured-main-title">
                        This Week's Curated Collection
                    </h2>
                    <h3 class="gp-featured-eyebrow">
                        Our hand-picked selection of elite wedding
                    </h3>
                </div>
                <div class="col-md-4 text-end">
                    <div class="gp-featured-toggle-buttons">
                        <button class="gp-toggle-btn gp-toggle-active">Weekly</button>
                    </div>
                </div>
            </div>
            <div class="row gp-featured-cards-row">
                <?php
                // $args = [
                //     'post_type'      => 'job_listing',
                //     'posts_per_page' => 3,
                //     'post_status'    => 'publish',
                //     'meta_query'     => [
                //         [
                //             'key'     => '_featured',
                //             'value'   => ['1', 'true', 'yes'],
                //             'compare' => 'IN',
                //         ],
                //     ],
                // ];

                // $featured_venues = new WP_Query($args);
                // if ($featured_venues->have_posts()) :
                //     while ($featured_venues->have_posts()) : $featured_venues->the_post();
                ?>
                        <div class="col-md-4">
                            <div class="gp-card-container-homepage">
                                <div class="gp-card-image">
                                    <a href="<?php //the_permalink(); 
                                                ?>" class="gp-card-image-link">
                                        <?php //if (has_post_thumbnail()) : 
                                        ?>
                                            <?php //the_post_thumbnail('large', ['alt' => get_the_title()]); 
                                            ?>
                                        <?php //else : 
                                        ?>
                                            <img
                                                src="<?php //echo esc_url(get_stylesheet_directory_uri() . '/assets/images/card-placeholder-1.jpg'); 
                                                        ?>"
                                                alt="<?php //the_title_attribute(); 
                                                        ?>">
                                        <?php //endif; 
                                        ?>
                                    </a>
                                    <div class="gp-card-badges">
                                        <span class="gp-badge">
                                            <i class="bi bi-lightning-charge"></i> Featured
                                        </span>
                                    </div>
                                    <div class="gp-card-badges">

                                        <?php //if (get_field('is_featured') == 'yes') : 
                                        ?>
                                            <span class="gp-badge gp-badge-featured">
                                                <i class="bi bi-lightning-charge"></i> Featured
                                            </span>
                                        <?php //endif; 
                                        ?>

                                        <?php //if (get_field('is_curated') == 'yes') : 
                                        ?>
                                            <span class="gp-badge gp-badge-curated">
                                                <i class="bi bi-lightbulb"></i> Curated
                                            </span>
                                        <?php //endif; 
                                        ?>

                                    </div>

                                </div>
                                <div class="gp-card-title">
                                    <h3>
                                        <a href="<?php //the_permalink(); 
                                                    ?>">
                                            <?php //the_title(); 
                                            ?>
                                        </a>
                                    </h3>
                                </div>
                                <?php
                                // $content = get_the_content();
                                // if (!empty($content)) :
                                ?>
                                    <p class="gp-card-subtitle">
                                        <?php //echo esc_html(gp_trim_by_characters($content, 110)); 
                                        ?>
                                    </p>
                                <?php //endif; 
                                ?>

                                <?php
                                // $rating_value = get_field('ratings_out_of_5');
                                // $rating_count = get_field('number_of_ratings_recieved');
                                ?>
                                <div class="gp-card-meta gp-card-meta-top">

                                    <div class="gp-card-rating">
                                        <i class="bi bi-star-fill"></i>

                                        <?php //if ($rating_value) : 
                                        ?>
                                            <strong><?php //echo esc_html($rating_value); 
                                                    ?></strong>
                                        <?php //endif; 
                                        ?>

                                        <?php //if ($rating_count) : 
                                        ?>
                                            <span>(<?php //echo esc_html($rating_count); 
                                                    ?>)</span>
                                        <?php //endif; 
                                        ?>
                                    </div>
                                    <div class="gp-card-divider"></div>

                                    <div class="gp-card-location">
                                        <i class="bi bi-geo-alt"></i>
                                        <?php //echo esc_html(get_post_meta(get_the_ID(), '_job_location', true)); 
                                        ?>
                                    </div>
                                </div>
                                <div class="gp-card-response">
                                    <i class="bi bi-chat-dots"></i>
                                    Response within 48 hours
                                </div>

                            </div>
                        </div>
                <?php
                //     endwhile;
                //     wp_reset_postdata();
                // endif;
                ?>

                 <div class="col-md-4">
                    <div class="gp-card-container-homepage">
                        <div class="gp-card-image">
                            <img src="<?php //echo esc_url(get_stylesheet_directory_uri() . '/assets/images/card-placeholder-1.jpg'); 
                                        ?>" alt="Venue">

                            <div class="gp-card-badges">
                                <span class="gp-badge">
                                    <i class="bi bi-lightning-charge"></i> Featured
                                </span>
                            </div>
                        </div>
                        <div class="gp-card-title">
                            <h3>Azerai La Residence</h3>
                        </div>
                        <p class="gp-card-subtitle">
                            Why get married at Azerai La Residence, Hue?<br />
                            For couples seeking a wedding infused with timeless elegance, cultural depth...
                        </p>
                        <div class="gp-card-meta gp-card-meta-top">
                            <div class="gp-card-rating">
                                <i class="bi bi-star-fill"></i>
                                <strong>5.0</strong> <span>(23)</span>
                            </div>

                            <div class="gp-card-divider"></div>

                            <div class="gp-card-location">
                                <i class="bi bi-geo-alt"></i>
                                Hue, Vietnam
                            </div>
                        </div>
                        <div class="gp-card-cta">
                            <a href="#" class="gp-card-btn">
                                Request Pricing <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="gp-card-response">
                            <i class="bi bi-chat-dots"></i>
                            Response within 24 hours
                        </div>
                    </div>
                </div> 

                <div class="col-md-4">
                    <div class="gp-card-container-homepage">

                    
                        <div class="gp-card-image">
                            <img src="<?php //echo esc_url(get_stylesheet_directory_uri() . '/assets/images/card-placeholder-2.webp'); 
                                        ?>" alt="Venue">

                            <div class="gp-card-badges">
                                <span class="gp-badge">
                                    <i class="bi bi-lightning-charge"></i> Featured
                                </span>
                                <span class="gp-badge">
                                    <i class="bi bi-lightbulb"></i> Curated
                                </span>
                            </div>
                        </div>

                        <div class="gp-card-title">
                            <h3>Rosewood San Miguel de Allende</h3>
                        </div>
                        <p class="gp-card-subtitle">
                            Why get married at Rosewood San Miguel de Allende?
                            For couples seeking an extraordinary, immersive wedding destination, Rosewood San ...</p>
                       
                        <div class="gp-card-meta gp-card-meta-top">
                            <div class="gp-card-rating">
                                <i class="bi bi-star-fill"></i>
                                <strong>4.8</strong> <span>(87)</span>
                            </div>

                            <div class="gp-card-divider"></div>

                            <div class="gp-card-location">
                                <i class="bi bi-geo-alt"></i>
                                San Miguel, Guanajuanto
                            </div>
                        </div>

                        <div class="gp-card-meta gp-card-meta-bottom">
                            <div class="gp-card-price">
                                <i class="bi bi-currency-dollar"></i>
                                9k–10k
                            </div>

                            <div class="gp-card-divider"></div>

                            <div class="gp-card-capacity">
                                <i class="bi bi-people"></i>
                                100–500
                            </div>
                        </div>

                      
                        <div class="gp-card-cta">
                            <a href="#" class="gp-card-btn">
                                Request Pricing <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                       
                        <div class="gp-card-response">
                            <i class="bi bi-chat-dots"></i>
                            Response within 24 hours
                        </div>

                    </div>
                </div> 

            </div>
        </div>

    </section> -->


    <!-- <section class="gp-split-section">
        <div class="gp-landing-idoabroad-overlay"></div>
        <div class="gp-split-image"
            style="background-image: url('<?php //echo esc_url(get_stylesheet_directory_uri() . '/assets/images/mexico-cta.png'); 
                                            ?>');">
        </div>
        <div class="gp-split-blank"></div>
        <div class="container gp-split-content-wrapper">
            <div class="row gp-split-content align-items-center">
                <div class="col-md-12">
                    <div class="gp-split-text">
                        <h2 class="gp-split-subtitle">
                            Say "I Do Abroad" in Mexico
                        </h2>
                        <p class="gp-split-description">
                            Sun-kissed beaches, candlelit haciendas, and colorful colonial towns. <br />Mexico delivers wow-factor backdrops with vibrant culture and heartfelt hospitality. <br /><br />From Riviera Maya’s turquoise shores and cenote blessings to Los Cabos’ desert-meets-sea vistas and San Miguel de Allende’s romantic cobblestones, you’ll find settings for every style and budget—plus mouth-watering cuisine and world-class service.
                        </p>
                        <div class="gp-split-actions">
                            <a href="#" class="gp-split-btn">
                                Schedule Appointment
                            </a>
                            <span class="gp-split-phone">
                                <i class="bi bi-telephone-fill"></i>
                            </span>
                            <span class="gp-split-phone-text">
                                +1 (234) 567-8900
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 text-center">
                    <img
                        src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/person-placeholder.png'); ?>"
                        alt="Consultation"
                        class="gp-split-side-image" />
                </div>
            </div>
        </div>
    </section> -->



    <!-- <section class="gp-landing-listing-labels-containers gp-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="gp-inspiration-title">
                        Let Us Inspire You
                    </h2>
                </div>
            </div>
            <div class="row g-4">

                <div class="col-md-6">
                    <div class="gp-inspiration-card"
                        style="background-image:url('<?php //echo esc_url(get_stylesheet_directory_uri() . '/assets/images/same-sex-friendly.jpg'); 
                                                        ?>');">
                        <h3 class="gp-inspiration-heading">
                            Same Sex Friendly
                        </h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gp-inspiration-card"
                        style="background-image:url('<?php //echo esc_url(get_stylesheet_directory_uri() . '/assets/images/thialand-forest.jpg'); 
                                                        ?>');">
                        <h3 class="gp-inspiration-heading">
                            Thailand - Jungle Meets Beach
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="gp-calltoaction-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <p class="gp-cta-text">
                        Save ££ expert planning toolkit developed by industry experts to help save you thousands
                        and avoid plan for all aspects of your big day to go off without a hitch.
                    </p>
                </div>
                <div class="col-md-4 text-md-end text-center">
                    <a href="<?php //echo esc_url(site_url('/contact-us')); 
                                ?>"
                        class="gp-btn gp-btn-wine gp-cta-button">
                        Buy the Pro Toolkit
                    </a>
                </div>
            </div>
        </div>
    </section> -->


    <!-- <section class="gp-landing-blog-section py-5">
        <div class="container">
            <div class="row text-center mb-2">
                <div class="col-12">
                    <h2 class="gp-blog-title">
                        Intelligent Planning for Extraordinary Weddings Abroad
                    </h2>
                </div>
            </div>
            <div class="row g-4 blog-cards-landing-page">
                <?php
                // $args = array(
                //     'post_type'      => 'post',
                //     'posts_per_page' => 4,
                //     'order'          => 'DESC',
                //     'orderby'        => 'date'
                // );

                // $latest_posts = new WP_Query($args);

                // if ($latest_posts->have_posts()) :
                //     while ($latest_posts->have_posts()) : $latest_posts->the_post(); 
                ?>

                        <div class="col-md-3">
                            <div class="gp-blog-card">
                                <div class="gp-blog-image">
                                    <?php //if (has_post_thumbnail()) : 
                                    ?>
                                        <a href="<?php //the_permalink(); 
                                                    ?>">
                                            <?php //the_post_thumbnail('medium'); 
                                            ?>
                                        </a>
                                    <?php //endif; 
                                    ?>
                                </div>
                                <div class="gp-blog-meta">
                                    <span><?php //echo get_the_date(); 
                                            ?></span> •
                                    <span><?php //echo get_the_category_list(', '); 
                                            ?></span>
                                </div>
                                <h4 class="gp-blog-card-title">
                                    <a href="<?php //the_permalink(); 
                                                ?>"><?php //the_title(); 
                                                    ?></a>
                                </h4>
                                <p class="gp-blog-excerpt">
                                    <?php //echo wp_trim_words(get_the_excerpt(), 20, '...'); 
                                    ?>
                                </p>
                                <a href="<?php //the_permalink(); 
                                            ?>" class="gp-blog-readmore">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                <?php
                // endwhile;
                //     wp_reset_postdata();
                // else :
                //     echo '<p>No posts found.</p>';
                // endif;
                ?>

                <div class="col-md-3">
                    <div class="gp-blog-card">
                        <div class="gp-blog-image">
                            <img src="<?php //echo esc_url(get_stylesheet_directory_uri() . '/assets/images/bali-blog.jpeg'); 
                                        ?>" alt="">
                        </div>
                        <div class="gp-blog-meta">
                            <span>November 7, 2025</span> • <span>America</span>
                        </div>
                        <h4 class="gp-blog-card-title">
                            Why Bali is the Ultimate Destination Wedding Hotspot for 2026 and 2027
                        </h4>
                        <p class="gp-blog-excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.
                        </p>
                        <a href="#" class="gp-blog-readmore">
                            Read More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gp-blog-card">
                        <div class="gp-blog-image">
                            <img src="<?php //echo esc_url(get_stylesheet_directory_uri() . '/assets/images/bali-blog.jpeg'); 
                                        ?>" alt="">
                        </div>
                        <div class="gp-blog-meta">
                            <span>November 7, 2025</span> • <span>America</span>
                        </div>
                        <h4 class="gp-blog-card-title">
                            Why Bali is the Ultimate Destination Wedding Hotspot for 2026 and 2027
                        </h4>
                        <p class="gp-blog-excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.
                        </p>
                        <a href="#" class="gp-blog-readmore">
                            Read More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gp-blog-card">
                        <div class="gp-blog-image">
                            <img src="<?php //echo esc_url(get_stylesheet_directory_uri() . '/assets/images/bali-blog.jpeg'); 
                                        ?>" alt="">
                        </div>
                        <div class="gp-blog-meta">
                            <span>November 7, 2025</span> • <span>America</span>
                        </div>
                        <h4 class="gp-blog-card-title">
                            Why Bali is the Ultimate Destination Wedding Hotspot for 2026 and 2027
                        </h4>
                        <p class="gp-blog-excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.
                        </p>
                        <a href="#" class="gp-blog-readmore">
                            Read More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="#" class="gp-blog-view-more">
                        View More
                    </a>
                </div>
            </div>
        </div>
    </section> -->


    <section class="recetly-added-itineraries my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="fw-bold mb-4">Recently Added Itineraries</h4>
                </div>
            </div>
            <div class="row justify-content-center g-3">
                <div class="col-12 col-sm-10 col-md-6 col-lg-4 d-flex">
                    <div class="card itinerary-card" style="transform: translateY(0px); box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;">
                        <div style="position:relative;height:200px;overflow:hidden"><img alt="Couple Holiday: 4 Nights In Bangkok And Phuket" loading="lazy" decoding="async" data-nimg="fill" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: cover; color: transparent; transition: transform 0.4s; transform: scale(1);" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/island.webp"></div>
                        <div class="card-body p-3 bg-white">
                            <h6 class="fw-bold mb-2">Couple Holiday: 4 Nights In Bangkok And Phuket</h6>
                            <div class="card-meta small mb-3 d-flex align-items-center gap-1">
                                <i class="bi bi-geo-alt me-1 geo-icon phone-icon"></i>
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" class="bi bi-geo-alt me-1 geo-icon">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"></path>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                                </svg> -->
                                Bangkok (2 Nights, 3 Days) +1 more
                            </div>
                            <div class="card-meta-badges"><span class="card-meta-badge">COUPLE FRIENDLY</span></div>
                        </div>
                        <hr class="m-0">
                        <div class="card-footer d-flex justify-content-between align-items-center px-3 py-3" style="background:#F0F8FF">
                            <div class="pricing-info">
                                <div class="fw-bold" style="font-size:22px">₹43,051</div>
                                <div class="small">2 Nights/Person</div>
                            </div>
                            <div class="user-actions">
                                <i class="bi bi-telephone phone-icon"></i>
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" class="bi bi-telephone phone-icon">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"></path>
                                </svg> -->
                                <?php
                                $contactPage = get_page_by_path('contact-us');
                                ?>
                                <a class="btn btn-coral" href="<?php echo get_permalink($contactPage->ID) ?>">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-lg-4 d-flex">
                    <div class="card itinerary-card" style="transform: translateY(0px); box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;">
                        <div style="position:relative;height:200px;overflow:hidden"><img alt="Friends Retreat: 4 Nights In Bangkok And Pattaya" loading="lazy" decoding="async" data-nimg="fill" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: cover; color: transparent; transition: transform 0.4s; transform: scale(1);" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/party.jpg"></div>
                        <div class="card-body p-3 bg-white">
                            <h6 class="fw-bold mb-2">Friends Retreat: 4 Nights In Bangkok And Pattaya</h6>
                            <div class="card-meta small mb-3 d-flex align-items-center gap-1">
                                <i class="bi bi-geo-alt me-1 geo-icon phone-icon"></i>
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" class="bi bi-geo-alt me-1 geo-icon">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"></path>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                                </svg> -->

                                Pattaya (3 Nights,4 Days) +1 more
                            </div>
                            <div class="card-meta-badges"><span class="card-meta-badge">FRIENDS</span><span class="card-meta-badge">FAMILY</span></div>
                        </div>
                        <hr class="m-0">
                        <div class="card-footer d-flex justify-content-between align-items-center px-3 py-3" style="background:#F0F8FF">
                            <div class="pricing-info">
                                <div class="fw-bold" style="font-size:22px">₹42,000</div>
                                <div class="small">3 Nights/Person</div>
                            </div>
                            <div class="user-actions">
                                <i class="bi bi-telephone phone-icon"></i>
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" class="bi bi-telephone phone-icon">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"></path>
                                </svg> -->
                                <a class="btn btn-coral" href="<?php echo get_permalink($contactPage->ID) ?>">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-lg-4 d-flex">
                    <div class="card itinerary-card" style="transform: translateY(0px); box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;">
                        <div style="position:relative;height:200px;overflow:hidden"><img alt="Family Getaway: 11 Nights In Vietnam" loading="lazy" decoding="async" data-nimg="fill" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: cover; color: transparent; transition: transform 0.4s; transform: scale(1);" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/thai.webp"></div>
                        <div class="card-body p-3 bg-white">
                            <h6 class="fw-bold mb-2">Family Getaway: 11 Nights In Vietnam</h6>
                            <div class="card-meta small mb-3 d-flex align-items-center gap-1">
                                <i class="bi bi-geo-alt me-1 geo-icon phone-icon"></i>
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" class="bi bi-geo-alt me-1 geo-icon">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"></path>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                                </svg> -->

                                Hanoi (5 Nights, 6 Days) +3 more
                            </div>
                            <div class="card-meta-badges"><span class="card-meta-badge">FAMILY</span></div>
                        </div>
                        <hr class="m-0">
                        <div class="card-footer d-flex justify-content-between align-items-center px-3 py-3" style="background:#F0F8FF">
                            <div class="pricing-info">
                                <div class="fw-bold" style="font-size:22px">₹67,800</div>
                                <div class="small">5 Nights/Person</div>
                            </div>
                            <div class="user-actions">
                                <i class="bi bi-telephone phone-icon"></i>
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" class="bi bi-telephone phone-icon">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"></path>
                                </svg> -->
                                <a class="btn btn-coral" href="<?php echo get_permalink($contactPage->ID) ?>">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cta-wrapper">
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
    </section>


    <section class="testimonials py-5">
        <div class="testimonials-decor"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" class="bi bi-chat-quote-fill chat-quote-decor">
                <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M7.194 6.766a1.7 1.7 0 0 0-.227-.272 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.5 2.5 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.5 2.5 0 0 0-.228-.4 1.7 1.7 0 0 0-.227-.273 1.5 1.5 0 0 0-.469-.324l-.008-.004A1.8 1.8 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"></path>
            </svg></div>
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold title"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" class="bi bi-quote quote-inline">
                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"></path>
                    </svg> What Our Travelers Say</h2>
                <p class="sub-title text-muted mt-2">Trusted by thousands of happy travelers</p>
            </div>
            <div class="row g-4">
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
                            <p class="mb-4 testimonial-content">"<!-- -->Everything was perfectly planned. Bali felt magical and stress-free.<!-- -->"</p>
                            <div class="testimonial-meta">
                                <div class="testimonial-name">- <!-- -->Alice W.</div>
                                <div class="testimonial-role">Travel Enthusiasts</div>
                            </div>
                            <div class="testimonial-user"><img alt="Alice W." loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="testimonial-user-img" style="color:transparent" src="<?php echo get_stylesheet_directory_uri() ?>/assets/testimonials/alice.png"></div>
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
                            <p class="mb-4 testimonial-content">"<!-- -->Vietnam trip exceeded expectations. Hotels and transport were excellent.<!-- -->"</p>
                            <div class="testimonial-meta">
                                <div class="testimonial-name">- <!-- -->Mark T.</div>
                                <div class="testimonial-role">Adventure Seeker</div>
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
                                <div class="testimonial-name">- <!-- -->Sophie L.</div>
                                <div class="testimonial-role">Solo Traveler</div>
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
                                <div class="testimonial-name">- <!-- -->James K.</div>
                                <div class="testimonial-role">Business Traveler</div>
                            </div>
                            <div class="testimonial-user"><img alt="James K." loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="testimonial-user-img" style="color:transparent" src="<?php echo get_stylesheet_directory_uri() ?>/assets/testimonials/james.png"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>