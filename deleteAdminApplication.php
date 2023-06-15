<?php
require "vendor/db.php";
session_start();
$id = $_POST['id'];
$delete = mysqli_query($link,"DELETE FROM `application` WHERE `id_application` = '$id'");
header("Location: " . $_SERVER['HTTP_REFERER']);
