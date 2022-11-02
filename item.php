

<!DOCTYPE html>
<html>
<head>
	<title>Image preview and upload</title>
		<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<nav>
        <a href="index.php">Home</a>
        <!-- <a href="about.html">About Us</a>
        <a href="contact.html">Contact Us</a>
        <a href="services.html">Services</a> -->
    
    </nav>
    <h1 align="right">would you like to post something for sale <a href="signup.php" class="posting">Register</a> or <a href="login.php" class="posting">Login</a></h1>
     <!-- <div class="selector">
            <h2>Search for particular items</h2>
            <select name="category">
                        <option value="0"selected disabled>Category</option>
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
        </div>
 -->
	<div class="images1">
		<?php
		include 'DBController.php';
        $db_handle = new DBController();
        ?>
        <?php
        $query = $db_handle->runQuery("SELECT * FROM images ORDER BY id ASC");
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
                    <a href="seller.php?name=<?php echo($query[$key]['name']);?>& location=<?php echo($query[$key]["location"]);?>"><img src="<?php echo $query[$key]["location"] ; ?>" /></a>
                    
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


	
</body>
</html>