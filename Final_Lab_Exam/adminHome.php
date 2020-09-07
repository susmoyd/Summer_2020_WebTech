<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Interface</title>
</head>
<body>
	<center>
		<h1>Welcome to Admin Home </h1>
	<form>
	<fieldset>
		<legend>Admin InterFace</legend>
	<table border="2">
		<tr>
			<td>Add employee/Remove employee</td>
			<td align="left">
				<input type="button" onclick="location.href='employee.php';" value="Add/Remove Employee" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
	
	
		
		
		<tr>
			<td> Admin Profile</td>
			<td align="left">
				<input type="button" onclick="location.href='admin.php';" value="Admin Profile" />		
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
	
		
		<tr>
			<td colspan="2"></td>
		</tr>
		
		<tr>
			
			<td align="left" colspan="2">
				<input type="button" onclick="location.href='logout.php';" value="Logout" />
				
			</td>
		</tr>

	</table>
	</fieldset>
	</form>
	</center>

	
</body>
</html>