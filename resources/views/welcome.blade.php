<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>Nova</title>
      <!-- Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <!-- Bootstrap JavaScript and Popper.js -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-TpNbENgF7A4AZylN1+b4lL+1p4OupIyA9Hftv5iX1DeTwC1p1qj4I7F9u1wFMahj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-ywJldY+V5q5yFGr4uhmiC6dgu/Feq6auRR2doeS5l92PeDPAOcmmEEbI57fk8IqP" crossorigin="anonymous"></script>
      <!-- Style -->
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('css/mediaquary.css') }}" rel="stylesheet">
    </head>
    <body>
      <!-- Banner -->
      <div class="banner">
        <!-- Carousel Slide -->
        <div id="carouselInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4500">
              <img src="{{ asset('img/test3.jfif') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="4500">
              <img src="{{ asset('img/test3.jfif') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="4500">
              <img src="{{ asset('img/test3.jfif') }}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- Navbar-->
      <div class="navigationbar">
        <nav class="navbar navbar-expand-md bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">NOVA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="#">Men</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Women</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Unisex</a>
                </li>
                <li class="nav-item dropdown position-static">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                  <div class="dropdown-menu w-100 dropnav">
                    <!-- List of Categories-->
                    <div class="container-fluid">
                      <div class="row">
                        @foreach ($categories as $category)
                          <div class="col-md-3 col-sm-6">
                            <a class="nav-link" href="#">{{ $category->name }}</a>
                          </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown position-static">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Search</a>
                  <div class="dropdown-menu w-100 dropnav">
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </form>
                  </div>
                </li>
              </ul>
              <div>
                <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                  @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                      @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-secondary">My profile</a>
                      @else
                        <a href="{{ route('login') }}" class="btn btn-outline-secondary font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                      @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-secondary ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                      @endif
                      @endauth
                    </div>
                  @endif
              </div>
            </div>
          </div>
        </nav>
      </div>
      <!-- Products for women -->
      <!-- Carousel -->
      @include('layouts.product_carousel_women')
      <br>

      <!-- Product carousel - men -->
      @include('layouts.product_carousel_men')
      
      <!-- Product carousel - unisex -->
      @include('layouts.product_carousel_unisex')
      <br>

      <!-- Footer -->
      <div></div>
    </body>
</html>
