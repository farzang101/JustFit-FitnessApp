<?php
	include "../php/config.php";

	// Check user login or not
	if(!isset($_SESSION['uname'])){
		header('Location: ../php/Login.php');
	}

	// logout
	if(isset($_POST['but_logout'])){
		session_destroy();
		header('Location: ../html/Home.html');
	}
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"> 
    <title> Fitness Gods | Landing page </title>
    <link rel="stylesheet" href="../css/UserPortal.css">
         <link rel="stylesheet" href="../css/HeaderFooter.css">
        
        
    </head> 
    
    <body>
                <?php include ('../html/Header.html'); ?>

        
        <br><br><br>
    
        
        
        
        <h1>Your Portal</h1>
        <p>Manage your favorite workout content here. Select a card to get started.</p>


    <div class="card1">
  <div class="container">
    <span><h2>Nutrition</h2></span> 
    <p>View Your Nutritional Content</p> 
  </div>
</div>
        
<div class="card2">
  <div class="container">
    <span><h2>Workouts</h2></span> 
    <p>Browse and edit your saved workouts</p> 
  </div>
</div>
        
<div class="card3">
  <div class="container">
    <span><h2>Fitness Plans</h2></span> 
    <p>View Your Favorite Fitness Plans </p> 
  </div>
</div>
        


        <?php include ('../html/Footer.html'); ?>
        
    </body>


</html>
