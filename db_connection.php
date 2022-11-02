<?php
$Hostname = "localhost";
$User = "root";
$dbPass = "";
$dbName = "web";

$connection = new mysqli($Hostname,$User,$dbPass,$dbName);
if(!$connection) echo die("Failed to create connection to the server! <br>");
// else echo "Connection to the server created successfully! <br>";


// // //Alternative - using mysqli procedurally
// $connection = mysqli_connect($Hostname,$User,$dbPass,$dbName);
// if(mysqli_connect_errno()) die (mysqli_connect_error());
 ?>
