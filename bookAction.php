<?php
session_start();
require "vendor/db.php";
$date = $_POST['date'];
$time = $_POST['time'];
$count_people = $_POST['number'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$count_cost = $_POST['count_cost'];
$cost = 0;
$count_cost = 0;
$count_final = 0;
if ($time >= "11:00" && $time <= "16:00") {
    $cost = 600;
    $count_cost = $cost * $count_people;
}
else if($time >= "16:00" && $time <= "20:00") {
    $cost = 800;
    $count_cost = $cost * $count_people;
}

$count = mysqli_query($link,
"SELECT SUM(`count_people`)
FROM `booking`
WHERE `time` = '$time'
AND `date` = '$date'
GROUP BY `time`
HAVING count(time) > 0 ");
$count_query = mysqli_fetch_assoc($count);
if(isset($count_query)):
    $count_int = implode(",", $count_query);
    $count_final = $count_int + $count_people;
    if($count_final <= 30) {
        $book = mysqli_query($link,"INSERT INTO `booking`(`name`,`phone`,`email`,`date`,`time`,`count_people`,`count_cost`) VALUES ('$name','$phone','$email','$date','$time','$count_people','$count_cost')");
        header("Location: application_good.php");
        
    }
    else {
        header("Location: application_false.php");
    }
else:
    $book = mysqli_query($link,"INSERT INTO `booking`(`name`,`phone`,`email`,`date`,`time`,`count_people`,`count_cost`) VALUES ('$name','$phone','$email','$date','$time','$count_people','$count_cost')");
    header("Location: application_good.php");
endif;       







