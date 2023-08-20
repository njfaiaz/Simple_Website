<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Key</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/CSS/style.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/CSS/chat.css">
</head>

<body>

    @include('user.body.header')

    <!-- Image Slider Start-->
    <section id="carouselExampleIndicators" data-bs-ride="carousel" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($slider as $item)
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="{{ asset( $item->slider ) }}" class="d-block w-100" alt="...">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </section>
    <!-- Image Slider End -->

    <!-- News Text Slider -->
    <marquee scrollamount="20" class="my-4">
        <h1 class="fw-bold">
           {{ $marque->marque }}
        </h1>
    </marquee>




@include('user.body.footer')





@include('user.body.chat')

    <script src="{{ asset('frontend/assets') }}/JS/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b3b2e162b5.js"></script>
    <script src="{{ asset('frontend/assets') }}/JS/script.js"></script>
    <script src="{{ asset('frontend/assets') }}/"></script>
</body>

</html>
