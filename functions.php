<?php 
//Add Theme Support
 add_theme_support( 'title-tag' ); // page title
 add_theme_support( 'post-thumbnails' ); // featured images
 add_theme_support( 'post-formats',['aside','gallery','link','image','quote','status','video','audio','chat'] ); // formats allowed
 add_theme_support( 'html5' );
 add_theme_support( 'automatic-feed-links' );
 add_theme_support( 'custom-background' );
 add_theme_support( 'custom-header' );
 add_theme_support( 'custom-logo' );
 add_theme_support( 'customize-selective-refresh-widgets' );
 add_theme_support( 'starter-content' );

// Load in our CSS
function wphierarchy_enqueue_styles() {

 //google fonts
 wp_enqueue_style( 'varela-font-css','https://fonts.googleapis.com/css2?family=Varela+Round&display=swap',[],'','all' ); 
 
 //css
 wp_enqueue_style( 'main-css',get_stylesheet_directory_uri() . '/style.css',['varela-font-css'],time(),'all' ); 
 wp_enqueue_style( 'custom-css',get_stylesheet_directory_uri() . '/assets/css/custom.css',['main-css'],time(),'all' ); 
};
add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles' );

// Load in our JS
function wphierarchy_enqueue_scripts() {
 // wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', [], time(), true );
 wp_enqueue_script( 'jquery-theme-js', get_stylesheet_directory_uri() . '/assets/js/jquery.theme.js', ['jquery'], time(), true );
};
add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_scripts' );


// Register Menu Locations
register_nav_menus( [
 'main-menu' => esc_html__( 'Main Menu','wphierarchy' ),
 'footer-menu' => esc_html__( 'Footer Menu','wphierarchy' )
] );

// Setup Widget Areas
function wphierarchy_widgets_init() {
 register_sidebar( [
  'name' => esc_html__('Main Sidebar', 'wphiearchy'),
  'id' => 'main-sidebar',
  'description' => esc_html__( 'Add widgets for main sidebar here', 'wphierarchy'),
  'before_widget' => '<section class="widget main-sidebar-widget">',
  'after_widget' => '</section>',
  'before_title' => '<h2 class="widget-title">',
  'after_title' => '</h2>'
 ] );
 register_sidebar( [
  'name' => esc_html__('Footer', 'wphiearchy'),
  'id' => 'footer',
  'description' => esc_html__( 'Add widgets for footer here', 'wphierarchy'),
  'before_widget' => '<section class="widget footer-widget">',
  'after_widget' => '</section>',
  'before_title' => '<h2 class="widget-title">',
  'after_title' => '</h2>'
 ] );
 register_sidebar( [
  'name' => esc_html__('Page Sidebar', 'wphiearchy'),
  'id' => 'page-sidebar',
  'description' => esc_html__( 'Add widgets for page sidebar here', 'wphierarchy'),
  'before_widget' => '<section class="widget page-sidebar-widget">',
  'after_widget' => '</section>',
  'before_title' => '<h2 class="widget-title">',
  'after_title' => '</h2>'
 ] );
 register_sidebar( [
  'name' => esc_html__('Front Page Sidebar', 'wphiearchy'),
  'id' => 'front-page-sidebar',
  'description' => esc_html__( 'Add widgets for front-page sidebar here', 'wphierarchy'),
  'before_widget' => '<section class="widget front-page-sidebar-widget">',
  'after_widget' => '</section>',
  'before_title' => '<h2 class="widget-title">',
  'after_title' => '</h2>'
 ] );
}
add_action( 'widgets_init', 'wphierarchy_widgets_init' )


?>