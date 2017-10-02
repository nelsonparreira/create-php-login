<?php
	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once '../inc/config.php';
	// display json format when print
	header('Content-Type: application/json');

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$array = ['test', 'test2', 'test3', array('name' => 'Kalob')];
		echo json_encode($array, JSON_PRETTY_PRINT);
		
	} else {
		// die. Kill the script. Redirect the user. Do something regardless.
		die();
	}
?>