<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "user_details";
$prefix = "";
$bd = @mysqli_connect($mysql_hostname, $mysql_user,$mysql_password) or die("Could not connect database");
mysqli_select_db($bd,$mysql_database) or die("<h1>Could not select database<h1>");
      $use=$_POST['username'];
	  $qry="select * from User where Name=$use";
	  echo $qry;
      $r=mysqli_query($bd,$qry);
	  $res="";
      while($row=mysqli_fetch_assoc($r))
		{
		$res.=$row['Name'];
		$res.=$row['Address'];
		$res.=$row['Phone']."<br /><br /><br />";
		}
	echo $res;
     
?>						
	
