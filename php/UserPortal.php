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

<!DOCTYPE html >
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/UserPortal.css">
		<link rel="stylesheet" href="../css/HeaderFooter.css">
	</head>
	<body>
        <?php 
        if(!isset($_SESSION['uname'])){
            include ('../html/Header.html');
        } else {
            include ('../html/HeaderLoggedIn.html');
        } ?>
        
<div>
        <h1>User Dashboard</h1>
    </div>

    
    <div class="cards">
        
        <div class="card">
            <h2><a href="../php/ShowFavorite.php">Favorite Workouts</a></h2>
            
        </div>
        
        <div class="card">
            <h2><a href="../php/CreateWorkout.php">Create Workout</a></h2>
        </div>
        
        <div class="card">
            <h2><a href="../php/UserSettings.php">Account Settings</a></h2>
        </div>
         <div class="card">
            <h2><a href="../php/Nutrition.php">Nutrition Content</a></h2>
        </div>
  
  
    </div>
    <br><br>    <br><br>

    
    <div class="workouts">
        <div class="workout-card">
            <h2><a href="../php/Exercise.php">Browse all Workouts</a></h2>
        </div>
    
    </div>
        <?php include ('../html/Footer.html'); ?>

   
</body>
    
</html>
