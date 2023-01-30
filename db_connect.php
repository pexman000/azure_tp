<?php
	$server = "servsqltf-tp.postgres.database.azure.com";
	$username = $_ENV['database_user'];
	$password = "Password####PG";
	$db = "pg_teiva_francis";
	$conn = pg_connect("host=$server dbname=$db user=$username password=$password");
?>