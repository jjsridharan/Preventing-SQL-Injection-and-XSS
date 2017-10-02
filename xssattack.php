<html>
	<body>
			<form method="post" action="#">
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