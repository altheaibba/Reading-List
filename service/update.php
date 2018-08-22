<?php
	include_once("dbConnect.php");

	if(isset($_POST["update"]))
	{	
		$ID = $_POST["ID"];
		$name = $_POST["name"];
		$URL = $_POST["URL"];
		$theDesc = $_POST["theDesc"];
		$res = mysqli_query($dbConn, "UPDATE readinglist SET name='$name', URL='$URL', theDesc='$theDesc' WHERE ID=$ID");

		$json = $res;
		header('content-type: application/json');
		echo json_encode($json);
	}

	header("location: ../client/homepage.html");
?>