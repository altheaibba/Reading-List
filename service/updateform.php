<?php
	include("dbConnect.php");

	if(isset($_POST["IDsubmit"]))
	{
		$ID = $_POST["ID"];

		$result = mysqli_query($dbConn, "SELECT * FROM readinglist WHERE ID=$ID");

		while($res=mysqli_fetch_array($result))
		{
			$ID = $res['ID'];
			$name = $res['name'];
			$URL = $res['URL'];
			$theDesc = $res['theDesc'];
		}
	}
?>

<html>
<head>
	<title>UPDATE</title>
<style>
	td {
		font-family: Verdana, Geneva, sans-serif;
		font-size: 12px;
	}

	input[type=text], select, textarea {
	    width: 100%;
	    padding: 12px;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    resize: vertical;
	}

	input[type=date], select, textarea {
	    width: 100%;
	    padding: 12px;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    resize: vertical;
	}

	input[type=submit] {
	    background-color: #ce2956;
	    color: white;
	    padding: 12px 20px;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;
	    float: left;
	}

	input[type=submit]:hover {
	    background-color: #a52145;
	}

	.container {
	    border-radius: 5px;
	    background-color: #ffd3e7;
	    padding: 20px;
	}

	.btn {
	  -webkit-border-radius: 0;
	  -moz-border-radius: 0;
	  border-radius: 0px;
	  font-family: Arial;
	  color: #ffffff;
	  font-size: 12px;
	  background: #c60336;
	  padding: 5px 10px 5px 10px;
	  text-decoration: none;
	}

	.btn:hover {
	  background: #bc0336;
	  text-decoration: none;
</style>
</head>
<body>
	<a href = "../client/update.html" class="btn">Back</a>
	<br>
	<div class = "container">
	<form action = "update.php" method = "post">
		<table align = "center">
			<tr>
					<td>Name:</td>
					<td><input type = "text" name = "name" value="<?php echo $name; ?>"></td>
			</tr>
			<tr>
					<td>URL:</td>
					<td><input type = "text" name = "URL" value="<?php echo $URL;?>"></td>
			</tr>
			<tr>
					<td>Description:</td>
					<td><input type = "text" name = "theDesc" value="<?php echo $theDesc;?>"></td>
			</tr>
			<tr>
				<td><input type = "submit" name = "update" value = "Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>