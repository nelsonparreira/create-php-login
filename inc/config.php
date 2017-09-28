<?php
	//If there is no constant defined called __CONFIG__ do not load this file
	if (!defined('__CONFIG__')) {
		exit('You do not have a config file');
		// normally send the user tto other page
	}

	//Our Config is bellow
	

	//include the database
	include_once 'classes/db.php';

	$con = DB::getConnection();