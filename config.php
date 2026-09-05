<?php 


ini_set ('session.use_only_cookies', 1);
ini_set ('session.use_stric_mode', 1);

session_set_cookie_params ([
	'lifetime' => 1800,
	'domain' => 'localhost',
	'path' => '/',
	'secure' => true,
	'httponly' => true,
	
	]);
	
	session_start ();
	
if (!isset($_SESSION['id'])) {
	session_regenerate_id(true);
	$_SESSION['id'] = time();
	}
	else{
	$interval = 60 * 30;
	
	if (time() - $_SESSION['id'] >= $interval) {
	
	session_regenerate_id(true);
	$_SESSION['id'] = time();
	}
 }

