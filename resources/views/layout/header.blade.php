<!doctype html>
<html lang="en">

<head>
    <title>Home Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg theme-navbar">
            <div class="container">
                <a class="navbar-brand text-light" href="#">
                    <h1>Quickit</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div>
                    <form class="d-flex" role="search">
                        <div class="input-group">
                            <input class="form-control form-control-sm" style="width:350px;" type="search"
                                placeholder="Search for Products" aria-label="Search">
                            <button class="btn btn-light text-secondary btn-sm" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
                <div>
                    <a href="#" class="text-decoration-none text-light">Become a seller</a>
                    <a href="#" class="btn theme-green-btn btn-sm text-light"><i class="fa-solid fa-cart-shopping"></i>
                        Cart</a>
                    <a href="#" class="btn theme-orange-btn btn-sm text-light"><i class="fa-solid fa-user"></i>
                        Login</a>
                </div>
            </div>
        </nav>

        <!-- category navbar -->
        <nav class="navbar navbar-expand-lg theme-navbar-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active text-dark"  href="#">Mobile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-dark"  href="#">Fashion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-dark"  href="#">Electronics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-dark"  href="#">Furniture</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-dark"  href="#">Grocery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-dark"  href="#">Applinces</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

   