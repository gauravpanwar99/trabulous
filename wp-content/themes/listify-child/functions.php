<?php

/**
 * Listify child theme.
 */

/**
 * Enqueue child theme styles - GP STYLES STARTS HERE
 */


if (!defined('ABSPATH')) exit;

function gp_child_enqueue_assets()
{

    /* ------------------------
     * Bootstrap 5 CSS
     * ------------------------ */
    wp_enqueue_style(
        'gp-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        [],
        '5.3.2'
    );

    /* ------------------------
     * Child Theme CSS (Overrides)
     * ------------------------ */
    wp_enqueue_style(
        'gp-child-style',
        get_stylesheet_uri(),
        ['gp-bootstrap'], // IMPORTANT: load after Bootstrap
        wp_get_theme()->get('Version')
    );

    /* ------------------------
     * Bootstrap 5 JS (Optional)
     * ------------------------ */
    wp_enqueue_script(
        'gp-bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.2',
        true
    );
}
add_action('wp_enqueue_scripts', 'gp_child_enqueue_assets', 20);
add_action('after_setup_theme', 'gp_register_footer_menus');
/**
 * GP Fonts – Jost & Merriweather
 */
function gp_enqueue_google_fonts()
{

    wp_enqueue_style(
        'gp-google-fonts',
        'https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&family=Merriweather:wght@300;400;700;900&family=Dancing+Script:wght@300;400;700;800;900&display=swap',
        [],
        null
    );
}
add_action('wp_enqueue_scripts', 'gp_enqueue_google_fonts', 20);

/**
 * GP Icon Library – Bootstrap Icons
 */
function gp_enqueue_icon_library()
{
    wp_enqueue_style(
        'gp-bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css',
        [],
        '1.11.3'
    );
}
add_action('wp_enqueue_scripts', 'gp_enqueue_icon_library', 25);

/**
 * Enqueue child theme styles - GP STYLES ENDS HERE
 */

function listify_child_styles()
{
    wp_enqueue_style('listify-child', get_stylesheet_uri());
}

/** Place any new code below this line */



/**
 * GP Settings - All ACF Options Page related functions
 */

function gp_register_footer_menus()
{
    register_nav_menus([
        'gp_footer_menu_1' => __('Footer Menu 1', 'gp'),
        'gp_footer_menu_2' => __('Footer Menu 2', 'gp'),
        'gp_footer_menu_3' => __('Footer Menu 3', 'gp'),
        'gp_footer_menu_4' => __('Footer Menu 4', 'gp'),
    ]);
}


function gp_get_social_links()
{
    return array(
        'facebook'  => get_field('gp_facebook', 'option'),
        'instagram' => get_field('gp_instagram', 'option'),
        'twitter'   => get_field('gp_twitter', 'option'),
        'linkedin'  => get_field('gp_linkedin', 'option'),
        'youtube'   => get_field('gp_youtube', 'option'),
        'tiktok'     => get_field('gp_tiktok', 'option'),
        'pinterest' => get_field('gp_pinterest', 'option'),
        'snapchat'  => get_field('gp_snapchat', 'option'),
        'reddit'    => get_field('gp_reddit', 'option'),
        'whatsapp'  => get_field('gp_whatsapp', 'option'),
    );
}

function gp_render_social_links($wrapper_class = '', $item_class = '', $show_label = true)
{

    $socials = gp_get_social_links();

    if (empty(array_filter($socials))) {
        return;
    }

    echo '<div class="' . esc_attr($wrapper_class) . '">';

    foreach ($socials as $network => $url) {

        if (empty($url)) {
            continue;
        }

        $icon_map = array(
            'facebook'  => 'bi-facebook',
            'instagram' => 'bi-instagram',
            'twitter'   => 'bi-twitter-x',
            'linkedin'  => 'bi-linkedin',
            'youtube'   => 'bi-youtube',
            'tiktok'    => 'bi-tiktok',
            'pinterest' => 'bi-pinterest',
            'snapchat'  => 'bi-snapchat',
            'reddit'    => 'bi-reddit',
            'whatsapp'  => 'bi-whatsapp',
        );

        echo '<a href="' . esc_url($url) . '" 
                 class="' . esc_attr($item_class) . '" 
                 target="_blank" 
                 rel="noopener noreferrer">';

        echo '<i class="bi ' . esc_attr($icon_map[$network]) . '"></i>';

        if ($show_label) {
            echo ' ' . ucfirst($network);
        }

        echo '</a>';
        echo $wrapper_class == 'gp-contact-social-links' ? '' : '<span class="gp-footer-separator"></span>';
    }

    echo '</div>';
}


/**
 * Trim text by character length (safe for HTML content)
 */
function gp_trim_by_characters($text, $limit = 120, $suffix = '...')
{

    $text = wp_strip_all_tags($text);
    $text = trim($text);

    if (mb_strlen($text) <= $limit) {
        return $text;
    }

    return mb_substr($text, 0, $limit) . $suffix;
}

/**
 * Get icon class for venue taxonomy terms
 *
 * @param WP_Term $term
 * @return string Bootstrap icon class
 */
function gp_get_term_icon($term)
{

    if (!isset($term->slug)) {
        return 'bi-check-circle'; // safety fallback
    }

    $icon_map = [

        // Amenities
        'additional-honeymoon-stay' => 'bi-heart',
        'beauty-service'            => 'bi-brush',
        'disability-access'         => 'bi-universal-access',
        'hair-dressing-service'     => 'bi-scissors',
        'licensed-bar'              => 'bi-cup-straw',
        'on-site-accommodation'     => 'bi-house-door',
        'on-site-chapel'            => 'bi-building',
        'restaurant'                => 'bi-shop',
        'swimming-pool'             => 'bi-water',

        // Venue Themes
        'fairytale'                 => 'bi-stars',
        'luxury'                    => 'bi-gem',
        'palaces'                   => 'bi-bank',
        'private-island'            => 'bi-tree',

    ];

    return $icon_map[$term->slug] ?? 'bi-check-circle';
}
add_action('job_manager_job_filters_start', 'gp_wrap_job_filters_start');
add_action('job_manager_job_filters_end', 'gp_wrap_job_filters_end', 26);
function gp_wrap_job_filters_start()
{
    echo '<div class="gp-job-filters-wrapper">';
}

function gp_wrap_job_filters_end()
{
    echo '</div>';
}


add_action('job_manager_job_filters_search_jobs_start', function () {
    // echo '<div class="gp-filter-row">';
});

add_action('job_manager_job_filters_search_jobs_end', function () {
    // echo '</div>';
});

add_action('all', function ($hook) {
    if (str_contains($hook, 'job_manager')) {
        error_log($hook);
    }
});

function load_swiper_assets()
{
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);

    wp_add_inline_script('swiper-js', "
    new Swiper('.itinerary-swiper', {
      slidesPerView: 3,
      spaceBetween: 30,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
      }
    });

    new Swiper('.inner-swiper', {
      slidesPerView: 1,
      loop: true,
      autoplay: { delay: 3000 }
    });
  ");
}
add_action('wp_enqueue_scripts', 'load_swiper_assets');
