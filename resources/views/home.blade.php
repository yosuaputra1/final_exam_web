@php use Illuminate\Support\Facades\Auth;use Illuminate\Support\Str; @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hotel</title>
    @vite('resources/js/app.js')
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#">The Hotel</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#rooms">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#offers">Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login-page')}}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<header class="masthead"
        style="background-image: url('../images/hotel-bg.jpg');>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <span class="subheading">Welcome To</span>
                    <h1>The Hotel</h1>
                    <span class="subheading">The best place to stay in town</span>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="white-section" id="rooms">
    <div class="container-fluid" style="display: inline-block; justify-content: center; width: 70%;">
        <h2 class="section-heading">Rooms</h2>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae a</p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($room_types as $type)
                <div class="col">
                    <div class="card text-start">
                        <img src="{{asset($type->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$type->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">${{$type->price}}/night</h6>
                            <p class="card-text">{{$type->description}}</p>
                            <a href="{{route('room-details', ['name' => $type->name])}}" class="btn btn-light">Book
                                now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="colored-section" id="offers">
    <div class="container-fluid" style="display: inline-block; justify-content: center; width: 70%;">
        <h2 class="section-heading">Special Offers</h2>
        @foreach ($list_offers as $offer)
            <div class="col-md-4 mx-auto mt-4">
                <div class="card text-center h-100">
                    <img src="{{asset('storage/' . $offer->image)}}" class="card-img-top"
                         style="width: auto; height: 320px;">
                    <div class="card-body">
                        <h5 class="card-title">{{$offer->title}}</h5>
                        <p class="card-text">{{$offer->description}}</p>
                        <a href="#!" class="btn btn-light">Learn more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<section class="white-section" id="news">
    <div class="container-fluid" style="display: inline-block; justify-content: center; width: 70%;">
        <h2 class="section-heading">News</h2>
        @foreach ($list_news as $news)
            <div class="card text-start mt-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('storage/' . $news->image)}}" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">{{$news->title}}</h4>
                            <p class="card-text">{{ Str::limit($news->content, 450, $end='...') }}<a href="#news">Read
                                    more</a>
                            </p>
                            <p class="card-text"><small class="text-muted">Last
                                    updated: {{$news->updated_at->format('d M Y')}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted" id="contact">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"></section>
    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        THE HOTEL
                    </h6>
                    <p>
                        Maecenas iaculis leo et eleifend eleifend. Morbi at nisl fringilla, placerat tortor vel,
                        volutpat purus.
                        Etiam aliquet lectus ex, et efficitur nibh feugiat at. Nullam pretium efficitur faucibus. Ut
                        sagittis tortor
                        eget diam mattis, ut ultrices mauris aliquam. Nam quis pulvinar lectus. Morbi tincidunt orci in
                        tincidunt ornare.
                    </p>
                </div>
                <!-- Grid column -->


                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Navigation
                    </h6>
                    <p>
                        <a href="#rooms" class="text-reset">Rooms</a>
                    </p>
                    <p>
                        <a href="#offers" class="text-reset">Offers</a>
                    </p>
                    <p>
                        <a href="#news" class="text-reset">News</a>
                    </p>
                    <p>
                        <a href="{{route('login-page')}}" class="text-reset">Login</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p> Jalan TheStreet blok A3/7, Jakarta, Indonesia</p>
                    <p>
                        the@hotel.com
                    </p>
                    <p>+ 01 234 567 88</p>
                    <p>+ 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="#">TheHotel</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->


</body>
</html>
