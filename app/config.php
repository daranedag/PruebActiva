<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'daraneda');
	define('DB_PASSWORD', 'daraneda');
	define('DB_DATABASE', 'activa');

	$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	$db->query('set character_set_client=utf8');
	$db->query('set character_set_connection=utf8');
	$db->query('set character_set_results=utf8');
	$db->query('set character_set_server=utf8');
?>