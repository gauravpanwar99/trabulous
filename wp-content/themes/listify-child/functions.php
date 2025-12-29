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


// function listify_child_add_custom_listing_data($data, $listing)
// {

//     // Get listing post safely
//     $post = get_post($listing->get_id());

//     // Use post_content
//     $content = apply_filters('the_content', $post->post_content);

//     // Extract first <p> tag
//     if (preg_match('/<p[^>]*>(.*?)<\/p>/is', $content, $match)) {
//         $content = $match[1];
//     }

//     // Remove strong tags WITH their content
//     $content = preg_replace('/<strong[^>]*>.*?<\/strong>/is', '', $content);

//     // Remove any heading h1-h6 WITH their content
//     $content = preg_replace('/<h[1-6][^>]*>.*?<\/h[1-6]>/is', '', $content);

//     // Remove any remaining unwanted HTML
//     $content = wp_strip_all_tags($content);

//     // Final trim
//     $content = trim($content);

//     // Add to data
//     $data['listingcontent'] = $content;
//     $data['cardDisplay']['listingcontent'] = true;


//     /**
//      * ADD BY GAURAV
//      */

//     // Post basics
//     $data['post_id']   = $post->ID;
//     $data['post_content']   = gp_trim_by_characters(strip_tags($post->post_content), 100, '...');

//     // Featured image
//     $featured = get_the_post_thumbnail_url($post->ID, 'large');

//     if (! $featured) {
//         $featured = get_stylesheet_directory_uri() . '/assets/images/venue-placeholder.jpg';
//     }

//     $data['featured_image'] = $featured;
//     $data['i_do_verified_image_url'] = get_stylesheet_directory_uri() . '/assets/images/ido-verified-badge.png';

//     $data['locationModified'] = gp_trim_by_characters(get_post_meta($post->ID, '_job_location', true), 22, '..');

//     // ACF fields
//     if (function_exists('get_field')) {
//         $data['acf'] = [
//             'ido_verified' => get_field('ido_verified', $post->ID),
//             'is_featured'  => get_field('is_featured', $post->ID),
//             'is_curated'   => get_field('is_curated', $post->ID),
//             'guest_size'   => get_field('guest_size', $post->ID),
//         ];
//     }




//     return $data;
// }

// add_filter('listify_get_listing_to_array', 'listify_child_add_custom_listing_data', 10, 2);


/**
 * Add Featured Upload Image field under Featured Listing checkbox
 */
/*
function listify_child_featured_image_field( $fields ) {
 
    $fields['featured_icon'] = array(
        'label'       => __( 'Featured Listing icon', 'listify-child' ),
        'type'        => 'file',
        'description' => __( 'Upload image icon to show on featured listings', 'listify-child' ),
        'priority'    => 15, // Featured Listing ke bilkul niche aayega
        'sanitize_callback' => 'esc_url_raw',
    );
 
    return $fields;
}
add_filter( 'job_manager_job_listing_data_fields', 'listify_child_featured_image_field' );*/


// function listify_child_claimed_ribbon_script()
// {

//     wp_enqueue_script('jquery');

//     $custom_js = "
//         jQuery(function($){

//             function applyClaimedClass() {
//                 if ( $('.listing-entry-company-image').length > 0 && $('.claimed-ribbon').length > 0 ) {
//                     $('.claimed-ribbon').addClass('company-image-claimed-ribbon');
//                 }
//             }

//             // Run once on load
//             applyClaimedClass();

//             // Observe dynamic DOM changes (important for underscore.js templates)
//             const observer = new MutationObserver(function(mutations){
//                 applyClaimedClass();
//             });

//             observer.observe(document.body, {
//                 childList: true,
//                 subtree: true
//             });

//         });
//     ";

//     wp_add_inline_script('jquery', $custom_js);


//     wp_enqueue_script(
//         'idoabroad_script',
//         get_stylesheet_directory_uri() . '/assets/js/idoabroad.js',
//         ['jquery'],
//         '1.0',
//         true
//     );

//     wp_localize_script('idoabroad_script', 'ajax_object', [
//         'ajax_url' => admin_url('admin-ajax.php')
//     ]);
// }
// add_action('wp_enqueue_scripts', 'listify_child_claimed_ribbon_script');


// function listify_child_customize_register($wp_customize)
// {

//     $wp_customize->add_setting(
//         'listing-single-rating-checkbox',
//         array(
//             'default'           => true, // Default: SHOW rating
//             'sanitize_callback' => 'wp_validate_boolean',
//         )
//     );

//     $wp_customize->add_control(
//         'listing-single-rating-checkbox',
//         array(
//             'label'    => __('Show Rating on Single Listing', 'listify'),
//             'type'     => 'checkbox',
//             'section'  => 'single-listing',
//             'priority' => 30,
//         )
//     );
// }
// add_action('customize_register', 'listify_child_customize_register');


// add_action('wp_ajax_get_categories_by_region', 'get_categories_by_region');
// add_action('wp_ajax_nopriv_get_categories_by_region', 'get_categories_by_region');

// function get_categories_by_region()
// {

//     $region_id = isset($_POST['region_id']) ? intval($_POST['region_id']) : 0;

//     if ($region_id === 0) {
//         // get all job_listing posts
//         $all_posts = get_posts([
//             'post_type'      => 'job_listing',
//             'posts_per_page' => -1
//         ]);

//         $category_counts = [];

//         foreach ($all_posts as $post) {
//             $terms = wp_get_post_terms($post->ID, 'job_listing_category');

//             if (!empty($terms) && !is_wp_error($terms)) {
//                 foreach ($terms as $t) {

//                     if (!isset($category_counts[$t->term_id])) {
//                         $category_counts[$t->term_id] = [
//                             'name'  => $t->name,
//                             'count' => 0
//                         ];
//                     }

//                     $category_counts[$t->term_id]['count']++;
//                 }
//             }
//         }

//         // Build HTML
//         $html = '<option value="0">All Categories</option>';

//         foreach ($category_counts as $term_id => $data) {
//             $html .= '<option value="' . $term_id . '">' . $data['name'] . ' (' . $data['count'] . ')</option>';
//         }

//         echo $html;
//         wp_die();
//     }


//     // -------------------------------------------------
//     // CASE 2: region_id > 0 → filter categories by region
//     // -------------------------------------------------

//     $args = [
//         'post_type' => 'job_listing',
//         'posts_per_page' => -1,
//         'tax_query' => [
//             [
//                 'taxonomy' => 'job_listing_region',
//                 'field'    => 'term_id',
//                 'terms'    => $region_id
//             ]
//         ]
//     ];

//     $posts = get_posts($args);

//     if (empty($posts)) {
//         echo '<option value="">No category found</option>';
//         wp_die();
//     }

//     $category_counts = [];

//     foreach ($posts as $post) {
//         $terms = wp_get_post_terms($post->ID, 'job_listing_category');

//         if (!empty($terms) && !is_wp_error($terms)) {
//             foreach ($terms as $t) {

//                 if (!isset($category_counts[$t->term_id])) {
//                     $category_counts[$t->term_id] = [
//                         'name'  => $t->name,
//                         'count' => 0
//                     ];
//                 }

//                 $category_counts[$t->term_id]['count']++;
//             }
//         }
//     }

//     $html = '<option value="">Select Category</option>';

//     foreach ($category_counts as $term_id => $data) {
//         $html .= '<option value="' . $term_id . '">' . $data['name'] . ' (' . $data['count'] . ')</option>';
//     }

//     echo $html;
//     wp_die();
// }




// add_filter('listify_wp_job_manager_filters_dropdown_category', 'add_category_counts', 10, 2);

// function add_category_counts($dropdown_args, $atts)
// {

//     $dropdown_args['show_count'] = true;

//     return $dropdown_args;
// }

// add_filter('listify_job_listing_region_dropdown_args', function ($args) {
//     $args['hide_empty'] = true;
//     return $args;
// });




            // add_filter('listify_listing_card_data', function ($data, $post) {

            //     $data['post_id_gaurav'] = $post->ID;

            //     if (function_exists('get_fields')) {
            //         $data['acf'] = get_fields($post->ID);
            //     }

            //     return $data;
            // }, 10, 2);


/**
 * GP Settings - All ACF Options Page related functions
 */

function gp_register_footer_menus()
{
    register_nav_menus([
        'gp_footer_menu_1' => __('GP Footer Menu 1', 'gp'),
        'gp_footer_menu_2' => __('GP Footer Menu 2', 'gp'),
        'gp_footer_menu_3' => __('GP Footer Menu 3', 'gp'),
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
