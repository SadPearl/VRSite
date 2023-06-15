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
<section class=" py-4">
  <div class="container my-5">
    <div class="row justify-content-center p-0 p-sm-5">
      <div class="col-10 col-lg-5 col-xl-5 text-center p-4">
        <h1 class="text-dark display-5 fw-bolder">ПАРК ВИРТУАЛЬНОЙ РЕАЛЬНОСТИ</h1>
        <p class="lead text-dark-50 px-2 mb-4">
          СО СВОБОДНЫМ ПЕРЕДВИЖЕНИЕМ
        </p>
        <a href="book.php" class="btn btn-outline-dark btn-lg px-4 m-0 mb-3 mx-sm-3">Забронировать игру</a>
      </div>
    </div>
  </div>

<section>
  <div class="container featured">
      <h2 class="mb-4 display-5 text-center">НАШ ПАРК ВИРТУАЛЬНОЙ РЕАЛЬНОСТИ</h2>
      <h2 class="mb-4 text-center h1">ЭТО -</h2>
      <br><br><br><br><br>
      <div class="row">
        <div class="col-lg-4">
          <img  width="140" height="140" src="assets/images/arrows-fullscreen.svg"  preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#777"></rect></img>

          <h3 >Свободное перемещение</h3>
          <p>Три просторные арены
            Арены площадью от 150-200 м2</p>

        </div>
        <div class="col-lg-4">
          <img width="140" height="140" src="assets/images/people-fill.svg"  preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#777"></rect></img>

          <h3 >
            До 35 игроков </h3>
          <p>Играйте вместе или
            друг против друга</p>
        </div>
        <div class="col-lg-4">
          <img  width="140" height="140" src="assets/images/vr.png"  preserveAspectRatio="xMidYMid slice" focusable="false"> <rect width="100%" height="100%" fill="#777"></rect></img>

          <h3 >
            Беспроводное оборудование </h3>
          <p>современное,
            компактное и легкое</p>
        </div><!-- /.col-lg-4 -->
      </div>
    </section>
    <br><br><br><br><br>
    <h2 class="mb-4 display-5 text-center ">СОБИРАЙТЕ КОМАНДУ</h2>
      <h2 class="mb-4 text-center h1">ДЛЯ НАШИХ ПРИКЛЮЧЕНИЙ</h2>
      <br><br><br><br><br>
    <!--- Slider Indicators --->
<div id="carousel-HomeJumbotron" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carousel-HomeJumbotron" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
    <button type="button" data-bs-target="#carousel-HomeJumbotron" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
    <button type="button" data-bs-target="#carousel-HomeJumbotron" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
  </div>
  <!--- Carousel Inner --->
  <div class="carousel-inner">
    <!--- Slide One --->
    <div class="carousel-item slide-one-image active" role="img" aria-label="adorable photo of a squirrel">
      <div class="carousel-item-bg"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="home-hero-header">
              <div class="card-body">
                <h1 class="card-title pricing-card-title text-dark">VR Квест</h1>
                <ul class="list-unstyled mt-3 mb-4 text-dark">
                  <i class="bi bi-people"></i>
                  <li>напишу</li>
                  <li>напишу</li>
                  <li>напишу</li>
                </ul>
                <a href="book.php" class="btn btn-dark btn-lg">Забронировать игру</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--- End of Slide One--->
    <!--- Slide Two --->
    <div class="carousel-item slide-two-image" role="img" aria-label="photo of the woods">
      <div class="carousel-item-bg"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="home-hero-header">
              <div class="card-body">
                <h1 class="card-title pricing-card-title text-dark">VR Шутер</h1>
                <ul class="list-unstyled mt-3 mb-4 text-dark">
                  <i class="bi bi-people"></i>
                  <li>напишу</li>
                  <li>напишу</li>
                  <li>напишу</li>
                </ul>
                <button type="button" class="btn btn-dark btn-lg">Забронировать игру</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--- End of Slide Two--->
    <!--- Slide Three --->
    <div class="carousel-item slide-three-image bg" role="img" aria-label="photo of a pond">
      <div class="carousel-item-bg"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="home-hero-header">
              <div class="card-body">
                <h1 class="card-title pricing-card-title text-dark">VR Приключение</h1>
                <ul class="list-unstyled mt-3 mb-4 text-dark">
                  <li>напишу</li>
                  <li>напишу</li>
                  <li>напишуt</li>
                  <li>напишу</li>
                </ul>
                <button type="button" class="btn btn-dark btn-lg">Забронировать игру</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--- End of Slide Three--->
  <!--- End of Carousel Inner --->

<!--- Left and Right Slide Buttons--->
<button class="carousel-control-prev" type="button" data-bs-target="#carousel-HomeJumbotron" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carousel-HomeJumbotron" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
<br><br><br><br>
<section>
  <h2 class="mb-4 text-center h1">СТОИМОСТЬ ИГРЫ</h2>
  <br><br><br><br>
  <div class="row mb-3 text-center">
    <div class="col-4 display-5"><strong>ВРЕМЯ</strong></div>
    <div class="col-4 display-5"><strong>ДЛИТЕЛЬНОСТЬ СЕАНСА, МИН</strong></div>
    <div class="col-4 display-5"><strong>ЦЕНА</strong></div>
  </div>
  <br> <hr align="center" width="85%" class="align_center"><br>
  <div class="row mb-3 text-center">
    <div class="col-4 display-6 fw-weight-light">11:00-16:00</div>
    <div class="col-4 display-6 fw-weight-light" >60</div>
    <div class="col-4 display-6 fw-weight-light">600</div>
  </div>
  <br> <hr align="center" width="85%" class="align_center"><br>
  <div class="row mb-3 text-center">
    <div class="col-4 display-6 fw-weight-light">16:00-21:00</div>
    <div class="col-4 display-6 fw-weight-light" >60</div>
    <div class="col-4 display-6 fw-weight-light">800</div>
  </div>
</section>
<section>
  <br><br><br><br><br><br>
  <div class="container my-6">
  <div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
      <h1 class="accordion-header " id="panelsStayOpen-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
          <div class="col-10 display-5 fw-weight-light"><strong>Есть ли возрастные ограничения?</strong></div>
        </button>
      </h1>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
        <div class="accordion-body display-6 ">
          В наши игры с удовольствием играют гости всех возрастов Единственное ограничение – <strong>игроки должны быть старше 8 лет</strong>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h1 class="accordion-header" id="panelsStayOpen-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
          <div class="col-10 display-5 fw-weight-light"><strong>Если придем с детьми, будет инструктор?</strong></div>
        </button>
      </h1>
      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
        <div class="accordion-body display-6">
          Да, конечно. Инструктор всегда рядом, не мешает игрокам, но в то же время следит за безопасностью и помогает, если нужно :)
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h1 class="accordion-header" id="panelsStayOpen-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
          <div class="col-10 display-5 fw-weight-light"><strong>Можно принести с собой напитки и еду?</strong></div>
        </button>
      </h1>
      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
        <div class="accordion-body display-6">
          Конечно, кроме алкоголя и кальянов 
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<br><br><br><br>
<h2 class="mb-4 text-center h1">КАК НАС НАЙТИ?</h2>
<section>
  <div class="container col-md-10 col-xxl-8 px-4">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <div class="card">
          <div class="card-body text-center">
            <p class="display-6">
              <strong>ПР-Т КОМАРОВА 6/1</strong>
            </p>
            <br>
            <p class="card-text fs-3">ВРЕМЯ РАБОТЫ: 11:00-21:00</p>
            <hr>
            <p class="card-text fs-3">БЕЗ ОБЕДОВ И ВЫХОДНЫХ</p>
            <hr>
            <p class="card-text fs-3" href="tel:+73812356911"> НОМЕР ТЕЛЕФОНА: +7(3812)356911</p>
            <hr>
            <p class="card-text fs-3">ЦОКОЛЬНЫЙ ЭТАЖ</p>
          </div>
        </div>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9154.71335160806!2d73.27561816631456!3d54.99627346966596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43ab01a83109832f%3A0x42b6c2a81f785287!2z0JzQsNGP0Log0JzQvtC70Ls!5e0!3m2!1sru!2sru!4v1686057156614!5m2!1sru!2sru" width="550" height="395" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>
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
</body>
</html>