<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
        <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="/index.php">AdminSite</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/index.php">Головна</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/pages/normativu.php">Нормативи</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Фракції
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/pages/fractionShtraf.php">Штрафи та статті</a></li>
                  <li><a class="dropdown-item" href="/pages/fractionComands.php">Команди</a></li>
                  <li><a class="dropdown-item" href="/pages/fractionRangs.php">Ранги та ЗП</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Корисна інформація</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Клани
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Корисна інформація</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/logo.png" class="d-block mx-auto" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Топ адміністратор 01</h5>
              <p>Нікнейм</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/logo.png" class="d-block mx-auto" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Топ адміністратор 02</h5>
              <p>Нікнейм</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/logo.png" class="d-block mx-auto" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Топ адміністратор 03</h5>
              <p>Нікнейм</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/logo.png" class="d-block mx-auto" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Топ адміністратор 04</h5>
              <p>Нікнейм</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/logo.png" class="d-block mx-auto" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Топ адміністратор 05</h5>
              <p>Нікнейм</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="image/logo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-light">Завантажити</button>
              </div>
            </div>
          </div>
      
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="image/logo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-light">Завантажити</button>
              </div>
            </div>
          </div>
      
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="image/logo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-outline-light">Завантажити</button>
              </div>
            </div>
          </div>
        </div>
      </div>
        
      <footer>
        <div class="footer">
          <a href="" style="color: #a3a2a2;">
            <h5>Створено Спец. Адміністратором - Toni Hoffman</h5>
          </a>
           <div class="social">
            <a href="https://www.instagram.com/ukraine_gta/"><img src="image/social/instagram.svg" alt=""></a>
            <a href="https://www.tiktok.com/@ukraine_gta"><img src="image/social/tiktok.svg" alt=""></a>
            <a href="https://t.me/ukraine_gta"><img src="image/social/telegram.svg" alt=""></a>
           </div>
        </div>

      </footer>

</body>
</html>