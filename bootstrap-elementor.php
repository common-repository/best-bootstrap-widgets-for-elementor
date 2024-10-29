<?php
/**
 * Plugin Name: best bootstrap widgets for elementor
 * Description: just best bootstrap widgets for elementor
 * Version:     1.0
 * Author:      saleh attari
 * Author URI:  https://sarzamin-site.ir
 */

function add_widget_categories_bootmentor( $elements_manager ) {

	$elements_manager->add_category(
		'bootmentor-category',
		[
			'title' => esc_html__( 'best bootstrap widgets', 'plugin-name' ),
			'icon' => 'fa fa-plug',
		]
	);
}
add_action( 'elementor/elements/categories_registered', 'add_widget_categories_bootmentor' );

function register_button_widget_bootmentor( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/button-widget.php' );

	$widgets_manager->register( new \Button_Widget_bootmentor() );

}
add_action( 'elementor/widgets/register', 'register_button_widget_bootmentor' );

function register_accordion_widget_bootmentor( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/accordion-widget.php' );

	$widgets_manager->register( new \Accordion_Widget_bootmentor() );

}
add_action( 'elementor/widgets/register', 'register_accordion_widget_bootmentor' );

function register_alert_widget_bootmentor( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/alert-widget.php' );

	$widgets_manager->register( new \Alert_Widget_bootmentor() );

}
add_action( 'elementor/widgets/register', 'register_alert_widget_bootmentor' );

function register_badge_widget_bootmentor( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/badge-widget.php' );

	$widgets_manager->register( new \Badge_Widget_bootmentor() );

}
add_action( 'elementor/widgets/register', 'register_badge_widget_bootmentor' );

function register_card_widget_bootmentor( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/card-widget.php' );

	$widgets_manager->register( new \Card_Widget_bootmentor() );

}
add_action( 'elementor/widgets/register', 'register_card_widget_bootmentor' );

function register_dropdown_widget_bootmentor( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/dropdown-widget.php' );

	$widgets_manager->register( new \Dropdown_Widget_bootmentor() );

}
add_action( 'elementor/widgets/register', 'register_dropdown_widget_bootmentor' );

function register_modal_widget_bootmentor( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/modal-widget.php' );

	$widgets_manager->register( new \Modal_Widget_bootmentor() );

}
add_action( 'elementor/widgets/register', 'register_modal_widget_bootmentor' );


function add_scripts_bootmentor(){
    wp_enqueue_style('bootstrap' , plugin_dir_url( __FILE__ ) . '/assets/bootstrap.min.css' , array() , false , 'all');
    wp_enqueue_script('bootstrap.bundle' , plugin_dir_url( __FILE__ ) . '/assets/bootstrap.bundle.min.js' , array() , false , true);
}
add_action( 'wp_enqueue_scripts', 'add_scripts_bootmentor' );