<?php
		include('connection.php');
?>
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
		$sql = "SELECT Username, MD5(Password) FROM Users";
		foreach($connection->query($sql) as $result)
		{
			echo "<tr>";
			echo "<td>" . $result["Username"] . "</td>";
			echo "<td>" . $result["MD5(Password)"] . "</td>";
			echo "</tr>";
		}
		?>
	</table>
	<p>A query to Insert into the User Table: INSERT INTO Users VALUES("BChelmowski", MD5("woiuyt"))</p>
	<p>Results from Insert into the User Table Query: Row Inserted - Username: BChelmowski; password: bd71fc1a70c4209d522a08f1a87ef77a;
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
	<p>A query to Insert into the Participants Table: INSERT INTO Participants VALUES("MJohnson", MD5("abcdef"), "Michael", "8:00 AM", "4:00 PM")</p>
	<p>Results from Insert into Participation Table Query: Row Inserted - Username: MJohnson; Password: e80b5017098950fc58aad83c8c14978e; Name: Michael; DayStart: 8:00 AM; DayEnd: 4:00 PM </p>
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
	<p>A query to Search into the ZoneData Table: SELECT * FROM ZoneData WHERE Username = "HAnderson"</p>
	<p>Results from SELECT from ZoneData Table Query: <table>
														<tr>
															<td>Username</td>
															<td>Time</td>
															<td>Zone</td>
														</tr>
														<tr>
															<td>HAnderson</td>
															<td>8:00 AM</td>
															<td>GREEN</td>
														</tr>
														<tr>
															<td>HAnderson</td>
															<td>9:00 AM</td>
															<td>GREEN</td>
														</tr>
														<tr>
															<td>HAnderson</td>
															<td>10:00 AM</td>
															<td>BLUE</td>
														</tr>
													  <table></p>
	<br><br>
	
<!-- End ZoneData table Infomration --->

</body>
</html>