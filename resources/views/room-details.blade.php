<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hotel</title>
    @vite('resources/js/app.js')
    @livewireStyles
</head>
<body>
<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 mx-5">The Hotel</span>
    </div>
</nav>
<div class="row mx-5 mb-5">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{$room->name}}</h3>
                <img src="{{asset($room->image)}}" class="card-img-bottom" alt="single-room-img">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-4">Booking details</h5>
                <livewire:booking-form :type="$room"/>
            </div>
        </div>

    </div>
</div>
@livewireScripts
</body>
</html>
