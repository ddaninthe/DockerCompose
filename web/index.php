<!DOCTYPE html>
<lang="fr">
<html>
	<head>
		<meta charset="UTF-8">
		<title>TP Docker</title>
	</head>
	<body>
		<h1>Show db data</h1>
		<br/>
		
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Age</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$mysqli = new mysqli("database:3306", "root", "", "dbdocker");
				if ($mysli->connect_errno) {
					die("Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
				}
				$query = "SELECT * FROM User";
				$results = $mysqli->query($query);
				foreach($results as &$row) {
					echo "<tr>";
					echo "<td>". $row['id']. "</td>";
					echo "<td>". $row['lastName']. "</td>";
					echo "<td>". $row['firstName']. "</td>";
					echo "<td>". $row['age']. "</td>";
					echo "</tr>";
				} 
				$mysqli->close();
			?>
			</tbody>
		</table>
	</body>
</html>
