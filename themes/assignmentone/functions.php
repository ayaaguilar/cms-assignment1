<?php
function mychildtheme_theme_setup() {
  register_nav_menus( array(
    'header' => 'Header menu',
    'footer' => 'Footer menu'
  ) );
}
add_action( 'after_setup_theme', 'mychildtheme_theme_setup' );
// Add Featured image support to our posts
add_theme_support( 'post-thumbnails' );

// Custom footer widget
function cmsclass_widgets_init(){
  register_sidebar(array(
    'name'          => __( 'Footer About Section', 'cmsclass' ),
    'id'            => 'footer-about-section',
    'description'   => __( 'About section', 'cmsclass' ),
    'before_widget' => '<div class="logo-widget">',
    'after_widget'  => '</div>'
  ));
  register_sidebar( array(
    'name'          => __( 'Footer Contact Info', 'cmsclass' ),
    'id'            => 'footer-contact-info',
    'description'   => __( 'Contact info section', 'cmsclass' ),
    'before_widget' => '<div class="about-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));
  register_sidebar( array(
    'name'          => __( 'Footer Social Links', 'cmsclass' ),
    'id'            => 'footer-social-links',
    'description'   => __( 'Social media links section', 'cmsclass' ),
    'before_widget' => '<div class="menu-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));
  register_sidebar( array(
    'name'          => __( 'Footer Extra Section', 'cmsclass' ),
    'id'            => 'footer-extra-section',
    'description'   => __( 'Extra footer section', 'cmsclass' ),
    'before_widget' => '<div class="contact-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));
}
add_action( 'widgets_init', 'cmsclass_widgets_init' );
?>