
<?php
	include "../php/config.php";

	// Check user login or not
	if(isset($_SESSION['uname'])){
		header('Location: ../php/UserPortal.php');
	}
?>


<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/DailyPlan.css">
	</head>
    <br>
	<body>
		<!-- Header Begin -->
		<div class= "style2">
			<a href="../html/Home.html">Home</a>
			<a href="../html/About.html">About</a>
			<a href="../html/Contact.html">Contact</a>
		</div>
		<!-- Header End -->
		<center>
			<div class="rowBurn">
				<div class="column">
					<br>
						<h3>
							Live Workout Events
						</h3>
				</div>
				
			</div>
		</center>
        <br>
		<center>
			<div class="row">
				<div class="column">
					<p>
						Coming Soon!
					</p>
					<p>
						Coming Soon!
					</p>
					<p>
						Coming Soon!
					</p>
				</div>
				<div class="column">
					<br>
						<h3>
							Your Daily Plan
						</h3>
					
				</div>
			</div> 
		</center>

		
		<!-- Footer Begin -->
		<center>
			<div class="rowBurn">
				<br>
					<h4>
						Live Workout Events was developed by CPSC-362 Group F. All Rights Reserved.
					</h4>
				
			</div>
		</center>
		<!-- Footer End -->
	</body>
</html>
