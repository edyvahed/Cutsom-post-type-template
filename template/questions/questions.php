<?php

/*
Plugin Name: questions
Plugin URI: http://www.novamedia.ir/
Description: Nova questions manager
Author: Nova Media
Version: 1.0
Text Domain: question_text_domain

 */
// Register Custom Post Type
add_action( 'plugins_loaded', 'question_textdomin');

function question_textdomin(){
	load_plugin_textdomain('question_text_domain', false, dirname(plugin_basename(__FILE__)) . '/languages');
}
function questions_post_type() {

	$labels = array(
		'name'                => _x( 'questions', 'Post Type General Name', 'question_text_domain' ),
		'singular_name'       => _x( 'question', 'Post Type Singular Name', 'question_text_domain' ),
		'menu_name'           => __( 'questions', 'question_text_domain' ),
		'parent_item_colon'   => __( 'Parent question:', 'question_text_domain' ),
		'all_items'           => __( 'All questions', 'question_text_domain' ),
		'view_item'           => __( 'View question', 'question_text_domain' ),
		'add_new_item'        => __( 'Add New question', 'question_text_domain' ),
		'add_new'             => __( 'Add New', 'question_text_domain' ),
		'edit_item'           => __( 'Edit question', 'question_text_domain' ),
		'update_item'         => __( 'Update question', 'question_text_domain' ),
		'search_items'        => __( 'Search question', 'question_text_domain' ),
		'not_found'           => __( 'Not found', 'question_text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'question_text_domain' ),
	);
	$args = array(
		'label'               => __( 'questions', 'question_text_domain' ),
		'description'         => __( 'Post Type Description', 'question_text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'taxonomies'          => array(),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'menu_icon'           => 'dashicons-cart',
	);
	register_post_type( 'questions', $args );

}

// Hook into the 'init' action
add_action( 'init', 'questions_post_type', 0 );