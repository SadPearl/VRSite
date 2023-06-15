<?php 
require "vendor/db.php";
session_start();
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
<?php require "components/header.php" ?>
<div class="b-example-divider"></div>
<div class="bg-dark text-secondary px-4 py-5 text-center">
  <div class="py-5">
    <div class="container"></div>
    <h1 class="display-5 fw-bold text-white">Подарочный сертификат
        в виртуальную реальность</h1>
    <div class="col-lg-6 mx-auto">
      <p class="fs-5 mb-4">Незабываемое приключение в параллельном мире
        Дарите новые эмоции!</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="book.php" class="btn btn-outline-light btn-lg px-4">Оставить заявку</a>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="./assets/images/man.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <p class="display-6 ">Вы получаете возможность полноценно и свободно двигаться, ходить, бегать и прыгать в параллельном мире.
            А современное оборудование отвечает за полное погружение и телепортацию в другую реальность!</p>
      </div>
    </div>
  </div>
  <br><br>
<div class="container">
  <h2 class="mb-4 display-6 text-center ">Оставьте заявку на покупку подарочного сертификата номиналом на 2000 ₽ и 5000 ₽</h2>
      <h2 class="mb-4 text-center h2">Мы свяжемся с вами в ближайшее время!</h2>
   </div>
   <br><br>
  <div class="container">
    <div class="row mx-0 justify-content-center">
      <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0 px-xxl-3">
        <form
          method="POST"
          class="
            w-100
            rounded-1
            p-4
            border
            text-secondary
            border-secondary
          "
          action="applicationActive.php"
        >
          <label class="d-block mb-4">
            <span class="form-label d-block ">Ваше имя</span>
            <input
              name="name"
              type="text"
              class="form-control border-secondary bg-transparent"
              placeholder="Введите ваше имя"
              required
            />
          </label>
  
          <label class="d-block mb-4">
            <span class="form-label d-block ">Ваш номер телефона</span>
            <div class="position-relative txt10 mt-2 mb-4">
                <input class="form-control tel" type="phone" name="phone" placeholder="+7(900)000-00-00" required>
            </div>

          </label>

  
          
  
          <div class="mb-3">
            <button type="submit" class="btn btn-outline-dark btn-lg  px-4 m-0 mb-3 mx-auto">Оставить заявку</button>
          </div>
  
          <div class="d-block text-end">
          </div>
        </form>
      </div>
    </div>
  </div>
  <br><br>
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Парк виртуальной реальности</p>
  
      <a class="col-md-4 d-flex align-items-center justify-content-center mb-1 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="assets/images/logo.png" alt="Логотип">
      </a>
  
      <ul class="nav col-md-4 justify-content-end">
        <a class="nav-link active text-reset" aria-current="page" href="#">О нас</a>
        <a class="nav-link text-reset" href="games.php">Наши игры</a>
        <a class="nav-link text-reset" href="certificate.php">Сертификат</a>
        <a class="nav-link text-reset" href="book.php">Забронировать игру</a>
      </ul>
    </footer>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js'></script>
  <script src="assets/scripts/script.js"></script>  
  </body>
  </html>