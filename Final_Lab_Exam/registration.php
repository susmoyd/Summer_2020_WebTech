<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style>
		 .error {color: blue;}
	</style>
</head>
<body>
	<?php
		$nameErr = $emailErr = $passwordErr =  $companynameErr = $contactErr =$Errormsg = "";
		 $name =  $contact = $password = "";

		 	 if ($_SERVER["REQUEST_METHOD"] == "POST") {


                if (empty($_POST["name"])) {
					 $nameErr = "Name is required";
					}

			    
			    if (empty($_POST["password"])) {
					 $passwordErr = "Password is required";
				     }
				
			   	if (empty($_POST["contact"])) {
					 $contactErr = "Contact no is required";
			
					 }
					 	if (empty($_POST["companyname"])) {
					 $companynameErr = "Company name is required";
			
					 }

	       else {
									
						$username = $_POST['username'];
						$password = $_POST['password'];
						


						$con = mysqli_connect('127.0.0.1', 'root', '', 'finalLabExam');
						$sql = "insert into employee values('' , '{$username}'  ,  '{$password}',{$contact},{$companyname} )";
						
						if(mysqli_query($con, $sql)){
							echo "Registration done!";
						}
						else
						{
							echo "Something Error";

						}
		        }
	}

	 ?>
	
	<form method = "post" action = "">

		<center>
<h2>Registration</h2>

	<table border="2">
		<tr>
			 <td>Name:</td>
			 <td>
			      <input id="name" type="text" name="name" onkeyup="nameValid()">
			      <span class = "error" id="NAME">* <?php echo $nameErr;?></span>
			 </td>
			</tr>
			<tr>
			 <td>USer Name:</td>
			 <td>
			      <input id="User name" type="text" name="User name" onkeyup="UsernameValid()">
			      <span class = "error" id="USERNAME">* <?php echo $UsernameErr;?></span>
			 </td>
			</tr>
					
		</tr>
				<tr>
			 <td> Company Name:</td>
			 <td>
			      <input id="name" type="text" name="name" onkeyup="companynameValid()">
			      <span class = "error" id="Company NAME">* <?php echo $CompanynameErr;?></span>
			 </td>
					
		</tr>
		<tr>
			 <td>Password:</td>
			 <td> <input id="password" type = "text" name = "password" onkeyup="passwordValid()">
				  <span class = "error" id="PASSWORD">*<?php echo $passwordErr;?></span>
			 </td>
		</tr>

    <tr>
      <td>Contact no:</td>
      <td><input id="contact" type="text" name="contact" value="" onkeyup="contactValid()">
      	  <span class = "error" id="CONTACT">* <?php echo $contactErr;?></span>
      </td>
    </tr>

	</table>
	<input type="button" onclick="location.href='adminHome.php';" value="Back">
	         <?php echo $Errormsg;?>
		</center>

	</form>






	<script>


		function regValid(){
			"use strict"

			 nameValid();
		     passwordValid();
			 contactValid();
			 companynameValid();
			 UsernameValid();


		}

	
function nameValid()
		{
			"use strict"

			var name = document.getElementById('name').value;
  			var words = name.split(' ');
  			var wordCount = words.length;
  			var canContain = " abcdefghijklmnopqrstuvwxyz.ABCDEFGHIJKLMNOPQRSTUVWXYZ-";      // range of characters for input
  			var nameL = name.length;
  			var temp = "";
  			var valid = false;

  			for(var i=0 ; i<nameL ; i++ ){                                                  // one by one input characters checking
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
				//window.alert("Name can not be null/empty");
				document.getElementById('NAME').innerHTML = "Null submission";
			}else if(wordCount<2){
				//window.alert("Name should be at least of 2 words.");
				document.getElementById('NAME').innerHTML = "Name should be at least of 2 words.";
			}else if(!valid){
				//window.alert("Type valid characters!");
				document.getElementById('NAME').innerHTML = "Type valid characters!";
				document.getElementById('name').value = "";
			}else{
				//window.alert("Name Ok");
				document.getElementById('NAME').innerHTML = "Seems Ok";
			}
        }
        function UsernameValid()
		{
			"use strict"

			var name = document.getElementById('user name').value;
  			var words = name.split(' ');
  			var wordCount = words.length;
  			var canContain = " abcdefghijklmnopqrstuvwxyz.ABCDEFGHIJKLMNOPQRSTUVWXYZ-";      // range of characters for input
  			var nameL = name.length;
  			var temp = "";
  			var valid = false;

  			for(var i=0 ; i<nameL ; i++ ){                                                  // one by one input characters checking
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
				//window.alert("Name can not be null/empty");
				document.getElementById('USERNAME').innerHTML = "Null submission";
			}else if(wordCount<2){
				//window.alert("Name should be at least of 2 words.");
				document.getElementById('USERNAME').innerHTML = "Name should be at least of 2 words.";
			}else if(!valid){
				//window.alert("Type valid characters!");
				document.getElementById('USERNAME').innerHTML = "Type valid characters!";
				document.getElementById('user name').value = "";
			}else{
				//window.alert("Name Ok");
				document.getElementById('USERNAME').innerHTML = "Seems Ok";
			}
        }

	  function passwordValid(){
            
            	"use strict"
				var password=document.getElementById('password').value;
				var passwordLength=password.length;
				if(password=="" || password==null)
				{
					//window.alert("Password can not be null/empty");
					document.getElementById('PASSWORD').innerHTML = "Password can not be null/empty";

				}
				else if(password.length<4)
				{
					//window.alert("Password length will be maore than 4 digits");
					document.getElementById('PASSWORD').innerHTML = "Password length will be maore than 4 digits";
					document.getElementById('password').value ="";
				}
				else
				{
					//window.alert("Password ok");
					document.getElementById('PASSWORD').innerHTML = "Password ok";
				}

		}
	 
	function contactValid(){
			"use strict"

			var contact = document.getElementById('contact').value;
   			//var contact = prompt("enter the num");
   			var canContain = "+0123456789";
   			var chk=contact.slice(1,contact.length);
   			var temp = ""; 
  			var valid = false;

  				for(var i=0 ; i<contact.length ; i++ ){                                                  // one by one input characters checking
  				temp = contact.charAt(i);
  				var matchCheck = 0;

  				for(var j=0 ; j<canContain.length ; j++){
  					
  					if(temp == canContain.charAt(j)){
  						matchCheck = 1;
  					}
  				}
  				for(var k=0 ; k<chk.length ;k++){
  					if(chk.charAt(k)=='+')
  					{
  						matchCheck = 0;
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
  				if(contact == "" || contact == null){
				//window.alert("Contact null submission");
				document.getElementById('CONTACT').innerHTML = "Null/Blank Submission.";
				}
				else if(!valid){
				//window.alert("Type valid number!");
				document.getElementById('CONTACT').innerHTML = "Type valid number!";
				document.getElementById('contact').value ="";
				}
				else{
					//window.alert("number ok");
					document.getElementById('CONTACT').innerHTML = "Contact number ok";
				}
			
	}
	
	</script>


	</body>
</html>