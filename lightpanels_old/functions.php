<?php
/**
 * lightpanels functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lightpanels
 */

if ( ! function_exists( 'lightpanels_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lightpanels_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on lightpanels, use a find and replace
	 * to change 'lightpanels' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'lightpanels', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'primary', 'lightpanels' ),
		'menu-2' => esc_html__( 'secondary', 'lightpanels' ),
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
	add_theme_support( 'custom-background', apply_filters( 'lightpanels_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'lightpanels_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lightpanels_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lightpanels_content_width', 640 );
}
add_action( 'after_setup_theme', 'lightpanels_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lightpanels_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lightpanels' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lightpanels' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'logo-h', 'lightpanels' ),
		'id'            => 'logo-h',
		'description'   => esc_html__( 'Здесь вставляем картинку логотипа в шапке запись формата: <img src="http://svetolimp.ru/wp-content/uploads/2017/06/logo-h.jpg" width="220" height="100" alt="Светопанели Олимп" />', 'lightpanels' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'logo-f', 'lightpanels' ),
		'id'            => 'logo-f',
		'description'   => esc_html__( 'Здесь вставляем картинку логотипа в подвале запись формата: <img src="http://svetolimp.ru/wp-content/uploads/2017/06/logo-f.jpg" width="220" height="100" alt="Светопанели Олимп" />', 'lightpanels' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'social_link', 'lightpanels' ),
		'id'            => 'social_link',
		'description'   => esc_html__( 'Add html with social links here.
		<a class="social-btn social-vk" href="#">в контакте <span></span></a>
		<a class="social-btn social-f" href="#">фэйсбук<span></span></a>
		<a class="social-btn social-tw" href="#">твиттер<span></span></a>
		<a class="social-btn social-mail" href="#">почта<span></span></a>', 'lightpanels' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'phone', 'lightpanels' ),
		'id'            => 'phone',
		'description'   => esc_html__( 'Add phone here.
		<a href="tel:+79000000000"><span class="header-icon"></span>+ 7 900 000 00 00</a>', 'lightpanels' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'work_filds', 'lightpanels' ),
		'id'            => 'work_filds',
		'description'   => esc_html__( 'Время работы добавить сюда.
		По будням : с 9:00 до 22:00 <br>
		Без выходных', 'lightpanels' ),
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'adress', 'lightpanels' ),
		'id'            => 'adress',
		'description'   => esc_html__( 'Add adress here.', 'lightpanels' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '</p>',
		'after_title'   => '<p>',
	) );
}
add_action( 'widgets_init', 'lightpanels_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lightpanels_scripts() {
	wp_enqueue_style( 'lightpanels-style', get_stylesheet_uri() );

	wp_enqueue_script( 'lightpanels-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'lightpanels-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lightpanels_scripts' );

remove_action( 'wp_head', 'rsd_link' );

remove_action( 'wp_head', 'wp_generator' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load TGM Plugin.
 */
require get_template_directory() . '/tgm/lightpanels.php';
