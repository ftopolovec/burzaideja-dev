<?php 
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'article-thumb', 715, 715 ); //300 pixels wide (and unlimited height)
	//add_image_size( 'post-thumb-crop-300-169', 300, 169, true ); //(cropped)
}

function burzaideja_setup() {
	/*
	 * Makes Twenty Twelve available for translation.
	*
	* Translations can be added to the /languages/ directory.
	* If you're building a theme based on Twenty Twelve, use a find and replace
	* to change 'burzaideja' to the name of your theme in all the template files.
	*/
	load_theme_textdomain( 'burzaideja', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	//add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	//add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'burzaideja' ),
		'social'  => __( 'Social Links Menu', 'burzaideja' ),
	) );

	/*
	 * This theme supports custom background color and image,
	* and here we also set up the default background color.
	*/
	//add_theme_support( 'custom-background', array(
	//'default-color' => 'e6e6e6',
	//) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'burzaideja_setup' );

/**
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function burzaideja_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		//$title = "$title $sep $site_description";
		$title = "$title";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'burzaideja' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'burzaideja_wp_title', 10, 2 );

function disable_wp_emojicons() {

	// all actions related to emojis
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

	// filter to remove TinyMCE emojis
	add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/**
 * Extend the default WordPress body classes.
 *
 * Extends the default WordPress body class to denote:
 * 1. Using a full-width layout, when no active widgets in the sidebar
 *    or full-width template.
 * 2. Front Page template: thumbnail in use and number of sidebars for
 *    widget areas.
 * 3. White or empty background color to change the layout and spacing.
 * 4. Custom fonts enabled.
 * 5. Single or multiple authors.
 *
 *
 * @param array $classes Existing class values.
 * @return array Filtered class values.
 */
function burzaideja_body_class( $classes ) {
	$background_color = get_background_color();
	$background_image = get_background_image();

	if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'page-templates/full-width.php' ) )
		$classes[] = 'full-width';

	if ( is_page_template( 'page-templates/front-page.php' ) ) {
		$classes[] = 'template-front-page';
		if ( has_post_thumbnail() )
			$classes[] = 'has-post-thumbnail';
		if ( is_active_sidebar( 'sidebar-2' ) && is_active_sidebar( 'sidebar-3' ) )
			$classes[] = 'two-sidebars';
	}

	if ( empty( $background_image ) ) {
		if ( empty( $background_color ) )
			$classes[] = 'custom-background-empty';
		elseif ( in_array( $background_color, array( 'fff', 'ffffff' ) ) )
		$classes[] = 'custom-background-white';
	}

	// Enable custom font class only if the font CSS is queued to load.
	if ( wp_style_is( 'burzaideja-fonts', 'queue' ) )
		$classes[] = 'custom-font-enabled';

	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	return $classes;
}
add_filter( 'body_class', 'burzaideja_body_class' );

/**
 * Register widget area.
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function burzaideja_widgets_init() {
	register_sidebar( array(
	'name'          => __( 'Glavni sidebar', 'burzaideja' ),
	'id'            => 'sidebar-1',
	'description'   => __( 'Add widgets here to appear in your sidebar.', 'burzaideja' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'burzaideja_widgets_init' );

function burzaideja_scripts() {
	wp_enqueue_style( 'burzaideja-bootstrap-min', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'burzaideja-fancy-css', get_template_directory_uri() . '/fancybox/jquery.fancybox.css' );
	wp_enqueue_style( 'burzaideja-style-orig', get_template_directory_uri() . '/style.css' );
	//wp_enqueue_style( 'burzaideja-style', get_stylesheet_uri() ); //ovdje otkomentirati za uključenje style.css iz CHILD teme
	wp_enqueue_script( 'burzaideja-jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array(), '20141010', true );
	wp_enqueue_script( 'burzaideja-bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '20141010', true );
	wp_enqueue_script( 'burzaideja-fancyjs', get_template_directory_uri() . '/fancybox/jquery.fancybox.js', array(), '20160213', true );
	wp_enqueue_script( 'burzaideja-website', get_template_directory_uri() . '/js/website.js', array(), '20160215', true );
}
add_action( 'wp_enqueue_scripts', 'burzaideja_scripts' );

remove_action('wp_head', 'wp_generator');

require_once('include/wp_bootstrap_navwalker.php');

/*-----------------------------------------
 Check if a page has any children / subpages
-----------------------------------------*/
function has_children($post_id) {
	$children = get_pages('child_of=$post_id');
	if( count( $children ) != 0 ) { return true; } // Has Children
	else { return false; } // No children
}

?>