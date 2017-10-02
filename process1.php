<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "user_details";
$prefix = "";
$bd = @mysqli_connect($mysql_hostname, $mysql_user,$mysql_password) or die("Could not connect database");
mysqli_select_db($bd,$mysql_database) or die("<h1>Could not select database<h1>");
      $use=$_POST['username'];
	  $checksum=$_POST['check'];
	  $daterec=$_POST['date'];
	  $datenow=gmdate('Y-m-d H:i:s');
	  $to_time = strtotime($daterec);
$from_time = strtotime($datenow);
	if($from_time - $to_time>120 || $to_time>$from_time || md5($use)!=$checksum)
		header('Location:Fetch1.php');
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
	
