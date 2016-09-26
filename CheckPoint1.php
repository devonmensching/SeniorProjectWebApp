
<html>
<head>
	<h1> Check Point #1 </h1>
</head>
<body>

<!-- Start User table Infomration -->
	<h2> Users Table: </h2>
	<table>
		<tr>
			<td><Strong>Username<Strong></td>
			<td><Strong>Password</Strong></td>
		</tr>
		<?php
		include('connection.php');

		$sql = "SELECT * FROM Users";
		foreach($connection->query($sql) as $result)
		{
			echo "<tr>";
			echo "<td>" . $result["Username"] . "</td>";
			echo "<td>" . $result["Password"] . "</td>";
			echo "</tr>";
		}
		?>
	</table>
	<p>A query to Insert into the User Table: INSERT INTO Users VALUES("username","password")</p>
	<br><br>
	
	
<!-- End User Table Infomration -->
<!-- Start Participants table Infomration -->
	<h2> Participants Table: </h2>
	<table>
		<tr>
			<td><Strong>Username<Strong></td>
			<td><Strong>Password</Strong></td>
			<td><Strong>Name</Strong></td>
			<td><Strong>DayStart</Strong></td>
			<td><Strong>DayEnd</Strong></td>
		</tr>
		<?php
		include('connection.php');

		$sql = "SELECT * FROM Participants";
		foreach($connection->query($sql) as $result)
		{
			echo "<tr>";
			echo "<td>" . $result["Username"] . "</td>";
			echo "<td>" . $result["Password"] . "</td>";
			echo "<td>" . $result["Name"] . "</td>";
			echo "<td>" . $result["DayStart"] . "</td>";
			echo "<td>" . $result["DayEnd"] . "</td>";
			echo "</tr>";
		}
		?>
	</table>
	<p>A query to Insert into the Participants Table: INSERT INTO Participants VALUES("username","password", "Name", "DayStart", "DayEnd")</p>
	<br><br>
	
	
<!-- End Participants Table Infomration -->
<!-- Start ZoneData table Infomration --->
	<h2> ZoneData Table: </h2>
	<table>
		<tr>
			<td><Strong>Username<Strong></td>
			<td><Strong>Time</Strong></td>
			<td><Strong>Zone</Strong></td>
		</tr>
		<?php
		include('connection.php');

		$sql = "SELECT * FROM ZoneData";
		foreach($connection->query($sql) as $result)
		{
			echo "<tr>";
			echo "<td>" . $result["Username"] . "</td>";
			echo "<td>" . $result["Time"] . "</td>";
			echo "<td>" . $result["Zone"] . "</td>";
			echo "</tr>";
		}
		?>
	</table>
	<p>A query to Search into the ZoneData Table: SELECT * FROM ZoneData WHERE _____ = _____</p>
	<br><br>
	
<!-- End ZoneData table Infomration --->

</body>
</html>