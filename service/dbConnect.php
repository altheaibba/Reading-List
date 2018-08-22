<?php
	$dbHost = 'localhost';
	$dbName = 'assignment5';
	$dbUsername = 'root';
	$dbPassword = '';

	$dbConn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	$sql = 'SELECT * FROM readinglist';
	$query = mysqli_query($dbConn,$sql);
?>