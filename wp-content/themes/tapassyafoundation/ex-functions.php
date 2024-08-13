<?php

$post_type_path = get_template_directory() . '/inc/post-types/';
$inc_path = get_template_directory() . '/inc/';

require_once($post_type_path.'my_portfolio.php');
require_once($inc_path.'theme-options.php');
//require_once($inc_path.'cmb2-load.php');
require_once($inc_path.'theme-function.php');


//Add theme style
add_action( 'wp_enqueue_scripts', 'rosemont_trucking' );
function rosemont_trucking() {

//style	
$styleArr = add_theme_stylesheet_value("style") ;
    foreach ($styleArr as $key => $styleArrValue) {
     	wp_enqueue_style( $key , $styleArrValue);
     } 
     
//script  
$scriptArr = add_theme_stylesheet_value("script") ;
       foreach ($scriptArr as $key => $scriptArrValue) {
       	wp_enqueue_script($key, $scriptArrValue, array('jquery'),'', true);
       }
}

