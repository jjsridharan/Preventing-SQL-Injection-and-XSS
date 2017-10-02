<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "user_details";
$prefix = "";
$bd = @mysqli_connect($mysql_hostname, $mysql_user,$mysql_password) or die("Could not connect database");
mysqli_select_db($bd,$mysql_database) or die("<h1>Could not select database<h1>");
      $use=$_POST['username'];
	  $mysqli = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
	  $qry="Select * from User where Name=?";
	  $stmt=$mysqli->prepare($qry);
        $stmt->bind_param("s", $use);
		$stmt->execute();
		$stmt->bind_result($col1,$col2,$col3);
		while($stmt->fetch())
		{
			echo $col1."\n".$col2."\n".$col3;
		}


?>						
	
