<?php
/**
 * @package Esc13_Pardot_Tracking
 * @version 1.0.0
 */
/*
Plugin Name: ESC13 ECP Pardot Tracking
Plugin URI: https://github.com/Region13/esc13-pardot-tracking
Description: Loads the Pardot "Website Traffic" Campaign Tracking code on specific pages of teach.esc13.net (ECP)
Author: ESC Region 13
Version: 1.0.0
Text Domain: esc13-pardot-tracking
*/


/*
 * Add html partial to the footer of the page.
 */
function run_esc13_pardot_tracking() {
	if ( is_page( array('path-to-certification', 'requirements', 'program-fees', 'information-sessions', 'contact-us') ) ) {
		$includes = file_get_contents(__DIR__ . '/includes.html');
		echo "<!-- Added by esc13-pardot-tracking plugin !-->\n" . $includes . "\n<!-- End esc13-pardot-tracking block !-->\n";
	}
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'wp_footer', 'run_esc13_pardot_tracking' );