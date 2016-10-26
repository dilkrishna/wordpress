<?php
add_action('wp_enqueue_scripts', 'wl_removeScripts' , 20);
function wl_removeScripts() {
//De-Queuing Styles sheet 
wp_dequeue_style( 'flat-blue',get_template_directory_uri() .'/css/skins/flat-blue.css'); 
//EN-Queing Style sheet 
wp_enqueue_style('lite-brown', get_stylesheet_directory_uri() . '/css/skins/pink.css');
}?>