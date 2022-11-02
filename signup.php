<!DOCTYPE html>
<html>
<head>
	<title>This is my sign up page</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<h1>Sign Up Page</h1>

	<fieldset id="fieldset">
		<legend id="legend"><span>Ndackia Techs</span></legend>
		<?php 
		if(isset($_GET['error'])){
			if($_GET['error']=='emptyfields'){
			echo "please fill all the fields";
		}
		else if($_GET["error"]=="password and conf password do not match"){
			echo "please make sure both passwords match";
		}
		else if($_GET["error"]=="invalid email"){
			echo "please provide a valid email";
		}
		else if($_GET["error"]=="invalid password"){
			echo "please provide a valid password";
		}
		else if($_GET["error"]=="Too short password"){
			echo "The password must be 6 characters and above";
		}
		else if($_GET["error"]=="username already exists"){
			echo "The username already exists";
		}
		
		}
        
		 ?>
		<form action="signupver.php" method="post">
			<div id="main">
				<div>
				<label for="username">Username</label><br>
				<input type="text" name="username" placeholder="enter username" >
			</div>
			<div>
				<label for="email">Email</label><br>
				<input type="email" name="email" placeholder="enter email" >
				
			</div>
			<div>
				<label for="password">Password</label><br>
				<input type="password" name="password">
			</div>
			<div>
				<label for="password2">Confirm_Password</label><br>
				<input type="password" name="password2">
			</div><br>
			<div>
				<button type="submit" id="button" name="submit">Register</button>
			</div>
			<br>
			<br>
			</div>
			
			<p id="p1">You already have an account <br><span id="span"><a href="login.php">Login here</a></span></p>

		</form>

	</fieldset>

</body>
</html>