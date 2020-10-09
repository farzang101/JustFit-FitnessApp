<?php
include "config.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uname = mysqli_real_escape_string($con,$_POST['username']);
$upassword = mysqli_real_escape_string($con,$_POST['password']);

//$fakehash = password_hash($upassword, PASSWORD_DEFAULT);

if ($uname != "" && $upassword != "")
{
    $sql_query = ("SELECT Password, COUNT(*) as cntUser from Users where Username='".$uname."'");

    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];
    $hash = $row['Password'];

    if($count > 0){
        if(password_verify($upassword, $hash))
        {
        $_SESSION['uname'] = $uname;
        echo 1;
        } else {
            echo 0;
        }
    }else{
        echo 0;
    }
}