<?php

	/**
	 * Elgg dashboard
	 * 
	 * @package Elgg
	 * @subpackage Core

	 * @author Curverider Ltd

	 * @link http://elgg.org/
	 */

	// Get the Elgg engine
		require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");

	// Ensure that only logged-in users can see this page
	//	gatekeeper();
		
	// Set context and title
		set_context('custom_index_widgets');
		//set_page_owner(get_loggedin_userid());
		set_page_owner(0);
		$title = elgg_echo('Accueil'.get_loggedin_userid());
		
	// wrap intro message in a div
		$intro_message = "Rien à dire"; //elgg_view('dashboard/blurb');
		
	// Try and get the user from the username and set the page body accordingly
		$body = $body = elgg_view_layout('new_index',"","","");
		
		page_draw($title, $body);
		
?>