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
    <link rel="stylesheet" href="../css/HeaderFooter.css">

</head>
		
	<body>
        <?php 
        if(!isset($_SESSION['uname'])){
            include ('../html/Header.html');
        } else {
            include ('../html/HeaderLoggedIn.html');
        } ?>
        
        
        
    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px">It Never Gets Easier. You Just Get Stronger</h1>
                <p>We are JustFit. Working out from home has never been so easy</p>
                <a href="../php/SignUp.php">Get Started</a>
       </div>
    </div>
       
    <?php include ('../html/Footer.html'); ?>
        
        
    
    </body>
</html>
