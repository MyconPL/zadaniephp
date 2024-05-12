<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
    <title>Document</title>
    <?php ('connect.php') ?>
</head>
<body class="bg-secondary">
    <?php include('navbar.php') ?>
  <div class="container h-100px">
  <div class="pudelko">
<div id="demo" class="carousel slide" data-bs-ride="carousel" style="height: 550px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/rtx4070tisupertuf.jpg" class="mx-auto d-flex">
    </div>
    <div class="carousel-item">
      <img src="img/rx7900xtxtuf.jpg" class="mx-auto d-flex">
    </div>
    <div class="carousel-item">
      <img src="img/xeonw72495x.webp" class="mx-auto d-flex">
    </div>
  </div>
  <button class="carousel-control-prev"type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span id="kontrolki"  class="carousel-control-prev-icon bg-dark"></span>
  </button>
  <button class="carousel-control-next"type="button" data-bs-target="#demo" data-bs-slide="next">
    <span id="kontrolki"  class="carousel-control-next-icon bg-dark"></span>
  </button>
</div>
<div class="container">
  <p class="h1 mx-auto">Bestsellery</p>
</div>
  <div class="container d-flex flex-wrap justify-content-evenly" id="bestsellery">
    <br>
 
    <div class="card" style="width:30%; height: 600px;">
      <img class="card-img-top object-fit-scale" src="img/i713700k.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Procesor Intel core i7 13700K</h4>
        <p class="card-text">Cena: 1750 PLN</p>
        <a href="#" class="btn btn-primary">Kup teraz</a>
      </div>
    </div>
    <div class="card" style="width:30%; height: 600px;">
      <img class="card-img-top object-fit-scale" src="img/rtx4070tisupertuf.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Karta graficzna NVIDIA Geforce RTX 4070 Ti Super</h4>
        <p class="card-text">Cena: 4000 PLN</p>
        <a href="#" class="btn btn-primary">Kup teraz</a>
      </div>
    </div>
    <div class="card" style="width:30%; height: 600px;">
      <img class="card-img-top object-fit-scale" src="img/rx7900xtxtuf.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Karta graficzna Radeon RX 7900 XTX</h4>
        <p class="card-text">Cena: 1750 PLN</p>
        <a href="#" class="btn btn-primary">Kup teraz</a>
      </div>
  </div>
  <div class="card" style="width:30%; height: 600px;">
    <img class="card-img-top object-fit-scale" src="img/dells3222dgm.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">Monitor DELL S3222DGM VA 31.5" 1440p 165Hz</h4>
      <p class="card-text">Cena: 1700   PLN</p>
      <a href="#" class="btn btn-primary">Kup teraz</a>
    </div>
  </div>
  <div class="card" style="width:30%; height: 600px;">
    <img class="card-img-top object-fit-scale" src="img/asusrogstrixb650agamingwifi.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">Płyta główna Asus ROG Strix B650-A gaming WiFi</h4>
      <p class="card-text">Cena: 1200 PLN</p>
      <a href="#" class="btn btn-primary">Kup teraz</a>
    </div>
  </div>
  <div class="card" style="width:30%; height: 600px;">
    <img class="card-img-top object-fit-scale" src="img/gtx1080ti.png" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">Karta graficzna GTX 1080 Ti</h4>
      <p class="card-text">Cena: 1300 PLN</p>
      <a href="#" class="btn btn-primary">Kup teraz</a>
    </div>
  </div>
</div>
</body>
</html>