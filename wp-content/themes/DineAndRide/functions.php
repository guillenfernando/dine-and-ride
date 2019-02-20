<?php

/*Custom CSS*/

add_action( 'wp_enqueue_scripts', 'enqueue_custom_css' );
function enqueue_custom_css() {

    wp_enqueue_style( 'css', '/wp-content/themes/DineAndRide/style.css' );

}


/* Font Awesome */

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {

    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css' );

}

function load_aos() { // load external file
    wp_deregister_script( 'aos' ); // deregisters the default WordPress jQuery
    wp_register_script('aos', ("https://unpkg.com/aos@2.3.1/dist/aos.js"), false);
    wp_enqueue_script('aos');
}
add_action('wp_enqueue_scripts', 'load_aos');

function js() { // load external file
    wp_deregister_script( 'js' ); // deregisters the default WordPress jQuery
    wp_register_script('js', ("https://code.jquery.com/jquery-3.3.1.min.js"), false);
    wp_enqueue_script('js');
}
add_action('wp_enqueue_scripts', 'js');

function popper() { // load external file
    wp_deregister_script( 'bpopper' ); // deregisters the default WordPress jQuery
    wp_register_script('bpopper', ("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"), false);
    wp_enqueue_script('bpopper');
}
add_action('wp_enqueue_scripts', 'popper');

function bootstrap() { // load external file
    wp_deregister_script( 'bjquery' ); // deregisters the default WordPress jQuery
    wp_register_script('bjquery', ("https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"), false);
    wp_enqueue_script('bjquery');
}
add_action('wp_enqueue_scripts', 'bootstrap');

function customJS(){
    wp_deregister_script('script');
    wp_register_script('script', ('/wp-content/themes/DineAndRide/script.js'), true);
    wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'customJS');

/*Menus*/
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu'),
            'booking-menu' => __( 'Second Menu')
        )
    );
}
add_action( 'init', 'register_my_menus' );

/*remove margin from the nav*/
add_action('get_header', 'my_filter_head');

function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_filter( 'show_admin_bar', '__return_false' );

