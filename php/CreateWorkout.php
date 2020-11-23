<?php
	include "./config.php";
?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/CreateWorkout.css">
		<link rel="stylesheet" href="../css/HeaderFooter.css">
	</head>
	<body>

		<!-- Header Begin -->
		<center>
            <?php include ('../html/Header.html'); ?>
            <form method = "post" action="./GetWorkout.php">
                <fieldset>
                    Intensity: 
                    <input  type="radio" 
                            id="Low" 
                            name="intensity" 
                            value="Low">
                    <label for="Low">
                        Low
                    </label>
                    <input  type="radio" 
                            id="Medium" 
                            name="intensity" 
                            value="Medium">
                    <label for="Medium">
                        Medium
                    </label>
                    <input  type="radio" 
                            id="High" 
                            name="intensity" 
                            value="High">
                    <label for="High">
                        High
                    </label>
                
                    <br>  
                    <br>

                    Equipment:
                    <label class = "CB">
                        <input type = "checkbox"
                            name = "equipment[]"
                            value = "Dumbells">
                            Dumbells
                        
                    </label>
                    <label class = "CB">
                        <input type = "checkbox"
                            name = "equipment[]"
                            value = "Kettlebell">
                            Kettlebell   
                    </label>
                    <label class = "CB">
                        <input type = "checkbox"
                            name = "equipment[]"
                            value = "Barbell">
                            Barbell
                        
                    </label>
                    <label class = "CB">
                        <input type = "checkbox"
                            name = "equipment[]"
                            value = "Medball">
                            Medball
                        
                    </label>

                    <br><br>

                    Type:
                    <input  type="radio" 
                            id="Core" 
                            name="Type" 
                            value="Core">
                    <label for="Core">
                        Core
                    </label>
                    <input  type="radio" 
                            id="Legs" 
                            name="Type" 
                            value="Legs">
                    <label for="Legs">
                        Legs
                    </label>
                    <input  type="radio" 
                            id="Arms" 
                            name="Type" 
                            value="Arms">
                    <label for="Arms">
                        Arms
                    </label>
        
                    <br><br>
                    Total Time (min):
                    <input  type = "text"
                            id = "time"
                            name = "time">


                    <br><br>
                    <input type="submit" value="Create Randomized Workout">
                
                </fieldset>
            </form>
		</center>
        <!-- Header End -->

        <?php include ('../html/Footer.html'); ?>
    </body>