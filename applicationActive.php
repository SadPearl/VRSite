<?php
require "vendor/db.php";
session_start();
$name = $_POST['name'];
$phone = $_POST['phone'];

$application_query = mysqli_query($link,"INSERT INTO `application`( `name`,`phone`) VALUES ('$name','$phone')");

header("Location: certificate_good.php");

 