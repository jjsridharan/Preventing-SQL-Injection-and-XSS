<html>
	<head>
		<title>Sample Check</title>
		<center>XSS ATTACK DEMO</center>
	</head>
	<body style="background-size:cover;background-color: lightblue;">
			<p>Cross-Site Scripting (XSS) attacks are a type of injection, in which malicious scripts are injected into otherwise benign and trusted web sites. XSS attacks occur when an attacker uses a web application to send malicious code, generally in the form of a browser side script, to a different end user. Flaws that allow these attacks to succeed are quite widespread and occur anywhere a web application uses input from a user within the output it generates without validating or encoding it.,</p>
			<form method="post" action="#" style="text-align:center;margin-top: 200px;">
			<input type="text" name="msg"/>
			<input type="submit"/>
			</form>
			<?php 
			if(isset($_POST['msg']))
			{
						echo "<h2>Original</h2><p>{$_POST['msg']}</p>";
			}
			?>
   
	</body>
</html>