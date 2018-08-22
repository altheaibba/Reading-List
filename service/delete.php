<?php
	include("dbConnect.php");

	if(isset($_POST["ID"]))
	{
		$ID = $_POST["ID"];
		$res = mysqli_query($dbConn, "DELETE FROM readinglist WHERE ID=$ID");

		$json = $res;
		header('content-type: application/json');
		echo json_encode($json);
	}

	header("location: ../client/homepage.html");
?>