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
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */
$my_array = array();
$intensity = $_POST["intensity"];  
$type = $_POST["Type"];
$equipment = $_POST["equipment"];
$time = $_POST["time"];

if($type == "Core")
{
    $db_type = 1;
}
elseif($type == "Legs")
{
    $db_type = 2;
}
else
{
    $db_type = 3;
}


for($i = 0; $i < sizeof($equipment); $i++)
{
    $equipment2 = $_POST["equipment"][$i];
    if($equipment2 == "Medball")
    {
        $equipment_type = 2;
    }
    elseif($equipment2 == "Dumbells")
    {
        $equipment_type = 3;
    }
    elseif($equipment2 == "Barbell")
    {
        $equipment_type = 4;
    }
    else
    {
        $equipment_type = 5;
    }
    $sql_query = ("SELECT * FROM Exercises WHERE Type = $db_type AND Equipment = $equipment_type");
    $result = mysqli_query($con,$sql_query);
    array_push($my_array, $result);
}
$sql_query = ("SELECT * FROM Exercises WHERE Type = $db_type AND Equipment = 1");
$result = mysqli_query($con,$sql_query);
array_push($my_array, $result);
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
                $send_array = array();
                $total_workouts = $time / 5;
                for ($x = 0; $x < sizeof($equipment) + 1; $x++)
                {
                    $rand_number_workout = 0;
                    if(mysqli_num_rows($my_array[$x]) > $total_workouts)
                    {
                        $rand_number_workout = rand(0, $total_workouts - 1);
                    }
                    else{
                        $rand_number_workout = rand(0, mysqli_num_rows($my_array[$x]) - 1);
                    }
                    
                    $my_workout_numbers = [];

                    if($x == sizeof($equipment))
                    {
                        $rand_number_workout = $total_workouts;
                    }
                    if($rand_number_workout <  0){
                        $rand_number_workout = 0;
                    }
                    $total_workouts = $total_workouts - $rand_number_workout;

                    while(sizeof($my_workout_numbers) < $rand_number_workout)
                    {
                        $is_in_array = False;
                        $curr_rand_val = rand(0, mysqli_num_rows($my_array[$x]) - 1);
                        for($i = 0; $i < sizeof($my_workout_numbers); $i++)
                        {
                            if($curr_rand_val == $my_workout_numbers[$i])
                            {
                                $is_in_array = True;
                            }
                        }
                        if($is_in_array == False)
                        {
                            array_push($my_workout_numbers, $curr_rand_val);
                        }
                    }

                    for($y = 0; $y < mysqli_num_rows($my_array[$x]); $y++)
                    {
                        
                        $is_in_array = False;
                        for($i = 0; $i < sizeof($my_workout_numbers); $i++)
                        {
                            if($y == $my_workout_numbers[$i])
                            {
                                $is_in_array = True;
                                
                            }
                        }
                        $row = mysqli_fetch_assoc($my_array[$x]);
                        if($is_in_array == True)
                        {
                            echo "Name: ";
                            echo $row["Name"];
                            echo "<br>";
                            echo "<br>";
                            array_push($send_array, $row["ID"]);
                            echo "Description: ";
                            echo $row["Description"];
                            echo "<br>";
                            echo "<br>";

                            echo "Equipment: ";
                            if($row["Equipment"] == 1)
                            {
                                echo "None";
                            }
                            elseif($row["Equipment"] == 2)
                            {
                                echo "Medball";
                            }
                            elseif($row["Equipment"] == 3)
                            {
                                echo "Dumbells";
                            }
                            elseif($row["Equipment"] == 4)
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
                    }
                    if($total_workouts == 0)
                    {
                        $x = 10;
                    }
                }  
        ?>

        <form method = "post" action="./addFavorites.php">
                <input type="hidden" name="Workouts" value="<?php echo htmlentities(serialize($send_array)); ?>">  
                <input type="submit" value="Save Workout to Favorites">
        </form>
            <br><br><br><br> 
        </div>

        <?php include ('../html/Footer.html'); ?>
    </body>
</html>
