<?php
	include("dbConnect.php");

	if(isset($_POST["name"]))
	{
		$name = $_POST["name"];
		$URL = $_POST["URL"];
		$theDesc = $_POST["theDesc"];
	
		$res = mysqli_query($dbConn, "INSERT INTO readinglist (name, URL, theDesc) VALUES ('$name','$URL','$theDesc')");

		$json = $res;
		header('content-type: application/json');
		echo json_encode($json);
	}

	header("location: ../client/homepage.html");
?>
