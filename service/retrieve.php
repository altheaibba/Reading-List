<?php
	include("dbConnect.php");

	if(isset($_POST["idretrieve"]))
	{
		$ID = $_POST["ID"];

		$res = mysqli_query($dbConn, "SELECT * FROM readinglist WHERE ID=$ID");

		while($row = mysqli_fetch_assoc($res))
		{
			$msg[] = $row;
		}

		$json = $msg;
		header('content-type: application/json');
		echo json_encode($json);
	}
	if(isset($_POST["nameretrieve"]))
	{
		$name = $_POST["name"];

		$res = mysqli_query($dbConn, "SELECT * FROM readinglist WHERE name='$name'");

		while($row = mysqli_fetch_assoc($res))
		{
			$msg[] = $row;
		}

		$json = $msg;
		header('content-type: application/json');
		echo json_encode($json);
	}
?>