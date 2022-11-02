<!DOCTYPE html>
<html>
<head>
	<title>Contact Seller</title>
</head>
<body>
	<p>
		Thank you for choosing us.<br><br>
		Please contact the seller of the product using the details below.
	</p>

	<?php
	require_once "db_connection.php";

	if(isset($_GET['name'])&&isset($_GET['location'])){
		$name=$_GET['name'];
		$location=$_GET['location'];

		$querry ="SELECT * from seller where name='$name' and location='$location'";
		$querry2=mysql_query($querry);
		while($row=mysql_fetch_array($querry2)){
	    // echo $row["Email"];
			?>
			<div class="email">
				<span><?php echo($row["Email"]);?></span>
				<a href="mailto:<?php echo($row["Email"]);?>">Send Email To Seller</a>
			</div>
			<?php
    }
		

	}
	?>

</body>
</html>