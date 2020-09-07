<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>
<center>
	Login Page
</center>
		 
	</h1>

	<hr>
	<form method="post" action="../php/logCheck.php">
		<center>
			<table>
				<tr>
			         <td><strong>Username:</strong> </td> 
				    	<td>
				    		<input type="text" id="uname" name="uname" value="" onkeyup="nameValid()">
				    		 <span class = "error" id="NAME">*</span>
				    	</td>			
			    </tr>
			         <tr>	<h2></h2>
	                    <td><strong>Password:</strong></td>
				         <td>
				         	<input type="password" id="password" name="password" value=""  onkeyup="passwordValid()">
				             <span class = "error" id="PASSWORD">*</span>
				         </td>
				     </tr>
             </table>
            <br>
	<input type="submit" name="submit" value="Submit" >
		</center>
	</form>
	<div id="VIEW"></div>
	<hr>
	<script>

	function nameValid()
    {
      "use strict"

    var name = document.getElementById('uname').value;
        var canContain = " abcdefghijklmnopqrstuvwxyz.ABCDEFGHIJKLMNOPQRSTUVWXYZ-, ";      // range of characters for input
        var nameL = name.length;
        var temp = "";
        var valid = false;

        for(var i=0 ; i<nameL ; i++ ){                                                  
          temp = name.charAt(i);
          var matchCheck = 0;

          for(var j=0 ; j<canContain.length ; j++){
            
            if(temp == canContain.charAt(j)){
              matchCheck = 1;
            }
          }
          if(matchCheck == 1){
            valid = true;
          }else if(matchCheck == 0){
            valid = false;
            break;
          }else{
            window.alert("ERROR");
          }
        }
          if(name == "" || name == null){
            document.getElementById('NAME').innerHTML = "Null submission";
          }else if(!valid){
           document.getElementById('NAME').innerHTML = "Type valid characters!";
           document.getElementById('uname').value ="";
          }else{
            document.getElementById('NAME').innerHTML = "Seems Ok";
          }


        }

 	  function passwordValid(){
            
            	"use strict"
				var password=document.getElementById('password').value;
				var passwordLength=password.length;
				if(password=="" || password==null)
				{
					document.getElementById('PASSWORD').innerHTML = "Password can not be null/empty";				
				}
				else if(password.length<4)
				{
					document.getElementById('PASSWORD').innerHTML = "Password length will be maore than 4 digits";
				}
				else
				{
						document.getElementById('PASSWORD').innerHTML = "Password ok";
				}

		}

	</script>


</body>
</html>
