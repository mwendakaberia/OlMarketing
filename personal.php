<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sell your product</title>
	<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>
	<h1>Welcome <?php echo($_SESSION['username']) ?></h1>
	<nav class="nav">
		<a href="index.php">Home</a>
		<!-- <a href="#">My Profile</a>
		<a href="#">My Profile</a>
 -->
	</nav>

	
	<div class="images1">
		<?php
		include 'DBController.php';
        $db_handle = new DBController();
        ?>
        <?php
        $username=$_SESSION['username'];
        // echo($_SESSION['username']);
        $query = $db_handle->runQuery("SELECT * FROM images where username='$username' ORDER BY id ASC");
        if (! empty($query)) {
            foreach ($query as $key => $value) {
                ?> 
                <div class="all"> 
                <div class="name">
                    	<?php
                    	echo("<b class='name1'>".$query[$key]['name']."</b>");
                    	?>
                    </div>
                    <div class="image">
                    <?php 
                        if(file_exists($query[$key]["location"]))
                        { 
                    ?>
                    <img src="<?php echo $query[$key]["location"] ; ?>" />
                    <?php 
                } 
                    ?>
            
                    </div>
                    <div class="name">
                    	<?php
                    	echo("<b class='price2'>"."Ksh".$query[$key]['price']."</b>");
                    	?>
                    </div>
                    <div class="name">
                    	<?php
                    	echo("<b class='details'>".$query[$key]['description']."</b>");
                    	?>
                    
                    </div>
                </div>

        <?php
            }
        }
        ?>
   

  </div>


	<form action="upload.php" method="POST" enctype="multipart/form-data">
        <center>
        <!-- <div class="selector2">
                        <select name="category" class="select">
                        <option value="0"selected disabled>Category of your item</option>
                        <option value="phones">Phones</option>
                        <option value="electronics">Electronics $ Appliances</option>
                        <option value="fashion">Fashion</option>
                        <option value="pets">Pets</option>
                        <option value="sports">Books,Sports $ Hobbies</option>
                        <option value="beddings">Beddings</option>
                        <option value="furniture">Furniture</option>
                        <option value="jobs">Jobs</option>
                        <option value="services">Services</option>
                        <option value="others">Others</option>
                    </select>
        </div> -->
    
		<input type="text" name="name" placeholder="enter name of item"><br><br>
		<div class="choose"><input type="file" name="file" required></div><br>
		<input type="text" name="price" placeholder="enter price of your item"><br><br>
		<textarea cols="20" rows="3" name="details" maxlength="40" placeholder="Write a short description of your item"></textarea><br><br>
		<button type="submit" name="submit">Upload</button>
    </center>


	
	</form>

</body>
</html>