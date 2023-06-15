<?php
require "vendor/db.php";
session_start();
$admin_query = mysqli_query($link,"SELECT * FROM `application` ORDER BY `id_application` DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'><link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="style.css">
    <title>Администирование</title>
</head>
<body>
   <?php require "components/header.php" ?>
   <!-- <h1>Выберите дату</h1>
        
            <form action="dateAction.php" method="POST">
            <div class="filter">
                <input type="date" class="form-control" name="date" required>
                <button>Показать</button>
                </div>
            </form> -->
       <div class="container">
            <div class="admin-block"> 
                <?php while($admin = mysqli_fetch_assoc($admin_query)): ?>   
                    <div class="block-item">
                        <form action="deleteAdminApplication.php" method="post">
                            <input type="hidden" name="id" value="<?=$admin['application_id']?>">
                            <p><strong>Имя :</strong> <?=$admin['name']?> </p>
                            <p><strong>Телефон:</strong> <?=$admin['phone']?></p>
                            
                        </form>
                    </div>  
                <?php endwhile ?>
            </div>
        </div> 
    
</body>
</html>