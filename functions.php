<?php
/**
 * Mill-Yon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mill-Yon
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function millyon_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Mill-Yon, use a find and replace
		* to change 'millyon' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'millyon', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'millyon' ),
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
			'millyon_custom_background_args',
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
add_action( 'after_setup_theme', 'millyon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function millyon_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'millyon_content_width', 640 );
}
add_action( 'after_setup_theme', 'millyon_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function millyon_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'millyon' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'millyon' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'millyon_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function millyon_scripts() {
	wp_enqueue_style( 'millyon-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'millyon-style', 'rtl', 'replace' );

	wp_enqueue_style( 'millyon-custom', get_template_directory_uri() . '/css/custom.css', array(), '1.1' );

	// jQuery
	wp_register_script( 'jquery', get_template_directory_uri() . '/plugins/jQuery/jquery-3.6.0.min.js', null, null, true );
	wp_enqueue_script('jquery');

	// Slick
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/plugins/slick/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/plugins/slick/slick.css', array(), _S_VERSION );
	wp_register_script( 'slick-script', get_template_directory_uri() . '/plugins/slick/slick.min.js', null, null, false );
	wp_enqueue_script( 'slick-script' );

	// Sliders
	wp_register_script('millyon-sliders', get_template_directory_uri() . '/js/_sliders.js', array(), false, true);
	wp_enqueue_script('millyon-sliders');

	// Custom scripts
	wp_register_script('millyon-scripts', get_template_directory_uri() . '/js/custom.js', array(), false, true);
	wp_enqueue_script('millyon-scripts');
	wp_localize_script( 'millyon-scripts', 'mill', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'millyon_scripts' );

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
 * Custom strings
 */
add_action('init', function() {
	pll_register_string('millyon', 'Zobacz');
	pll_register_string('millyon', 'O nas');
	pll_register_string('millyon', 'Dowiedz się więcej');
	pll_register_string('millyon', 'Działamy z najlepszymi');
	pll_register_string('millyon', 'w liczbach');
	pll_register_string('millyon', 'W sprzedaży');
	pll_register_string('millyon', 'Strona inwestycji');
	pll_register_string('millyon', 'Zobacz film');
	pll_register_string('millyon', 'W przygotowaniu');
	pll_register_string('millyon', 'Zakończone');
	pll_register_string('millyon', 'Aktualności');
	pll_register_string('millyon', 'Nasz zespół');
	pll_register_string('millyon', 'Kontakt');
	pll_register_string('millyon', 'Warszawa');
	pll_register_string('millyon', 'Skontaktuj się z nami');
	pll_register_string('millyon', 'Jeśli zainteresowała Cię któraś z naszych inwestycji, lub masz inne pytania, napisz do nas wiadomość. Skontaktujemy się z tobą.');
	pll_register_string('millyon', 'Imię i Nazwisko');
	pll_register_string('millyon', 'Telefon');
	pll_register_string('millyon', 'Która inwestycja Cię interesuje?');
	pll_register_string('millyon', 'Twoja wiadomość');
	pll_register_string('millyon', 'Wyślij zapytanie');
	pll_register_string('millyon', 'Biura sprzedaży');
	pll_register_string('millyon', 'Nagrody i wyróżnienia');
	pll_register_string('millyon', 'na polskim rynku');
	pll_register_string('millyon', 'sprzedanych mieszkań');
	pll_register_string('millyon', 'zrealizowanych inwestycji');
	pll_register_string('millyon', 'powierzchni inwestycji');
	pll_register_string('millyon', 'Wyrażam zgodę na przetwarzanie danych osobowych na potrzeby odpowiedzi na moje zgłoszenie. Więcej informacji w <a href="/wp-content/uploads/2022/06/polityka_prywatnosci.pdf" target="_blank">polityce prywatności</a>');
});

add_action('wp_ajax_contactForm', 'contactForm');
add_action('wp_ajax_nopriv_contactForm', 'contactForm'); 
function contactForm(){
	$name = isset( $_POST['name'] ) ? $_POST['name'] : '';
	$phone = isset( $_POST['phone'] ) ? $_POST['phone'] : '';
	$mail = isset( $_POST['mail'] ) ? $_POST['mail'] : '';
	$invest = isset( $_POST['dropdown'] ) ? $_POST['dropdown'] : '';
	$usermessage = isset( $_POST['message'] ) ? $_POST['message'] : '';
	$mailto = isset( $_POST['mailto'] ) ? $_POST['mailto'] : '';

	$to = $mailto;
	$subject = '[Mill-yon] Wiadomość ze strony mill-yon.pl';
	$message = "Imię i nazwisko: " . $name . "<br/>
	Telefon: " . $phone . "<br/>
	Mail: " . $mail . "<br/>
	Inwestycja: " . $invest . "<br/>
	Wiadomość: " . $usermessage;
	$headers = "Content-Type: text/html; charset=UTF-8";
	
	$sent = false;
	$sent = wp_mail( $to, $subject, $message, $headers);

	echo $sent;

	wp_die();
}