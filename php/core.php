<?php
$host = "localhost";
$db = "db_water";
$user = "root";
//$pass = "PK0931950694";
$pass = "root1234";
$con = mysqli_connect($host, $user, $pass, $db) or die("could not connect");
mysqli_select_db($con, $db);
mysqli_query($con, "SET NAMES utf8");
date_default_timezone_set("Asia/Bangkok");

$LOG_DEBUG = true;