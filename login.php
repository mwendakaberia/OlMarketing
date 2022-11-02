

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

	<fieldset class="fieldset" align=center>
        <div class="errors">
		<?php
           if(isset($_GET['error'])){
	           if($_GET['error']=='empty_fields'){
	           	echo "<b style='color:red;font-size:18px'>Please fill all the fields</b>";
	           }else if($_GET['error']=='wrong_inputs'){
	           	echo "<b style='color:red;font-size:18px'>Wrong username or password</b>";
	           }
           }

           ?>
       </div>


		<h1>Welcome To EasyShop Login Page</h1><br><br>
		<form action="loginver.php" method="POST">
			
			<div class="user">
			<label for="username">Username</label><br><br>
			<input type="text" name="username" placeholder="Please provide Username"><br><br><br>
		</div>

		<div class="pass">
			<label for="password">Password</label><br><br>
			<input type="password" name="password" placeholder="Please provide Password"><br><br><br>
		</div>

		<div class="button">
			<button type="submit" name="submit">Login</button>
		</div>

		</form>
		

	</fieldset>

</body>
</html>