<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>PHP Website</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">YOGITA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/phpwebfull/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/phpwebfull/about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Information
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="jumbotron">
<h1>WELCOME TO MY TRAVEL WEBSITE</h1>
<p>--STILL ROUND THE CORNEER , THERE MAY WAIT A NEW ROAD OR A SECRET GATE.</p>
</div>
<section class="my-5">
<div class="py-5">
<h3>YOYO TRAVEL AGENCY</h3>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-12">
<img src="https://th.bing.com/th/id/OIP.pcCsBTg1T2s9WqsBbLmCHwHaEo?w=250&h=180&c=7&o=5&dpr=1.25&pid=1.7" alt="image" class="image-fluid aboutimg">
</div>
<div class="col-lg-6 col-12">
<h2>Iam <span class="name">Yogita </span>, Guide for your trip</h2>
<a href="about.php">Check More</a>
</div>
</div>
</div>
</section>
<section>
<form method="post" action="userinfo.php">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control">
</div>
<div class="form-group">
<label>Email</label>
<input type="text" name="email" class="form-control">
</div>
<div class="form-group">
<label>Mobile</label>
<input type="text" name="mobile" class="form-control">
</div>
<div class="form-group">
<label>Comments</label>
<textarea  name="comment" class="form-control"></textarea>
</div>
<button type="submit" class="btn btn-success">SUBMIT</button>
</form>
</section>
<footer>
  <h5 class="p-3 bg-dark text-white text-center">@yogitatadivaka</h5>
</footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>