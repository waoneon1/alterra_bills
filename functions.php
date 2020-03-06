<?php
/**
 * alterra_bill functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package alterra_bill
 */

if ( ! function_exists( 'bill_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bill_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on alterra_bill, use a find and replace
		 * to change 'bill' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bill', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'bill' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bill_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'bill_setup' );

/**
 * 
 * Image Processing
 *
 */
if ( ! function_exists( 'bill_add_image_size' ) ) :
	
	function bill_add_image_size() {
		add_image_size( 'bill_why_choose', 490, 400, true );
		add_image_size( 'bill_praktik', 385, 270, true );
		add_image_size( 'bill_telco', 202, 88, true );
		add_image_size( 'bill_testi', 101, 101, true );
	}

endif;
add_action( 'after_setup_theme', 'bill_add_image_size' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bill_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bill_content_width', 640 );
}
add_action( 'after_setup_theme', 'bill_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bill_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bill' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bill' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bill_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bill_scripts() {
	wp_enqueue_style( 'bill-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
	wp_enqueue_style( 'bill-boostrap', get_template_directory_uri() . '/assets/vendor/bootstrap/bootstrap.min.css');
	wp_enqueue_style( 'bill-slick', get_template_directory_uri() . '/assets/vendor/slick/slick.css');
	wp_enqueue_style( 'bill-slick-theme', get_template_directory_uri() . '/assets/vendor/slick/slick-theme.css');
	wp_enqueue_style( 'bill-altpay-style', get_template_directory_uri() . '/assets/alt-pay-style.css');
	wp_enqueue_style( 'bill-style', get_stylesheet_uri(), array(), '1.2' );

	wp_enqueue_script( 'bill-jquery', get_template_directory_uri() . '/assets/vendor/jquery.min.js', array(), '1.0', false );
	wp_enqueue_script( 'bill-lottie', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.7/lottie.min.js', array(), '1.0', false );
	wp_enqueue_script( 'bill-boostrap', get_template_directory_uri() . '/assets/vendor/bootstrap/bootstrap.min.js' );
	wp_enqueue_script( 'bill-img2svg', get_template_directory_uri() . '/assets/js/img2svg.js', array(), '1.0', true );
	wp_enqueue_script( 'bill-slick', get_template_directory_uri() . '/assets/vendor/slick/slick.js', array(), '1.0', true );
	wp_enqueue_script( 'bill-combo-box', get_template_directory_uri() . '/assets/js/combo-box.js', array(), '1.0', true);
	wp_enqueue_script( 'bill-header', get_template_directory_uri() . '/assets/js/header.js', array(), '1.0', true );

	?>
	<script type="text/javascript">
		var altp_burger_data = "<?php echo get_template_directory_uri() ?>/assets/data/";
	</script>
	<?php

	
}
add_action( 'wp_enqueue_scripts', 'bill_scripts' );

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
 * option setting
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

/**
 * title to slug
 */

function title2slug($string) {
	$string = strip_tags($string);
	$string = strtolower($string);
	$string = str_replace(' ', '-', $string);

	return $string;
}