<!DOCTYPE html>
<html>
<head>
	<title> Database </title>
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
			color: blue;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th{
			
			background: #588c7e;
			color: white;
		}
		tr:nth-child(even){
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
<table>
	<tr>
		<th>ID</th>
		<th>temp</th>
		<th>hum</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost","id13275074_irrigatasaur","E{c+5h%\nU5|!wxs","id13275074_sih2020");
	if ($conn-> connect_error) {
		die("Connection Failed". $conn-> connect_error);
	}
	$sql = "SELECT id, temp, hum from weather";
	$result = $conn-> query($sql);
	if ($result-> num_rows>0) {
		while($row = $result-> fetch_assoc()){
			echo "<tr><td>".$row["id"]."</td><td>".$row["temp"]."</td><td>".$row["hum"]."</td></tr>";
		}
		echo "</table>";
	}
	else {
		echo "0 result";
	}

	$conn-> close();
	
	?>
</table>
</body>
</html>