<?php
	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once '../inc/config.php';
	// display json format when print

	if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			// Always return JSON format
			header('Content-Type: application/json');

			$return =[];

			// Make sure the user does not exists
			// Make sure the user CAN be added AND is added
			// Return the proper information back to Javascript to redirect us.

			$return['redirect'] = './dashboard.php';
			echo json_encode($return, JSON_PRETTY_PRINT); exit;
		} 
	else 
		{
			// die. Kill the script. Redirect the user. Do something regardless.
			exit('test');
			die();
		}
?>