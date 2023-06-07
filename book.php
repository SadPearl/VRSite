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
<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand d-md-none" href="#">
      <img src="assets/images/logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">О нас</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Наши игры</a>
        </li>
        <a class="navbar-brand d-none d-md-block" href="index.php">
          <img src="assets/images/logo.png" alt="">
        </a>
        <li class="nav-item">
          <a class="nav-link" href="certificate.php">Сертификат</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="book.php">Забронировать игру</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>
<h2 class="mb-4 text-center display-4">ВЫБЕРИ СВОЁ ПРИКЛЮЧЕНИЕ</h2>
<section class="section-booking pt-5 pb-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6 pb-5">
                <div class="text-center pt-5">
                    <span class="tit2 text-center">

                    </span>

                    <h3 class="tit3 text-center mb-5 mt-1">

                    </h3>
                </div>

                <form class="wrap-form-booking">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Date -->
                            <span class="txt9">
                                Дата
                            </span>

                            <div class="position-relative txt10 mt-2 mb-4">

                                <input type="date" class="form-control" name="date" placeholder="Дата" required>
                            </div>

                            <!-- Time -->
                            <span class="txt9">
                                Время
                            </span>

                            <div class="mt-2 mb-4">
                                <!-- Select2 -->
                                <input type="time" class="form-control" name="time" placeholder="Время" required>
                            </div>

                            <!-- People -->
                            <span class="txt9">
                                Количество человек
                            </span>

                            <div class="position-relative txt10 mt-2 mb-4">
                                <!-- Select2 -->
                                <input type="number" class="form-control" name="number" placeholder="Кол-во" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Name -->
                            <span class="txt9">
                                Имя
                            </span>

                            <div class="position-relative mt-2 mb-4">
                                <input class="form-control" type="text" name="name" placeholder="Name">
                            </div>

                            <!-- Phone -->
                            <span class="txt9">
                                Телефон
                            </span>

                            <div class="position-relative txt10 mt-2 mb-4">
                                <input class="form-control" type="phone" name="phone" placeholder="Phone">
                            </div>

                            <!-- Email -->
                            <span class="txt9">
                                Email
                            </span>

                            <div class="position-relative txt10 mt-2 mb-4">
                                <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-5 text-center">
                        <!-- Button3 -->
                        <button type="button" class="btn btn-dark">Забронировать</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-6 pb-5 pt-5">
                <div style="padding-top:50px;" class="text-center m-auto ">
                    <img style="width:100%; " src="./assets/images/peopleplay.jpg" alt="img-people">
                </div>
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