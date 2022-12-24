<?php 

wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0', true );


add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo');
add_theme_support( 'post-thumbnails' );

register_sidebar([
    'name' => 'logo Right',
    'id' => 'logoright',
    'before_widget' => '',
    'after_widget' => ''
]);

register_nav_menus([
    'TM' => 'Project_menu'
]);

register_sidebar([
    'name' => 'card Heading',
    'id' => 'c_heading',
    'before_widget' => '',
    'after_widget' => ''
]);

register_sidebar([
    'name' => 'card1',
    'id' => 'card1',
    'before_widget' => '',
    'after_widget' => ''
]);

register_sidebar([
    'name' => 'card2',
    'id' => 'card2',
    'before_widget' => '',
    'after_widget' => ''
]);

register_sidebar([
    'name' => 'card3',
    'id' => 'card3',
    'before_widget' => '',
    'after_widget' => ''
]);

register_sidebar([
    'name' => 'Photo card1',
    'id' => 'p_card1',
    'before_widget' => '',
    'after_widget' => ''
]);

register_sidebar([
    'name' => 'Photo card2',
    'id' => 'p_card2',
    'before_widget' => '',
    'after_widget' => ''
]);
register_sidebar([
    'name' => 'Photo card3',
    'id' => 'p_card3',
    'before_widget' => '',
    'after_widget' => ''
]);
register_sidebar([
    'name' => 'Photo card4',
    'id' => 'p_card4',
    'before_widget' => '',
    'after_widget' => ''
]);

register_sidebar([
    'name' => 'Footer left',
    'id' => 'f_left',
    'before_widget' => '',
    'after_widget' => ''
]);
register_sidebar([
    'name' => 'Footer right',
    'id' => 'f_right',
    'before_widget' => '',
    'after_widget' => ''
]);


?>