<?php

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Branches.
	 */

	$labels = array(
		"name" => __( "Branches", "understrap" ),
		"singular_name" => __( "Branch", "understrap" ),
	);

	$args = array(
		"label" => __( "Branches", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'us_portfolio_branch', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "us_portfolio_branch",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "us_portfolio_branch", array( "us_portfolio" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
