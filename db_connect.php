<?php
	echo $_ENV['user']
	$server = "servsqltf-tp.postgres.database.azure.com";
	$username = "postgresteiva@servsqltf-tp.postgres.database";
	$password = "Password####PG";
	$db = "pg_teiva_francis";
	$conn = pg_connect("host=$server dbname=$db user=$username password=$password")
?>