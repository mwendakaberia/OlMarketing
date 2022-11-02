<?php 

require_once "db_connection.php";

if(isset($_POST["submit"])){
$username=$connection->real_escape_string($_POST['username']);
$email=$connection->real_escape_string($_POST['email']);
$password=$connection->real_escape_string($_POST['password']);
$password2=$connection->real_escape_string($_POST['password2']);

if(empty($username) || empty($email) || empty($password) || empty($password2)){
	header("Location:signup.php?error=emptyfields");
	exit();
}
else if($password != $password2){
	header("Location:signup.php?error=password and conf password do not match");
	exit();

}
else if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
	header("Location:signup.php?error=invalid email");
	exit();
}
else if(! preg_match("/[a-z]/", $password)||! preg_match("/[0-9]/", $password)){
	header("Location:signup.php?error=invalid password");
	exit();

}
else if(strlen($password)<6){
	header("Location:signup.php?error=Too short password");
	exit();
}
else{
	$querry=mysql_query("select * from register where username='$username'");
	// $querry2=mysql_query($querry);
	if($querry === FALSE) { 
    die(mysql_error()); 
}
$result=mysql_num_rows($querry);

if($result>0)
{
    header("Location:signup.php?error=username already exists");
    exit();
}
else{
	$sql="INSERT INTO `register`(`username`, `Email`, `Password`) VALUES ('$username','$email','$password') ";
	if(!mysql_query($sql)){
		die("error".mysql_error());
		exit();
	
	}

	else{
		header("Location:login.php");
			
		
	}

	
}
}
}
 ?>
