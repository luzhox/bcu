<?php // No copiar esta línea

// Register Custom Post Type
function afiliados_post_type() {

	$labels = array(
		'name'                  => _x( 'Afiliados', 'Post Type General Name', 'afiliados_domain' ),
		'singular_name'         => _x( 'Afiliado', 'Post Type Singular Name', 'afiliados_domain' ),
		'menu_name'             => __( 'Afiliados', 'afiliados_domain' ),
		'name_admin_bar'        => __( 'Afiliados', 'afiliados_domain' ),
		'archives'              => __( 'Archivos de Afiliados', 'afiliados_domain' ),
		'attributes'            => __( 'Atributos afiliados', 'afiliados_domain' ),
		'parent_item_colon'     => __( 'Afiliado padre:', 'afiliados_domain' ),
		'all_items'             => __( 'Todos', 'afiliados_domain' ),
		'add_new_item'          => __( 'Añadir nuevo', 'afiliados_domain' ),
		'add_new'               => __( 'Add New', 'afiliados_domain' ),
		'new_item'              => __( 'New Item', 'afiliados_domain' ),
		'edit_item'             => __( 'Edit Item', 'afiliados_domain' ),
		'update_item'           => __( 'Update Item', 'afiliados_domain' ),
		'view_item'             => __( 'View Item', 'afiliados_domain' ),
		'view_items'            => __( 'View Items', 'afiliados_domain' ),
		'search_items'          => __( 'Search Item', 'afiliados_domain' ),
		'not_found'             => __( 'Not found', 'afiliados_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'afiliados_domain' ),
		'featured_image'        => __( 'Featured Image', 'afiliados_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'afiliados_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'afiliados_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'afiliados_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'afiliados_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'afiliados_domain' ),
		'items_list'            => __( 'Items list', 'afiliados_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'afiliados_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'afiliados_domain' ),
	);
	$args = array(
		'label'                 => __( 'Afiliado', 'afiliados_domain' ),
		'description'           => __( 'Afiliación Criopreservación Anual', 'afiliados_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-superhero-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'afiliados_post_type', $args );

}
add_action( 'init', 'afiliados_post_type', 0 );