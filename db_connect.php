<?php
	$json = $_ENV['credentials-postgre'];
	$data = json_decode($json, true);
	$password = $data['password'];
	$username = $data['username'];

	$server = "servsqltf-tp.postgres.database.azure.com";
	$db = "pg_teiva_francis";
	$conn = pg_connect("host=$server dbname=$db user=$username password=$password");
?>