<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Nova</title>
      <!-- bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

      <!-- Bootstrap JavaScript and Popper.js -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-TpNbENgF7A4AZylN1+b4lL+1p4OupIyA9Hftv5iX1DeTwC1p1qj4I7F9u1wFMahj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-ywJldY+V5q5yFGr4uhmiC6dgu/Feq6auRR2doeS5l92PeDPAOcmmEEbI57fk8IqP" crossorigin="anonymous"></script>

      <!-- Style -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    </head>
    <body>
      <div class="banner">
        <!-- carousel slide -->
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <img src="{{ asset('img/test.avif') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="{{ asset('img/test.avif') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="{{ asset('img/test.avif') }}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- Navbar-->
      <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">NOVA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="#">Men</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Women</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Unisex</a>
                </li>
                <li>
                  <a class="nav-link" data-bs-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="categories">Categories</a>
                </li>
                <li>
                  <a class="nav-link" data-bs-toggle="collapse" href="#search" aria-expanded="false" aria-controls="search">Search</a>
                </li>
              </ul>
              <div class="logreg">
                <a class="btn btn-outline-secondary" href="#">Log In</a> |
                <a class="btn btn-outline-secondary" href="#">Register</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
        <!-- Collapsed List of Categories -->
        <div class="collapse" id="categories">
          <div class="card card-body">
            List of Categories
          </div>
        </div>
        <!-- Collapsed Search Bar -->
        <div class="collapse" id="search">
          <div class="card card-body">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
          </div>
        </div>
        <!-- <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
          </div>
        </div> -->
        <div style=" text-align: center; vertical-align: middle; line-height: 90px; padding-top:400px;padding-bottom:400px;">CONTENT</div>
        <div class="footer">
          footer
        </div>
      </div>
    </body>
</html>
