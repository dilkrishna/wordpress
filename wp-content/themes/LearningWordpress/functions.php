<?php 

function learningwordpress_resources()
{
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningwordpress_resources');


//navigation Menus

register_nav_menus(array(
	'primary'=> __('Primary Menu'),
	'footer'=> __('Footer Menu')
));


// get top ancestor list

function get_top_ancestors_list(){
	global $post;

	if($post->post_parent){

		$a = array_reverse(get_post_ancestors($post->ID));

		return $a[0];

	}
	return $post->ID;
}


// If child has

function has_child(){
	global $post;

	$pages =get_pages('child_of'.$post->ID);
	return count($pages);
}


//customize the excerpt function

function custom_excerpt_length(){
	return 25;
}

add_filter('excerpt_lenght', 'custom_excerpt_length');


//theme set up
function learningWordpress_setup(){

	//navigation Menus

	register_nav_menus(array(
		'primary'=> __('Primary Menu'),
		'footer'=> __('Footer Menu')
	));

// add feature image
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnails',180,150,true);
	add_image_size('banner-thumbnails',920,210, true);


	// add post format support
	add_theme_support('post-formats',array('aside','gallery','link'));
}

add_action('after_setup_theme','learningWordpress_setup');

function addwidgetInit(){
	register_sidebar(array(
		'name'=>'sidebar',
		'id'=>'sidebar1'
	));
	register_sidebar(array(
		'name'=>'Footer Area 1',
		'id'=>'footer1'
	));
	register_sidebar(array(
		'name'=>'Footer Area 2',
		'id'=>'footer2'
	));
	register_sidebar(array(
		'name'=>'Footer Area 3',
		'id'=>'footer3'
	));
	register_sidebar(array(
		'name'=>'Footer Area 4',
		'id'=>'footer4'
	));
}

add_action('widgets_init','addwidgetInit');