@extends('layout.main')
@section('content')

<!-- crousel slider -->
    <div id="customSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-item active" style="background-color: #e0f7fa; min-height: 500px;">
                <div class="d-flex flex-column justify-content-center align-items-center text-center h-100">
                    <h5 class="bg-dark text-light px-3 py-1 rounded mt-2">DJI MAVIC 2</h5>
                    <h1 class="fw-bold">Capture the Sky</h1>
                    <p class="text-dark">High-performance drone with 4K camera and extended flight time.</p>
                    <h4>$1,299.99</h4>
                    <button class="btn btn-dark mt-2">Buy Now</button>
                    <img src="{{ asset('assets/images/slider1.png') }}" class="mt-4" alt="DJI Drone"
                        style="max-width: 400px;">
                </div>
            </div>
            <div class="carousel-item" style="background-color: #f0f4c3; min-height: 500px;">
                <div class="d-flex flex-column justify-content-center align-items-center text-center h-100">
                    <h5 class="bg-dark text-light px-3 py-1 rounded mt-2">NIKE AIRMAX</h5>
                    <h1 class="fw-bold">Step Into Style & Comfort</h1>
                    <p class="text-dark">Sleek design, cushioned sole — perfect for performance and street style.</p>
                    <h4>$129.99</h4>
                    <button class="btn btn-dark mt-2">Buy Now</button>
                    <img src="{{ asset('assets/images/slider2.png') }}" class="mt-4" alt="Nike Airmax"
                        style="max-width: 400px;">
                </div>
            </div>
            <div class="carousel-item" style="background-color: #d5f0e3; min-height: 500px;">
                <div class="d-flex flex-column justify-content-center align-items-center text-center h-100">
                    <h5 class="bg-dark text-light px-3 py-1 rounded mt-2">JBL CHARGE 4</h5>
                    <h1 class="fw-bold">Powerful Sound Anywhere.</h1>
                    <p class="text-dark">Crisp highs, deep bass. Take it on the go.</p>
                    <h4>$79.99</h4>
                    <button class="btn btn-dark mt-2">Buy Now</button>
                    <img src="{{ asset('assets/images/slider3.png') }}" class="mt-4" alt="JBL" style="max-width: 400px;">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#customSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#customSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
@endsection