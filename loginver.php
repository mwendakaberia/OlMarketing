<?php
session_start();
require_once "db_connection.php";
if(isset($_POST['submit'])){
	$username=$connection->real_escape_string($_POST['username']);
	$password=$connection->real_escape_string($_POST['password']);

	if(empty($username)||empty($password)){
		header("Location:login.php?error=empty_fields");
	}else{
		$querry="SELECT * from register where username='$username' and Password='$password'";
        $querry2=mysql_query($querry);
        $name=mysql_num_rows($querry2);

        if($name<1){
        	header("Location:login.php?error=wrong_inputs");
        }else{
        	$_SESSION['username']=$username;
        	header("Location:personal.php");
        }
	}
}

?>