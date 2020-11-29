<?php
	include "../php/config.php";
?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"> 
    <title> Fitness Gods | Landing page </title>
    <link rel="stylesheet" href="../css/Home.css">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/Home.css">
		<link rel="stylesheet" href="../css/HeaderFooter.css">
	</head>
	<body>
        <?php 
        if(!isset($_SESSION['uname'])){
            include ('../html/Header.html');
        } else {
            include ('../html/HeaderLoggedIn.html');
        } ?>
        
        
        <div class="content">
            <div class="contentBx">
                <h2> Tough Times
                 
                    Stronger Minds</h2>
                <br>
                <br>
                <br>
                <a href="../php/SignUp.php">Get Started</a>
                </div> 
            </div> 
        <br>
        
    
    </section>
    
<br><br><br><br><br><br>
    
    <div class="container">

    <div class="card1"> 
            <a href="../php/Nutrition.php">Nutrition</a>
            <p>View Your Nutritional Content</p> 
        </div>
        <br>
        
    <div class="card2">
        <a href="../php/Workouts.php">
            Workouts</a>
            <p>Browse and edit your saved workouts</p> 
        </div>
        <br>

     <div class="card3">
         <a href= ..php/UserPortal.php>User Portal  </a>
            <p>View Your Favorite Fitness Plans </p> 
        </div>
        
</div> 
    <?php include ('../html/Footer.html'); ?>
    
</body>


</html>
