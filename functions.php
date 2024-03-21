<?php

if(!defined('ABSPATH')) exit;


class GLThemeClass
{
    public function __construct()
    {
        add_action('init', array($this, 'load_acf'), 2, 99);
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
        add_action('enqueue_block_editor_assets', array($this, 'enqueue'));

        add_action('after_setup_themes', array($this, 'enqueue'));

        add_action('init', array($this, 'register_menus'));
        add_action('init', array($this, 'editor_styles'));
        add_filter('show_admin_bar', '__return_false');
        add_action('init', array($this, 'load_blocks'),99,99);
        add_filter('acf/settings/save_json', array($this, 'save_json'));
        add_filter('acf/settings/load_json', array($this, 'load_json'));
        add_filter('block_categories_all', array($this, 'add_theme_block_category'),2,1);
        add_filter('allowed_block_types_all', array($this, 'filter_allowed_block_types'), 2, 200);
        add_action('init', array($this, 'register_models'));
    }

    public function enqueue()
    {
        wp_enqueue_style('load_main_css', get_theme_file_uri('/assets/dist/style.css'), false, time(), 'all');
        wp_enqueue_script('load_main_js', get_theme_file_uri('/assets/dist/main.js'), array('jquery', 'whr-slider-script'), time(), true);
        wp_enqueue_style('whr-slider', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
        wp_enqueue_script('whr-slider-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);

    }

    public function editor_styles()
    {
        add_theme_support('editor-styles');

    }

    public function enqueue_block_editor_assets()
    {

    }

    public function save_json($path)
    {
        $path = get_stylesheet_directory() . '/fields';
        return $path;
    }

    public function load_json($paths)
    {
        unset($paths[0]);
        $paths[] = get_stylesheet_directory() . '/fields';
        return $paths;
    }

    public function load_acf()
    {
        require_once get_stylesheet_directory() . '/parts/admin/options.php';
    }

    public function load_blocks()
    { // loop over all folders in /parts/blocks
        $blocks = scandir(get_stylesheet_directory() . '/parts/blocks');
        foreach ($blocks as $block) {
            $test = register_block_type(get_stylesheet_directory() . '/parts/blocks/' . $block);
            error_log(print_r($test, true));
        }

    }

    public static function render($template)
    {
        get_header();
        get_template_part('parts/templates/' . $template);
        get_footer();
    }

    public function register_menus()
    {
        register_nav_menus(
            array(
                'main-menu' => __('Hauptnavigation'),
                'footer-menu' => __('Footernavigation'),
            )
        );

    }

    public function theme_support()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        add_theme_support('align-full');
        add_theme_support('align-wide');

    }

    public function add_theme_block_category($categories)
    {$categories = array_merge(
        $categories,
        array(
            array(
                'slug' => 'rebstock',
                'title' => __('Rebstock', 'rebstock'),
            ),
        ));
        return $categories;
    }

    public function filter_allowed_block_types($allowed_block_types, $editor_context)
    {
        $registry = WP_Block_Type_Registry::get_instance();
        $registerd_blocks = $registry->get_all_registered();
        $registerd_blocks = array_keys($registerd_blocks);
        // filter registered blocks by string "acf/"
        $blocks_to_remove = array_filter($registerd_blocks, function ($block) {
            return strpos($block, 'acf/') === false;
        });

        $allowed_block_types = array_diff($registerd_blocks, $blocks_to_remove);
        $allowed_block_types = array_values($allowed_block_types);

        return $allowed_block_types;
    }

    public function register_models()
    {
        $models = scandir(get_stylesheet_directory() . '/models'); #
        foreach ($models as $model) {
            if ($model !== '.' && $model !== '..') {
                require_once get_stylesheet_directory() . '/models/' . $model;
            }
        }
    }

}

$init = new GLThemeClass();
