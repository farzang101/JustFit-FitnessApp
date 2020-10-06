<?php
include "config.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uname = mysqli_real_escape_string($con,$_POST['username']);
$upassword = mysqli_real_escape_string($con,$_POST['password']);

$hash = password_hash($upassword, PASSWORD_DEFAULT);

if(!(password_verify($upassword, $hash))) {
    echo 'Invalid password';
}

if ($uname != "" && $hash != "")
{
    $sql_query = ("SELECT COUNT(*) as cntUser from Users where Username='".$uname."' and Password='".$hash."'");

    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['uname'] = $uname;
        echo $hash;
    }else{
        echo 0;
    }
}