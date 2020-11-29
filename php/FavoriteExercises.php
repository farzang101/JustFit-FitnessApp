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
        <?php 
        if(!isset($_SESSION['uname'])){
            include ('../html/Header.html');
        } else {
            include ('../html/HeaderLoggedIn.html');
        } ?>
		
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
							This is where favorite exercise information goes
						</h2>
					</br>
				</div>
			</div> 
		</center>
		
		<?php include ('../html/Footer.html'); ?>
	</body>
</html>
