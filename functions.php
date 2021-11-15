<?php
/**
 * Parrocchia San Pietro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Parrocchia_San_Pietro
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

require_once 'custom_fields.php';

if ( ! function_exists( 'psp_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function psp_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Parrocchia San Pietro, use a find and replace
		 * to change 'psp_theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'psp_theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'psp_theme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'psp_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'psp_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function psp_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'psp_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'psp_theme_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function psp_theme_scripts() {
	wp_enqueue_style( 'psp_theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'psp_theme-css', get_template_directory_uri() . "/css/main.min.css" );

	wp_style_add_data( 'psp_theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'psp_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slick-slider', get_template_directory_uri() . '/js/slick/slick/slick.min.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'psp_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * SETTING UP REQUISITES FOR THIS THEME
 */
require_once get_template_directory() . '/class/class-tgm-plugin-activation.php';

/**
 * Register the required plugins for this theme.
 */
function psp_theme_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // This is an example of how to include a plugin bundled with a theme.
        array(
            'name'               => 'Advanced Custom Fields', // The plugin name.
            'slug'               => 'advanced-custom-fields', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/required_plugins/advanced-custom-fields.5.10.2.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),

        array(
            'name'               => 'Custom Post Type UI', // The plugin name.
            'slug'               => 'custom-post-type-ui', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/required_plugins/custom-post-type-ui.1.10.0.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),

        array(
            'name'               => 'Classic Editor', // The plugin name.
            'slug'               => 'classic-editor', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/required_plugins/classic-editor.1.6.2.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),

        array(
            'name'               => 'Font Awesome', // The plugin name.
            'slug'               => 'font-awesome', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/required_plugins/font-awesome.4.0.4.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),

	    array(
		    'name'               => 'The Events Calendar', // The plugin name.
		    'slug'               => 'the-events-calendar', // The plugin slug (typically the folder name).
		    'source'             => get_template_directory() . '/required_plugins/the-events-calendar.5.10.1.zip', // The plugin source.
		    'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		    'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		    'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		    'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		    'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		    'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
	    )


    );

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
    $config = array(
        'id'           => 'psp_theme',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );
}



add_action( 'tgmpa_register', 'psp_theme_register_required_plugins' );


function include_jQuery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', false, '1.8.3');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'include_jQuery');

add_filter('nav_menu_css_class', 'special_nav_class',10,2);

/**
 * Aggiunge la classe active all'elemento attivo del menu
 *
 * @param $classes
 * @param $item
 * @return mixed
 */
function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

// Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
add_filter( 'use_widgets_block_editor', '__return_false' );


function psp_widget(){
    register_sidebar(array(
        'id' => 'social-links',
        'name' => 'Social Links',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '>',
    ));
    register_sidebar(array(
        'id' => 'footer-menu',
        'name' => 'Footer menu',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '>',
    ));
    register_sidebar(array(
        'id' => 'donate-menu',
        'name' => 'Donate menu',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '>',
    ));
}

add_action('widgets_init', 'psp_widget');
