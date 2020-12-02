<?php 
include "config.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$my_array = unserialize($_POST["Workouts"]);


for($i = 0; $i < 10; $i++)
{
    if($i >= sizeof($my_array))
    {
        array_push($my_array, 0);
    }
}
$uname = $_SESSION['uname'];

$insertSQL = "INSERT INTO FavExercises(Username, ExID1, ExID2, ExID3, ExID4, ExID5, ExID6, ExID7, ExID8, ExID9, ExID10 ) values('".$uname."','".$my_array[0]."','".$my_array[1]."','".$my_array[2]."','".$my_array[3]."','".$my_array[4]."','".$my_array[5]."','".$my_array[6]."','".$my_array[7]."','".$my_array[8]."','".$my_array[9]."')";
$query = mysqli_query($con, $insertSQL);
            if($query){
                $_SESSION['uname'] = $uname;
                echo 1;
            }

?>

<!DOCTYPE html>
<html lang="">
	<body>
        <meta http-equiv="Refresh" content="0; url='http://http://362groupf.great-site.net/php/UserPortal.php'" />
    </body>
</html>