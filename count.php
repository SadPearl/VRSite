<?php
require "vendor/db.php";
session_start();
$time = '17:00';
$date = '2023-05-30';
$count = mysqli_query($link,
"SELECT SUM(`count_people`)
FROM `booking`
WHERE `time` = '$time'
AND `date` = '$date'
GROUP BY `time`
HAVING count(time) > 1 ");
$count_query = mysqli_fetch_assoc($count);
$count_int = implode(",", $count_query);
var_dump($count_int);
if($count_int > 30) {
    echo "Ошибка";
}




