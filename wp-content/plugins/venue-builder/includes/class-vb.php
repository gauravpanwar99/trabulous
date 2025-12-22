<?php
if (! defined('ABSPATH')) exit;

class VB_Builder
{
    private static $instance = null;

    public static function get_instance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
        // CPT
        // add_action('init', [$this, 'register_service_post_type']);

        // Admin
        // add_action('admin_menu', [$this, 'admin_menu']);
        add_action('admin_enqueue_scripts', [$this, 'admin_assets']);

        // Frontend
        add_action('wp_enqueue_scripts', [$this, 'frontend_assets']);

        // Admin posts (handlers)
        add_action('admin_post_vb_save_settings', [$this, 'handle_vb_save_settings']);

        add_action('add_meta_boxes', [$this, 'register_vb_meta_box']);
        add_action('save_post', [$this, 'save_vb_post']);

        if (function_exists('acf_add_options_page')) {

            acf_add_options_page(array(
                'page_title'    => 'Venue Global Settings',
                'menu_title'    => 'Venue Settings',
                'menu_slug'     => 'venue-global-settings',
                'capability'    => 'manage_options',
                'position'      => 58,
                'icon_url'      => 'dashicons-admin-generic',
                'redirect'      => false
            ));
        }
    }

    public function admin_assets($hook)
    {

        wp_enqueue_media();
        wp_enqueue_script(
            'vb-gallery-js',
            VB_URL . 'assets/js/vb-gallery.js',
            ['jquery', 'jquery-ui-sortable'],
            null,
            true
        );

        wp_enqueue_style(
            'vb-gallery-css',
            VB_URL . 'assets/css/vb-gallery.css'
        );



        wp_register_style('vb-admin-css', VB_URL . 'assets/css/admin.css', [], VB_VERSION);
        wp_enqueue_style('vb-admin-css');

        wp_register_script('vb-admin-js', VB_URL . 'assets/js/admin.js', ['jquery'], VB_VERSION, true);
        wp_enqueue_script('vb-admin-js');

        // service edit script
        // wp_register_script('vb-service-edit', VB_URL . 'assets/admin/js/service-edit.js', ['jquery'], VB_VERSION, true);

        // localize globals
        // $edit_id = 0;
        // if (isset($_GET['page']) && $_GET['page'] === 'vb-add-service' && ! empty($_GET['id'])) {
        //     $edit_id = absint($_GET['id']);
        // }

        wp_localize_script('vb-admin', 'vb_admin_vars', [
            'ajax_url'   => admin_url('admin-ajax.php'),
            'ajax_post'  => admin_url('admin-post.php'),
            'nonce'      => wp_create_nonce('vb_admin_nonce'),
            // 'edit_id'    => $edit_id,
            'plugin_url' => VB_URL,
        ]);
    }

    public function frontend_assets()
    {

        wp_enqueue_style('vb-frontend-css', VB_URL . 'assets/css/frontend.css', [], VB_VERSION);
        wp_enqueue_script('vb-frontend-js', VB_URL . 'assets/js/frontend.js', ['jquery'], VB_VERSION, true);
        wp_localize_script('vb-frontend', 'vb_frontend_vars', [
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('vb_front_nonce'),
            // 'allowed_filetypes' => get_option('csb_allowed_filetypes', ''),
            // 'social_links' => get_option('csb_social_links', [])

        ]);
    }

    public function handle_save_vb_settings()
    {
        if (! current_user_can('manage_options')) {
            wp_die('Unauthorized', '', ['response' => 403]);
        }


        wp_safe_redirect(admin_url('admin.php?page=csb-settings&saved=1'));
        exit;
    }

    public function register_vb_meta_box()
    {
        add_meta_box(
            'vb_gallery_meta',
            'Gallery Images',
            [$this, 'render_vb_gallery_meta_box'],
            VB_CPT_NAME,
            'normal',
            'default'
        );
    }

    public function render_vb_gallery_meta_box($post)
    {
        wp_nonce_field('save_vb_gallery', 'vb_gallery_nonce');

        $image_ids = get_post_meta($post->ID, '_vb_gallery_images', true);
        $image_ids = $image_ids ? explode(',', $image_ids) : [];

        echo '<div id="vb-gallery-wrapper">';
        echo '<ul id="vb-gallery-images">';

        foreach ($image_ids as $image_id) {
            echo '<li class="image" data-id="' . esc_attr($image_id) . '">
                ' . wp_get_attachment_image($image_id, 'thumbnail') . '
                <span class="remove">&times;</span>
              </li>';
        }

        echo '</ul>';
        echo '<input type="hidden" id="vb_gallery_input" name="vb_gallery_images" value="' . esc_attr(implode(',', $image_ids)) . '">';
        echo '</div>';

        echo '<button type="button" class="button" id="add-vb-gallery">Add Gallery Images</button>';
    }

    public function save_vb_post($post_id)
    {

        if (
            ! isset($_POST['vb_gallery_nonce']) ||
            ! wp_verify_nonce($_POST['vb_gallery_nonce'], 'save_vb_gallery')
        ) {
            return;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
        if (! current_user_can('edit_post', $post_id)) return;

        if (isset($_POST['vb_gallery_images'])) {
            update_post_meta(
                $post_id,
                '_vb_gallery_images',
                sanitize_text_field($_POST['vb_gallery_images'])
            );
        }
    }
}
