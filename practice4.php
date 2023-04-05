<?php
	echo "<head>";
	echo "<style>";
	echo "table {
			border: 1px solid black;
			border-collapse: collapse;
			}
		th, td {
			border: 1px solid black;
			padding: 5px;
			}
		th {
			background-color: lightgray;
			}";
	echo "</style>";
	echo "</head>";
	$size = $_POST["size"];
	echo "<table>";
	// create row headers
	echo "<tr><th></th>";
	for ($i = 1; $i <= $size; $i++) {
		echo "<th>$i</th>";
	}
	echo "</tr>";
	// create table body
	for ($i = 1; $i <= $size; $i++) {
		echo "<tr>";
		// create column headers
		echo "<th>$i</th>";
		for ($j = 1; $j <= $size; $j++) {
			echo "<td>" . $i*$j . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>