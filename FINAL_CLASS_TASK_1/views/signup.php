<?php
	
	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Signup page</title>
</head>

<body>
    <form action="../php/signupController.php" method="post">
        <fieldset>
            <legend>SignUp</legend>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit" onclick="visible()">
                        <a href="login.php" style="display:none">Login</a>
                    </td>

                </tr>
            </table>
        </fieldset>
    </form>

	<script>
		function visible(){
			document.getElementsByTagName('a')[0].style.display = "inline";
		}


    </script>
</body>

</html>