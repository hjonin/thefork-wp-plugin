<?php
/*
Plugin Name: The Fork Plugin
*/

include_once plugin_dir_path( __FILE__ ) . '/booking_widget.php';

// Load CSS
add_action('wp_enqueue_scripts', 'thefork_plugin_style');
function thefork_plugin_style() {
	wp_enqueue_style('thefork-plugin-css', plugins_url('style.css', __FILE__ ));
}

class TheFork_Plugin
{
	public function __construct()
	{
        new TheFork_Booking_Widget();
	}

}

new TheFork_Plugin();
