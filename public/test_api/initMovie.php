<?php
	require_once('config.php');

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	// Connect to Database and create Movie table
	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	$connectionString = "mysql:host=". DB_HOST;

	if(defined('DB_PORT'))
		$connectionString .= ";port=". DB_PORT;

	$connectionString .= ";dbname=" . DB_DATABASE;
	$connectionString .= ";charset=utf8";			// MySql database uses for example utf8_unicode_ci

	// ================================================================================
	// Debug utilities
	// ================================================================================

	$options = array(
			Movie::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		);
	try {
		$movie = new Movie($connectionString,DB_MovieNAME,DB_PASSWORD,$options);
		$movie->setAttribute(Movie::ATTR_ERRMODE, Movie::ERRMODE_EXCEPTION);
	}
	catch (MovieException $erreur) {
			myLog('Erreur : '.$erreur->getMessage());
			exit(-1);
	}
