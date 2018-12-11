<?php
/**
Plugin Name: Event List Drew
Plugin URI: http://www.reesskennedy.com
Description: Custom Listing of Events
Author: Surgo Systems
Version: 1
Author URI: http://www.reesskennedy.com
*/
add_shortcode( 'events_as_table', 'event_list' );

function event_list() {
	
	include('list-events.php');
	
}

