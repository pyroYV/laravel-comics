<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('includes.header')
    <main>
        <div class="wrapper">
            <div class="jumbotron">
            <img src="../assets/img/jumbotron.jpg" alt="">
            </div>
        <div class="container-lg">
            <div class="comics row position-relative p-3">
            <div class="current-series text-center">Current Series</div>
            @yield('content')
            </div>
        </div>
        </div>
        <div class="wrapper2">
        <div class="p-4 container-lg d-flex justify-content-between">
            <div class="nav-item d-flex align-items-center">
                <a href="#">
                <img src="../assets/img/buy-comics-digital-comics.png" alt="buyDigitalComics">
                <span>DIGITAL COMICS</span>
                </a>
            </div>
            <div class="nav-item d-flex align-items-center">
                <a href="#">
                <img src="../assets/img/buy-comics-merchandise.png" alt="buyMerchandise">
                <span>MERCHANDISE</span>
                </a>
            </div>
            <div class="nav-item d-flex align-items-center">
                <a href="#">
                <img src="../assets/img/buy-comics-subscriptions.png" alt="buySubscriptions">
                <span>SUBSCRIPTIONS</span>
                </a>
            </div>
            <div class="nav-item d-flex align-items-center">
                <a href="#">
                <img src="../assets/img/buy-comics-shop-locator.png" alt="buyDigitalComics">
                <span>SHOP LOCATOR</span>
                </a>
            </div>
            <div class="nav-item d-flex align-items-center">
                <a href="#">
                <img src="../assets/img/buy-dc-power-visa.svg" alt="buyVisa">
                <span>DC POWER VISA</span>
                </a>
            </div>

        </div>
        </div>
    </main>

    @include('includes.footer')
</body>
</html>
