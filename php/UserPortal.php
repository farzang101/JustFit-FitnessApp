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
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/HeaderFooter.css">
	</head>
	<body>
		<?php include ('../html/Header.html'); ?>
		<center>
			<div class="placeTextureBurn">
				<br>
					<h3>
						My Favorite Exercises
					</h3>
				</br>
			</div>
			<div class="row">
				<div class="column">
					<img src="../image/BiggerInfusion.png" alt "Exercise">
				</div>
				<div class="column">
					<br>
						<h2>
<<<<<<< HEAD
							<a href="../html/FavoriteExercises.html">Click here to view your favorite exercises</a>
=======
							<a href="../php/FavoriteExercises.php">Click here to view your favorite exercises</a>
>>>>>>> f9139fa37826586fe74466ea4aa545b00fc34957
						</h2>
					</br>
				</div>
			</div> 
		</center>
		
		<center>
			<div class="placeTextureBurn">
				<br>
					<h3>
						My 7-Day Plan
					</h3>
				</br>
			</div>
			<div class="row">
				<div class="column">
					<img src="../image/BiggerInfusion.png" alt "Exercise">
				</div>
				<div class="column">
					<br>
						<h2>
<<<<<<< HEAD
							<a href="../html/7DayPlan.html">Click here to view your 7 day plan</a>
=======
							<a href="../php/7DayPlan.php">Click here to view your 7 day plan</a>
>>>>>>> f9139fa37826586fe74466ea4aa545b00fc34957
						</h2>
					</br>
				</div>
			</div> 
		</center>

		<center>
			<div class="placeTextureBurn">
				<br>
					<h3>
						Nutrition Help
					</h3>
				</br>
			</div>
			<div class="row">
				<div class="column">
					<img src="../image/BiggerInfusion.png" alt "Exercise">
				</div>
				<div class="column">
					<br>
						<h2>
							<a href="../php/NutritionHelp.php">Click here to view your personalized nutrition plan</a>
						</h2>
					</br>
				</div>
			</div> 
		</center>
		
		<center>
			<div class="placeTextureBurn">
				<br>
					<h3>
						My Profile
					</h3>
				</br>
			</div>
			<div class="row">
				<div class="column">
					<img src="../image/BiggerInfusion.png" alt "Exercise">
				</div>
				<div class="column">
					<br>
						<h2>
							<a href="../php/Profile.php">Click here to view your profile</a>
						</h2>
					</br>
				</div>
			</div> 
		</center>
		<?php include ('../html/Footer.html'); ?>
	</body>
</html>
