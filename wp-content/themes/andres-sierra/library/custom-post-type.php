<?php
// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'ted_flush_rewrite_rules' );

// Flush your rewrite rules
function ted_flush_rewrite_rules()
{
	flush_rewrite_rules();
}

// let's create the function for the custom type
function custom_post_example()
{ 
	register_post_type( 'series',
		array( 'labels' => array(
				'name'  => __( 'series', 'ted' ),
				'singular_name' => __( 'series Post', 'ted' ),
				'all_items' => __( 'All series Posts', 'ted' ),
				'add_new'   => __( 'Add New', 'ted' ),
				'add_new_item' => __( 'Add New series Type', 'ted' ),
				'edit'      => __( 'Edit', 'ted' ),
				'edit_item' => __( 'Edit Post Types', 'ted' ),
				'new_item'  => __( 'New Post Type', 'ted' ),
				'view_item' => __( 'View Post Type', 'ted' ),
				'search_items' => __( 'Search Post Type', 'ted' ),
				'not_found'    =>  __( 'Nothing found in the Database.', 'ted' ),
				'not_found_in_trash' => __( 'Nothing found in Trash', 'ted' ),
				'parent_item_colon'  => ''
			),
			'description' => __( 'This is the example custom post type', 'ted' ),
			'public'      => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'show_ui'   => true,
			'query_var' => true,
			'menu_position' => 8,
			'menu_icon'   => 'dashicons-desktop',
			'rewrite'	  => array( 'slug' => 'series', 'with_front' => false ),
			'has_archive' => 'series',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports'     => array( 'title', 'editor', 'thumbnail' )
		)
	);
	
	register_taxonomy_for_object_type( 'category', 'series' );
	register_taxonomy_for_object_type( 'post_tag', 'series' );

	register_post_type( 'blog',
		array( 'labels' => array(
				'name'  => __( 'Blog', 'ted' ),
				'singular_name' => __( 'Blog Post', 'ted' ),
				'all_items' => __( 'All Blog Posts', 'ted' ),
				'add_new'   => __( 'Add New', 'ted' ),
				'add_new_item' => __( 'Add New Blog Type', 'ted' ),
				'edit'      => __( 'Edit', 'ted' ),
				'edit_item' => __( 'Edit Post Types', 'ted' ),
				'new_item'  => __( 'New Post Type', 'ted' ),
				'view_item' => __( 'View Post Type', 'ted' ),
				'search_items' => __( 'Search Post Type', 'ted' ),
				'not_found'    =>  __( 'Nothing found in the Database.', 'ted' ),
				'not_found_in_trash' => __( 'Nothing found in Trash', 'ted' ),
				'parent_item_colon'  => ''
			),
			'description' => __( 'This is the example custom post type', 'ted' ),
			'public'      => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'show_ui'   => true,
			'query_var' => true,
			'menu_position' => 8,
			'menu_icon'   => 'dashicons-desktop',
			'rewrite'	  => array( 'slug' => 'blog', 'with_front' => false ),
			'has_archive' => 'blog',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports'     => array( 'title', 'editor', 'thumbnail' )
		)
	);
	
	register_taxonomy_for_object_type( 'category', 'blog' );
	register_taxonomy_for_object_type( 'post_tag', 'blog' );
}

add_action( 'init', 'custom_post_example');
	
register_taxonomy( 'custom_cat', 
	array( 'series' ),
	array( 'hierarchical' => true,
			'labels' => array(
				'name' => __( 'series Categories', 'ted' ),
				'singular_name' => __( 'series Category', 'ted' ),
				'search_items'  =>  __( 'Search series Categories', 'ted' ),
				'all_items'     => __( 'All series Categories', 'ted' ),
				'parent_item'   => __( 'Parent series Category', 'ted' ),
				'parent_item_colon' => __( 'Parent series Category:', 'ted' ),
				'edit_item'     => __( 'Edit series Category', 'ted' ),
				'update_item'   => __( 'Update series Category', 'ted' ),
				'add_new_item'  => __( 'Add New series Category', 'ted' ),
				'new_item_name' => __( 'New series Category Name', 'ted' )
			),
			'show_admin_column' => true, 
			'show_ui'   => true,
			'query_var' => true,
			'rewrite'   => array( 'slug' => 'series-slug' ),
	)
);

register_taxonomy( 'custom_cat', 
	array( 'blog' ),
	array( 'hierarchical' => true,
			'labels' => array(
				'name' => __( 'Blog Categories', 'ted' ),
				'singular_name' => __( 'Blog Category', 'ted' ),
				'search_items'  =>  __( 'Search Blog Categories', 'ted' ),
				'all_items'     => __( 'All Blog Categories', 'ted' ),
				'parent_item'   => __( 'Parent Blog Category', 'ted' ),
				'parent_item_colon' => __( 'Parent Blog Category:', 'ted' ),
				'edit_item'     => __( 'Edit Blog Category', 'ted' ),
				'update_item'   => __( 'Update Blog Category', 'ted' ),
				'add_new_item'  => __( 'Add New Blog Category', 'ted' ),
				'new_item_name' => __( 'New Blog Category Name', 'ted' )
			),
			'show_admin_column' => true, 
			'show_ui'   => true,
			'query_var' => true,
			'rewrite'   => array( 'slug' => 'blog-slug' ),
	)
);
