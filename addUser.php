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

    $sql_query = ("SELECT COUNT(*) as cntUser from Users where Username='".$uname."'");

    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        echo 2;
    }else{
        if(password_verify($upassword, $uhash))
        {
            $insertSQL = "INSERT INTO Users(Username,Password ) values('".$uname."','".$uhash."')";
            $query = mysqli_query($con, $insertSQL);
            if($query){
                $_SESSION['uname'] = $uname;
                echo 1;
            }
        } else {
            echo 0;
        }
    }
}