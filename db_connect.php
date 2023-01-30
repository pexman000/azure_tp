<?php
	$password = $_ENV['password'];
	$username = $_ENV['username'];
	$server = "servsqltf-tp.postgres.database.azure.com";
	$db = "pg_teiva_francis";
	$conn = pg_connect("host=$server dbname=$db user=$username password=$password");
?>