<html>
	<body>
			<form method="post" action="#">
			<input type="text" name="msg"/>
			<input type="submit"/>
			</form>
			<?php if(isset($_POST['msg']) && $_POST['msg']!="") { ?>
    <p name="massage"><?php echo $_POST['msg']; ?> </p>
<?php } ?>
	</body>
</html>