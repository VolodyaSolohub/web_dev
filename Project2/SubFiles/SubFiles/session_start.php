<?php
session_start();

$fname = $_POST["fname"];
$age = $_POST["age"];

$_SESSION["fname"] = $fname;
$_SESSION["age"] = $age;
echo "Session vars were set";

 ?>
