<!DOCTYPE html>
<html>
<head>
	<title>Gender Form</title>
</head>
<body>
<form method="post">

<fieldset>


 <legend>Profile picture</legend>
			<center>
				<table width="150%" border="1">
					
						<tr height ="50px">
			
						<td  colspan="3">USERID<input type="number"placeholder="Enter USERID"  name= "" value="" size="100px" box-sizing= "border-box" padding="12px 20px " margin="80px 0" display="inline-block" width= "100%"></td>
				</tr>
				<tr height = "30px">
				<td style="width:10%">PHOTO 
				<?php 
		if(!isset($name))
		{echo "can't left empty";}
		?> </td>
						<td  style="width:50%" colspan="3"> <input type="file" id="img" name="img" accept="image/*"></td>
						</tr>
			<input type="submit" name="" value="Submit">
			</fieldset>
</body>
</html>