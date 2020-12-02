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
	//echo $_SESSION['uname'];
	$uname = mysqli_real_escape_string($con,$_SESSION['uname']);
	$sql_query = ("SELECT * FROM FavExercises WHERE Username = '".$uname."'");
	$result = mysqli_query($con,$sql_query);
	
	$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/GetWorkout.css">
		<link rel="stylesheet" href="../css/HeaderFooter.css">
	</head>
	<body>
		<?php 
        if(!isset($_SESSION['uname'])){
            include ('../html/Header.html');
        } else {
            include ('../html/HeaderLoggedIn.html');
        } ?>
		<div class = "displayBlock">
			<?php
				if($row["ExID1"] != 0)
				{
					$ex_id = $row["ExID1"];
					$sql_query = ("SELECT * FROM Exercises WHERE ID = '".$ex_id."'");
					$result = mysqli_query($con,$sql_query);
					$exer = mysqli_fetch_assoc($result);
					echo "Name: ";
					echo $exer["Name"];
					echo "<br>";
					echo "<br>";
					echo "Description: ";
					echo $exer["Description"];
					echo "<br>";
					echo "<br>";

					echo "Equipment: ";
					if($exer["Equipment"] == 1)
					{
						echo "None";
					}
					elseif($exer["Equipment"] == 2)
					{
						echo "Medball";
					}
					elseif($exer["Equipment"] == 3)
					{
						echo "Dumbells";
					}
					elseif($exer["Equipment"] == 4)
					{
						echo "Barbell";
					}
					else
					{
						echo "Kettleball";
					}
					echo "<br>";
					echo "<br>";
					echo "<br>";

				}

				if($row["ExID2"] != 0)
				{
					$ex_id = $row["ExID2"];
					$sql_query = ("SELECT * FROM Exercises WHERE ID = '".$ex_id."'");
					$result = mysqli_query($con,$sql_query);
					$exer = mysqli_fetch_assoc($result);
					echo "Name: ";
					echo $exer["Name"];
					echo "<br>";
					echo "<br>";
					echo "Description: ";
					echo $exer["Description"];
					echo "<br>";
					echo "<br>";

					echo "Equipment: ";
					if($exer["Equipment"] == 1)
					{
						echo "None";
					}
					elseif($exer["Equipment"] == 2)
					{
						echo "Medball";
					}
					elseif($exer["Equipment"] == 3)
					{
						echo "Dumbells";
					}
					elseif($exer["Equipment"] == 4)
					{
						echo "Barbell";
					}
					else
					{
						echo "Kettleball";
					}
					echo "<br>";
					echo "<br>";
					echo "<br>";

				}

				if($row["ExID3"] != 0)
				{
					$ex_id = $row["ExID3"];
					$sql_query = ("SELECT * FROM Exercises WHERE ID = '".$ex_id."'");
					$result = mysqli_query($con,$sql_query);
					$exer = mysqli_fetch_assoc($result);
					echo "Name: ";
					echo $exer["Name"];
					echo "<br>";
					echo "<br>";
					echo "Description: ";
					echo $exer["Description"];
					echo "<br>";
					echo "<br>";

					echo "Equipment: ";
					if($exer["Equipment"] == 1)
					{
						echo "None";
					}
					elseif($exer["Equipment"] == 2)
					{
						echo "Medball";
					}
					elseif($exer["Equipment"] == 3)
					{
						echo "Dumbells";
					}
					elseif($exer["Equipment"] == 4)
					{
						echo "Barbell";
					}
					else
					{
						echo "Kettleball";
					}
					echo "<br>";
					echo "<br>";
					echo "<br>";

				}

				if($row["ExID4"] != 0)
				{
					$ex_id = $row["ExID4"];
					$sql_query = ("SELECT * FROM Exercises WHERE ID = '".$ex_id."'");
					$result = mysqli_query($con,$sql_query);
					$exer = mysqli_fetch_assoc($result);
					echo "Name: ";
					echo $exer["Name"];
					echo "<br>";
					echo "<br>";
					echo "Description: ";
					echo $exer["Description"];
					echo "<br>";
					echo "<br>";

					echo "Equipment: ";
					if($exer["Equipment"] == 1)
					{
						echo "None";
					}
					elseif($exer["Equipment"] == 2)
					{
						echo "Medball";
					}
					elseif($exer["Equipment"] == 3)
					{
						echo "Dumbells";
					}
					elseif($exer["Equipment"] == 4)
					{
						echo "Barbell";
					}
					else
					{
						echo "Kettleball";
					}
					echo "<br>";
					echo "<br>";
					echo "<br>";

				}


				if($row["ExID5"] != 0)
				{
					$ex_id = $row["ExID5"];
					$sql_query = ("SELECT * FROM Exercises WHERE ID = '".$ex_id."'");
					$result = mysqli_query($con,$sql_query);
					$exer = mysqli_fetch_assoc($result);
					echo "Name: ";
					echo $exer["Name"];
					echo "<br>";
					echo "<br>";
					echo "Description: ";
					echo $exer["Description"];
					echo "<br>";
					echo "<br>";

					echo "Equipment: ";
					if($exer["Equipment"] == 1)
					{
						echo "None";
					}
					elseif($exer["Equipment"] == 2)
					{
						echo "Medball";
					}
					elseif($exer["Equipment"] == 3)
					{
						echo "Dumbells";
					}
					elseif($exer["Equipment"] == 4)
					{
						echo "Barbell";
					}
					else
					{
						echo "Kettleball";
					}
					echo "<br>";
					echo "<br>";
					echo "<br>";

				}

				if($row["ExID6"] != 0)
				{
					$ex_id = $row["ExID6"];
					$sql_query = ("SELECT * FROM Exercises WHERE ID = '".$ex_id."'");
					$result = mysqli_query($con,$sql_query);
					$exer = mysqli_fetch_assoc($result);
					echo "Name: ";
					echo $exer["Name"];
					echo "<br>";
					echo "<br>";
					echo "Description: ";
					echo $exer["Description"];
					echo "<br>";
					echo "<br>";

					echo "Equipment: ";
					if($exer["Equipment"] == 1)
					{
						echo "None";
					}
					elseif($exer["Equipment"] == 2)
					{
						echo "Medball";
					}
					elseif($exer["Equipment"] == 3)
					{
						echo "Dumbells";
					}
					elseif($exer["Equipment"] == 4)
					{
						echo "Barbell";
					}
					else
					{
						echo "Kettleball";
					}
					echo "<br>";
					echo "<br>";
					echo "<br>";

				}

				if($row["ExID7"] != 0)
				{
					$ex_id = $row["ExID7"];
					$sql_query = ("SELECT * FROM Exercises WHERE ID = '".$ex_id."'");
					$result = mysqli_query($con,$sql_query);
					$exer = mysqli_fetch_assoc($result);
					echo "Name: ";
					echo $exer["Name"];
					echo "<br>";
					echo "<br>";
					echo "Description: ";
					echo $exer["Description"];
					echo "<br>";
					echo "<br>";

					echo "Equipment: ";
					if($exer["Equipment"] == 1)
					{
						echo "None";
					}
					elseif($exer["Equipment"] == 2)
					{
						echo "Medball";
					}
					elseif($exer["Equipment"] == 3)
					{
						echo "Dumbells";
					}
					elseif($exer["Equipment"] == 4)
					{
						echo "Barbell";
					}
					else
					{
						echo "Kettleball";
					}
					echo "<br>";
					echo "<br>";
					echo "<br>";

				}

				if($row["ExID8"] != 0)
				{
					$ex_id = $row["ExID8"];
					$sql_query = ("SELECT * FROM Exercises WHERE ID = '".$ex_id."'");
					$result = mysqli_query($con,$sql_query);
					$exer = mysqli_fetch_assoc($result);
					echo "Name: ";
					echo $exer["Name"];
					echo "<br>";
					echo "<br>";
					echo "Description: ";
					echo $exer["Description"];
					echo "<br>";
					echo "<br>";

					echo "Equipment: ";
					if($exer["Equipment"] == 1)
					{
						echo "None";
					}
					elseif($exer["Equipment"] == 2)
					{
						echo "Medball";
					}
					elseif($exer["Equipment"] == 3)
					{
						echo "Dumbells";
					}
					elseif($exer["Equipment"] == 4)
					{
						echo "Barbell";
					}
					else
					{
						echo "Kettleball";
					}
					echo "<br>";
					echo "<br>";
					echo "<br>";

				}

				if($row["ExID9"] != 0)
				{
					$ex_id = $row["ExID9"];
					$sql_query = ("SELECT * FROM Exercises WHERE ID = '".$ex_id."'");
					$result = mysqli_query($con,$sql_query);
					$exer = mysqli_fetch_assoc($result);
					echo "Name: ";
					echo $exer["Name"];
					echo "<br>";
					echo "<br>";
					echo "Description: ";
					echo $exer["Description"];
					echo "<br>";
					echo "<br>";

					echo "Equipment: ";
					if($exer["Equipment"] == 1)
					{
						echo "None";
					}
					elseif($exer["Equipment"] == 2)
					{
						echo "Medball";
					}
					elseif($exer["Equipment"] == 3)
					{
						echo "Dumbells";
					}
					elseif($exer["Equipment"] == 4)
					{
						echo "Barbell";
					}
					else
					{
						echo "Kettleball";
					}
					echo "<br>";
					echo "<br>";
					echo "<br>";

				}

				if($row["ExID10"] != 0)
				{
					$ex_id = $row["ExID10"];
					$sql_query = ("SELECT * FROM Exercises WHERE ID = '".$ex_id."'");
					$result = mysqli_query($con,$sql_query);
					$exer = mysqli_fetch_assoc($result);
					echo "Name: ";
					echo $exer["Name"];
					echo "<br>";
					echo "<br>";
					echo "Description: ";
					echo $exer["Description"];
					echo "<br>";
					echo "<br>";

					echo "Equipment: ";
					if($exer["Equipment"] == 1)
					{
						echo "None";
					}
					elseif($exer["Equipment"] == 2)
					{
						echo "Medball";
					}
					elseif($exer["Equipment"] == 3)
					{
						echo "Dumbells";
					}
					elseif($exer["Equipment"] == 4)
					{
						echo "Barbell";
					}
					else
					{
						echo "Kettleball";
					}
					echo "<br>";
					echo "<br>";
					echo "<br>";
					echo "<br>";
					echo "<br>";
					echo "<br>";

				}
			?>
			<br><br><br>
		</div>
		


		<?php include ('../html/Footer.html'); ?>
	</body>