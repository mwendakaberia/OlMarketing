<?php
session_start();
require_once "db_connection.php";

if (isset($_POST['submit'])) {
	$file=$_FILES['file'];
	$filename=$file['name'];
	$fileTmpname=$file['tmp_name'];
	$fileSize=$file['size'];
	$fileError=$file['error'];
	$fileType=$file['type'];
	
	$name=$connection->real_escape_string($_POST['name']);
	$price=$connection->real_escape_string($_POST['price']);
	$details=$connection->real_escape_string($_POST['details']);

	$fileext=explode('.',$filename);
	$fileActualExt=strtolower(end($fileext));

	$allowed = array('jpg','jpeg','png');

	if(in_array($fileActualExt, $allowed)){
		if($fileError===0){
			if($fileSize<1000000){
				$username=$_SESSION['username'];
				$filenamenew=uniqid('',true).".".$fileActualExt; 
				$filedest='images/'.$filenamenew;
				move_uploaded_file($fileTmpname, $filedest);

                $sql="INSERT INTO `images`(username,`name`, `location`, `price`,`description`) VALUES ('$username','$name','$filedest',$price,'$details') ";
                if(!mysql_query($sql)){
                	die("error".mysql_error());
		            exit();

		        } 
	
	            else{
	            	echo "logged in successfuly";
	                }
		

				header("Location:personal.php");

			}else{
				echo "your image is too big to be downloaded";
			}

		}else{
			echo "there was an error uploading image";
		}

	}else{
		echo"you cant upload a file of this type";
	}


}