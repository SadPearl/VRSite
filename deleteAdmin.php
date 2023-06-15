<?php
require "vendor/db.php";
session_start();
$id = $_POST['id'];
$delete = mysqli_query($link,"DELETE FROM `booking` WHERE `booking_id` = '$id'");
header("Location: " . $_SERVER['HTTP_REFERER']);
