<!DOCTYPE html>
<html>
<head>
	<title>Email Form</title>
</head>
<body>

	<form method="post">
		Email: <input type="text" email="semail" value="" placeholder="sample@example.com"> 
		<?php 
		if(!isset($name))
		{echo "can't left empty";}
		?>
		<br> 
		
		<input type="submit" name="" value="Submit">
	</form>
</body>
</html>