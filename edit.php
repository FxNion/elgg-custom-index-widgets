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

	// make sure only admins can view this
	admin_gatekeeper ();
	set_context ( 'admin' );
	
	// Set admin user for user block
	set_page_owner ( $_SESSION ['guid'] );
	
	// vars required for action gatekeeper
	$ts = time ();
	$token = generate_action_token ( $ts );
	$context = 'custom_index_widgets';

	// create the view
	$content = elgg_view ( 'custom_index_widgets/edit', array ('token' => $token, 'ts' => $ts, 'context' => $context ) );
	// Display main admin menu
	page_draw ( elgg_echo('custom_index_widgets:index'), $content );
		
?>
