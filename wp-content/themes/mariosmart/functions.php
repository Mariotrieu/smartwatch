<?php

/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7-alpha', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function twentyseventeen_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'twentyseventeen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('twentyseventeen');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	add_image_size('twentyseventeen-featured-image', 2000, 1200, true);

	add_image_size('twentyseventeen-thumbnail-avatar', 100, 100, true);

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'top'    => __('Top Menu', 'twentyseventeen'),
			'social' => __('Social Links Menu', 'twentyseventeen'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support(
		'post-formats',
		array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		)
	);

	// Add theme support for Custom Logo.
	add_theme_support(
		'custom-logo',
		array(
			'width'      => 250,
			'height'     => 250,
			'flex-width' => true,
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	// Load regular editor styles into the new block-based editor.
	add_theme_support('editor-styles');

	// Load default block styles.
	add_theme_support('wp-block-styles');

	// Add support for responsive embeds.
	add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'twentyseventeen_setup');



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentyseventeen_widgets_init()
{
	register_sidebar(
		array(
			'name'          => __('Blog Sidebar', 'twentyseventeen'),
			'id'            => 'sidebar-1',
			'description'   => __('Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __('Footer 1', 'twentyseventeen'),
			'id'            => 'sidebar-2',
			'description'   => __('Add widgets here to appear in your footer.', 'twentyseventeen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __('Footer 2', 'twentyseventeen'),
			'id'            => 'sidebar-3',
			'description'   => __('Add widgets here to appear in your footer.', 'twentyseventeen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'twentyseventeen_widgets_init');

/**
 * Enqueues scripts and styles.
 */
function mariosmart_scripts()
{
	// load font
	wp_enqueue_style("font-family", "https://fonts.googleapis.com/css?family=Poppins:400,600,700%7CRoboto:400,400i,700https://fonts.googleapis.com/css?family=Poppins:400,600,700%7CRoboto:400,400i,700");
	wp_enqueue_style('boostrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');
	wp_enqueue_style('icon-css', get_template_directory_uri() . '/assets/css/font-icons.css', array(), '1.1', 'all');
	wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');


	wp_enqueue_script('lazysizes-script', get_template_directory_uri() . '/assets/js/lazysizes.min.js', array(), 1.1, true);
	wp_enqueue_script('jquery-script', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), 1.1, true);
	wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1.1, true);
	wp_enqueue_script('easing-script', get_template_directory_uri() . '/assets/js/easing.min.js', array(), 1.1, true);
	wp_enqueue_script('flickity-script', get_template_directory_uri() . '/assets/js/flickity.pkgd.min.js', array(), 1.1, true);
	wp_enqueue_script('modernizr-script', get_template_directory_uri() . '/assets/js/modernizr.min.js', array(), 1.1, true);
	wp_enqueue_script('scripts-script', get_template_directory_uri() . '/assets/js/scripts.js', array(), 1.1, true);
}
add_action('wp_enqueue_scripts', 'mariosmart_scripts');
