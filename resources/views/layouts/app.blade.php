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
                    @yield('home')
                    {{-- <SingleComic class="col-2" v-for="(item, index) in comicsThumbs" :key="index"
                    :thumb="item.thumb"
                    :price="item.price"
                    :series="item.series"
                    :type="item.type" /> --}}
                  </div>
                </div>
              </div>
          </main>

    @include('includes.footer')
</body>
</html>
