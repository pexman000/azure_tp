<?php
	$server = $_ENV['host'];
	$username = $_ENV['user'];
	$password = $_ENV['password'];
	$db = "pg_teiva_francis";  
	$conn = pg_connect("host=$server dbname=$db user=$username password=$password");
?>