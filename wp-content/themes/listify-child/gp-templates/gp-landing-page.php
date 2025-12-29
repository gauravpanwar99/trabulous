<?php

/**
 * Template Name: Trabulous – Landing Page
 */

if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="gp-landing-page">

    <!-- <section class="gp-hero-banner"
        style="background-image: url('<?php //echo esc_url(get_stylesheet_directory_uri() . '/assets/images/2.jpeg'); ?>');">
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


    <section class="gp-calltoaction-section">
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
                            <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>"
                                class="gp-btn gp-btn-wine gp-cta-button">
                                Online Purchases
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="gp-featured-venues-section gp-section">
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


            <!-- Cards Row -->
            <div class="row gp-featured-cards-row">
                <?php
                $args = [
                    'post_type'      => 'job_listing',
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                    'meta_query'     => [
                        [
                            'key'     => '_featured',
                            'value'   => ['1', 'true', 'yes'],
                            'compare' => 'IN',
                        ],
                    ],
                ];

                $featured_venues = new WP_Query($args);

                if ($featured_venues->have_posts()) :
                    while ($featured_venues->have_posts()) : $featured_venues->the_post();
                ?>

                        <div class="col-md-4">
                            <div class="gp-card-container-homepage">
                                <div class="gp-card-image">
                                    <a href="<?php the_permalink(); ?>" class="gp-card-image-link">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                                        <?php else : ?>
                                            <img
                                                src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/card-placeholder-1.jpg'); ?>"
                                                alt="<?php the_title_attribute(); ?>">
                                        <?php endif; ?>
                                    </a>
                                    <div class="gp-card-badges">
                                        <span class="gp-badge">
                                            <i class="bi bi-lightning-charge"></i> Featured
                                        </span>
                                    </div>
                                    <div class="gp-card-badges">

                                        <?php if (get_field('is_featured') == 'yes') : ?>
                                            <span class="gp-badge gp-badge-featured">
                                                <i class="bi bi-lightning-charge"></i> Featured
                                            </span>
                                        <?php endif; ?>

                                        <?php if (get_field('is_curated') == 'yes') : ?>
                                            <span class="gp-badge gp-badge-curated">
                                                <i class="bi bi-lightbulb"></i> Curated
                                            </span>
                                        <?php endif; ?>

                                    </div>

                                </div>

                                <!-- Title -->
                                <div class="gp-card-title">
                                    <h3>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                </div>


                                <?php
                                $content = get_the_content();
                                if (!empty($content)) :
                                ?>
                                    <p class="gp-card-subtitle">
                                        <?php echo esc_html(gp_trim_by_characters($content, 110)); ?>
                                    </p>
                                <?php endif; ?>




                                <!-- Meta -->
                                <?php
                                $rating_value = get_field('ratings_out_of_5');
                                $rating_count = get_field('number_of_ratings_recieved');

                                ?>
                                <div class="gp-card-meta gp-card-meta-top">

                                    <div class="gp-card-rating">
                                        <i class="bi bi-star-fill"></i>

                                        <?php if ($rating_value) : ?>
                                            <strong><?php echo esc_html($rating_value); ?></strong>
                                        <?php endif; ?>

                                        <?php if ($rating_count) : ?>
                                            <span>(<?php echo esc_html($rating_count); ?>)</span>
                                        <?php endif; ?>
                                    </div>


                                    <div class="gp-card-divider"></div>

                                    <div class="gp-card-location">
                                        <i class="bi bi-geo-alt"></i>
                                        <?php echo esc_html(get_post_meta(get_the_ID(), '_job_location', true)); ?>
                                    </div>

                                </div>
                                <div class="gp-card-response">
                                    <i class="bi bi-chat-dots"></i>
                                    Response within 48 hours
                                </div>

                            </div>
                        </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

                <!-- CARD 1 -->
                <!-- <div class="col-md-4">
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
                </div> -->

                <!-- CARD 1 -->
                <!-- <div class="col-md-4">
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
                </div> -->

            </div>
        </div>

    </section>
    <section class="gp-split-section">
        <!-- <div class="gp-landing-idoabroad-overlay"></div> -->
        <div class="gp-split-image"
            style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/mexico-cta.png'); ?>');">
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
                <!-- <div class="col-md-5 text-center">
                    <img
                        src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/person-placeholder.png'); ?>"
                        alt="Consultation"
                        class="gp-split-side-image" />
                </div> -->
            </div>
        </div>
    </section>

    <section class="gp-landing-listing-labels-containers gp-section">

        <div class="container">

            <!-- Title Row -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="gp-inspiration-title">
                        Let Us Inspire You
                    </h2>
                </div>
            </div>

            <!-- Cards Row -->
            <div class="row g-4">

                <!-- Left Card -->
                <div class="col-md-6">
                    <div class="gp-inspiration-card"
                        style="background-image:url('<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/same-sex-friendly.jpg'); ?>');">
                        <h3 class="gp-inspiration-heading">
                            Same Sex Friendly
                        </h3>
                    </div>
                </div>

                <!-- Right Card -->
                <div class="col-md-6">
                    <div class="gp-inspiration-card"
                        style="background-image:url('<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/thialand-forest.jpg'); ?>');">
                        <h3 class="gp-inspiration-heading">
                            Thailand - Jungle Meets Beach
                        </h3>
                    </div>
                </div>

            </div>

        </div>

    </section>

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
                    <a href="<?php echo esc_url(site_url('/contact-us')); ?>"
                        class="gp-btn gp-btn-wine gp-cta-button">
                        Buy the Pro Toolkit
                    </a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- =========================
     GP BLOG SECTION
    ========================= -->
    <section class="gp-landing-blog-section py-5">

        <div class="container">

            <!-- Title -->
            <div class="row text-center mb-2">
                <div class="col-12">
                    <h2 class="gp-blog-title">
                        Intelligent Planning for Extraordinary Weddings Abroad
                    </h2>
                </div>
            </div>

            <!-- Blog Cards -->
            <div class="row g-4 blog-cards-landing-page">
                <?php
                // Custom query for latest 3 posts
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 4,
                    'order'          => 'DESC',
                    'orderby'        => 'date'
                );

                $latest_posts = new WP_Query($args);

                if ($latest_posts->have_posts()) :
                    while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>

                        <div class="col-md-3">
                            <div class="gp-blog-card">
                                <div class="gp-blog-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="gp-blog-meta">
                                    <span><?php echo get_the_date(); ?></span> •
                                    <span><?php echo get_the_category_list(', '); ?></span>
                                </div>
                                <h4 class="gp-blog-card-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <p class="gp-blog-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="gp-blog-readmore">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                <?php endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No posts found.</p>';
                endif;
                ?>

                <!-- <div class="col-md-3">
                    <div class="gp-blog-card">
                        <div class="gp-blog-image">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/bali-blog.jpeg'); ?>" alt="">
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
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/bali-blog.jpeg'); ?>" alt="">
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
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/bali-blog.jpeg'); ?>" alt="">
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
                </div> -->

                <!-- Repeat 3 more cards -->

            </div>

            <!-- View More -->
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="#" class="gp-blog-view-more">
                        View More
                    </a>
                </div>
            </div>

        </div>

    </section>



</main>

<?php get_footer(); ?>