<?php
session_start();
$host         = "sql301.epizy.com";
$dbusername     = "epiz_26795828";
$dbpassword     = "G9LC5gD2inIh";
$dbname       = "epiz_26795828_362GroupFDB";

$con = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}