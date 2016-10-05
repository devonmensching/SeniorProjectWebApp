<?php
include('connection.php');
include('functions.php');

$mode = $_POST['syncMode'];
$username = $_POST['username'];

if($mode == "CS")
{
	$tableName = $_POST['tableName'];
	$tableRows = $_POST['tableRows'];
	
	$rowArray = json_decode($tableRows,true);
		
	add_rows_to_settings_table($username,$rowArray,$connection);
	
}
else if($mode == "SC")
{
	echo push_server_changes($connection);
}

?>