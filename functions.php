<?php

function add_rows_to_settings_table($username,$rowArray,$connection)
{
	foreach($rowArray as $zoneData)
	{  
	  $time = $zoneData["time"];
	  $zone = $zoneData["zone"];	  
	 
	  $query = "Select * from seniorproject.ZoneData WHERE Username = '$username' AND Time = '$time'";
	  $stmt = $connection->prepare($query);
	  $res = $stmt->execute();
	  $count = $stmt->rowCount();
	  if($count ==0)
	  {
		  $query = "INSERT INTO `ZoneData` VALUES ('$username', '$time', '$zone')";
	  }
	  $connection->query($query);
	}
echo "success";
}

function push_server_changes($connection)
{
	$res = array();
	$table = "Participants";
	$query = "SELECT * FROM seniorproject.Participants";	
	$res[$table] = return_results_as_json($query, $connection);
	$res_json = json_encode($res);
	return $res_json; 
}

function return_results_as_json($query, $connection)
{
	try
	{
		$results = array();
		$results_json;
		foreach($connection->query($query) as $v)
		{
			$results[] = $v;
		}
		$results_json = json_encode($results);

		return $results_json;
	} catch(Exception $e)
	{
		echo "Error while executing query with value $query\n";
	}
}
?>