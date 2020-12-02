<?php
include "config.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uname = mysqli_real_escape_string($con,$_POST['username']);
$upassword = mysqli_real_escape_string($con,$_POST['password']);

if ($uname != "" && $upassword != "")
{
    $uhash = password_hash($upassword, PASSWORD_DEFAULT);

    if(password_verify($upassword, $uhash))
    {
        $sql_query = "UPDATE `Users` SET `Password` = '".$uhash."' WHERE `Users`.`Username` = '".$uname."'";
        $result = mysqli_query($con,$sql_query);
        if($result){
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }
}