<?php
/* register post type*/   

add_action('init', function() {
	register_post_type('resources', [
		'label' => __('resources', 'txtdomain'),
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-book',
		'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments'],
		'show_in_rest' => true,
		'rewrite' => ['slug' => 'resources'],
		'taxonomies' => ['resources_author', 'resources_genre'],
		'labels' => [
			'singular_name' => __('resources', 'txtdomain'),
			'add_new_item' => __('Add new resources', 'txtdomain'),
			'new_item' => __('New resources', 'txtdomain'),
			'view_item' => __('View resources', 'txtdomain'),
			'not_found' => __('No resources found', 'txtdomain'),
			'not_found_in_trash' => __('No resources found in trash', 'txtdomain'),
			'all_items' => __('All resources', 'txtdomain'),
			'insert_into_item' => __('Insert into resources', 'txtdomain')
		],		
	]);
 
	register_taxonomy('resources_article', ['resources'], [
		'label' => __('Article', 'txtdomain'),
		'hierarchical' => true,
		'rewrite' => ['slug' => 'resources_article'],
		'show_admin_column' => true,
		'show_in_rest' => true,
		'labels' => [
			'singular_name' => __('Articles', 'txtdomain'),
			'all_items' => __('All Articles', 'txtdomain'),
			'edit_item' => __('Edit Articles', 'txtdomain'),
			'view_item' => __('View Articles', 'txtdomain'),
			'update_item' => __('Update Articles', 'txtdomain'),
			'add_new_item' => __('Add New Articles', 'txtdomain'),
			'new_item_name' => __('New Articles Name', 'txtdomain'),
			'search_items' => __('Search Articles', 'txtdomain'),
			'parent_item' => __('Parent Articles', 'txtdomain'),
			'parent_item_colon' => __('Parent Articles:', 'txtdomain'),
			'not_found' => __('No Articles found', 'txtdomain'),
		]
	]);
	register_taxonomy_for_object_type('resources_article', 'resources');


    register_taxonomy('resources_download', ['resources'], [
		'label' => __('Downloads', 'txtdomain'),
		'hierarchical' => true,
		'rewrite' => ['slug' => 'resources_download'],
		'show_admin_column' => true,
		'show_in_rest' => true,
		'labels' => [
			'singular_name' => __('Download', 'txtdomain'),
			'all_items' => __('All Download', 'txtdomain'),
			'edit_item' => __('Edit Download', 'txtdomain'),
			'view_item' => __('View Download', 'txtdomain'),
			'update_item' => __('Update Download', 'txtdomain'),
			'add_new_item' => __('Add New Download', 'txtdomain'),
			'new_item_name' => __('New Download  Name', 'txtdomain'),
			'search_items' => __('Search Download', 'txtdomain'),
			'parent_item' => __('Parent Download', 'txtdomain'),
			'parent_item_colon' => __('Parent Download:', 'txtdomain'),
			'not_found' => __('No Download found', 'txtdomain'),
		]
	]);
	register_taxonomy_for_object_type('resources_download', 'resources');
 

        
    register_taxonomy('resources_download', ['resources'], [
		'label' => __('Downloads', 'txtdomain'),
		'hierarchical' => true,
		'rewrite' => ['slug' => 'resources_download'],
		'show_admin_column' => true,
		'show_in_rest' => true,
		'labels' => [
			'singular_name' => __('Download', 'txtdomain'),
			'all_items' => __('All Download', 'txtdomain'),
			'edit_item' => __('Edit Download', 'txtdomain'),
			'view_item' => __('View Download', 'txtdomain'),
			'update_item' => __('Update Download', 'txtdomain'),
			'add_new_item' => __('Add New Download', 'txtdomain'),
			'new_item_name' => __('New Download  Name', 'txtdomain'),
			'search_items' => __('Search Download', 'txtdomain'),
			'parent_item' => __('Parent Download', 'txtdomain'),
			'parent_item_colon' => __('Parent Download:', 'txtdomain'),
			'not_found' => __('No Download found', 'txtdomain'),
		]
	]);
	register_taxonomy_for_object_type('resources_download', 'resources');
});