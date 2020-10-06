<?php
	include "config.php";

	// Check user login or not
	if(!isset($_SESSION['uname'])){
		header('Location: Login.html');
	}

	// logout
	if(isset($_POST['but_logout'])){
		session_destroy();
		header('Location: Home.html');
	}
?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<script src=p5.js></script>
	</head>
	<body>
		<!-- Header Begin -->
		<center>
			<div class="rowBurn">
				<div class="column">
					<br>
						<h3>
							Live Workout Events
						</h3>
					</br>
				</div>
				<div class="column">
					<br>
						<h3>
							<a href="Home.html">Home</a>
							<a href="Exercise.html">Exercise</a>
							<a href="Nutrition.html">Nutrition</a>
							<a href="About.html">About</a>
							<a href="Contact.html">Contact</a>
							<form method='post' action="">
								<input type="submit" value="Logout" name="but_logout">
							</form>
						</h3>
					</br>
				</div>
			</div>
		</center>
		<!-- Header End -->

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
					<img src="image/BiggerInfusion.png" alt "Exercise">
				</div>
				<div class="column">
					<br>
						<h2>
							<a href="FavoriteExercises.html">Click here to view your favorite exercises</a>
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
					<img src="image/BiggerInfusion.png" alt "Exercise">
				</div>
				<div class="column">
					<br>
						<h2>
							<a href="7DayPlan.html">Click here to view your 7 day plan</a>
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
					<img src="image/BiggerInfusion.png" alt "Exercise">
				</div>
				<div class="column">
					<br>
						<h2>
							<a href="NutritionHelp.html">Click here to view your personalized nutrition plan</a>
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
					<img src="image/BiggerInfusion.png" alt "Exercise">
				</div>
				<div class="column">
					<br>
						<h2>
							<a href="Profile.html">Click here to view your profile</a>
						</h2>
					</br>
				</div>
			</div> 
		</center>
		
		<!-- Footer Begin -->
		<center>
			<div class="rowBurn">
				<br>
					<div class="column">
						<h3>
							Live Workout Events was developed by CPSC-362 Group F. All Rights Reserved.
						</h3>
					</div>
					<div class="column">
						<h3>
							<a href="About.html">About</a>
							<a href="Contact.html">Contact</a>
						</h3>
					</div>
				</br>
			</div>
		</center>
		<!-- Footer End -->
	</body>
</html>
