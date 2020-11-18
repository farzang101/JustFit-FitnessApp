<?php
include "config.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uname = mysqli_real_escape_string($con,$_POST['username']);
$uDietType = mysqli_real_escape_string($con,$_POST['dietType']);

if ($uname != "" && $uDietType != "")
{
    $sql_query = "UPDATE `Users` SET `PreferredDiet` = '".$uDietType."' WHERE `Users`.`Username` = '".$uname."'";
    $result = mysqli_query($con,$sql_query);
    if($result){
        echo 1;
    } else {
        echo 0;
    }
}