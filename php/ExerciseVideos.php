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
		<link rel="stylesheet" href="../css/ExerciseVideos.css">
		<link rel="stylesheet" href="../css/HeaderFooter.css">
	</head>
	<body>
        <?php 
        if(!isset($_SESSION['uname'])){
            include ('../html/Header.html');
        } else {
            include ('../html/HeaderLoggedIn.html');
        } ?>
		<div class="row">
			<div class="column1" style="background-color: #444466">
				<!-- Exercise Music - Risk of Rain 2 OST: Terra Pluviam -->
				<iframe width="560" height="315" src="https://www.youtube.com/embed/QnyKBtcXKMI" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="column2" style="background-color: #666688">
				<h2>
				Terra Pluviam · Chris Christodoulou
				Risk of Rain 2
				</h2>
				'Terra Pluviam,' or 'The Rain,' is a great song for exercise because it promotes persistance and perseverance.
			</div>
		</div>
		
		<div class="row">
			<div class="column1" style="background-color: #446644">
				<!-- Exercise Music - Risk of Rain 2 OST: Terra Pluviam -->
				<iframe width="560" height="315" src="https://www.youtube.com/embed/QnyKBtcXKMI" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="column2" style="background-color: #668866">
				<h2>
				Terra Pluviam · Chris Christodoulou
				Risk of Rain 2
				</h2>
				'Terra Pluviam,' or 'The Rain,' is a great song for exercise because it promotes persistance and perseverance.
			</div>
		</div>

		<div class="row">
			<div class="column1" style="background-color: #664444">
				<!-- Exercise Music - Risk of Rain 2 OST: Terra Pluviam -->
				<iframe width="560" height="315" src="https://www.youtube.com/embed/QnyKBtcXKMI" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="column2" style="background-color: #886666">
				<h2>
				Terra Pluviam · Chris Christodoulou
				Risk of Rain 2
				</h2>
				'Terra Pluviam,' or 'The Rain,' is a great song for exercise because it promotes persistance and perseverance.
			</div>
		</div>			
		
		<?php include ('../html/Footer.html'); ?>
	</body>
</html>