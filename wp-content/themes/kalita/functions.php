<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen', get_template_directory() . '/languages' );

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
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twentysixteen_content_width', 840 );
}
add_action( 'after_setup_theme', 'twentysixteen_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

if ( ! function_exists( 'twentysixteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own twentysixteen_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentysixteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentysixteen-fonts', twentysixteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Theme stylesheet.
	wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160412', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160412' );
	}

	wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160412', true );

	wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'twentysixteen' ),
		'collapse' => __( 'collapse child menu', 'twentysixteen' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'twentysixteen_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function twentysixteen_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function twentysixteen_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );


/****************** START ADD IMAGE SIZE FUNCTION ************************/

add_image_size('logo_image_size',121,127);
add_image_size('home_banner_image_size',1274,491);
add_image_size('actualitie_image_size',344,194);
add_image_size('category_banner_image_size',1274,692);
add_image_size('actulities_inner_image_size',1100,619);


/*******************END OF IMAGE SIZE FUNCTION **************************/


/****************************START CREATING CUSTOM POST VOTRE RESEAU WITH CATEGORY ********************************/

function my_custom_post_votreReseau() {
$labels = array(
  'name' => 'VotreReseau',
  'singular_name' => 'VotreReseau',
  'add_new' => 'Add VotreReseau',
  'add_new_item' => 'Add New VotreReseau',
  'edit_item' => 'Edit VotreReseau',
  'new_item' => 'New VotreReseau',
  'all_items' => 'All VotreReseau',
  'view_item' => 'View VotreReseau',
  'search_items' => 'Search VotreReseau',
  'not_found' =>  'No VotreReseau found',
  'not_found_in_trash' => 'No VotreReseau found in Trash', 
  'parent_item_colon' => '',
  'menu_name' => 'VotreReseau'
);

$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true, 
  'show_in_menu' => true, 
  'query_var' => true,
  'capability_type' => 'post',
  'has_archive' => true, 
  'hierarchical' => false,
  'menu_position' => null,
  'show_admin_column' => true,
  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
); 

register_post_type( 'votre_reseau', $args ); 
}  
add_action( 'init', 'my_custom_post_votreReseau' );

function my_taxonomies_votreReseau() {
 $labels = array(
   'name' =>  'votreReseau Categories',
'add_new_item' => 'Add New votreReseau category',
'search_items' => 'Search votreReseau Categories',
'edit_item' => 'Edit votreReseau Category',
   'menu_name' =>  'VotreReseau Categories'
 );
 $args = array(
   'labels' => $labels,
   'hierarchical' => true,
   'show_admin_column' => true,
 );
 register_taxonomy( 'votrereseau_category', 'votre_reseau', $args );
}
add_action( 'init', 'my_taxonomies_votreReseau');

/****************************END OF CREATING CUSTOM POST VOTRE RESEAU WITH CATEGORY ********************************/



/****************************START CREATING CUSTOM POST VOUSETVOTRE WITH CATEGORY ********************************/

function my_custom_post_vousEtVotre() {
$labels = array(
  'name' => 'vousEtVotre',
  'singular_name' => 'vousEtVotre',
  'add_new' => 'Add vousEtVotre',
  'add_new_item' => 'Add New vousEtVotre',
  'edit_item' => 'Edit vousEtVotre',
  'new_item' => 'New vousEtVotre',
  'all_items' => 'All vousEtVotre',
  'view_item' => 'View vousEtVotre',
  'search_items' => 'Search vousEtVotre',
  'not_found' =>  'No vousEtVotre found',
  'not_found_in_trash' => 'No vousEtVotre found in Trash', 
  'parent_item_colon' => '',
  'menu_name' => 'VousEtVotre'
);

$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true, 
  'show_in_menu' => true, 
  'query_var' => true,
  'capability_type' => 'post',
  'has_archive' => true, 
  'hierarchical' => false,
  'menu_position' => null,
  'show_admin_column' => true,
  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
); 

register_post_type( 'vous_et_votre', $args ); 
}  
add_action( 'init', 'my_custom_post_vousEtVotre' );

function my_taxonomies_vousEtVotre() {
 $labels = array(
   'name' =>  'VousEtVotre Categories',
'add_new_item' => 'Add New VousEtVotre category',
'search_items' => 'Search VousEtVotre Categories',
'edit_item' => 'Edit VousEtVotre Category',
   'menu_name' =>  'VousEtVotre Categories'
 );
 $args = array(
   'labels' => $labels,
   'hierarchical' => true,
   'show_admin_column' => true,
 );
 register_taxonomy( 'vousetvotre_category', 'vous_et_votre', $args );
}
add_action( 'init', 'my_taxonomies_vousEtVotre');

/****************************END OF CREATING CUSTOM POST VOUSETVOTRE WITH CATEGORY ********************************/


/************** START CODE FOR CREATE CUSTOM POST QUESTION FREQUENTES ******************/ 

function codex_QuestionFrequentes() {
  $labels = array(
    'name' => 'FAQ',
    'singular_name' => 'FAQ',
    'add_new' => 'Add FAQ',
    'add_new_item' => 'Add New FAQ',
    'edit_item' => 'Edit FAQ',
    'new_item' => 'New FAQ',
    'all_items' => 'All FAQ',
    'view_item' => 'View FAQ',
    'search_items' => 'Search FAQ',
    'not_found' =>  'No FAQ found',
    'not_found_in_trash' => 'No FAQ found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'FAQ'
  );
   
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'QuestionFrequentes' ), 
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 

  register_post_type( 'QuestionFrequentes', $args );
}
add_action( 'init', 'codex_QuestionFrequentes' ); 

/************** END OF CODE FOR CREATE CUSTOM POST QUESTION FREQUENTES ******************/ 		


/************** START CODE FOR CREATE CUSTOM POST L’ÉTAT DE VOTRE RÉSEAU ******************/ 

// function codex_létat_de() {
  // $labels = array(
    // 'name' => 'létat_de',
    // 'singular_name' => 'létat_de',
    // 'add_new' => 'Add létat_de',
    // 'add_new_item' => 'Add New létat_de',
    // 'edit_item' => 'Edit létat_de',
    // 'new_item' => 'New létat_de',
    // 'all_items' => 'All létat_de',
    // 'view_item' => 'View létat_de',
    // 'search_items' => 'Search létat_de',
    // 'not_found' =>  'No létat_de found',
    // 'not_found_in_trash' => 'No létat_de found in Trash', 
    // 'parent_item_colon' => '',
    // 'menu_name' => 'L`état_de'
  // );
   
  // $args = array(
    // 'labels' => $labels,
    // 'public' => true,
    // 'publicly_queryable' => true,
    // 'show_ui' => true, 
    // 'show_in_menu' => true, 
    // 'query_var' => true,
    // 'rewrite' => array( 'slug' => 'létat_de' ), 
    // 'capability_type' => 'post',
    // 'has_archive' => true, 
    // 'hierarchical' => false,
    // 'menu_position' => null,
	// 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  // ); 

  // register_post_type( 'létat_de', $args );
// }
// add_action( 'init', 'codex_létat_de' ); 

/************** END OF CODE FOR CREATE CUSTOM POST L’ÉTAT DE VOTRE RÉSEAU ******************/ 		


/************** START CODE FOR CREATE CUSTOM POST L’ACTUALITÉ DE VOTRE RÉSEAU ******************/ 

// function codex_lactualité_de() {
  // $labels = array(
    // 'name' => 'lactualité_de',
    // 'singular_name' => 'lactualité_de',
    // 'add_new' => 'Add lactualité_de',
    // 'add_new_item' => 'Add New lactualité_de',
    // 'edit_item' => 'Edit lactualité_de',
    // 'new_item' => 'New lactualité_de',
    // 'all_items' => 'All lactualité_de',
    // 'view_item' => 'View lactualité_de',
    // 'search_items' => 'Search lactualité_de',
    // 'not_found' =>  'No lactualité_de found',
    // 'not_found_in_trash' => 'No lactualité_de found in Trash', 
    // 'parent_item_colon' => '',
    // 'menu_name' => 'L’actualité de'
  // );
   
  // $args = array(
    // 'labels' => $labels,
    // 'public' => true,
    // 'publicly_queryable' => true,
    // 'show_ui' => true, 
    // 'show_in_menu' => true, 
    // 'query_var' => true,
    // 'rewrite' => array( 'slug' => 'lactualité_de' ), 
    // 'capability_type' => 'post',
    // 'has_archive' => true, 
    // 'hierarchical' => false,
    // 'menu_position' => null,
	// 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  // ); 

  // register_post_type( 'lactualité_de', $args );
// }
// add_action( 'init', 'codex_lactualité_de' ); 

/************** END OF CODE FOR CREATE CUSTOM POST L’ACTUALITÉ DE VOTRE RÉSEAU ******************/ 		



/************** START CODE FOR CREATE CUSTOM POST UN PEU D HISTOIRE ******************/ 

function codex_Un_peu_d_histoire() {
  $labels = array(
    'name' => 'Histoire',
    'singular_name' => 'Histoire',
    'add_new' => 'Add Histoire',
    'add_new_item' => 'Add New Histoire',
    'edit_item' => 'Edit Histoire',
    'new_item' => 'New Histoire',
    'all_items' => 'All Histoire',
    'view_item' => 'View Histoire',
    'search_items' => 'Search Histoire',
    'not_found' =>  'No Histoire found',
    'not_found_in_trash' => 'No Histoire found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Histoire'
  );
   
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'Un_peu_d_histoire' ), 
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 

  register_post_type( 'Un_peu_d_histoire', $args );
}
add_action( 'init', 'codex_Un_peu_d_histoire' ); 

/************** END OF CODE FOR CREATE CUSTOM POST UN PEU D HISTOIRE ******************/ 		



/************** START CODE FOR CREATE CUSTOM POST LÉTAT_DE_VOTRE_RÉSEAU ******************/ 

function codex_lien_utiles() {
  $labels = array(
    'name' => 'LienUtiles',
    'singular_name' => 'LienUtiles',
    'add_new' => 'Add LienUtiles',
    'add_new_item' => 'Add New LienUtiles',
    'edit_item' => 'Edit LienUtiles',
    'new_item' => 'New LienUtiles',
    'all_items' => 'All LienUtiles',
    'view_item' => 'View LienUtiles',
    'search_items' => 'Search LienUtiles',
    'not_found' =>  'No LienUtiles found',
    'not_found_in_trash' => 'No LienUtiles found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Lien Utiles'
  );
    
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'lien_utiles' ), 
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 

  register_post_type( 'lien_utiles', $args );
}
add_action( 'init', 'codex_lien_utiles' ); 

/************** END OF CODE FOR CREATE CUSTOM POST LÉTAT_DE_VOTRE_RÉSEAU ******************/ 		


/************** START CODE FOR CREATE CUSTOM POST LÉTAT_DE_VOTRE_RÉSEAU ******************/ 

function codex_Létat_de_votre_réseaus() {
  $labels = array(
    'name' => 'EtatReseau',
    'singular_name' => 'EtatReseau',
    'add_new' => 'Add EtatReseau',
    'add_new_item' => 'Add New EtatReseau',
    'edit_item' => 'Edit EtatReseau',
    'new_item' => 'New EtatReseau',
    'all_items' => 'All EtatReseau',
    'view_item' => 'View EtatReseau',
    'search_items' => 'Search EtatReseau',
    'not_found' =>  'No EtatReseau found',
    'not_found_in_trash' => 'No EtatReseau found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'EtatReseau'
  );
   
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'Létat_de_votre_réseaus' ), 
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 

  register_post_type( 'Létat_de_votre_réseaus', $args );
}
add_action( 'init', 'codex_Létat_de_votre_réseaus' ); 

/************** END OF CODE FOR CREATE CUSTOM POST LÉTAT_DE_VOTRE_RÉSEAU ******************/ 		




// Modify comments header text in comments
add_filter( 'genesis_title_comments', 'child_title_comments');
function child_title_comments() {
    return __(comments_number( '<h3>No Responses</h3>', '<h3>1 Response</h3>', '<h3>% Responses...</h3>' ), 'genesis');
}
 
// Unset URL from comment form
function crunchify_move_comment_form_below( $fields ) { 
    $comment_field = $fields['comment']; 
    unset( $fields['comment'] ); 
    $fields['comment'] = $comment_field; 
    return $fields; 
} 
add_filter( 'comment_form_fields', 'crunchify_move_comment_form_below' ); 
 
// Add placeholder for Name and Email
function modify_comment_form_fields($fields){
    $fields['author'] = '<p class="comment-form-author">' . '<input id="author" placeholder="Your Name" name="author" type="text" value="' .
				esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
				'<label for="author">' . __( '' ) . '</label> ' .
				( $req ? '<span class="required">*</span>' : '' )  .
				'</p>';
    $fields['email'] = '<p class="comment-form-email">' . '<input id="email" placeholder="Email Address" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" size="30"' . $aria_req . ' />'  .
				'<label for="email">' . __( '' ) . '</label> ' .
				( $req ? '<span class="required">*</span>' : '' ) 
				 .
				'</p>';
	$fields['url'] = '<p class="comment-form-url">' .
			 '<input id="url" name="url" placeholder="Website" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
			'<label for="url">' . __( '', 'domainreference' ) . '</label>' .
	           '</p>';
	
    return $fields;
}
add_filter('comment_form_default_fields','modify_comment_form_fields');



//*****************  Sets the comments to allowed by default  ************************//

function default_comments_on( $data ) {
    if( $data['post_type'] == 'vous_et_votre' ) {
        $data['comment_status'] = 'open';
    }

    return $data;
}
add_filter( 'wp_insert_post_data', 'default_comments_on' );

function default_comments_on1( $data ) {
    if( $data['post_type'] == 'votre_reseau' ) {
        $data['comment_status'] = 'open';
    }

    return $data;
}
add_filter( 'wp_insert_post_data', 'default_comments_on1' );


/**************************Start Wordpress Logo Function*******************************************/

function my_loginlogo()
{
echo '<style type="text/css">
  h1 a {
    background-image: url(' . get_template_directory_uri() . '/images/logo.jpg) !important;
     
  }
</style>';
}
add_action('login_head', 'my_loginlogo');

function put_my_url()
{
  return site_url();
}
add_filter('login_headerurl', 'put_my_url');

/**************************End of Wordpress Logo Function***************************************************/

function get_numerics ($str)
{
preg_match_all('/\d+/', $str, $matches);
return $matches[0];
}



/****************to get the current menu item ans sub item****************/


// add hook
add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu', 10, 2 );
// filter_hook function to react on sub_menu flag
function my_wp_nav_menu_objects_sub_menu( $sorted_menu_items, $args ) {
  if ( isset( $args->sub_menu ) ) {
    $root_id = 0;
    
    // find the current menu item
    foreach ( $sorted_menu_items as $menu_item ) {
      if ( $menu_item->current ) {
        // set the root id based on whether the current menu item has a parent or not
        $root_id = ( $menu_item->menu_item_parent ) ? $menu_item->menu_item_parent : $menu_item->ID;
        break;
      }
    }
    
    // find the top level parent
    if ( ! isset( $args->direct_parent ) ) {
      $prev_root_id = $root_id;
      while ( $prev_root_id != 0 ) {
        foreach ( $sorted_menu_items as $menu_item ) {
          if ( $menu_item->ID == $prev_root_id ) {
            $prev_root_id = $menu_item->menu_item_parent;
            // don't set the root_id to 0 if we've reached the top of the menu
            if ( $prev_root_id != 0 ) $root_id = $menu_item->menu_item_parent;
            break;
          } 
        }
      }
    }
    $menu_item_parents = array();
    foreach ( $sorted_menu_items as $key => $item ) {
      // init menu_item_parents
      if ( $item->ID == $root_id ) $menu_item_parents[] = $item->ID;
      if ( in_array( $item->menu_item_parent, $menu_item_parents ) ) {
        // part of sub-tree: keep!
        $menu_item_parents[] = $item->ID;
      } else if ( ! ( isset( $args->show_parent ) && in_array( $item->ID, $menu_item_parents ) ) ) {
        // not part of sub-tree: away with it!
        unset( $sorted_menu_items[$key] );
      }
    }
    
    return $sorted_menu_items;
  } else {
    return $sorted_menu_items;
  }
}





