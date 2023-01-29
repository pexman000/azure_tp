<?php
	// Connect to database
	include("db_connect.php");
	$request_method = $_SERVER["REQUEST_METHOD"];

	function getActors()
    {
        global $conn;
        $result = pg_query($conn, "SELECT * FROM actor");
        if (!$result) {
            echo json_encode(array("error" => "An error occurred."));
            exit;
        }
        $response = array();
        while ($row = pg_fetch_row($result)) {
            $response[] = array("Id" => $row[0], "Prénom" => $row[1], "Nom" => $row[1]);
        }
        header('Content-Type: application/json');
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
	
	switch($request_method)
	{
		
		case 'GET':
            getActors();
			break;
		default:
			header("HTTP/1.0 405 Method Not Allowed");
			break;
            
	}
?>