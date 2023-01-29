<!DOCTYPE html>
<html>
<head>
	<title>Liste des acteurs</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			border: 1px solid black;
			padding: 8px;
			text-align: left;
		}
		th {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<h1>Liste des acteurs</h1>
	<table>
		<tr>
			<th>Id</th>
			<th>Prénom</th>
			<th>Nom</th>
		</tr>
		<!-- PHP code to fetch and display data from API -->
		<?php
			$data = file_get_contents("http://localhost/api/actors.php");
			$actors = json_decode($data, true);
			foreach ($actors as $actor) {
				echo "<tr>";
				echo "<td>" . $actor['Id'] . "</td>";
				echo "<td>" . $actor['Prénom'] . "</td>";
				echo "<td>" . $actor['Nom'] . "</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>
