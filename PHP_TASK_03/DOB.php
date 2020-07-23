<!DOCTYPE html>
<html>
<head>
	<title>Gender Form</title>
</head>
<body>
<form method="post">

<fieldset>


 <legend>Date of Birth</legend>
			<input type="date" name=""> <br>
			<?php 
		if(!isset($name))
		{echo "can't left empty";}
		?>
		<br> 
			<input type="submit" name="" value="Submit">
			</fieldset>
</body>
</html>