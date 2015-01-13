<?php
/*
Plugin Name: sPortfolio
Plugin URI: http://.../sportfolio (where should people go for this plugin?)
Description: Portfolio by Systemo for public cases, projects and works
Version: 0.1
License: GPL
Author: Systemo
Author URI: http://systemo.biz
*/

function cptui_register_my_cpt_project() {
register_post_type('project', array(
'label' => 'Проекты',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'projects', 'with_front' => 1),
'query_var' => true,
'has_archive' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'taxonomies' => array('post_tag'),
'labels' => array (
  'name' => 'Проекты',
  'singular_name' => 'Проект',
  'menu_name' => 'Проекты',
  'add_new' => 'Add Проект',
  'add_new_item' => 'Add New Проект',
  'edit' => 'Edit',
  'edit_item' => 'Edit Проект',
  'new_item' => 'New Проект',
  'view' => 'View Проект',
  'view_item' => 'View Проект',
  'search_items' => 'Search Проекты',
  'not_found' => 'No Проекты Found',
  'not_found_in_trash' => 'No Проекты Found in Trash',
  'parent' => 'Parent Проект',
)
) ); 
}
add_action('init', 'cptui_register_my_cpt_project');
