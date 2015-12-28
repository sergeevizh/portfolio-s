<?php

/**
 * Portfolio core functions
 */
class Portfolio_S
{

  function __construct()
  {
    add_action('init', array($this, 'cpt'));
    add_action( 'init', array($this, 'custom_taxonomy') );
  }

  // Register Custom Post Type
  function cpt() {

  	$labels = array(
  		'name'                  => _x( 'Портфолио', 'Post Type General Name', 'portfolio_s' ),
  		'singular_name'         => _x( 'Кейс', 'Post Type Singular Name', 'portfolio_s' ),
  		'menu_name'             => __( 'Портфолио', 'portfolio_s' ),
  		'name_admin_bar'        => __( 'Портфолио', 'portfolio_s' ),
  		'archives'              => __( 'Item Archives', 'portfolio_s' ),
  		'parent_item_colon'     => __( 'Parent Item:', 'portfolio_s' ),
  		'all_items'             => __( 'Список', 'portfolio_s' ),
  		'add_new_item'          => __( 'Создание новой записи', 'portfolio_s' ),
  		'add_new'               => __( 'Добавить', 'portfolio_s' ),
  		'new_item'              => __( 'Новый', 'portfolio_s' ),
  		'edit_item'             => __( 'Изменить', 'portfolio_s' ),
  		'update_item'           => __( 'Update Item', 'portfolio_s' ),
  		'view_item'             => __( 'View Item', 'portfolio_s' ),
  		'search_items'          => __( 'Search Item', 'portfolio_s' ),
  		'not_found'             => __( 'Not found', 'portfolio_s' ),
  		'not_found_in_trash'    => __( 'Not found in Trash', 'portfolio_s' ),
  		'featured_image'        => __( 'Featured Image', 'portfolio_s' ),
  		'set_featured_image'    => __( 'Set featured image', 'portfolio_s' ),
  		'remove_featured_image' => __( 'Remove featured image', 'portfolio_s' ),
  		'use_featured_image'    => __( 'Use as featured image', 'portfolio_s' ),
  		'insert_into_item'      => __( 'Insert into item', 'portfolio_s' ),
  		'uploaded_to_this_item' => __( 'Uploaded to this item', 'portfolio_s' ),
  		'items_list'            => __( 'Items list', 'portfolio_s' ),
  		'items_list_navigation' => __( 'Items list navigation', 'portfolio_s' ),
  		'filter_items_list'     => __( 'Filter items list', 'portfolio_s' ),
  	);
  	$args = array(
  		'label'                 => __( 'Кейс', 'portfolio_s' ),
  		'labels'                => $labels,
  		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', ),
  		'hierarchical'          => false,
  		'public'                => true,
  		'show_ui'               => true,
  		'show_in_menu'          => true,
  		'menu_position'         => 20,
  		'menu_icon'             => 'dashicons-archive',
  		'show_in_admin_bar'     => true,
  		'show_in_nav_menus'     => true,
  		'can_export'            => true,
  		'has_archive'           => true,
  		'exclude_from_search'   => false,
  		'publicly_queryable'    => true,
  		'capability_type'       => 'page',
  	);
  	register_post_type( 'portfolio', $args );



    $labels = array(
    		'name'                       => _x( 'Метки портфеля', 'Taxonomy General Name', 'portfolio_s' ),
    		'singular_name'              => _x( 'Метка портфеля', 'Taxonomy Singular Name', 'portfolio_s' ),
    		'menu_name'                  => __( 'Метки портфеля', 'portfolio_s' ),
    		'all_items'                  => __( 'All Items', 'portfolio_s' ),
    		'parent_item'                => __( 'Parent Item', 'portfolio_s' ),
    		'parent_item_colon'          => __( 'Parent Item:', 'portfolio_s' ),
    		'new_item_name'              => __( 'New Item Name', 'portfolio_s' ),
    		'add_new_item'               => __( 'Add New Item', 'portfolio_s' ),
    		'edit_item'                  => __( 'Edit Item', 'portfolio_s' ),
    		'update_item'                => __( 'Update Item', 'portfolio_s' ),
    		'view_item'                  => __( 'View Item', 'portfolio_s' ),
    		'separate_items_with_commas' => __( 'Separate items with commas', 'portfolio_s' ),
    		'add_or_remove_items'        => __( 'Add or remove items', 'portfolio_s' ),
    		'choose_from_most_used'      => __( 'Choose from the most used', 'portfolio_s' ),
    		'popular_items'              => __( 'Popular Items', 'portfolio_s' ),
    		'search_items'               => __( 'Search Items', 'portfolio_s' ),
    		'not_found'                  => __( 'Not Found', 'portfolio_s' ),
    		'no_terms'                   => __( 'No items', 'portfolio_s' ),
    		'items_list'                 => __( 'Items list', 'portfolio_s' ),
    		'items_list_navigation'      => __( 'Items list navigation', 'portfolio_s' ),
    	);
    	$args = array(
    		'labels'                     => $labels,
    		'hierarchical'               => false,
    		'public'                     => true,
    		'show_ui'                    => true,
    		'show_admin_column'          => true,
    		'show_in_nav_menus'          => true,
    		'show_tagcloud'              => true,
    	);
    	register_taxonomy( 'portfolio-tag', array( 'portfolio' ), $args );
  }

  // Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Категории портфеля', 'Taxonomy General Name', 'portfolio_s' ),
		'singular_name'              => _x( 'Категори портфеля', 'Taxonomy Singular Name', 'portfolio_s' ),
		'menu_name'                  => __( 'Категории портфеля', 'portfolio_s' ),
		'all_items'                  => __( 'All Items', 'portfolio_s' ),
		'parent_item'                => __( 'Parent Item', 'portfolio_s' ),
		'parent_item_colon'          => __( 'Parent Item:', 'portfolio_s' ),
		'new_item_name'              => __( 'New Item Name', 'portfolio_s' ),
		'add_new_item'               => __( 'Add New Item', 'portfolio_s' ),
		'edit_item'                  => __( 'Edit Item', 'portfolio_s' ),
		'update_item'                => __( 'Update Item', 'portfolio_s' ),
		'view_item'                  => __( 'View Item', 'portfolio_s' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'portfolio_s' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'portfolio_s' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'portfolio_s' ),
		'popular_items'              => __( 'Popular Items', 'portfolio_s' ),
		'search_items'               => __( 'Search Items', 'portfolio_s' ),
		'not_found'                  => __( 'Not Found', 'portfolio_s' ),
		'no_terms'                   => __( 'No items', 'portfolio_s' ),
		'items_list'                 => __( 'Items list', 'portfolio_s' ),
		'items_list_navigation'      => __( 'Items list navigation', 'portfolio_s' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'portfolio-category', array( 'portfolio' ), $args );

}


}
$ThePortfolio_S = new Portfolio_S;
