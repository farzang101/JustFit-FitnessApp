
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

		
		<?php include ('../html/Footer.html'); ?>
	</body>
</html>
