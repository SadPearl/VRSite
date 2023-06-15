<?php
session_start();
require "vendor/db.php";
$date = $_POST['date'];
$time = $_POST['time'];
$count_people = $_POST['number'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$cost = 0;
$count_cost = 0;

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
$freedom = 30 - $count_int;
else:
    $freedom = 30;    
endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'><link rel="stylesheet" href="assets/styles/style.css">
    <title>Document</title>
</head>
<body>

<h1>Проверьте правильность вашей заявки</h1>
<form class="wrap-form-booking" action="bookAction.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Date -->
                            <span class="txt9">
                                Дата
                            </span>

                            <div class="position-relative txt10 mt-2 mb-4">

                                <input type="date" class="form-control" value="<?=$_POST['date']?>" name="date" required >
                            </div>

                            <!-- Time -->
                            <span class="txt9">
                                Время
                            </span>

                            <div class="mt-2 mb-4">
                                <!-- Select2 -->
                                <input type="text" class="form-control" list="time_list" value="<?=$_POST['time']?>" name="time" placeholder="Время" min="11:00" max="20:00" required>
                                <datalist id="time_list">
                                  <option value="11:00" label="11:00">
                                  <option value="12:00" label="12:00">
                                  <option value="13:00" label="13:00">
                                  <option value="14:00" label="14:00">
                                  <option value="15:00" label="15:00">
                                  <option value="16:00" label="16:00">
                                  <option value="17:00" label="17:00">
                                  <option value="18:00" label="18:00">
                                  <option value="19:00" label="19:00">
                                  <option value="20:00" label="20:00">
                                </datalist>
                            </div>

                            <!-- People -->
                            <span class="txt9">
                                Количество человек
                            </span>

                            <div class="position-relative txt10 mt-2 mb-4">
                                <!-- Select2 -->
                                <input type="number" value="<?=$count_people ?>" class="form-control" name="number" min="1" max="30" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Name -->
                            <span class="txt9">
                                Имя
                            </span>

                            <div class="position-relative mt-2 mb-4">
                                <input class="form-control" value="<?=$name ?>" type="text" name="name" required >
                            </div>

                            <!-- Phone -->
                            <span class="txt9">
                                Телефон
                            </span>

                            <div class="position-relative txt10 mt-2 mb-4">
                                <input class="form-control tel" value="<?=$phone ?>"  type="text" name="phone" required>
                            </div>

                            <!-- Email -->
                            <span class="txt9">
                                Email
                            </span>

                            <div class="position-relative txt10 mt-2 mb-4">
                                <input class="form-control" value="<?=$email ?>" type="email" name="email" required>
                            </div>
                        </div>
                    </div>
                        <input type="hidden" value="<?=$count_cost?>" name="count_cost" >
                    <div class="col-lg-12 mt-5 text-center">
                        <!-- Button3 -->
                        <button type="submit" class="btn btn-dark">Забронировать</button>
                    </div>
                </form>

                <p>Ваша цена <?=$count_cost ?> рублей</p>
                <?php 
                    if($freedom > 0):?>
                    <p>Обратите внимание. Всего свободных мест: <strong> <?=$freedom ?> <strong></p>
                    <? else: ?>
                    <p>Мест нет</p>
                <? endif ?>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js'></script>
  <script src="assets/scripts/script.js"></script>
</body>
</html>